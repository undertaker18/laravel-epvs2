<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BdoReceiptController;
use App\Http\Controllers\Admin\ReceiptController;
use App\Http\Controllers\Admin\XeroController;
use App\Http\Controllers\Admin\SystemlogController;
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


/* PUBLIC USER*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/privacy-notice', function () {
    return view('privacy-notice-form');
})->name('privacy-notice');

Route::get('/privacy-notice', [FormController::Class, 'privacy' ])->name('privacy-notice');

Route::get('/profile-form', [FormController::Class, 'profile' ])->name('profile-form');

Route::get('/upload-form', [FormController::Class, 'upload' ])->name('upload-form');

Route::get('/verify-form', [FormController::Class, 'verify' ])->name('verify-form');

Route::get('/summary-form', [FormController::Class, 'summary' ])->name('summary-form');

Route::get('/submit-form', [FormController::Class, 'submit' ])->name('submit-form');



/************** ADMIN USER ****************/
    /* For Dashboard*/
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    /* for USER*/
Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('users');

   /* For Receipts*/ 
Route::get('/receipt-valid', [ReceiptController::class, 'valid'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-valid');

Route::get('/receipt-pending', [ReceiptController::class, 'pending'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-pending');

Route::get('/receipt-reject', [ReceiptController::class, 'reject'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-reject');
    
/* For Xero intergration */
Route::get('/xero-send', function () {
    return view('xero-send');
})->middleware(['auth', 'verified'])->name('xero-send');

Route::get('/xero-sent', function () {
    return view('xero-sent');
})->middleware(['auth', 'verified'])->name('xero-sent');

/* Reports*/
Route::get('/reports', function () {
    return view('reports');
})->middleware(['auth', 'verified'])->name('reports');

/* Bdo Receipts*/
Route::get('/bdo-receipts', function () {
    return view('bdo-receipts');
})->middleware(['auth', 'verified'])->name('bdo-receipts');

/* System log*/
Route::get('/system-log', function () {
    return view('system-log');
})->middleware(['auth', 'verified'])->name('system-log');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
