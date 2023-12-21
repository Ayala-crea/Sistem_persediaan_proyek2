<?php

namespace App\Http\Controllers;

use App\Models\ModelDataBarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index(){
        $MasukBarang = ModelDataBarangMasuk::get();
        return view('barangmasuk.index', ['barangmasuk'=>$MasukBarang]);
    }
    public function tambah(){
        return view('barangmasuk.form');
    }
    public function simpan(Request $request){
        $DataBarangMasuk = [
            'jumlahBarangMasuk' =>$request->jumlahBarangMasuk,
            'tanggal_masuk' =>$request->tanggal_masuk,
            'barangs' =>$request->barangs,
            'staffs' =>$request->staffs,
            'suppliers' =>$request->suppliers
        ];
        ModelDataBarangMasuk::create($DataBarangMasuk);
        return redirect()->route('barangmasuk');
    }
    public function TampilApi(){
        $ApiBarang = ModelDataBarangMasuk::get();
        return response()->json(['data' => $ApiBarang]);
    }
    public function hapusdata($id){
        ModelDataBarangMasuk::find($id)->delete();
        return redirect()->route('barangmasuk');
    }
}
