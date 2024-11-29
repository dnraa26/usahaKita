<x-layout>
    <x-slot:title>Wishlist</x-slot:title>
    <x-slot:content>





        <div class="bg-blue-900 rounded-lg shadow-lg overflow-hidden flex items-center justify-center ">
            <div class="mx-auto px-6 py-12 text-center">
                <!-- Main Heading -->
                <h1 class="text-3xl font-semibold text-white">
                    Verifikasi Lowongan
                </h1>
                <!-- Subheading -->
                <p class="mt-2 text-lg mt-4 text-white">
                    Semoga anda di terima oleh perusahaan yang anda harapkan
                </p>
            </div>
        </div>

        <div class="flex gap-9 mt-9 justify-center items-center">


            <a href="/perusahaan"
                class="relative py-2 px-3 rounded text-lg {{ request()->is('verifikasiLowongan') ? 'text-blue-700' : 'text-gray-900' }} hover:text-blue-700 md:p-0 light:text-white group">
                Verifikasi Lowongan
                <span
                    class="absolute bottom-0 left-1/2 h-0.5 bg-blue-700 transform -translate-x-1/2 transition-all duration-300 {{ request()->is('verifikasiLowongan') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
            </a>



            <a href="/wishlist"
                class="relative py-2 px-3 rounded text-xs{{ request()->is('wishlist') ? 'text-blue-700' : 'text-gray-900' }} hover:text-blue-700 md:p-0 light:text-white group">
                Wishlist
                <span
                    class="absolute bottom-0 left-1/2 h-0.5 bg-blue-700 transform -translate-x-1/2 transition-all duration-300 {{ request()->is('perusahaan') ? 'w-full' : 'w-0 group-hover:w-full' }}"></span>
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

                    <div class="flex items-center gap-3 mt-6">
                        <p class="bg-green-500 text-white px-4 py-2 rounded-lg shadow">Diterima</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M9 16.2l-4.2-4.2-1.4 1.4L9 19 21 7l-1.4-1.4z" />
                        </svg>
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
                    <div class="flex items-center gap-3 mt-6">
                        <p class="bg-red-500 text-white px-4 py-2 rounded-lg shadow">Ditolak</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M18.3 5.7l-1.4-1.4L12 9.2 7.1 4.3 5.7 5.7l4.9 4.9-4.9 4.9 1.4 1.4L12 13l4.9 4.9 1.4-1.4-4.9-4.9z" />
                        </svg>
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

                    <div class="flex items-center gap-3 mt-6">
                        <p class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow">Menunggu Persetujuan</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 110-16 8 8 0 010 16zm-.5-12h1v4.25l3.22 1.93-.5.86L11.5 13V8z" />
                        </svg>
                    </div>
                </div>



            </div>
        </div>






    </x-slot:content>
</x-layout>
