<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPenjualan extends Model
{
    use HasFactory;
    protected $table = "penjualan_barang";
    // protected $dispatchesEvents = [
    //     'created' => 'App\Events\PenjualanCreated',
    // ];
    protected $fillable = [
        'barangs',
        'jumlahBarangKeluar',
        'harga_jual',
        'tanggal_keluar'
    ];

    public function barangs()
    {
        return $this->belongsTo(ModeBarang::class, 'barangs', 'id');

    }
    public static function totalHargaJualHariIni()
    {
        $today = now()->format('Y-m-d');

        return static::whereDate('tanggal_keluar', $today)->sum('harga_jual');
    }
    
}
