<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeSupplier extends Model
{
    use HasFactory;
    protected $table = "supplier";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_supplier',
        'alamat',
        'kontak_supplier'
    ];
    public function barangs()
    {
        return $this->hasMany(ModeBarang::class, 'suppliers', 'id');
    }
    public function BarangMasuk()
    {
        return $this->hasMany(BarangMasukModel::class, 'suppliers', 'id');
    }
}
