<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $dataUsers = User::getAllUsers();
        return view('staff.user.index', compact('dataUsers'));
    }
    public function Home()
    {
        return view('layouts.app');
    }
}
