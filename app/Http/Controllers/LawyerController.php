<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        'case_type'   => 'nullable|string|max:255',
    ]);
    try{
        DB::beginTransaction();
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
            return redirect()->back()->with('success', 'Lawyer created successfully');
        }
    }catch(\Throwable $e){
        DB::rollBack();
        return response()->json(['error' => $e->getMessage()], 500);
    }
}


    /**
     * Display the specified resource.
     */
    public function show(Lawyer $lawyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lawyer $lawyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lawyer $lawyer)
    {
        //
    }
}
