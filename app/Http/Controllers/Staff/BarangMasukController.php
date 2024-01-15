<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\BarangMasukModel;
use App\Models\ModeBarang;
use App\Models\ModeSupplier;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    // public function index()
    // {
    //     // Menggunakan metode get() untuk mendapatkan semua data barang masuk
    //     $barangmasuk = BarangMasukModel::with('barangs', 'supplier')->get();

    //     return view('staff.barangmasuk.index', compact('barangmasuk'));
    // }

    public function addproduct()
    {
        $result = BarangMasukModel::join('barang', 'barang_masuk.barangs', '=', 'barang.id')
        ->join('supplier', 'barang_masuk.suppliers', '=', 'supplier.id')
        ->select('barang_masuk.*', 'barang.nama_barang', 'supplier.nama_supplier')
        ->get();

        $namaBarang = ModeBarang::pluck('nama_barang');
        $namaSupplier = ModeSupplier::pluck('nama_supplier');

        return view('staff.barangmasuk.form', compact('result', 'namaBarang', 'namaSupplier'));
    }
    public function index()
    {
        $result = BarangMasukModel::join('barang', 'barang_masuk.barangs', '=', 'barang.id')
            ->join('supplier', 'barang_masuk.suppliers', '=', 'supplier.id')
            ->select('barang_masuk.*', 'barang.nama_barang', 'supplier.nama_supplier')
            ->get();
        return view('staff.barangmasuk.index', compact('result'));
    }
    public function simpan(Request $request){
        $DataBarangMasuk = [
            'jumlahBarangMasuk' =>$request->jumlahBarangMasuk,
            'tanggal_masuk' =>$request->tanggal_masuk,
            'barangs' =>$request->barangs,
            'suppliers' =>$request->suppliers,
            'harga_beli' =>$request->harga_beli
        ];
        BarangMasukModel::create($DataBarangMasuk);
        return redirect()->route('allbarangmasuk');
    }
    public function delete($id) {
        BarangMasukModel::findOrFail($id)->delete();
        return redirect()->route('allbarangmasuk');
    }
}
