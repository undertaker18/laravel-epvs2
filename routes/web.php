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
})->name('home');


Route::get('/privacy-form', [FormController::Class, 'privacy' ])->name('privacy-form');


Route::get('/profile-form', [FormController::Class, 'profile' ])->name('profile-form');
Route::post('/profile-form', [FormController::Class, 'postProfile' ])->name('post-profile-form');
Route::get('/profile/search', [YourController::class, 'profile'])->name('profile.search');

Route::get('/profile-form/show/{id}', [FormController::Class, 'showProfile' ])->name('show-profile-form');
Route::put('/profile-form/show/{id}', [FormController::Class, 'updateProfile' ])->name('update-profile-form');


Route::get('/upload-form/{id}', [FormController::Class, 'upload' ])->name('upload-form');
Route::put('/upload-form/{id}', [FormController::Class, 'postUpload' ])->name('update-upload-form');

Route::get('/verify-form/{id}', [FormController::Class, 'verify' ])->name('verify-form');
Route::put('/verify-form/{id}', [FormController::Class, 'postVerify' ])->name('update-verify-form');

Route::get('/summary-form/{id}', [FormController::Class, 'summary' ])->name('summary-form');
Route::post('/summary-form/{id}', [FormController::Class, 'postSummary' ])->name('post-summary-form');

Route::get('/submit-form/{id}', [FormController::Class, 'submit' ])->name('submit-form');
Route::post('/submit-form/{id}', [FormController::Class, 'postSubmit' ])->name('post-submit-form');



/************** ADMIN USER ****************/
    /* For Dashboard*/
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    /* for USER*/
Route::get('/users', [UserController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:Super Admin'])
    ->name('users');

   /* For Receipts*/
Route::get('/receipt-valid', [ReceiptController::class, 'valid'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-valid');

Route::get('/receipt-pending', [ReceiptController::class, 'pending'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-pending');

Route::post('/receipts/update-status', [ReceiptController::class, 'updateReceiptStatus'])
    ->middleware(['auth', 'verified'])
    ->name('receipts.updateStatus');



Route::get('/receipt-reject', [ReceiptController::class, 'reject'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-reject');

    Route::post('/receipt-reject', [ReceiptController::class, 'postReject'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-post-reject');

    Route::post('/receipt-reject', [ReceiptController::class, 'revertReceiptStatus'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-revert');

Route::get('/receipt-image', [ReceiptController::class, 'image'])
    ->middleware(['auth', 'verified'])
    ->name('receipt-image');

Route::get('/receipt-archive', [ReceiptController::class, 'archive'])
    ->middleware(['auth', 'verified', 'role:Super Admin'])
    ->name('receipt-archive');

    Route::delete('/receipt-archive/delete', [ReceiptController::class, 'deleteReceipts'])
    ->middleware(['auth', 'verified', 'role:Super Admin'])
    ->name('receipt-archive-delete');
    

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
    ->middleware(['auth', 'verified', 'role:Super Admin'])
    ->name('reports');


// Bdo Receipts

Route::get('/bdo-xero-receipts', [XeroApiController::class, 'getXeroTransactions'])
    ->middleware(['auth', 'verified'])
    ->name('bdo-xero-receipts');

// Bdo Receipts

Route::get('/bdo-receipts', [BdoReceiptController::class, 'timestamp'])
->middleware(['auth', 'verified'])
->name('bdo-receipts');

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
    ->middleware(['auth', 'verified', 'role:Super Admin'])
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
