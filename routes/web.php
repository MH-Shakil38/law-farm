<?php

use App\Http\Controllers\AgreementController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\CallSetupController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\CaseTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmailSetupController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SmsSetupController;
use App\Http\Controllers\TmpClientController;
use App\Http\Controllers\UserController;
use App\Models\EmailSetup;
use App\Models\NotificationSetup;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/users-list', function () {
    return response()->json(User::all());
});
Route::get('/tabulator', function () {
    return view('users');
});

Route::get('/', [BasicController::class, 'website'])->name('website');
Route::get('/client/registration', [BasicController::class, 'clientRegistration'])->name('client.registration')->middleware('switch.language');;
Route::post('tmp/client/store', [BasicController::class, 'clientStore'])->name('tmp.client.store');
Route::get('/invoice/{id}', [InvoiceController::class, 'generateInvoice'])->name('invoice.generate');
Route::get('/create/invoice/{id}', [InvoiceController::class, 'createInvoice'])->name('create.invoice');
Route::post('/store/invoice/{id}', [InvoiceController::class, 'storeInvoice'])->name('store.invoice');
Route::get('/print/agreement/{id}', [InvoiceController::class, 'printAgreement'])->name('print.agreement');
Route::get('/print/client/info', [InvoiceController::class, 'printClientInfo'])->name('print.client-info');
Route::get('/print/client/invoice/{id}', [InvoiceController::class, 'printClientInvoice'])->name('print.client.invoice');
Route::get('/edit/client/invoice/{id}', [InvoiceController::class, 'editClientInvoice'])->name('edit.client.invoice');
Route::post('/update/invoice/{id}', [InvoiceController::class, 'updateInvoice'])->name('update.invoice');
Route::get('/agreement/{id}', [AgreementController::class, 'agreement'])->name('client.agreement');
Route::post('/agreement/Store', [AgreementController::class, 'agreementStore'])->name('client.agreement.store');
Route::get('lang/{lang}', [BasicController::class, 'switchLang'])->name('lang.switch')->middleware('switch.language');

Route::middleware(['auth', 'web','permission.check'])->group(function () {

    Route::get('dashboard', [BasicController::class, 'dashboard'])->name('dashboard');
    Route::get('logs', [BasicController::class, 'Logs'])->name('logs');

    Route::prefix('admin')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('lawyer', UserController::class);
        Route::resource('lawyers',LawyerController::class);
        Route::resource('roles',RoleController::class);
        Route::get('user-list',[UserController::class,'activeUser'])->name('active.user');
    });

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::prefix('clients')->group(function () {
        Route::resource('clients', ClientController::class);
        Route::post('file', [ClientController::class, 'fileStore'])->name('clients.file.store');
        Route::post('file-update', [ClientController::class, 'fileUpdate'])->name('clients.file.update');
        Route::post('hearing-date', [CaseController::class, 'hearingDate'])->name('clients.hearing.date');
        Route::get('hearing/edit/{id}', [CaseController::class, 'hearingEdit'])->name('clients.hearing.edit');
        Route::post('hearing/update/{id}', [CaseController::class, 'hearingUpdate'])->name('clients.hearing.update');
        Route::post('clients/import',[ClientController::class,'import'])->name('clients.import');
        Route::get('client/entry',[TmpClientController::class, 'index'])->name('clients.entry');
        Route::get('client/aprove/{id}',[TmpClientController::class, 'aprove'])->name('clients.aprove');
        Route::get('client/pending',[TmpClientController::class, 'pending'])->name('clients.pending');
        Route::get('client/secrate',[ClientController::class, 'secrate'])->name('clients.secrate');

    });

    // configuration route
    Route::prefix('config')->group(function () {
        Route::resource('caseType', CaseTypeController::class);
        Route::resource('email-setup', EmailSetupController::class);
        Route::resource('notification-setup', NotificationSetup::class);
        Route::resource('sms-setup', SmsSetupController::class);
        Route::resource('call-setup', CallSetupController::class);
    });

    // multi record
    Route::get('record/delete', [BasicController::class, 'deleteRecord'])->name('record.delete');
    Route::get('status/change', [BasicController::class, 'statusChange'])->name('change.status');
    Route::get('change/password/{id}', [UserController::class, 'changePassword'])->name('users.change.password');
    Route::prefix('notification')->group(function(){
        Route::get('all',[BasicController::class,'notify'])->name('notify');
        Route::get('mark-as-read/{id}',[BasicController::class,'markAsRead'])->name('markasread');

    });
});


Route::get('migrate-fresh', function () {
    Artisan::call('migrate:fresh --seed');
});

Route::get('migrate', function () {
    Artisan::call('migrate');
});


Route::get('route-clear', function () {
    Artisan::call('route:clear');
});

Route::get('clear-cache', function () {
    Artisan::call('clear:cache');
});

Route::get('optimize', function () {
    Artisan::call('optimize');
});
require __DIR__ . '/auth.php';
