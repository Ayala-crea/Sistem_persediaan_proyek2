<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ModelDataStaff extends Model
{
    use HasFactory;

    protected $table = 'staff';

    protected $fillable = [
        'username',
        'password',
        'nama_lengkap',
        'role_staffs'
    ];

}
