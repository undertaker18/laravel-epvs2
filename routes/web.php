<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BdoReceiptController;
use App\Http\Controllers\Admin\ReceiptController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\XeroController;
use App\Http\Controllers\Admin\SystemlogController;
use App\Http\Controllers\XeroApiController;
use App\Mail\PaymentSummary;
use Illuminate\Support\Facades\Mail;
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
Route::post('/process-form', [FormController::class, 'processForm'])->name('process.form');

Route::get('/form', [FormController::Class, 'form' ])->name('form');

Route::get('/privacy-form', [FormController::Class, 'privacy' ])->name('privacy-form');
Route::post('/privacy-form', [FormController::Class, 'postPrivacy' ])->name('post-privacy-form');

Route::get('/profile-form', [FormController::Class, 'profile' ])->name('profile-form');
Route::post('/profile-form', [FormController::Class, 'postProfile' ]);
Route::get('/profile/search', [YourController::class, 'profile'])->name('profile.search');
Route::post('/profile-form1', [FormController::class, 'postProfile1'])->name('post-upload-form1');


Route::get('/upload-form', [FormController::Class, 'upload' ])->name('upload-form');
Route::post('/upload-form', [FormController::Class, 'postUpload' ])->name('post-upload-form');

Route::get('/verify-form', [FormController::Class, 'verify' ])->name('verify-form');
Route::post('/verify-form', [FormController::Class, 'postVerify' ])->name('verify-form');

Route::get('/summary-form', [FormController::Class, 'summary' ])->name('summary-form');
Route::post('/summary-form', [FormController::Class, 'postSummary' ])->name('post-summary-form');

Route::get('/submit-form', [FormController::Class, 'submit' ])->name('submit-form');
Route::post('/submit-form', [FormController::Class, 'postSubmit' ])->name('submit-form');



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

    Route::post('/receipt-reject', [ReceiptController::class, 'postReject'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-post-reject');

Route::get('/receipt-image', [ReceiptController::class, 'image'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-image');

/* For Xero intergration */

Route::get('/xero-send', [XeroController::class, 'send'])
    ->middleware(['auth', 'verified'])
    ->name('xero-send');

Route::get('/xero-sent', [XeroController::class, 'sent'])
    ->middleware(['auth', 'verified'])
    ->name('xero-sent');
Route::get('/xero-sync-accounts', [XeroController::class, 'syncAccount'])
    ->middleware(['auth'])
    ->name('xero-sync-account');



/* Reports*/
Route::get('/reports', [ReportController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('reports');

// Bdo Receipts


Route::get('/bdo-xero-receipts', [XeroApiController::class, 'getXeroTransactions'])
    ->middleware(['auth', 'verified'])
    ->name('bdo-xero-receipts');

Route::post('/upload', [App\Http\Controllers\UploadController::class, 'upload'])
    ->middleware(['auth', 'verified'])
    ->name('upload');

Route::post('/bdo-receipt/upload', [BdoReceiptController::class, 'upload'])
    ->middleware(['auth', 'verified'])
    ->name('bdo-receipt.upload');



/*Route::post('/bdo-receipts', [BdoReceiptController::class, 'store'])/
->middleware(['auth', 'verified'])
->name('bdo-receipts.store'); */




/* System log*/

Route::get('/system-log', [SystemlogController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('system-log');


/* user account*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/v1/xero/auth', [XeroApiController::Class, 'getAuth'])->name('xero-auth');
Route::get('/v1/xero/token', [XeroApiController::Class, 'getToken'])->name('xero-token');
Route::get('/v1/xero/token-refresh', [XeroApiController::Class, 'tokenRefresh'])->name('xero-token-refreh');
Route::get('/v1/xero/invoice', [XeroApiController::Class, 'postInvoice'])->name('post-invoice');
Route::get('/v1/xero/invoice1', [XeroApiController::Class, 'getInvoice'])->name('get-invoice');
Route::get('/v1/xero/payment', [XeroApiController::Class, 'postPayment'])->name('post-payment');

Route::get('/v1/xero/accounts', [XeroApiController::Class, 'postAccounts'])->name('post-accounts');
Route::get('/v1/xero/accounts1', [XeroApiController::Class, 'getAccounts'])->name('get-accounts');
Route::get('/v1/xero/syncAccounts', [XeroApiController::Class, 'syncAccounts'])->name('sync-accounts');
Route::get('/v1/xero/makeInvoiceAndPay', [XeroApiController::Class, 'makeInvoiceAndPay'])->name('make-invoice-and-pay');



require __DIR__.'/auth.php';
