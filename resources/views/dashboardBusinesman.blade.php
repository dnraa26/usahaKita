<x-layout>
    <x-slot:title>dashboard</x-slot:title>
    <x-slot:content>
        <div class="flex min-h-screen bg-gray-100">
            <!-- Sidebar -->
            <aside class="w-64 bg-white shadow-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                </div>
                <nav>
                    <ul>
                        <a href="/dashboardBusinesman" class="text-gray-600">
                            <li
                                class="p-4 rounded-lg {{ request()->is('dashboardBusinesman') ? 'bg-gray-200' : 'text-gray-600' }}">
                                Tambah Lowongan Bisnis
                            </li>
                        </a>
                        <a href="/manageProfilPerusahaanBusinesman" class="text-gray-600">
                            <li class="p-4 rounded-lg hover:bg-gray-200">
                                Manage Profil Perusahaan
                            </li>
                        </a>
                    </ul>
                </nav>
            </aside>

            <!-- Main content -->
            <div class="flex-1 p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">Daftar Lowongan</h2>
                    <button class="px-6 py-2 bg-blue-500 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-600 transition">
                        + Tambah Lowongan
                    </button>
                </div>

                <!-- Tabel Lowongan -->
                <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                    <table class="min-w-full border-collapse border border-gray-200">
                        <thead class="bg-blue-500 text-white">
                            <tr>
                                <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium uppercase">
                                    Judul Lowongan Bisnis</th>
                                <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium uppercase">
                                    Jumlah Lowongan</th>
                                <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium uppercase">
                                    Requirement</th>
                                <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium uppercase">
                                    Benefit</th>
                                <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium uppercase">
                                    Lokasi</th>
                                <th class="px-6 py-3 border-b border-gray-200 text-center text-sm font-medium uppercase">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <!-- Contoh data -->
                            <tr class="hover:bg-gray-100 transition">
                                <td class="px-6 py-4 text-gray-800">Kemitraan Makanan Fried Chicken</td>
                                <td class="px-6 py-4 text-gray-800">5</td>
                                <td class="px-6 py-4 text-gray-800">Memiliki minimal pengalaman 5 tahun, modal usaha 200.000</td>
                                <td class="px-6 py-4 text-gray-800">Resep</td>
                                <td class="px-6 py-4 text-gray-800">Jakarta</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex justify-center gap-2">
                                        <button
                                            class="px-4 py-2 bg-yellow-400 text-white text-sm font-medium rounded-lg shadow hover:bg-yellow-500 transition">
                                            Edit
                                        </button>
                                        <button
                                            class="px-4 py-2 bg-red-500 text-white text-sm font-medium rounded-lg shadow hover:bg-red-600 transition">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>
