<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDataPersediaanBarang extends Model
{
    use HasFactory;
    protected $table = 'persediaan_barang';
    protected $fillable = [
        'jumlahStok',
        'tanggal_update',
        'barangs',
        'staffs'
    ];
}
