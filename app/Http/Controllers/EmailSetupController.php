<?php

namespace App\Http\Controllers;

use App\Models\EmailSetup;
use Illuminate\Http\Request;

class EmailSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['notifications'] = auth()->user()->notifications;
        return view('admin.config.email.index')->with($data);
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
    public function show(EmailSetup $emailSetup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmailSetup $emailSetup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmailSetup $emailSetup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailSetup $emailSetup)
    {
        //
    }
}
