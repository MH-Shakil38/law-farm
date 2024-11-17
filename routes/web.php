<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\CaseTypeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UserController::class);
    Route::resource('clients', ClientController::class);
    Route::post('clients/file', [ClientController::class,'fileStore'])->name('clients.file.store');

    // configuration route
    Route::prefix('config')->group(function(){
        Route::resource('caseType', CaseTypeController::class);
    });

    // multi record
    Route::get('record/delete', [BasicController::class, 'deleteRecord'])->name('record.delete');
    Route::get('change/password/{id}', [UserController::class, 'changePassword'])->name('users.change.password');
});



require __DIR__ . '/auth.php';
