<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ClientInfo;
use App\Models\TmpClient;

class InvoiceController extends Controller
{
    public function generateInvoice($id)
    {
        // ক্লায়েন্টের তথ্য বের করুন
        $client = Client::with(['caseType'])->findOrFail($id);
        // return view('admin.invoice.tmp-client', compact('info'));
        // PDF তৈরির জন্য ভিউ পাঠান
        $pdf = Pdf::loadView('admin.invoice.tmp-client', compact('client'));

        // ডাউনলোড অপশন চালু করুন
        return $pdf->download('invoice_' . $client->name . '.pdf');
    }

    public function printAgreement($id){
        $agreement = Agreement::query()->with(['client'])->where('client_id',$id)->first();
        if($agreement){
            $client = Client::with(['caseType'])->findOrFail($id);
            //  return view('admin.invoice.agreement', compact('agreement'));
             // PDF তৈরির জন্য ভিউ পাঠান
             $pdf = Pdf::loadView('admin.invoice.agreement', compact('agreement'));

             // ডাউনলোড অপশন চালু করুন
             return $pdf->download('invoice_' . $client->name . '.pdf');
        }else{
            return redirect()->back()->with('error','No Agreement Available');
        }

    }

    public function printClientInfo($id){
         $client = Client::with(['caseType'])->findOrFail($id);
        //  return view('admin.invoice.client-info', compact('client'));
         $pdf = Pdf::loadView('admin.invoice.client-info', compact('client'));
         return $pdf->download('invoice_' . $client->name . '.pdf');

    }
}
