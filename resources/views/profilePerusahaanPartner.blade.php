<x-layout>
    <x-slot:title>Perusahaan</x-slot:title>
    <x-slot:content>
        <div class="flex-1 p-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Banner Section -->
                <div class="relative h-40 bg-sky-100 items-center md:mb-[90px]">
                    <!-- Small Circular Images -->
                    <div class="absolute top-3 left-6 w-10 h-10 bg-orange-300 rounded-full border-4 border-white"></div>
                    <div class="absolute top-3 right-6 w-10 h-10 bg-green-300 rounded-full border-4 border-white"></div>
                    <div class="flex items-center p-4">
                        <img src="https://cloud.jpnn.com/photo/arsip/normal/2022/10/08/zee-jkt48-foto-instagramjkt48zee-rys9o-galg.jpg" alt="Profile Image" class="w-44 h-44 rounded-full border-4 border-white shadow-lg md:mt-[40px]">
                        <p class="text-3xl font-bold text-gray-800 md:ml-[40px] md:mt-[-30px]">
                            Yuyun Food
                        </p>
                        <p class="text-base  text-gray-800 md:ml-[-162px] md:mt-[30px]">
                            Warung
                        </p>
                    </div>


                </div>


                <!-- Profile Section -->


                <!-- Kontak Section -->
                <div class="bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Kontak</h3>
                    <p class="text-gray-600"><strong>Email:</strong> zeeasadel@example.com</p>
                    <p class="text-gray-600"><strong>Phone:</strong> +62 812 3456 7890</p>
                </div>

                <!-- Deskripsi Perusahaan Section -->
                <div class="bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi Perusahaan</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Kami adalah perusahaan yang bergerak di bidang pengembangan bakat dan memberikan kesempatan kerja di berbagai bidang. Fokus kami adalah membantu perusahaan dan individu berkembang bersama. Kami berkomitmen untuk memberikan layanan terbaik kepada para klien dan mitra kerja kami.
                    </p>
                </div>

                <!-- Alamat Section -->
                <div class="bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Alamat Perusahaan</h3>
                    <p class="text-gray-600">Jalan Darjo</p>
                </div>

                <!-- List Lowongan Bisnis Section -->
                <div class="bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">List Lowongan Bisnis</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">

                        <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                            <a href="editLowonganBisnis" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9m-3.39-3.39l-1.67 1.67a2 2 0 01-2.83 0L3 12V7a1 1 0 011-1h5l9.61 9.61z" />
                                </svg>
                            </a>
                            <img src="https://via.placeholder.com/100" alt="Company Logo" class="w-16 h-16 mb-2">
                            <h2 class="text-lg font-semibold">Danone</h2>
                            <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                            <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                        </div>  


                        <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center justify-center">
                            <a href="#" class="text-blue-500 hover:text-blue-700">
                                <!-- Plus Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>
