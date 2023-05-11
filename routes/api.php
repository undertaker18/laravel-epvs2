<?php

use App\Http\Controllers\XeroApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('/v1/xero/auth', [XeroApiController::Class, 'getAuth'])->name('xero-auth');
// Route::get('/v1/xero/token', [XeroApiController::Class, 'getToken'])->name('xero-token');
// Route::get('/v1/xero/token-refresh', [XeroApiController::Class, 'tokenRefresh'])->name('xero-token-refreh');
// Route::get('/v1/xero/invoice', [XeroApiController::Class, 'postInvoice'])->name('post-invoice');
// Route::get('/v1/xero/invoice1', [XeroApiController::Class, 'getInvoice'])->name('get-invoice');
// Route::get('/v1/xero/payment', [XeroApiController::Class, 'postPayment'])->name('post-payment');

// Route::get('/v1/xero/accounts', [XeroApiController::Class, 'postAccounts'])->name('post-accounts');
// Route::get('/v1/xero/accounts1', [XeroApiController::Class, 'getAccounts'])->name('get-accounts');
// Route::get('/v1/xero/syncAccounts', [XeroApiController::Class, 'syncAccounts'])->name('sync-accounts');

