<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use App\Models\Client;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ClientInfo;
use App\Models\Income;
use App\Models\Invoice;
use App\Models\TmpClient;
use App\Services\InvoiceService;
use Illuminate\Support\Facades\File;

class InvoiceController extends Controller
{
    public function generateInvoice($id)
    {
        $client = Client::with(['caseType'])->findOrFail($id);
        // return view('admin.invoice.tmp-client', compact('info'));
        $pdf = Pdf::loadView('admin.invoice.tmp-client', compact('client'));

        return $pdf->download('invoice_' . $client->name . '.pdf');
    }

    public function printAgreement($id){
        $agreement = Agreement::query()->with(['client'])->where('client_id',$id)->first();
        if($agreement){
            $client = Client::with(['caseType'])->findOrFail($id);
            //  return view('admin.invoice.agreement', compact('agreement'));
             $pdf = Pdf::loadView('admin.invoice.agreement', compact('agreement'));

             return $pdf->download('invoice_' . $client->name . '.pdf');
        }else{
            return redirect()->back()->with('error','No Agreement Available');
        }

    }

    public function printClientInfo(Request $request){
        if($request->type === "tmp"){
            $client = TmpClient::with(['caseType'])->findOrFail($request->id);
        }else{
            $client = Client::with(['caseType'])->findOrFail($request->id);
        }
        //  return view('admin.invoice.client-info', compact('client'));
         $pdf = Pdf::loadView('admin.invoice.client-info', compact('client'));
         return $pdf->download('invoice_' . $client->name . '.pdf');
    }

    public function createInvoice($id){

        $client = Client::query()->findOrFail($id);
        return view('admin.client.invoice',compact('client'));
    }

    public function storeInvoice(Request $request){
        $invoice = InvoiceService::storeInvoice($request->all());
        session()->flash('invoice', $invoice->file);
        return redirect()->back()->with('success', 'Successfully Invoice Created');
    }




    public function loadClientInvoice($id){
        $invoice = Income::query()->findOrFail($id);
        return redirect($invoice->file);
    }

    public function printClientInvoice($id){
        $invoice = Invoice::query()->findOrFail($id);
        $client = $invoice->client;
        //  return view('admin.invoice.client-invoice', compact('client','invoice'));
         $pdf = Pdf::loadView('admin.invoice.client-invoice', compact('client','invoice'));
         return $pdf->download('invoice_' . $client->name . '.pdf');
    }

    public function editClientInvoice($id){
        $invoice = Income::query()->findOrFail($id);
        return view('admin.client.invoice-edit',compact('invoice'));
    }

    public function updateInvoice(Request $request,$id){
        $data = $request->all();
        $invoice = Income::query()->findOrFail($id);
        $invoice->update($data);
        return redirect()->route('clients.show',$invoice->client_id)->with('success','Successfully Invoice Updated');
    }
}
