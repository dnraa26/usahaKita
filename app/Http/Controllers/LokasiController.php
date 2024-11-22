<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Lokasi;

class LokasiController extends Controller
{
    // Menampilkan halaman form wilayah
    public function index()
    {
        return view('lokasi');
    }

    // Menyimpan data wilayah ke database
    public function store(Request $request)
    {
        // Validasi data yang dikirim
        $request->validate([
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
        ]);

        // Simpan data ke database (contoh dengan model Wilayah)
        Lokasi::create([
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
        ]);

        return redirect()->back()->with('success', 'Data wilayah berhasil disimpan!');
    }

    // Mendapatkan data provinsi dari API
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
