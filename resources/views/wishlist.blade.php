<x-layout>
    <x-slot:title>Wishlist</x-slot:title>
    <x-slot:content>





        <div class="bg-blue-900 rounded-lg shadow-lg overflow-hidden flex items-center justify-center">
            <div class="mx-auto px-6 py-12 text-center">
                <!-- Main Heading -->
                <h1 class="text-3xl font-semibold text-white">
                    Wishlist
                </h1>
                <!-- Subheading -->
                <p class="mt-2 text-lg mt-4 text-white">
                    Simpan lowongan yang anda minati dan mulai berbisnis
                </p>
            </div>
        </div>

        <div class="flex gap-9 mt-9 justify-center items-center">


            <a href="/verifikasiLowongan"
                class="relative py-2 px-3 rounded text-lg {{ request()->is('verifikasiLowongan') ? 'text-blue-700' : 'text-gray-900' }} hover:text-blue-700 md:p-0 light:text-white group">
                Verifikasi Lowongan
                <span
                    class="absolute bottom-0 left-1/2 h-0.5 bg-blue-700 transform -translate-x-1/2 transition-all duration-300 {{ request()->is('verifikasiLowongan') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>



            <a href="/wishlist"
                class="relative py-2 px-3 rounded text-lg {{ request()->is('wishlist') ? 'text-blue-700' : 'text-gray-900' }} hover:text-blue-700 md:p-0 light:text-white group">
                Wishlist
                <span
                    class="absolute bottom-0 left-1/2 h-0.5 bg-blue-700 transform -translate-x-1/2 transition-all duration-300 {{ request()->is('wishlist') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>


        </div>


        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-6 py-8">


            <!-- Cards Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between mt-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700">Company B</h3>
                        <p class="text-gray-500 mt-1">Looking for: Technical Co-Founder</p>
                        <p class="text-gray-600 mt-4">Seeking a passionate technical expert to join our team and
                            help
                            scale our SaaS platform globally.</p>
                        <p class="text-sm text-gray-400 mt-4">Contact: tech@companyb.com</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                            Lihat Lowongan
                        </button>
                        <button class="mt-6 bg-red-500 text-white px-4 py-2 rounded-lg shadow hover:bg-red-600">
                            Hapus
                        </button>
                    </div>

                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between mt-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700">Company B</h3>
                        <p class="text-gray-500 mt-1">Looking for: Technical Co-Founder</p>
                        <p class="text-gray-600 mt-4">Seeking a passionate technical expert to join our team and
                            help
                            scale our SaaS platform globally.</p>
                        <p class="text-sm text-gray-400 mt-4">Contact: tech@companyb.com</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                            Lihat Lowongan
                        </button>
                        <button class="mt-6 bg-red-500 text-white px-4 py-2 rounded-lg shadow hover:bg-red-600">
                            Hapus
                        </button>
                    </div>

                </div>

                <!-- Card 2 -->
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col justify-between mt-8">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-700">Company B</h3>
                        <p class="text-gray-500 mt-1">Looking for: Technical Co-Founder</p>
                        <p class="text-gray-600 mt-4">Seeking a passionate technical expert to join our team and
                            help
                            scale our SaaS platform globally.</p>
                        <p class="text-sm text-gray-400 mt-4">Contact: tech@companyb.com</p>
                    </div>
                    <div class="flex gap-3">
                        <button class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                            Lihat Lowongan
                        </button>
                        <button class="mt-6 bg-red-500 text-white px-4 py-2 rounded-lg shadow hover:bg-red-600">
                            Hapus
                        </button>
                    </div>

                </div>





            </div>
        </div>






    </x-slot:content>
</x-layout>
