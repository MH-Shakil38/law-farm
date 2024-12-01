<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\CaseController;
use App\Http\Controllers\CaseTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


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


Route::get('/',[BasicController::class, 'website'])->name('website');
Route::get('dashboard',[BasicController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UserController::class);
    Route::resource('lawyer', UserController::class);
    Route::resource('clients', ClientController::class);


    Route::post('clients/file', [ClientController::class,'fileStore'])->name('clients.file.store');
    Route::post('clients/hearing-date', [CaseController::class,'hearingDate'])->name('clients.hearing.date');
    Route::get('clients/hearing/edit/{id}', [CaseController::class,'hearingEdit'])->name('clients.hearing.edit');
    Route::post('clients/hearing/update/{id}', [CaseController::class,'hearingUpdate'])->name('clients.hearing.update');

    // configuration route
    Route::prefix('config')->group(function(){
        Route::resource('caseType', CaseTypeController::class);
    });

    // multi record
    Route::get('record/delete', [BasicController::class, 'deleteRecord'])->name('record.delete');
    Route::get('change/password/{id}', [UserController::class, 'changePassword'])->name('users.change.password');
});


Route::get('migrate-fresh',function(){
    Artisan::call('migrate:fresh --seed');
});



require __DIR__ . '/auth.php';
