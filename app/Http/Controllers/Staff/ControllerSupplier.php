<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ModeSupplier;
use Illuminate\Http\Request;

class ControllerSupplier extends Controller
{
    public function index()
    {
        $dataSupplier = ModeSupplier::get();
        return view('staff.suppliers.index', compact('dataSupplier'));
    }
    public function tambahData()
    {
        return view('staff.suppliers.form');
    }
    public function SimpanData(Request $request)
    {
        $KeepData = [
            "nama_supplier" => $request->nama_supplier,
            "alamat" => $request->alamat,
            "kontak_supplier" => $request->kontak_supplier
        ];

        ModeSupplier::create($KeepData);
        return redirect()->route('supplier');
    }
    public function HapusData($id)
    {
        ModeSupplier::findOrFail($id)->delete();
        return redirect()->route('supplier');
    }
}
