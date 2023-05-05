<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
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



/* ADMIN USER*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/users', function () {
    return view('users');
})->middleware(['auth', 'verified'])->name('users');

Route::get('/receipt-valid', function () {
    return view('receipt-valid');
})->middleware(['auth', 'verified'])->name('receipt-valid');

Route::get('/receipt-pending', function () {
    return view('receipt-pending');
})->middleware(['auth', 'verified'])->name('receipt-pending');

Route::get('/receipt-reject', function () {
    return view('receipt-reject');
})->middleware(['auth', 'verified'])->name('receipt-reject');

Route::get('/xero-send', function () {
    return view('xero-send');
})->middleware(['auth', 'verified'])->name('xero-send');

Route::get('/xero-sent', function () {
    return view('xero-sent');
})->middleware(['auth', 'verified'])->name('xero-sent');

Route::get('/reports', function () {
    return view('reports');
})->middleware(['auth', 'verified'])->name('reports');

Route::get('/bdo-receipts', function () {
    return view('bdo-receipts');
})->middleware(['auth', 'verified'])->name('bdo-receipts');

Route::get('/system-log', function () {
    return view('system-log');
})->middleware(['auth', 'verified'])->name('system-log');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
