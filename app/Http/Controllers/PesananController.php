<?php

namespace App\Http\Controllers;

use App\Models\ModeBarang;
use App\Models\ModelPenjualan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function showForm($id)
    {
        $produk = ModeBarang::find($id);

        if (!$produk) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan');
        }

        return view('layouts.pembayaran', ['produk' => $produk]);
    }
    public function simpanPesanan(Request $request)
    {
        $datapesanan = [
            'barangs' => $request->barangs,
            'jumlahBarangKeluar' => $request->jumlahBarangKeluar,
            'harga_jual' => $request->harga_per_barang,
            'tanggal_keluar' => now(), // Sesuaikan dengan cara Anda menangani tanggal
        ];

        $penjualan = ModelPenjualan::create($datapesanan);
        return redirect()->route('invoice', ['id' => $penjualan->id]);      }
}
