<?php

namespace App\Http\Controllers;

use App\Models\ModelDataPersediaanBarang;
use Illuminate\Http\Request;

class PersediaanController extends Controller
{
    public function index(){
        $barangPersediaan = ModelDataPersediaanBarang::get();
        return view('persediaanbarang.index', ['persediaanbarang'=>$barangPersediaan]);
    }
    public function tambah(){
        return view('persediaanbarang.form');
    }
    public function simpan(Request $request){
        $DataPersediaan = [
            'jumlahStok' => $request->jumlahStok,
            'tanggal_update' => $request->tanggal_update,
            'barang' => $request->barang,
            'staff' => $request->staff
        ];
        ModelDataPersediaanBarang::create($DataPersediaan);
        return redirect()->route('persediaanbarang'); 
    }
    public function ApiData(){
        $ApiBarang = ModelDataPersediaanBarang::get();
        return response()->json(['data' => $ApiBarang]);
    }
}
