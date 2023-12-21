<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDataBarangMasuk extends Model
{
    use HasFactory;
    protected $table = 'pemasukan_barang';
    protected $fillable = [
        'jumlahBarangMasuk',
        'tanggal_masuk',
        'barangs',
        'staffs',
        'suppliers'
    ];
}
