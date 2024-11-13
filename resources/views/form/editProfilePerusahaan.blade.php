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
                            <li class="p-4 {{request()->is('editProfilePerusahaan') ? 'bg-gray-200' : 'text-gray-600'}} hover:bg-gray-200">
                                Manage Profil Perusahaan
                            </li>
                        </a>
                    </ul>
                </nav>
            </aside>


            <!-- Main Content -->
            <main class="flex-1 p-5">
                <div class="bg-white shadow-xl rounded-lg p-5">
                    <h2 class="text-2xl font-bold text-blue-600 mb-4 text-center border-b pb-2">Edit Profil Perusahaan</h2>
                    <form action="/saveProfile" method="POST" class="space-y-4">
                        @csrf

                        <!-- Profile Photo Upload -->
                        <div class="flex flex-col items-center mb-4 ">

                            <div class="relative">
                                <div class="w-36 h-36 rounded-full bg-blue-100 flex items-center justify-center">
                                    <img src="https://cloud.jpnn.com/photo/arsip/normal/2022/10/08/zee-jkt48-foto-instagramjkt48zee-rys9o-galg.jpg" alt="Profile Image" class="w-32 h-32 rounded-full shadow-md">
                                </div>
                            </div>
                        </div>

                        <!-- Tab or Accordion Sections -->
                        <div x-data="{ activeSection: 'personalInfo' }" class="space-y-2">
                            <!-- Personal Info Section in Tab/Accordion -->
                            <div class="bg-blue-50 p-4 rounded-lg shadow-inner">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block  font-semibold mb-1">Nama</label>
                                        <input type="text" class="w-full p-2 border rounded-lg" name="name" value="">
                                    </div>
                                    <div>
                                        <label class="block  font-semibold mb-1">Email</label>
                                        <input type="email" class="w-full p-2 border rounded-lg" name="email" value="">
                                    </div>
                                    <div>
                                        <label class="block  font-semibold mb-1">Telepon</label>
                                        <input type="tel" class="w-full p-2 border rounded-lg" name="phone" value="">
                                    </div>
                                </div>
                            </div>

                            <!-- Address Section in Tab/Accordion -->
                            <div class="bg-blue-50 p-4 rounded-lg shadow-inner">

                                <div>
                                    <label class="block  font-semibold mb-1">Alamat</label>
                                    <input type="text" class="w-full p-2 border rounded-lg" name="address" value="">
                                </div>
                            </div>

                            <!-- Company Description -->
                            <div class="bg-blue-50 p-4 rounded-lg shadow-inner" >
                                <label class=" font-semibold mb-1">Deskripsi Perusahaan</label>
                                <textarea class="w-full p-2 border rounded-lg" name="description" rows="3"></textarea>
                            </div>

                            <!-- Job Openings Section -->
                            <div class="bg-blue-50 p-4 rounded-lg shadow-inner">
                                <h3 class="text-xl font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-briefcase mr-2"></i>Lowongan Bisnis
                                </h3>
                                <div class="space-y-2">
                                    <div class="bg-white p-3 rounded-lg shadow-sm flex justify-between items-center">
                                        <div>
                                            <h4 class="text-md font-semibold">Nusantara Sakti Group</h4>
                                <a href="editLowonganBisnis" class="">
                                        </div>
                                        <button type="button" class="text-blue-600 text-sm hover:underline">Edit</button>
                                    </div>
                                </a>

                                    <div class="space-y-2">
                                        <div class="bg-white p-3 rounded-lg shadow-sm flex justify-between items-center">
                                            <div>
                                                <h4 class="text-md font-semibold">Nusantara Sakti Group</h4>


                                            </div>
                                            <button type="button" class="text-blue-600 text-sm hover:underline">Edit</button>
                                        </div>


                                    <button type="button" class="text-blue-600 hover:underline text-sm">+ Tambah Lowongan Baru</button>
                                </div>
                            </div>
                        </div>



                        <!-- Save Button -->
                        <div class="mt-5 text-center">
                           
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-700 text-white py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-800">
                                Simpan Perubahan
                            </button>

                        </div>
                    </form>
                </div>
            </main>
        </div>
    </x-slot:content>
</x-layout>
