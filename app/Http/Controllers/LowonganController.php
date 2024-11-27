<?php

namespace App\Http\Controllers;

use App\Models\TagSpesifikasi;
use App\Models\Lowongan;
use App\Models\TagSpesifikasiLowongan;
use App\Models\User;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        Carbon::setLocale('id');

        $query = $request->input('query');
        $results = Lowongan::where('nama_lowongan', 'LIKE', "%{$query}%")
            ->orWhere('provinsi', 'LIKE', "%{$query}%")
            ->paginate(10);

        $lowongan = Lowongan::with('tags', 'perusahaan')->orderBy('id', 'asc')->latest()->paginate(10);
        return view('lowonganBisnis', compact('lowongan', 'query', 'results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idPerusahaan = Perusahaan::where('user_id', Auth::id())->first()->id;
        $tag = TagSpesifikasi::all();
        // $tableLowongan = Lowongan::with('tags','perusahaan')->where('perusahaan_id',$idPerusahaan)->orderBy('id', 'asc');
        $tableLowongan = Lowongan::where('perusahaan_id', '=', $idPerusahaan)->get();
        return view('dashboardBusinesman', compact('tableLowongan', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $idUser = User::find(Auth::id(), 'id');
        $validated = $request->validate([
            'nama_lowongan' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'modal_usaha' => 'required|integer|min:1',
            'requirement' => 'required|string|max:1000',
            'benefit' => 'nullable|string|max:500',
            'provinsi' => ['required', 'string', 'max:255'],
            'kota' => ['required', 'string', 'max:255'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'kelurahan' => ['required', 'string', 'max:255'],
            'tags' => 'required|array',
        ]);

        //requirement
        $requirements = $request->input('requirement');
        $requirementsArray = explode(",", $requirements);
        $requirementsArray = array_map('trim', $requirementsArray);
        $requirementsArray = array_filter($requirementsArray, fn($value) => !empty($value));
        //benefit
        $benefit = $request->input('benefit');
        $benfitArray = explode(",", $benefit);
        $benfitArray = array_map('trim', $benfitArray);
        $benfitArray = array_filter($benfitArray, fn($value) => !empty($value));


        $lowongan = Lowongan::create([
            'perusahaan_id' => $idUser->perusahaan->id,
            'nama_lowongan' => $validated['nama_lowongan'],
            'jumlah_lowongan' => $validated['jumlah'],
            'modal_usaha' => $validated['modal_usaha'],
            'requirement' => json_encode($requirementsArray),
            'benefit' => json_encode($requirementsArray),
            'provinsi' => $validated['provinsi'],
            'kota' => $validated['kota'],
            'kecamatan' => $validated['kecamatan'],
            'kelurahan' => $validated['kelurahan'],
        ]);

        $lowongan->tags()->attach($validated['tags']);

        return redirect()->route('lowongan.index')->with('success', 'Lowongan berhasil ditambahkan.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Carbon::setLocale('id');
        $detailLowongan = Lowongan::with('perusahaan.kategori_bisnis')->find($id);
        $requirementsArray = json_decode($detailLowongan->requirement, true);
        $benefitArray = json_decode($detailLowongan->benefit, true);
        return view('detailLowonganBisnis', compact('detailLowongan', 'requirementsArray', 'benefitArray'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
