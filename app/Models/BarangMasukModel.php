<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasukModel extends Model
{
    use HasFactory;
    protected $table = "barang_masuk";
    protected $fillable = [
        'barangs',
        'suppliers',
        'jumlahBarangMasuk',
        'tanggal_masuk',
        'harga_beli'
    ];
    public function barangs()
    {
        return $this->belongsTo(ModeBarang::class, 'barangs', 'id');
    }
    public function supplier()
    {
        return $this->belongsTo(ModeSupplier::class, 'suppliers', 'id');
    }
}
