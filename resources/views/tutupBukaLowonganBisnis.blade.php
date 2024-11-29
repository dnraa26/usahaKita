<x-layout>
    <x-slot:title>tutupBukaLowongan</x-slot:title>
    <x-slot:content>
        <!-- Sidebar -->
        <div class="flex min-h-screen bg-gray-100">
            <aside class="w-64 bg-white shadow-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                </div>
                <nav>
                    <ul>
                        <a href="/dashboardBusinesman" class="text-gray-600">
                            <li class="p-4 hover:bg-gray-200">Tambah Lowongan Bisnis</li>
                        </a>
                        <a href="/tutupBukaLowonganBisnis" class="text-gray-600">
                            <li
                                class="p-4 {{ request()->is('tutupBukaLowonganBisnis') ? 'bg-gray-200' : 'text-gray-600' }} hover:bg-gray-200">
                                Manage Lowongan Bisnis</li>
                        </a>
                        <a href="/manageProfilPerusahaanBusinesman" class="text-gray-600">
                            <li class="p-4 hover:bg-gray-200">Manage Profil Perusahaan</li>
                        </a>
                    </ul>
                </nav>
            </aside>

            <main class="flex-1 p-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <header class="flex justify-between items-center mb-4">
                        <h1 class="text-xl font-semibold">Manage Lowongan Bisnis</h1>
                    </header>

                    <!-- Tabel Isi -->
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="border px-4 py-2 w-16">NO</th>
                                    <th class="border px-4 py-2 w-48">Judul</th>
                                    <th class="border px-4 py-2 w-32">Jumlah Lowongan</th>
                                    <th class="border px-4 py-2 w-32">Lokasi</th>
                                    <th class="border px-4 py-2 w-16">Status</th>
                                    <th class="border px-4 py-2 w-48">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">1</td>
                                    <td class="border px-4 py-2">Saos Abc</td>
                                    <td class="border px-4 py-2">3 Lowongan Tersedia</td>
                                    <td class="border px-4 py-2">Jalan Bojongsoang Buahbatu</td>
                                    <td class="border px-4 py-2">
                                        <!-- Status Dibuka -->
                                        <div
                                            class="flex items-center justify-center px-2 py-1 text-xs font-medium bg-green-100 text-green-600 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                            Dibuka
                                        </div>
                                    </td>
                                    <td class="border px-4 py-2">
                                        <button
                                            class="flex items-center px-3 py-1 text-sm bg-red-500 text-white rounded-full hover:bg-red-600 transition duration-200 mx-auto">
                                            <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                            Tutup
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">2</td>
                                    <td class="border px-4 py-2">Es Teh Manis</td>
                                    <td class="border px-4 py-2">2 Lowongan Tersedia</td>
                                    <td class="border px-4 py-2">Jalan Sukapura</td>
                                    <td class="border px-4 py-2">
                                        <!-- Status Ditutup -->
                                        <div
                                            class="flex items-center justify-center px-2 py-1 text-xs font-medium bg-red-100 text-red-600 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 110 20 10 10 0 010-20z" />
                                            </svg>
                                            Ditutup
                                        </div>
                                    </td>
                                    <td class="border px-4 py-2">
                                        <button
                                            class="flex items-center px-3 py-1 text-sm bg-green-500 text-white rounded-full hover:bg-green-600 transition duration-200 mx-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 4v16m8-8H4" />
                                            </svg>
                                            Buka
                                        </button>
                                    </td>
                                </tr>
                                <!-- Tambahkan baris lainnya -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </x-slot:content>
</x-layout>
