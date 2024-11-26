<x-layout>
    <x-slot:title>Detail Lowongan Bisnis</x-slot:title>
    <x-slot:content>
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md mt-10">
            <div class="flex items-center mb-4">
                <!-- Logo Perusahaan -->
                <div class="mr-4">
                    <img src="{{ asset('storage/' . $detailLowongan->perusahaan->foto_perusahaan) }}" alt="Logo Company"
                        class="w-16 h-16">
                </div>
                <!-- Informasi Lowongan -->
                <div>
                    <h1 class="text-2xl font-bold">{{ $detailLowongan->nama_lowongan }}</h1>
                    <p class="text-sm text-gray-600">PT {{ $detailLowongan->perusahaan->nama_perusahaan }}</p>
                </div>
            </div>

            <div class="mb-6">
                <!-- Lokasi, Bidang, Status, Gaji -->
                <p class="flex items-center text-gray-700 mb-2">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <!-- Ikon lokasi -->
                    </svg>
                    {{ ucwords(strtolower($detailLowongan->kota)) }},{{ ucwords(strtolower($detailLowongan->provinsi)) }}
                </p>
                <p class="flex items-center text-gray-700 mb-2">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <!-- Ikon bidang -->
                    </svg>
                    {{ $detailLowongan->perusahaan->kategori_bisnis->nama_kategori }}
                </p>

                <p class="flex items-center text-gray-700">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <!-- Ikon gaji -->
                    </svg>
                    Mulai Dari Rp {{ number_format($detailLowongan->modal_usaha, 0, ',', '.') }}
                </p>
            </div>

            <p class="text-sm text-gray-500 mb-4">Posted {{ $detailLowongan->created_at->diffForHumans() }}</p>

            <!-- Tombol aksi -->
            <div class="flex space-x-4">
                <button
                    class="bg-blue-600 text-white font-semibold px-4 py-2 rounded hover:bg-blue-700  active:scale-95 transition duration-300">Berbisnis
                    Sekarang</button>
                <button
                    class="bg-sky-50 text-blue-800 font-semibold px-4 py-2 rounded hover:bg-sky-100  active:scale-95 transition duration-300">Simpan</button>
            </div>

            <!-- Kualifikasi -->
            <div class="mt-8">
                <h2 class="text-lg font-semibold mb-2">Requirement:</h2>
                <ul class="list-disc list-inside text-gray-700">
                    @foreach ($requirementsArray as $requirement)
                        <li> {{ $requirement }} </li>
                    @endforeach
                </ul>
            </div>

            <!-- Benefits -->
            <div class="mt-8">
                <h2 class="text-lg font-semibold mb-2">Benefits:</h2>
                <ul class="list-disc list-inside text-gray-700">
                    @foreach ($benefitArray as $benefit)
                        <li> {{ $benefit }} </li>
                    @endforeach
                </ul>
            </div>

            <!-- About Company -->
            <div class="mt-8">
                <h2 class="text-lg font-semibold mb-2">About the Company:</h2>
                <p class="text-gray-700">
                    {{ $detailLowongan->perusahaan->deskripsi }}
                </p>
            </div>
        </div>


    </x-slot:content>
</x-layout>
