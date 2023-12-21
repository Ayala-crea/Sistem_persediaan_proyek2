<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDataBarangKeluar extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran_barang';
    protected $fillable = [
        'jumlahBarangKeluar',
        'tanggal_keluar',
        'barangs',
        'update_at',
        'created_at'
    ];
}
