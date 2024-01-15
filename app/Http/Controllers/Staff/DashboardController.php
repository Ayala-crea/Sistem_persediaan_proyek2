<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\BarangMasukModel;
use App\Models\ModeBarang;
use App\Models\ModelPenjualan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $today = now()->format('Y-m-d');

        $countBarang = ModeBarang::whereDate('created_at', $today)->count();
        $totalHargaJualHariIni = ModelPenjualan::totalHargaJualHariIni();
        $countPenjualan = ModelPenjualan::whereDate('created_at', $today)->count();
        $countUser = User::count();

        return view('staff.index', compact('countBarang', 'totalHargaJualHariIni', 'countPenjualan', 'countUser'));
    }
}
