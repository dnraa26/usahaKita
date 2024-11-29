<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Perusahaan;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class PerusahaanController extends Controller
{
    public function index(Request $request): View
    {
        if ($request->input('query')) {
            $query = $request->input('query');
            $perusahaan = Perusahaan::where('nama_perusahaan', 'LIKE', "%{$query}%")
                ->orWhere('provinsi', 'LIKE', "%{$query}%")
                // ->where('status', 'buka')
                ->paginate(10);
        } else {
            $perusahaan = Perusahaan::with(['lowongan' => function ($query) {
                $query->select('perusahaan_id', DB::raw('SUM(jumlah_lowongan) as total_lowongan'))
                    ->groupBy('perusahaan_id');
            }])->paginate(10);
        }


        return view('perusahaan', compact('perusahaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pemilik_perusahaan' => ['required', 'string', 'max:255'],
            'email_perusahaan' => ['required', 'string', 'max:255'],
            'nama_perusahaan' => ['required', 'string', 'max:255'],
            'no_telp' => ['required', 'string', 'max:255'],
            'website_perusahaan' => ['nullable', 'url', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'kota' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'kelurahan' => ['required', 'string', 'max:255'],
            'alamat_lengkap' => ['required', 'string'],
            'kategori' => ['required', 'int', 'max:2'],
            'foto_ktp' => ['required', 'image', 'max:2048'],
            'logo_perusahaan' => ['required', 'image', 'max:2048'],
            'deskripsi' => ['string', 'max:255'],
        ]);

        $fotoKtpPath = $request->file('foto_ktp')->store('public/foto_ktp');
        $fotoPerusahaanPath = $request->file('logo_perusahaan')->store('public/logo_perusahaan');
        $userId = Auth::id();

        Perusahaan::create([
            'user_id' => $userId,
            'pemilik_perusahaan' => $request->pemilik_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'website_perusahaan' => $request->website_perusahaan ?? "-",
            'no_telp' => $request->no_telp,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'alamat_lengkap' => strtoupper($request->alamat_lengkap),
            'kategori' => $request->kategori,
            'foto_ktp' => $fotoKtpPath,
            'foto_perusahaan' => $fotoPerusahaanPath,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect(route('perusahaan', absolute: false));
    }

    public function profilPerusahaan($id)
    {
        $lowongan = Lowongan::where('perusahaan_id', $id)->get();
        $data = Perusahaan::find($id);
        return view('profilePerusahaanPartner', compact('data', 'lowongan'));
    }
}
