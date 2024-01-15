<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeBarang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_barang',
        'deskripsi_barang',
        'harga',
        'jumlah_stok',
        'berat',
        'foto',
        'suppliers'
    ];
    public function supplier()
    {
        return $this->belongsTo(ModeSupplier::class, 'suppliers', 'id'); // Specify the primary key of 'supplier' table
    }
    public function BarangMasuk(){
        return $this->hasMany(BarangMasukModel::class, 'barangs', 'id');
    }
    public function penjualanBarang()
    {
        return $this->hasMany(ModelPenjualan::class, 'barangs', 'id');

    }
}
