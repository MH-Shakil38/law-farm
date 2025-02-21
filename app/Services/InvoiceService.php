<?php

namespace App\Services;

use App\Http\Controllers\Controller;
use App\Models\CaseType;
use App\Models\Client;
use App\Models\ClientFile;
use App\Models\Income;
use App\Models\TmpClient;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

class InvoiceService
{
    protected $controller;
    protected $uploadService;
    public function __construct()
    {
        $this->controller = new Controller();
        $this->uploadService = new UploadService();
    }

    public static function storeInvoice($data)
    {

        $invoice = Income::query()->create($data);
        $client = Client::query()->findOrFail($data['client_id']);
        // return view('admin.invoice.payment-invoice', compact('client', 'invoice'));
        $request = request();
        $advance = $request->advance;
        $pdf = Pdf::loadView('admin.invoice.payment-invoice', compact('client', 'invoice','advance'));
        $fileName = 'invoice_' . str_replace(' ', '_', $client->name) . '_' . time() . '.pdf';
        $directory = public_path('invoices');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0777, true, true);
        }
        $filePath = $directory . '/' . $fileName;
        $pdf->save($filePath);
        $fileUrl = url('invoices/' . $fileName);
        $invoice->update([
            'file' => $fileUrl,
        ]);
        return $invoice;
    }
}
