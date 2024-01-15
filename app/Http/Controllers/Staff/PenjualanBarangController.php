<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ModeBarang;
use App\Models\ModelPenjualan;
use App\Models\ModeSupplier;
use Illuminate\Http\Request;

class PenjualanBarangController extends Controller
{
    public function index()
    {
        return view('staff.barangkeluar.index');
    }
    public function penjualan()
    {
        $namaBarang = ModeBarang::pluck('nama_barang');
        return view('staff.barangkeluar.form', compact('namaBarang'));
    }
    public function Pembayaran()
    {
        return view('layouts.pembayaran');
    }
    public function SimpanPenjualan(Request $request)
    {
        $dataPenjualan = [
            "jumlahBarangKeluar" => $request->jumlahBarangKeluar,
            "tanggal_keluar" => $request->tanggal_keluar,
            "harga_jual" => $request->harga_jual,
            "barangs" => $request->barangs
        ];

        ModelPenjualan::create($dataPenjualan);
        return redirect()->route('allcategorybarang');
    }
    public function dataPenjualan()
    {
        $result = ModelPenjualan::join('barang', 'penjualan_barang.barangs', '=', 'barang.id')
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
        return view('staff.barangkeluar.index', compact('result'));
    }
    public function hapusdata($id)
    {
        ModelPenjualan::findOrFail($id)->delete();
        return redirect()->route('allcategorybarang');
    }
    public function penjualanBarang()
    {
        $supplier = ModeSupplier::find(1);
        $barangs = $supplier->barangs;
        return view('layouts.menu-pembelian', compact('barangs', 'supplier'));
    }
    public function bayar($id)
    {
        dd('Controller Berhasil Dipanggil');
        // Menggunakan findOrFail untuk menemukan data dengan ID tertentu
        $penjualan = ModelPenjualan::join('barang', 'penjualan_barang.barangs', '=', 'barang.id')
            ->select('penjualan_barang.*', 'barang.nama_barang', 'barang.deskripsi_barang', 'barang.harga', 'barang.jumlah_stok', 'barang.berat', 'barang.suppliers')
            ->findOrFail($id);
        dd($penjualan);
        // Mengirimkan data ke view
        return view('layouts.pembayaran', compact('penjualan'));
    }
    public function pemesanan($id)
    {
        $produkjual = ModeBarang::find($id);
        return view('layouts.pembayaran', compact('produkjual'));
    }
    // public function formpembelian($id)
    // {
    //     $produk = ModeBarang::find($id);

    //     if (!$produk) {
    //         return view('layouts.pembayaran');
    //     }
    //     else{
    //         return view('layouts.pembayaran', compact('produk'));
    //     }
    // }
    // public function prosesPemesanan(Request $request, $id)
    // {
    //     $datapemesanan =
    //     [
    //         "id" => $request->id,
    //         "pemesenan" => $request->pemesenan,
    //         "harga" => $request->harga,
    //         "jumlah" => $request->jumlah,
    //     ];

    //     ModelPenjualan::create($datapemesanan);
    //     return view('pemesanan terima kasih', ['id'=>$id]);
    // }
}
