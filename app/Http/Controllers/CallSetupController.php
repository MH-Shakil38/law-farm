<?php

namespace App\Http\Controllers;

use App\Models\CallSetup;
use Illuminate\Http\Request;

class CallSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.config.call-setup.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CallSetup $callSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CallSetup $callSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CallSetup $callSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CallSetup $callSetup)
    {
        //
    }
}
