<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PembayaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ================================ Saldo Routing ================================ //
Route::prefix('saldo')->group(function(){
    Route::get('/list', [SaldoController::class, 'getListSaldo'])->name('getListSaldo');
});
Route::post('prosesAddSaldo', [SaldoController::class, 'prosesAddSaldo'])->name('prosesAddSaldo');

// ================================ Transaksi Routing ================================ //
Route::prefix('transaksi')->group(function(){
    Route::get('list', [TransaksiController::class, 'getListTransaksi'])->name('getListTransaksi');
    Route::get('formAdd', [TransaksiController::class, 'FormAddTransaksi'])->name('FormAddTransaksi');
    Route::get('formUpdate/{no}', [TransaksiController::class, 'formUpdateTransaksi'])->name('formUpdateTransaksi');
});
Route::post('prosesAddTransaksi', [TransaksiController::class, 'prosesAddTransaksi'])->name('prosesAddTransaksi');
Route::post('prosesUpdateTransaksi', [TransaksiController::class, 'prosesUpdateTransaksi'])->name('prosesUpdateTransaksi');
Route::get('/prosesDeleteTransaksi/{no}', [TransaksiController::class, 'prosesDeleteTransaksi'])->name('prosesDeleteTransaksi');

// ================================ Pembayaran Routing ================================ //
Route::prefix('pembayaran')->group(function(){
    Route::get('list', [PembayaranController::class, 'getListPembayaran'])->name('getListPembayaran');
    Route::get('formAdd', [PembayaranController::class, 'FormAddPembayaran'])->name('FormAddPembayaran');
    Route::get('formUpdate/{id}', [PembayaranController::class, 'formUpdatePembayaran'])->name('formUpdatePembayaran');
});
Route::post('prosesAddPembayaran', [PembayaranController::class, 'prosesAddPembayaran'])->name('prosesAddPembayaran');
Route::post('prosesUpdatePembayaran', [PembayaranController::class, 'prosesUpdatePembayaran'])->name('prosesUpdatePembayaran');
Route::get('/prosesDeletePembayaran/{id}', [PembayaranController::class, 'prosesDeletePembayaran'])->name('prosesDeletePembayaran');
