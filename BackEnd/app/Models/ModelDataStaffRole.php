<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDataStaffRole extends Model
{
    use HasFactory;
    protected $table = 'role_staff';
    protected $fillable = [
        'role_staff'
    ];
}
