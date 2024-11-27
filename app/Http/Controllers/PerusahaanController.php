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
        $query = $request->input('query');
        $results = Perusahaan::where('nama_perusahaan', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->paginate(10);

        $perusahaan = Perusahaan::with(['lowongan' => function ($query) {
            $query->select('perusahaan_id', DB::raw('SUM(jumlah_lowongan) as total_lowongan'))
                ->groupBy('perusahaan_id');
        }])->paginate(10);

        return view('perusahaan', compact('perusahaan','query','results'));
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
        $lowongan = Lowongan::all();
        $data = Perusahaan::find($id);
        return view('profilePerusahaanPartner', compact('data', 'lowongan'));
    }

    public function getProvinces()
    {
        $response = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        return response()->json($response->json());
    }

    // Mendapatkan data kabupaten/kota berdasarkan ID provinsi
    public function getRegencies($id)
    {
        $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/regencies/{$id}.json");
        return response()->json($response->json());
    }

    // Mendapatkan data kecamatan berdasarkan ID kabupaten/kota
    public function getDistricts($id)
    {
        $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/districts/{$id}.json");
        return response()->json($response->json());
    }

    // Mendapatkan data kelurahan/desa berdasarkan ID kecamatan
    public function getVillages($id)
    {
        $response = Http::get("https://www.emsifa.com/api-wilayah-indonesia/api/villages/{$id}.json");
        return response()->json($response->json());
    }
}
