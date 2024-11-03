<x-navbar></x-navbar>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="bg-blue-900 shadow-lg p-8">
        <form class="flex items-center w-full max-w-screen-lg px-10 mx-auto">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                    placeholder="Search branch name..." required />
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>

    <div class="py-6 flex justify-center">
        <div class="bg-gray-100 rounded-lg shadow-md p-4 w-[1024px] md:w-3/2">
            <div class="flex justify-center space-x-10 mb-2">
                <button
                    class="border border-gray-600 text-gray-800 py-2 px-6 rounded-md hover:bg-gray-200 transition">Masuk</button>
                <button
                    class="border-b-2 border-gray-600 text-gray-800 hover:border-gray-800 transition">Daftar</button>
            </div>
            <p class="text-center text-gray-600">Masuk untuk mengelola Profil Usahakita, menyimpan pencarian, dan
                melihat lowongan bisnis yang disarankan.</p>
        </div>
    </div>

    <div class="py-8">

        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-2xl font-semibold mb-2">Temukan bisnis Anda</h2>
            <p class="text-gray-600 mb-6">Jelajahi lowongan bisnis untuk menemukan bisnis yang tepat bagi Anda.
                Pelajari tentang tata cara berbisnis, keuntungan, dan modal yang perlu dikeluarkan.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-screen-lg mx-auto">
            <!-- Card 1 -->
            <a href="/perusahaan" class="block">
                <div class="bg-white border rounded-lg shadow-md p-4 relative">
                    <div class="flex justify-between items-start">
                        <h3 class="text-lg font-semibold">Financial Specialist - Bancassurance - Surabaya</h3>
                        <span class="text-blue-600 font-semibold">Rp 3M-4.5M</span>
                    </div>
                    <div class="mt-2 flex flex-wrap gap-2">
                        <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-sm">Premium Employer</span>
                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">On-site</span>
                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Full-Time</span>
                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">1 – 3 yrs</span>
                    </div>
                    <div class="mt-2">
                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Minimum Bachelor...</span>
                        <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">+3</span>
                    </div>
                    <div class="mt-4 flex items-center">
                        <img src="logo.png" alt="Company Logo" class="h-10 w-10 mr-2">
                        <div>
                            <p class="text-blue-600 font-medium">Manulife Indonesia (PT Asuransi Jiwa Manulife...)</p>
                            <p class="text-gray-500 text-sm">Wiyung, Surabaya, Jawa Timur</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-xs mt-4">5 days ago</p>
                    <!-- Bookmark Icon -->
                    <button class="absolute bottom-2 right-2 text-gray-400 hover:text-gray-600"
                        onclick="event.stopPropagation()">  
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.25 3.75h13.5c.69 0 1.25.56 1.25 1.25v15.5a.75.75 0 0 1-1.14.65l-6.11-4.07a.75.75 0 0 0-.8 0l-6.11 4.07a.75.75 0 0 1-1.14-.65V5c0-.69.56-1.25 1.25-1.25z" />
                        </svg>
                    </button>
                </div>
            </a>

            <!-- Card 2 -->
            <div class="bg-white border rounded-lg shadow-md p-4 relative">
                <!-- Bookmark Icon -->
                <button class="absolute bottom-2 right-2 text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 3.75h13.5c.69 0 1.25.56 1.25 1.25v15.5a.75.75 0 0 1-1.14.65l-6.11-4.07a.75.75 0 0 0-.8 0l-6.11 4.07a.75.75 0 0 1-1.14-.65V5c0-.69.56-1.25 1.25-1.25z" />
                    </svg>
                </button>
                <div class="flex justify-between items-start">
                    <h3 class="text-lg font-semibold">Financial Specialist - Bancassurance - Jakarta</h3>
                    <span class="text-blue-600 font-semibold">Rp 3M-4.5M</span>
                </div>
                <div class="mt-2 flex flex-wrap gap-2">
                    <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-sm">Premium Employer</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">On-site</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Full-Time</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">1 – 3 yrs</span>
                </div>
                <div class="mt-2">
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Minimum Bachelor...</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">+3</span>
                </div>
                <div class="mt-4 flex items-center">
                    <img src="logo.png" alt="Company Logo" class="h-10 w-10 mr-2">
                    <div>
                        <p class="text-blue-600 font-medium">Manulife Indonesia (PT Asuransi Jiwa Manulife...)</p>
                        <p class="text-gray-500 text-sm">Setiabudi, Jakarta Selatan, DKI Jakarta</p>
                    </div>
                </div>
                <p class="text-gray-400 text-xs mt-4">5 days ago</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white border rounded-lg shadow-md p-4 relative">
                <!-- Bookmark Icon -->
                <button class="absolute bottom-2 right-2 text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 3.75h13.5c.69 0 1.25.56 1.25 1.25v15.5a.75.75 0 0 1-1.14.65l-6.11-4.07a.75.75 0 0 0-.8 0l-6.11 4.07a.75.75 0 0 1-1.14-.65V5c0-.69.56-1.25 1.25-1.25z" />
                    </svg>
                </button>
                <div class="flex justify-between items-start">
                    <h3 class="text-lg font-semibold">Financial Specialist - Bancassurance - Jakarta</h3>
                    <span class="text-blue-600 font-semibold">Rp 3M-4.5M</span>
                </div>
                <div class="mt-2 flex flex-wrap gap-2">
                    <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-sm">Premium Employer</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">On-site</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Full-Time</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">1 – 3 yrs</span>
                </div>
                <div class="mt-2">
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Minimum Bachelor...</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">+3</span>
                </div>
                <div class="mt-4 flex items-center">
                    <img src="logo.png" alt="Company Logo" class="h-10 w-10 mr-2">
                    <div>
                        <p class="text-blue-600 font-medium">Manulife Indonesia (PT Asuransi Jiwa Manulife...)</p>
                        <p class="text-gray-500 text-sm">Setiabudi, Jakarta Selatan, DKI Jakarta</p>
                    </div>
                </div>
                <p class="text-gray-400 text-xs mt-4">5 days ago</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white border rounded-lg shadow-md p-4 relative">
                <!-- Bookmark Icon -->
                <button class="absolute bottom-2 right-2 text-gray-400 hover:text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 3.75h13.5c.69 0 1.25.56 1.25 1.25v15.5a.75.75 0 0 1-1.14.65l-6.11-4.07a.75.75 0 0 0-.8 0l-6.11 4.07a.75.75 0 0 1-1.14-.65V5c0-.69.56-1.25 1.25-1.25z" />
                    </svg>
                </button>
                <div class="flex justify-between items-start">
                    <h3 class="text-lg font-semibold">Financial Specialist - Bancassurance - Jakarta</h3>
                    <span class="text-blue-600 font-semibold">Rp 3M-4.5M</span>
                </div>
                <div class="mt-2 flex flex-wrap gap-2">
                    <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-sm">Premium Employer</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">On-site</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Full-Time</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">1 – 3 yrs</span>
                </div>
                <div class="mt-2">
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">Minimum Bachelor...</span>
                    <span class="bg-gray-100 text-gray-700 px-2 py-1 rounded text-sm">+3</span>
                </div>
                <div class="mt-4 flex items-center">
                    <img src="logo.png" alt="Company Logo" class="h-10 w-10 mr-2">
                    <div>
                        <p class="text-blue-600 font-medium">Manulife Indonesia (PT Asuransi Jiwa Manulife...)</p>
                        <p class="text-gray-500 text-sm">Setiabudi, Jakarta Selatan, DKI Jakarta</p>
                    </div>
                </div>
                <p class="text-gray-400 text-xs mt-4">5 days ago</p>
            </div>
        </div>
    </div>


</body>

</html>
