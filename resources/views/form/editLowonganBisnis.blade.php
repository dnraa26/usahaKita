<x-layout>
    <x-slot:title>Edit Profil Perusahaan</x-slot:title>
    <x-slot:content>
        <div class="flex min-h-screen bg-gray-100">
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
                            <li class="p-4 {{request()->is('editLowonganBisnis') ? 'bg-gray-200' : 'text-gray-600'}} hover:bg-gray-200">
                                Manage Profil Perusahaan
                            </li>
                        </a>
                    </ul>
                </nav>
            </aside>


            <!-- Main Content -->
            <main class="flex-1 p-5">
                <div class="bg-white shadow-xl rounded-lg p-5">
                    <h2 class="text-2xl font-bold text-blue-600 mb-4 text-center border-b pb-2">Edit Profil Lowongan Bisnis</h2>
                    <form action="/saveProfile" method="POST" class="space-y-4">
                        @csrf



                        <!-- Tab or Accordion Sections -->
                        <div x-data="{ activeSection: 'personalInfo' }" class="space-y-2">
                            <!-- Personal Info Section in Tab/Accordion -->
                            <div class="bg-blue-50 p-4 rounded-lg shadow-inner">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-gray-600 font-semibold mb-1">Nama Lowongan</label>
                                        <input type="text" class="w-full p-2 border rounded-lg" name="name" value="">
                                    </div>

                                    <div>
                                        <label class="block text-gray-600 font-semibold mb-1">Kategori</label>
                                        <input type="text" class="w-full p-2 border rounded-lg" name="name" value="">
                                    </div>

                                    <div>
                                        <label class="block text-gray-600 font-semibold mb-1">Keuntungan Bisnis</label>
                                        <input type="text" class="w-full p-2 border rounded-lg" name="text" value="">
                                    </div>

                                </div>
                            </div>

                            <!-- Address Section in Tab/Accordion -->

                            <div class="bg-blue-50 p-4 rounded-lg shadow-inner" >
                                <label class="block text-gray-600 font-semibold mb-1">Kualifikasi</label>
                                <textarea class="w-full p-2 border rounded-lg" name="description" rows="3"></textarea>
                            </div>

                            <div class="bg-blue-50 p-4 rounded-lg shadow-inner" >
                                <label class="block text-gray-600 font-semibold mb-1">Benefit</label>
                                <textarea class="w-full p-2 border rounded-lg" name="description" rows="3"></textarea>
                            </div>



                        </div>



                        <!-- Save Button -->
                        <div class="mt-5 text-center">
                            <a href="#">
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-800">
                                Simpan Perubahan
                            </button>
                            </a>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </x-slot:content>
</x-layout>
