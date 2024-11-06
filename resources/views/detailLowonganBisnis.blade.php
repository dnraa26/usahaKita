<x-layout>
    <x-slot:title>Detail Lowongan Bisnis</x-slot:title>
    <x-slot:content>
        <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md mt-10">
            <div class="flex items-center mb-4">
                <!-- Logo Perusahaan -->
                <div class="mr-4">
                    <img src="logo-placeholder.png" alt="Logo Company" class="w-16 h-16">
                </div>
                <!-- Informasi Lowongan -->
                <div>
                    <h1 class="text-2xl font-bold">Radit Fried Chicken</h1>
                    <p class="text-sm text-gray-600">PT Ayam Krenyes</p>
                </div>
            </div>

            <div class="mb-6">
                <!-- Lokasi, Bidang, Status, Gaji -->
                <p class="flex items-center text-gray-700 mb-2">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <!-- Ikon lokasi -->
                    </svg>
                    Bandung, Jawa Barat
                </p>
                <p class="flex items-center text-gray-700 mb-2">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <!-- Ikon bidang -->
                    </svg>
                    Makanan ayam goreng enak
                </p>

                <p class="flex items-center text-gray-700">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <!-- Ikon gaji -->
                    </svg>
                    Rp 4.000.000 – Rp 6.000.000 per month
                </p>
            </div>

            <p class="text-sm text-gray-500 mb-4">Posted 1 hari yang lalu</p>

            <!-- Tombol aksi -->
            <div class="flex space-x-4">
                <button
                    class="bg-blue-600 text-white font-semibold px-4 py-2 rounded hover:bg-blue-700  active:scale-95 transition duration-300">Berbisnis
                    Sekarang</button>
                <button
                    class="bg-sky-50 text-blue-800 font-semibold px-4 py-2 rounded hover:bg-sky-100  active:scale-95 transition duration-300">Simpan</button>
            </div>

            <!-- Kualifikasi -->
            <div class="mt-8">
                <h2 class="text-lg font-semibold mb-2">Qualifications:</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Bachelor’s or Master’s degree in Data Science, Computer Science, Statistics, or a related field.
                    </li>
                    <li>Minimum of 2 years of experience as a Data Scientist or in a relevant analytical position.</li>
                    <li>Proficiency with statistical analysis and machine learning techniques, including supervised and
                        unsupervised learning.</li>
                </ul>
            </div>

            <!-- Benefits -->
            <div class="mt-8">
                <h2 class="text-lg font-semibold mb-2">Benefits:</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Competitive salary and performance-based bonuses.</li>
                    <li>Flexible working hours and remote work options.</li>
                    <li>Comprehensive health insurance coverage.</li>
                    <li>Professional development and training programs.</li>
                </ul>
            </div>

            <!-- About Company -->
            <div class="mt-8">
                <h2 class="text-lg font-semibold mb-2">About the Company:</h2>
                <p class="text-gray-700">
                    PT Digital Laskar Pelangi (Orderfaz) is an innovative tech company based in Bandung, Jawa Barat,
                    focusing on
                    developing cutting-edge solutions in data science, software engineering, and analytics. Our mission
                    is to
                    empower businesses with data-driven insights and advanced technological tools to achieve greater
                    efficiency
                    and growth.
                </p>
            </div>
        </div>


    </x-slot:content>
</x-layout>
