<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ModeBarang;
use App\Models\ModeSupplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Fetch all products with their suppliers
        $supplier = ModeSupplier::find(1);
        $barangs = $supplier->barangs;

        return view('staff.barang.index', compact('barangs', 'supplier'));
    }
    public function addbarang()
    {
        $supplier = ModeSupplier::find(1);
        $barangs = $supplier->barangs;
        $namaSupplier = ModeSupplier::pluck('nama_supplier');
        return view('staff.barang.form', compact('barangs', 'supplier', 'namaSupplier'));
    }
    public function supplier($id)
    {
        $data = ModeSupplier::get();
    }
    public function simpan(Request $request){
        $DataBarang = [
            'nama_barang' => $request->nama_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'harga' => $request->harga,
            'jumlah_stok' => $request->jumlah_stok,
            'berat' => $request->berat,
            'suppliers' => $request->suppliers
        ];

        ModeBarang::create($DataBarang);
        return redirect()->route('allbarang');
    }
    public function ApiSimpan(Request $request){
        $ApiBarang = [
            'nama_barang' => $request->nama_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'harga' => $request->harga,
            'jumlah_stok' => $request->jumlah_stok,
            'berat' => $request->berat,
            'suppliers' => $request->suppliers
        ];

        ModeBarang::create($ApiBarang);
    }
    public function hapusData($id){
        ModeBarang::findOrFail($id)->delete();
        return redirect()->route('allbarang');
    }
    public function delete($id){
        ModeBarang::find($id)->delete();
        return redirect()->route('allbarang');
    }    
    public function edit($id){
        $EditBarang = ModeBarang::find($id);
        return view('staff.barang.form');
    }
    public function update($id, Request $request){
        $DataBarang = [
            'nama_barang' => $request->nama_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'harga' => $request->harga,
            'jumlah_stok' => $request->jumlah_stok,
            'berat' => $request->berat,
            'suppliers' => $request->suppliers
        ];
        ModeBarang::find($id)->update($DataBarang);
        return redirect()-> route('barang');
    }
}
