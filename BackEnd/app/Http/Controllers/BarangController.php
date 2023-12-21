<?php

namespace App\Http\Controllers;

use App\Models\ModelDataBarang;
use App\Models\ModelDataStaff;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(){
        $Barangs = ModelDataBarang::get();
        return view('barang.index', ['barang'=>$Barangs]);
    }
    public function Admin(){
        $Barangs = ModelDataBarang::get();
        return view('Admin.Barang', ['barang'=>$Barangs]);
    }
    public function tambah(){
        return view('barang.form');
    }
    public function Api(){
        $ApiBarang = ModelDataBarang::get();
        return response()->json(['data' => $ApiBarang]);
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

        ModelDataBarang::create($DataBarang);
        return redirect()->route('barang');
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

        ModelDataBarang::create($ApiBarang);
    }
    public function hapus($id){
        ModelDataBarang::find($id)->delete();
        return redirect()->route('barang');
    }
    public function edit($id){
        $EditBarang = ModelDataBarang::find($id);
        return view('barang.form');
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
        ModelDataBarang::find($id)->update($DataBarang);
        return redirect()-> route('barang');
    }
}
