<x-layout>
    <x-slot:title>dashboard</x-slot:title>
    <x-slot:content>
        <div x-data="{ openTambahLowongan: false, openEditLowongan: false, openDeleteModal: false, selectedLowongan: {} }" class="flex min-h-screen bg-gray-100">
            <!-- Sidebar -->
            <aside class="w-64 bg-white shadow-lg">
                <div class="p-6">
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                </div>
                <nav>
                    <ul>
                        <a href="/dashboardBusinesman" class="text-gray-600">
                            <li class="p-4 hover:bg-gray-200">Tambah Lowongan Bisnis</li>
                        </a>
                        <a href="/manageProfilPerusahaanBusinesman" class="text-gray-600">
                            <li class="p-4 hover:bg-gray-200">Manage Profil Perusahaan</li>
                        </a>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <div class="flex-1 p-8">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Daftar Lowongan</h2>
                    <button @click="openTambahLowongan = true"
                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                        + Tambah Lowongan
                    </button>
                </div>

                <!-- Modal Tambah Lowongan -->
                <div x-show="openTambahLowongan"
                    x-effect="document.body.style.overflow = openTambahLowongan ? 'hidden' : 'auto'"
                    class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative"
                        @click.away="openTambahLowongan = false">
                        <button @click="openTambahLowongan = false"
                            class="absolute top-3 right-3 text-gray-600 hover:text-gray-900">&times;</button>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tambah Lowongan Bisnis</h2>
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label class="block text-gray-700">Judul Lowongan</label>
                                <input type="text" name="judul" class="w-full p-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Jumlah Lowongan</label>
                                <input type="number" name="jumlah" min="1" class="w-full p-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Requirement</label>
                                <textarea name="requirement" rows="3" class="w-full p-2 border rounded"></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-700">Benefit</label>
                                <textarea name="benefit" rows="2" class="w-full p-2 border rounded"></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-700">Lokasi</label>
                                <textarea name="benefit" rows="2" class="w-full p-2 border rounded"></textarea>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" @click="openTambahLowongan = false"
                                    class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Tabel Lowongan -->
                <div class="overflow-x-auto mt-8">
                    <table class="min-w-full bg-white border">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="px-6 py-3 border-b">Judul</th>
                                <th class="px-6 py-3 border-b">Jumlah</th>
                                <th class="px-6 py-3 border-b">Requirement</th>
                                <th class="px-6 py-3 border-b">Benefit</th>
                                <th class="px-6 py-3 border-b">Lokasi</th>
                                <th class="px-6 py-3 border-b text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh data -->
                            <template
                                x-for="lowongan in [{judul: 'Kemitraan Fried Chicken', jumlah: 5, requirement: 'Pengalaman 5 tahun', benefit: 'Resep rahasia', lokasi: 'Jakarta'}]">
                                <tr>
                                    <td class="px-6 py-4 border-b" x-text="lowongan.judul"></td>
                                    <td class="px-6 py-4 border-b" x-text="lowongan.jumlah"></td>
                                    <td class="px-6 py-4 border-b" x-text="lowongan.requirement"></td>
                                    <td class="px-6 py-4 border-b" x-text="lowongan.benefit"></td>
                                    <td class="px-6 py-4 border-b" x-text="lowongan.lokasi"></td>
                                    <td class="px-6 py-4 border-b text-center">
                                        <button @click="selectedLowongan = lowongan; openEditLowongan = true"
                                            class="px-3 py-1 bg-yellow-500 text-white rounded">Edit</button>
                                        <button @click="selectedLowongan = lowongan; openDeleteModal = true"
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                </div>

                <!-- Modal Edit Lowongan -->
                <div x-show="openEditLowongan"
                    x-effect="document.body.style.overflow = openEditLowongan ? 'hidden' : 'auto'"
                    class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-6 relative"
                        @click.away="openEditLowongan = false">
                        <button @click="openEditLowongan = false"
                            class="absolute top-3 right-3 text-gray-600 hover:text-gray-900">&times;</button>
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Lowongan Bisnis</h2>
                        <form action="#" method="POST" class="space-y-4">
                            <div>
                                <label class="block text-gray-700">Judul Lowongan</label>
                                <input type="text" x-model="selectedLowongan.judul"
                                    class="w-full p-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Jumlah Lowongan</label>
                                <input type="number" x-model="selectedLowongan.jumlah" min="1"
                                    class="w-full p-2 border rounded">
                            </div>
                            <div>
                                <label class="block text-gray-700">Requirement</label>
                                <textarea x-model="selectedLowongan.requirement" rows="3" class="w-full p-2 border rounded"></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-700">Benefit</label>
                                <textarea x-model="selectedLowongan.benefit" rows="2" class="w-full p-2 border rounded"></textarea>
                            </div>
                            <div>
                                <label class="block text-gray-700">Lokasi</label>
                                <textarea x-model="selectedLowongan.lokasi" rows="2" class="w-full p-2 border rounded"></textarea>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" @click="openEditLowongan = false"
                                    class="px-4 py-2 bg-gray-300 rounded">Batal</button>
                                <button type="submit"
                                    class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Modal Hapus dengan Flowbite -->
                <!-- Modal Hapus dengan Animasi -->
                <div x-show="openDeleteModal" x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    x-effect="document.body.style.overflow = openDeleteModal ? 'hidden' : 'auto'"
                    class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center z-50">

                    <div class="relative bg-white rounded-lg shadow max-w-md w-full p-6">
                        <!-- Tombol Close -->
                        <button type="button" @click="openDeleteModal = false"
                            class="absolute top-3 right-3 text-gray-600 hover:text-gray-900">
                            &times;
                        </button>

                        <!-- Konten Modal -->
                        <div class="text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500">Apakah Anda yakin ingin menghapus
                                lowongan <span class="font-bold" x-text="selectedLowongan.judul"></span>?
                            </h3>
                            <div class="flex justify-center gap-4">
                                <!-- Tombol Konfirmasi Hapus -->
                                <button @click="hapusLowongan(selectedLowongan); openDeleteModal = false"
                                    class="px-5 py-2.5 bg-red-600 text-white rounded hover:bg-red-800">
                                    Ya, Hapus
                                </button>
                                <!-- Tombol Batal -->
                                <button @click="openDeleteModal = false"
                                    class="px-5 py-2.5 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <script>
            function hapusLowongan(lowongan) {
                // Simulasi aksi hapus, ganti dengan logika backend yang sesuai
                alert(`Lowongan "${lowongan.judul}" telah dihapus!`);
            }
        </script>


    </x-slot:content>
</x-layout>
