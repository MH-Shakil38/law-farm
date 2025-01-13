<?php

namespace App\Http\Controllers;

use App\Models\EmailSetup;
use Illuminate\Http\Request;

class EmailSetupController extends Controller
{

    public function index()
    {
        $data['emails'] = EmailSetup::query()->latest()->get();
        return view('admin.config.email.index')->with($data);
    }




    public function store(Request $request)
    {
        $data = $request->validate([
            'email'=>'required|email|unique:email_setups,email,except,id',
            'status'=>'nullable'
        ]);
        EmailSetup::query()->create($data);
        return redirect()->back()->with('success','Notification Email Successfully Added');
    }



    public function edit(EmailSetup $emailSetup)
    {
        $data['emails'] = EmailSetup::query()->latest()->get();
        $data['email'] = $emailSetup;
        return view('admin.config.email.index')->with($data);
    }


    public function update(Request $request, EmailSetup $emailSetup)
    {
        $data = $request->all();
        $emailSetup->update($data);
        return redirect()->route('email-setup.index')->with('success','Notification Email Successfully Updated');
    }

}
