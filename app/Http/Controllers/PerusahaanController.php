<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PerusahaanController extends Controller
{
    public function index(): View
    {
        $perusahaan = Perusahaan::latest()->paginate(10);
        return view('perusahaan',compact('perusahaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pemilik_perusahaan' => ['required', 'string', 'max:255'],
            'email_perusahaan' => ['required', 'string', 'max:255'],
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'no_telp' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'int', 'max:2'],
            'cabang_pusat' => ['required', 'string', 'max:255'],
            'foto_ktp' => ['required', 'image', 'max:2048'],
            'logo_perusahaan' => ['required', 'image', 'max:2048'],
            'deskripsi' => ['required', 'string', 'max:255'],
        ]);

        $fotoKtpPath = $request->file('foto_ktp')->store('public/foto_ktp');
        $fotoPerusahaanPath = $request->file('logo_perusahaan')->store('public/logo_perusahaan');
        $userId = Auth::id();

        Perusahaan::create([
            'user_id' => $userId,
            'pemilik_perusahaan' => $request->pemilik_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'no_telp' => $request->no_telp,
            'kategori' => $request->kategori,
            'cabang_pusat' => $request->cabang_pusat,
            'foto_ktp' => $fotoKtpPath,
            'foto_perusahaan' => $fotoPerusahaanPath,
            'deskripsi' => $request->deskripsi,
        ]);
        
        return redirect(route('perusahaan', absolute: false));
    }
}
