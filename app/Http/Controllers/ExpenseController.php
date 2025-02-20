<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['expenses'] = Expense::query()->latest()->get();
        return view('admin.acc.expense')->with($data);
    }



    public function store(Request $request)
    {
        $request->validate( [
                'amount' => 'required|numeric',
            ] );
        try{
            DB::beginTransaction();
            $data = $request->all();
            $expense = Expense::create($data);
            DB::commit();
            return redirect()->back()->with('success', 'Expense added successfully');
        }catch(\Throwable $e){
            DB::rollBack();
            return redirect()->back()->with(['error' => $e->getMessage()], 500);
        }
    }




    public function update(Request $request, Expense $expense)
    {

    try{
        DB::beginTransaction();
        $data = $request->all();
        $expense->update($data);
        DB::commit();
        return redirect()->back()->with('success', 'Expense Updated successfully');
    }catch(\Throwable $e){
        DB::rollBack();
        return redirect()->back()->with(['error' => $e->getMessage()], 500);
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
