<?php

// UpdateStokBarang.php

// UpdateStokBarang.php

namespace App\Listeners;

use App\Events\PenjualanCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateStokBarang implements ShouldQueue
{
    public function handle(PenjualanCreated $event)
    {
        $penjualan = $event->penjualan;

        // Ambil jumlah barang yang terjual
        $jumlahBarangKeluar = $penjualan->jumlahBarangKeluar;

        // Update jumlah stok barang
        $barang = $penjualan->barangs;
        $barang->decrement('jumlah_stok', $jumlahBarangKeluar);
    }
}

