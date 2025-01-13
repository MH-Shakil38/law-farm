<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LawyerController extends Controller
{
    protected $controller;
    public function __construct(Controller $controller)
    {
        $this->controller = $controller;
    }
    public function index()
    {
        $data['lawyers'] = Lawyer::query()->latest()->get();
        return view('admin.lawyer.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lawyer.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name'          => 'required|string|max:255',
        'email'         => 'nullable|email|max:255',
        'phone'         => 'nullable|string|max:20',
        'case_type'     => 'nullable|string|max:255',
        'address'       => 'nullable|string|max:255',
    ]);
    try{
        DB::beginTransaction();

        $validated['image'] = $request->hasFile('image') ? url($this->controller->uploadImage($request->file('image'), 'lawyer/file/')) : '';
        $lawyer = Lawyer::create($validated);

        if($request->ajax()){
            $client = Client::query()->findOrFail($request->client_id);
            $client->update(['lawyer_id'=>$lawyer->id]);
            $lawyer_html = view('admin.lawyer.option',compact('lawyer'))->render();
        }

        DB::commit();
        if($request->ajax()){
            return response()->json(['message' => 'Lawyer created successfully','lawyer'=>$lawyer_html]);
        }else{
            return redirect()->route('lawyers.index')->with('success', 'Lawyer created successfully');
        }
    }catch(\Throwable $e){
        DB::rollBack();
        dd($e);
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show(Lawyer $lawyer)
    {
        $data['lawyer'] = $lawyer;
        return view('admin.lawyer.form')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lawyer $lawyer)
    {
        $data['lawyer'] = $lawyer;
        return view('admin.lawyer.form')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        try{
            DB::beginTransaction();
            $data = $request->all();
            if($request->hasFile('image')){
                $data['image'] = url($this->controller->uploadImage($request->file('image'), 'lawyer/file/'));
            }
            $lawyer->update($data);
            DB::commit();

                return redirect()->route('lawyers.index')->with('success', 'Lawyer created successfully');
        }catch(\Throwable $e){
            DB::rollBack();
            dd($e);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lawyer $lawyer)
    {
        //
    }
}
