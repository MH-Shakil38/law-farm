<?php

namespace App\Http\Controllers;

use App\Models\CaseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['caseTypes'] = CaseType::getAll();
        return view('admin.config.case-type')->with($data);
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
        $request->validate([
            'name' => 'required | unique:case_types',
        ]);
        try{
            DB::beginTransaction();
            CaseType::store();
            DB::commit();
            return redirect()->back()->with('success','Successfully Case Type Added');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->errorDD($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CaseType $caseType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CaseType $caseType)
    {
        $data['caseTypes'] = CaseType::getAll();
        $data['caseType'] = $caseType;
        return view('admin.config.case-type')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CaseType $caseType)
    {
        $request->validate([
            'name' => 'required | unique:case_types,name,'.$caseType->id,
        ]);
        try{
            DB::beginTransaction();
            CaseType::updated($caseType);
            DB::commit();
            return redirect()->route('caseType.index')->with('success','Successfully Case Type Updated');
        }catch(\Throwable $e){
            DB::rollBack();
            $this->errorDD($e);
        }
    }


}
