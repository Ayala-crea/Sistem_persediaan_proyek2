<?php

namespace App\Http\Controllers;

use App\Models\ModelDataBarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index(){
        $KeluarBarang = ModelDataBarangKeluar::get();
        return view('barangkeluar.index', ['BarangKeluar'=>$KeluarBarang]);
    }
    public function tambah(){
        return view('barangkeluar.form');
    }
    public function simpan(Request $request){
        $keluarbarang = [
            'jumlahBarangKeluar' => $request->jumlahBarangKeluar,
            'tanggal_keluar' => $request->tanggal_keluar,
            'barangs' => $request->barangs,
            'update_at' => $request->update_at,
            'created_at' => $request->created_at,
        ];
        ModelDataBarangKeluar::create($keluarbarang);
        return redirect()->route('barangkeluar');
    }
    public function update($id){
        $barangKeluar = ModelDataBarangKeluar::find($id);
        return view('barangkeluar.edit', compact('barangkeluar'));
    }
    public function ApiData(Request $request){
        $keluarbarang = [
            'jumlahBarangKeluar' => $request->jumlahBarangKeluar,
            'tanggal_keluar' => $request->tanggal_keluar,
            'barangs' => $request->barangs,
        ];

        ModelDataBarangKeluar::create($keluarbarang);
    }
}
