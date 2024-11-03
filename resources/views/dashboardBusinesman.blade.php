<x-navbar></x-navbar>
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
                        class="p-4 {{ request()->is('dashboardBusinesman') ? 'bg-gray-200' : 'text-gray-600' }} hover:bg-gray-200">
                        Tambah Lowongan Bisnis
                    </li>
                </a>
                <a href="/manageProfilPerusahaanBusinesman" class="text-gray-600">
                    <li class="p-4 hover:bg-gray-200">
                        Manage Profil Perusahaan
                    </li>
                </a>
            </ul>
        </nav>
    </aside>

    <!-- Main content -->
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Daftar Lowongan</h2>
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">+ Tambah Lowongan</button>
        </div>

        <!-- Tabel Lowongan -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-600">Judul
                            Lowongan Bisnis</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-600">
                            Jumlah Lowongan Bisnis</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-600">
                            Requirement</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-600">
                            Benefit</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-left text-sm font-medium text-gray-600">
                            Lokasi</th>
                        <th class="px-6 py-3 border-b border-gray-200 text-center text-sm font-medium text-gray-600">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh data -->
                    <tr>
                        <td class="px-6 py-4 border-b border-gray-200">Kemitraan Makanan Fried Chicken</td>
                        <td class="px-6 py-4 border-b border-gray-200">5</td>
                        <td class="px-6 py-4 border-b border-gray-200">Memiliki minimal pengalaman 5 tahun, modal usaha
                            200.000 </td>
                        <td class="px-6 py-4 border-b border-gray-200">Resep</td>
                        <td class="px-6 py-4 border-b border-gray-200">Jakarta</td>
                        <td class="px-6 py-4 border-b border-gray-200 text-center">
                            <div class="flex justify-center gap-2">
                                <button
                                    class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600">Edit</button>
                                <button
                                    class="px-3 py-1 bg-red-500 text-white rounded-lg hover:bg-red-600">Hapus</button>
                            </div>
                        </td>

                    </tr>
                    <!-- Ulangi sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>
</div>
