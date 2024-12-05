<?php

namespace App\Http\Controllers;

use App\Models\TagSpesifikasi;
use App\Models\Lowongan;
use App\Models\TagSpesifikasiLowongan;
use App\Models\User;
use App\Models\Perusahaan;
use App\Models\Wishlist;
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
        if ($request->input('query')) {
            $query = $request->input('query');
            $lowongan = Lowongan::where('status', 'buka') // Status harus 'buka'
                ->where(function ($q) use ($query) { // Group kondisi pencarian
                    $q->where('nama_lowongan', 'LIKE', "%{$query}%")
                        ->orWhere('provinsi', 'LIKE', "%{$query}%");
                })
                ->paginate(10);
        } else {
            $lowongan = Lowongan::where('status', 'buka')
                ->with('tags', 'perusahaan')
                ->orderBy('id', 'asc')
                ->latest()
                ->paginate(10);
        }
        return view('lowonganBisnis', compact('lowongan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $idPerusahaan = Perusahaan::where('user_id', Auth::id())->first()->id;
        $tag = TagSpesifikasi::all();
        $tableLowongan = Lowongan::where('perusahaan_id', '=', $idPerusahaan)->get();

        // $tableLowongan = Lowongan::with('tags','perusahaan')->where('perusahaan_id',$idPerusahaan)->orderBy('id', 'asc');
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
            'modal_usaha' => 'required|string|min:7',
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
        $detailLowongan = Lowongan::with('perusahaan.kategori_bisnis','wishlist')->find($id);
        $wishlist = Wishlist::where('user_id',Auth::id())->count();
        // dd($wishlist);
        $requirementsArray = json_decode($detailLowongan->requirement, true);
        $benefitArray = json_decode($detailLowongan->benefit, true);
        return view('detailLowonganBisnis', compact('detailLowongan', 'requirementsArray', 'benefitArray','wishlist'));
    }

    public function wishlist($id)
    {
        $idUser = User::find(Auth::id(), 'id');
        // dd($idUser->id);
        $wishlist = Wishlist::create([
            'user_id' => $idUser->id,
            'lowongan_id' => $id,
        ]);

        return redirect('/detailLowonganBisnis/' . $id);
    }


    public function showWishlist()
    {
        $idUser = Auth::id();
        // $detailWishlist = Wishlist::with('lowongan')->find($idUser);
        $detailWishlist = Wishlist::where('user_id', $idUser)->with('lowongan.perusahaan')->get();
        // dd($detailWishlist->all());
        return view('wishlist', compact('detailWishlist'));
    }


    public function deleteWishlist($id){
        Wishlist::findOrFail($id)->delete();
        return redirect(route('showWishlist'));
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
        $request->validate([
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

        $Lowongan = Lowongan::findOrFail($id);
        TagSpesifikasiLowongan::where('lowongan_id', $id)->delete();

        $Lowongan->update($request->only([
            'nama_lowongan',
            'jumlah',
            'modal_usaha',
            'provinsi',
            'kota',
            'kecamatan',
            'kelurahan'
        ]) + [
            'requirement' => json_encode($requirementsArray),
            'benefit' => $request->benefit ? json_encode($benfitArray) : null,
        ]);

        if ($request->has('tags')) {
            foreach ($request->tags as $tagId) {
                TagSpesifikasiLowongan::create([
                    'lowongan_id' => $Lowongan->id,
                    'tag_id' => $tagId
                ]);
            }
        }

        // Redirect atau response sesuai dengan kebutuhan
        return redirect()->route('lowongan.create')->with('success', 'Lowongan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        TagSpesifikasiLowongan::where('lowongan_id', $id)->delete();
        Lowongan::findOrFail($id)->delete();
        return redirect()->route('lowongan.create')->with('success', 'Lowongan berhasil dihapus');
    }

    public function manageLowongan()
    {
        $idUser = Auth::id();
        $dataLowongan = Lowongan::whereHas('perusahaan', function ($query) use ($idUser) {
            $query->where('user_id', $idUser);
        })->get();

        return view('tutupBukaLowonganBisnis', compact('dataLowongan'));
    }

    public function updateLowonganStatus(Request $request, $id)
    {


        $lowongan = Lowongan::findOrFail($id);
        if ($request->input('tutup')) {
            $lowongan->status = 'tutup';
        } else if ($request->input('buka')) {
            $lowongan->status = 'buka';
        }

        // dd($lowongan->status);
        $lowongan->save();

        return redirect('/manageLowongan');
    }
}
