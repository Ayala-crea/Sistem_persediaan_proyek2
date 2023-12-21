<?php

namespace App\Http\Controllers;

use App\Models\ModelDataSupplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        $Suppliers = ModelDataSupplier::get();
        return view('suppliers.index', ['supplier'=>$Suppliers]);
    }
    public function ApiSupplier(){
        $ApiBarang = ModelDataSupplier::get();
        return response()->json(['data' => $ApiBarang]);
    }
    public function TambahData(Request $request){
        $SupplierData = [
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'kontak_supplier' => $request->kontak_supplier 
        ];
        ModelDataSupplier::create($SupplierData);
        return redirect()->route('supplier');
    }
    public function tambah(){
        return view('suppliers.form');
    }
}
