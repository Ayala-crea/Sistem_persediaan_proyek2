<?php

use App\Http\Controllers\AuthLogin;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\PersediaanController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\SupplierController;
use App\Models\ModelDataBarang;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});
Route::prefix('barangs')->group(function () {
    Route::get('', [BarangController::class, 'index'])->name('barang');
    Route::get('tambah', [BarangController::class, 'tambah'])->name('barang.tambah');
    Route::post('tambah', [BarangController::class, 'simpan'])->name('barang.tambah.simpan');
    Route::get('hapus/{id}', [BarangController::class, 'hapus'])->name('barang.hapus');
    Route::get('edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
    Route::post('edit/{id}', [BarangController::class, 'update'])->name('barang.edit.update');

    // API
    // Route::get('api', [BarangController::class, 'Api'])->name('api.barang.index');
});
Route::prefix('/Admin')->group(function() {
    Route::get('', [BarangController::class, 'Admin'])->name('barang');
});
Route::controller(BarangMasukController::class)->prefix('barangmasuk')->group(function(){
    Route::get('', 'index')->name('barangmasuk');
    Route::get('tambah', 'tambah')->name('barangmasuk.tambah');
    Route::post('tambah', 'simpan')->name('barangmasuk.tambah.simpan');
    Route::get('hapus/{$id}', 'hapusdata')->name('barangmasuk.hapus');
});
Route::controller(BarangKeluarController::class)->prefix('barangkeluar')->group(function(){
    Route::get('', 'index')->name('barangkeluar');
    Route::get('tambah', 'tambah')->name('barangkeluar.tambah');
    Route::post('tambah', 'simpan')->name('barangkeluar.tambah.simpan');
    Route::get('edit', 'edit')->name('barangkeluar.edit');
});
Route::controller(SupplierController::class)->prefix('supplier')->group(function(){
    Route::get('', 'index')->name('supplier');
    Route::get('tambah', 'tambah')->name('supplier.tambah');
    Route::post('simpan', 'TambahData')->name('supplier.tambah.simpan');
});
Route::controller(StaffController::class)->prefix('Staff')->group(function(){
    Route::get('', 'index')->name('Staff');
});
Route::controller(PersediaanController::class)->prefix('Persediaanbarang')->group(function(){
    Route::get('', 'index')->name('persediaanbarang');
    Route::get('tambah', 'tambah')->name('persediaanbarang.tambah');
    Route::post('tambah', 'simpan')->name('persediaanbarang.tambah.simpan');
});
Route::get('login', [AuthLogin::class, 'index'])->name('login');
Route::post('/sesi/login', [AuthLogin::class, 'login'])->name('login.User');
Route::get('register', [AuthLogin::class, 'register'])->name('register');

Route::get('/penjualan', function () {
    return view('User.menu');
});
Route::get('/pembelian', function () {
    return view('User.menu-pembelian');
});
Route::get('/pembayaran', function () {
    return view('User.pembayaran');
});
Route::get('/invoice', function () {
    return view('User.invoice');
});
// Route::get('/supplier', function () {
//     return view('supplier/index');
// })->name('supplier');
// Route::controller(ControllerSupplier::class)->prefix('pemasok_data')->group(function() {
//     Route::get('', 'index')->name('pemasok');
// });
