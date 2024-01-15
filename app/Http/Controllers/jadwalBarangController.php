<?php

namespace App\Http\Controllers;

use App\Models\ModelPenjualan;
use Illuminate\Http\Request;

class jadwalBarangController extends Controller
{
    public function index()
    {
        $data = ModelPenjualan::join('barang', 'penjualan_barang.barangs', '=', 'barang.id')
        ->select(
            'penjualan_barang.*',
            'barang.nama_barang',
            'barang.deskripsi_barang',
            'barang.harga',
            'barang.jumlah_stok',
            'barang.berat',
            'barang.foto',
            'barang.suppliers'
        )
        ->get();
        return view('staff.jadwalPengiriman.index', compact('data'));
    }
}
