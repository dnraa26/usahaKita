<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class checkUser extends Controller
{
    public function index()
    {   
        $email = session('email');
        $userId = Auth::id();

        $user = User::where('email', $email)->first();
        $role = $user->role;

        if (Perusahaan::where('user_id', $userId)->exists() && $role == 2 || $role == 3) {
            return view('lowonganBisnis');
        }else {
            return view('form.register-perusahaan', ['error' => 'Data tidak ditemukan atau role tidak sesuai']);
        }
        
    }
}
