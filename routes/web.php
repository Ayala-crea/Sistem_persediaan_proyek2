<?php

use App\Http\Controllers\jadwalBarangController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Staff\BarangController;
use App\Http\Controllers\Staff\BarangMasukController;
use App\Http\Controllers\Staff\ControllerSupplier;
use App\Http\Controllers\Staff\DashboardController as StaffDashboardController;
use App\Http\Controllers\Staff\PenjualanBarangController;
use App\Http\Controllers\Staff\PersediaanBarangController;
use App\Http\Controllers\staff\UserController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/belajar', function () {
    return view('userprofile');
});



Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/', [UserController::class, 'Home'])->name('Home');    // Route::controller(UserController::class)->group(function(){
    //     Route::get('/home', 'Home')->name('dashboard');
    // });
    Route::controller(PenjualanBarangController::class)->group(function () {
        Route::get('/Belanja', 'penjualanBarang')->name('Penjualan_Barang');
    });
    Route::controller(PesananController::class)->group(function () {
        Route::get('/pesanan/{id}', 'showForm')->name('pesan.barang');
        Route::post('/simpan/pesanan', 'simpanPesanan')->name('simpan.pesanan');
    });
    Route::controller(pembayaranController::class)->group(function(){
        Route::get('/invoice/{id}', 'invoice')->name('invoice');
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(StaffDashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('home');
    });
    Route::controller(BarangController::class)->group(function () {
        Route::get('staff/all-Barang', 'index')->name('allbarang');
        Route::get('staff.add-Barang', 'addbarang')->name('addbarang');
        Route::post('tambah', 'simpan')->name('barangmasuk.tambah.simpan');
        Route::get('hapus/{id}', 'hapusData')->name('baranghapus');
        Route::get('edit/{id}', 'edit')->name('barangmasuk.edit');
    });
    Route::resource('staff/barang', BarangController::class)->except(['create', 'show']);
    Route::controller(PenjualanBarangController::class)->group(function () {
        Route::get('staff/all-category-barang', 'dataPenjualan')->name('allcategorybarang');
        Route::get('staff/add-category-barang', 'penjualan')->name('addcategorybarang');
        Route::post('staff/add-category-barang', 'simpan')->name('addcategorybarang.simpan');
        Route::get('user/pesanan', 'pemesanan')->name('pesanan');
        Route::get('delete/{id}', 'hapus')->name('hapus.data');
    });
    Route::controller(BarangMasukController::class)->group(function () {
        Route::get('staff/all-Barang-masuk', 'index')->name('allbarangmasuk');
        Route::get('staff/add-barang-masuk', 'addproduct')->name('Addbarangmasuk');
        Route::post('staff/add-category-barang', 'simpan')->name('addcategorybarang.simpan');
        Route::get('delete/{id}', 'delete')->name('delete');
    });
    Route::controller(PenjualanBarangController::class)->group(function () {
        Route::get('pembayaran', 'Pembayaran')->name('pembayaran');
        Route::post('/simpan', 'SimpanPenjualan')->name('simpan.barangkeluar');
    });
    Route::controller(UserController::class)->group(function() {
        Route::get('/staff/user', 'index')->name('UserData');
    });
    Route::controller(ControllerSupplier::class)->group(function(){
        Route::get('/supplier', 'index')->name('supplier');
        Route::get('/supplier/tambah', 'tambahData')->name('dataSupplierTambah');
        Route::post('/Simpan', 'SimpanData')->name('simpan');
        Route::get('hapus/{id}', 'HapusData')->name('hapus');
    });
    Route::controller(BarangController::class)->group(function () {
    });
    Route::controller(jadwalBarangController::class)->group(function(){
        Route::get('/jadwal', 'index')->name('jadwal');
    });

    // routes/web.php

});
// Route::get('userprofile', [DashboardController::class, 'index']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
