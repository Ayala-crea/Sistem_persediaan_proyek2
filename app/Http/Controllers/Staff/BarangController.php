<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ModeBarang;
use App\Models\ModeSupplier;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        // Fetch all products with their suppliers
        $supplier = ModeSupplier::find(1);
        $barangs = $supplier->barangs;

        return view('staff.barang.index', compact('barangs', 'supplier'));
    }
    public function addbarang()
    {
        $supplier = ModeSupplier::find(1);
        $barangs = $supplier->barangs;
        $namaSupplier = ModeSupplier::pluck('nama_supplier');
        return view('staff.barang.form', compact('barangs', 'supplier', 'namaSupplier'));
    }
    public function supplier($id)
    {
        $data = ModeSupplier::get();
    }
    public function simpan(Request $request)
    {
        $DataBarang = [
            'nama_barang' => $request->nama_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'harga' => $request->harga,
            'jumlah_stok' => $request->jumlah_stok,
            'berat' => $request->berat,
            'suppliers' => $request->suppliers
        ];

        ModeBarang::create($DataBarang);
        return redirect()->route('allbarang');
    }
    public function ApiSimpan(Request $request)
    {
        $ApiBarang = [
            'nama_barang' => $request->nama_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'harga' => $request->harga,
            'jumlah_stok' => $request->jumlah_stok,
            'berat' => $request->berat,
            'suppliers' => $request->suppliers
        ];

        ModeBarang::create($ApiBarang);
    }
    public function tes($id)
    {
        $produk = ModeBarang::find($id);
        if ($produk) {
            $produk->delete();
            return redirect()->route('allbarang')->with('success', 'Produk berhasil dihapus!');
        } else {
            return redirect()->route('allbarang')->with('error', 'Produk tidak ditemukan!');
        }
    }
    public function edit($id)
    {
        $EditBarang = ModeBarang::find($id);
        $namaSupplier = ModeSupplier::pluck('nama_supplier');
        return view('staff.barang.form', compact('EditBarang', 'namaSupplier'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string',
            'deskripsi_barang' => 'required|string',
            'harga' => 'required|numeric',
            'jumlah_stok' => 'required|integer',
            'berat' => 'required|numeric',
            'suppliers' => 'required|string'
        ]);

        $barang = ModeBarang::find($id);

        if (!$barang) {
            return redirect()->route('barang')->with('error', 'Barang tidak ditemukan!');
        }

        $barang->update([
            'nama_barang' => $request->nama_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'harga' => $request->harga,
            'jumlah_stok' => $request->jumlah_stok,
            'berat' => $request->berat,
            'suppliers' => $request->suppliers
        ]);

        return redirect()->route('allbarang')->with('success', 'Barang berhasil diupdate!');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $supplier = ModeSupplier::find(1);
        $barangs = $supplier->barangs;

        $modeBarangs = ModeBarang::where('nama_barang', 'LIKE', "%$search%")
            ->orWhere('deskripsi_barang', 'LIKE', "%$search%")
            ->orWhere('suppliers', 'LIKE', "%$search%")
            ->get();

        return view('staff.barang.index', compact('modeBarangs', 'search', 'barangs', 'supplier'));
    }
}
