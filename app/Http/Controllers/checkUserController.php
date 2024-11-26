<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\Lowongan;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class checkUserController extends Controller
{
    public function index()
    {   
        $email = session('email');
        $userId = Auth::id();

        $user = User::where('email', $email)->first();
        $role = $user->role;
        $lowongan = Lowongan::with('tags','perusahaan')->orderBy('id', 'asc')->latest()->paginate(10);

        if (Perusahaan::where('user_id', $userId)->exists() && $role == 2 || $role == 3) {
            // return view('lowonganBisnis',compact('lowongan'));
            return redirect('/lowonganBisnis');
        }else {
            return view('form.register-perusahaan', ['error' => 'Data tidak ditemukan atau role tidak sesuai']);
        }
        
    }
}
