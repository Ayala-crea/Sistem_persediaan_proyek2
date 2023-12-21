<?php

namespace App\Http\Controllers;

use App\Models\ModelDataStaff;
use Illuminate\Http\Request;


class StaffController extends Controller
{
    public function index(){
        $DataStaff = ModelDataStaff::get();
        return view('Staff.index', ['Staffs'=>$DataStaff]);
    }
    public function register(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'nama_lengkap' => $request->nama_lengkap,
            'role_staffs' => $request->role_staffs,
        ];

        ModelDataStaff::create($data);
    }
    public function ApiStaff(){
        $ApiBarang = ModelDataStaff::get();
        return response()->json(['data' => $ApiBarang]);
    }
}
