<x-layout>
    <x-slot:title>Manage Perusahaan</x-slot:title>
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
                                class="p-4 {{ request()->is('dashboardBusinesman') ? 'bg-gray-200' : 'text-gray-600' }} hover:bg-gray-200">
                                Tambah Lowongan Bisnis
                            </li>
                        </a>
                        <a href="/manageProfilPerusahaanBusinesman" class="text-gray-600">
                            <li
                                class="p-4 {{ request()->is('manageProfilPerusahaanBusinesman') ? 'bg-gray-200' : 'text-gray-600' }} hover:bg-gray-200">
                                Manage Profil Perusahaan
                            </li>
                        </a>
                    </ul>
                </nav>
            </aside>

            <!-- Profile Section -->
            <div class="flex-1 p-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <!-- Banner Section -->
                    <div class="relative h-40 bg-sky-100 items-center md:mb-[90px]">
                        <!-- Small Circular Images -->
                        <div class="absolute top-3 left-6 w-10 h-10 bg-orange-300 rounded-full border-4 border-white">
                        </div>
                        <div class="absolute top-3 right-6 w-10 h-10 bg-green-300 rounded-full border-4 border-white">
                        </div>
                        <div class="flex items-center p-4">
                            <img src="https://cloud.jpnn.com/photo/arsip/normal/2022/10/08/zee-jkt48-foto-instagramjkt48zee-rys9o-galg.jpg"
                                alt="Profile Image"
                                class="w-44 h-44 rounded-full border-4 border-white shadow-lg md:mt-[40px]">
                            <p class="text-3xl font-bold text-gray-800 md:ml-[40px] md:mt-[-30px]">
                                Yuyun Food
                            </p>
                            <p class="text-base  text-gray-800 md:ml-[-162px] md:mt-[30px]">
                                Warung
                            </p>
                        </div>


                        <div class=" md:ml-[1050px] md:mt-[-70px] flex space-x-2  ">
                            <a href="editProfilePerusahaan" class="">
                                <button class="px-4 py-2 bg-blue-600 text-white font-medium rounded hover:bg-blue-700 ">
                                    Edit Profil
                                </button>
                            </a>
                        </div>
                    </div>



                    <!-- Larger Profile Image -->




                    <!-- Kontak Section -->
                    <div class="md:mb-[30px] bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Kontak</h3>
                        <p class="text-gray-600"><strong>Email:</strong> zeeasadel@example.com</p>
                        <p class="text-gray-600"><strong>Phone:</strong> +62 812 3456 7890</p>
                    </div>

                    <!-- Deskripsi Perusahaan Section -->
                    <div class="md:mb-[30px] bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Deskripsi Perusahaan</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Kami adalah perusahaan yang bergerak di bidang pengembangan bakat dan memberikan kesempatan
                            kerja di berbagai bidang. Fokus kami adalah membantu perusahaan dan individu berkembang
                            bersama. Kami berkomitmen untuk memberikan layanan terbaik kepada para klien dan mitra kerja
                            kami.
                        </p>
                    </div>

                    <!-- Alamat Section -->
                    <div class="md:mb-[30px] bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Alamat Perusahaan</h3>
                        <p class="text-gray-600">Jalan Darjo</p>
                    </div>

                    <div
                        class="relative md:mb-[30px] bg-gray-50 border-l-4 border-blue-500 shadow-md rounded-lg p-6 mb-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">List Lowongan Bisnis</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                            {{-- Card --}}
                            <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                                <a href="editLowonganBisnis"
                                    class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 20h9m-3.39-3.39l-1.67 1.67a2 2 0 01-2.83 0L3 12V7a1 1 0 011-1h5l9.61 9.61z" />
                                    </svg>
                                </a>
                                <img src="https://via.placeholder.com/100" alt="Danone Logo" class="w-16 h-16 mb-2">
                                <h2 class="text-lg font-semibold">Danone</h2>
                                <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                            </div>

                            <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                                <a href="#" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 20h9m-3.39-3.39l-1.67 1.67a2 2 0 01-2.83 0L3 12V7a1 1 0 011-1h5l9.61 9.61z" />
                                    </svg>
                                </a>
                                <img src="https://via.placeholder.com/100" alt="Danone Logo" class="w-16 h-16 mb-2">
                                <h2 class="text-lg font-semibold">Danone</h2>
                                <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                            </div>

                            <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                                <a href="#" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 20h9m-3.39-3.39l-1.67 1.67a2 2 0 01-2.83 0L3 12V7a1 1 0 011-1h5l9.61 9.61z" />
                                    </svg>
                                </a>
                                <img src="https://via.placeholder.com/100" alt="Danone Logo" class="w-16 h-16 mb-2">
                                <h2 class="text-lg font-semibold">Danone</h2>
                                <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                            </div>

                            <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                                <a href="#" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 20h9m-3.39-3.39l-1.67 1.67a2 2 0 01-2.83 0L3 12V7a1 1 0 011-1h5l9.61 9.61z" />
                                    </svg>
                                </a>
                                <img src="https://via.placeholder.com/100" alt="Danone Logo" class="w-16 h-16 mb-2">
                                <h2 class="text-lg font-semibold">Danone</h2>
                                <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                            </div>

                            <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                                <a href="#" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 20h9m-3.39-3.39l-1.67 1.67a2 2 0 01-2.83 0L3 12V7a1 1 0 011-1h5l9.61 9.61z" />
                                    </svg>
                                </a>
                                <img src="https://via.placeholder.com/100" alt="Danone Logo" class="w-16 h-16 mb-2">
                                <h2 class="text-lg font-semibold">Danone</h2>
                                <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                            </div>

                            <div class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center">
                                <a href="#" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 20h9m-3.39-3.39l-1.67 1.67a2 2 0 01-2.83 0L3 12V7a1 1 0 011-1h5l9.61 9.61z" />
                                    </svg>
                                </a>
                                <img src="https://via.placeholder.com/100" alt="Danone Logo" class="w-16 h-16 mb-2">
                                <h2 class="text-lg font-semibold">Danone</h2>
                                <p class="text-gray-600">⭐ 4.3 • 70 Ulasan</p>
                                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">11 Pekerjaan</button>
                            </div>

                            <div
                                class="relative bg-white p-4 rounded-lg shadow-lg flex flex-col items-center justify-center">
                                <a href="#" class="text-blue-500 hover:text-blue-700">
                                    <!-- Plus Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>


<!-- Lowongan Bisnis Section -->
                    {{-- <div class="mb-9">
    <h3 class="text-lg font-semibold text-gray-800 mb-4 ml-6">Lowongan Bisnis</h3>
    <div class="relative">
        <div class="carousel-inner flex transition-transform duration-500 ml-6 mr-6 ">
            <!-- Job Cards -->
            <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>
              <!-- Job Cards -->
            <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg ">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>

             <!-- Job Cards -->
             <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg ">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>

             <!-- Job Cards -->
             <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg ">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>

             <!-- Job Cards -->
             <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>

             <!-- Job Cards -->
             <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg ">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>

             <!-- Job Cards -->
             <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg ">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>

             <!-- Job Cards -->
             <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg ">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>


             <!-- Job Cards -->
             <div class="carousel-item flex-shrink-0 w-1/4 bg-white p-4 rounded-lg shadow-lg ">
                <img src="https://via.placeholder.com/100" alt="NSS Logo" class="w-16 h-16 mb-2">
                <h2 class="text-lg font-semibold">Nusantara Sakti Group</h2>
                <p class="text-gray-600">⭐ 4.2 • 430 Ulasan</p>
                <button class="mt-3 bg-blue-500 text-white py-1 px-4 rounded">Lihat Lowongan</button>
            </div>








            <!-- Repeat Job Card as needed -->
            <!-- ... -->
        </div>

        <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg">❮</button>
        <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-lg">❯</button>
    </div>
</div> --}}




{{-- <script>
 document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll('.carousel-item');
    const visibleItemsCount = 4; // Jumlah kolom yang ingin ditampilkan
    let currentIndex = 0;

    document.getElementById('next').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) < (items.length - visibleItemsCount + 1) ? currentIndex + 1 : currentIndex;
        updateCarousel();
    });

    document.getElementById('prev').addEventListener('click', () => {
        currentIndex = (currentIndex - 1) >= 0 ? currentIndex - 1 : currentIndex;
        updateCarousel();
    });

    function updateCarousel() {
        const offset = -currentIndex * (100 / visibleItemsCount); // Menggeser carousel sesuai jumlah kolom
        document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
    }
});

</script> --}}
