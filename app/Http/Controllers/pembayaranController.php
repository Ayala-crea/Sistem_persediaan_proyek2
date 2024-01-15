<?php

namespace App\Http\Controllers;

use App\Models\ModeBarang;
use App\Models\ModelPenjualan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pembayaranController extends Controller
{
    public function invoice($id)
    {
        $Datainvoice = ModelPenjualan::find($id);
        $hargaJualTerakhir = ModelPenjualan::latest('id')->value('harga_jual');

        $lastId = DB::table('penjualan_barang')->max('id');

        $dataJoin = DB::table('penjualan_barang')
            ->join('barang', 'penjualan_barang.barangs', '=', 'barang.id')
            ->where('penjualan_barang.id', $lastId)
            ->select('penjualan_barang.*', 'barang.nama_barang')
            ->get();
        return view('layouts.invoice', compact('Datainvoice', 'dataJoin', 'hargaJualTerakhir'));
    }
}
