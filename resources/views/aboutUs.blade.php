<x-layout>
    <x-slot:title>about us</x-slot:title>
    <x-slot:content>

    <!-- Tambahkan AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Hero Section -->

        <div class="relative bg-cover bg-center h-[500px]" style="background-image: url('https://img.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg?t=st=1730695850~exp=1730699450~hmac=10946cb88de952377a711b237b7a5ca574fec246f880baf259bc6ac553eb80a7&w=1380');" data-aos="fade-in">
            <div class="absolute inset-0 bg-black opacity-30"></div>
            <div class="relative max-w-6xl mx-auto px-6 py-32 text-white" data-aos="fade-up" data-aos-delay="300">
                <h1 class="text-5xl md:text-6xl font-bold mt-4">New Energy for the Future</h1>
                <a  href="#section1" class="">
                <div class="flex space-x-6 mt-8">
                    <button class="px-4 py-2 bg-white text-black font-medium rounded-md hover:bg-gray-200" data-aos="zoom-in">Get in touch</button>
                </div>
            </a>
            </div>
        </div>

        <!-- Stats Section -->
        <div id="section1" class="p-4">
        <div class="flex justify-around bg-white shadow-lg rounded-lg max-w-4xl mx-auto mt-6 py-8 px-4 space-y-4 md:space-y-0 md:mt-[200px]" data-aos="fade-up" data-aos-delay="300" >
            <div class="text-center" >
                <h3 class="text-3xl font-semibold">6 mil</h3>
                <p class="text-gray-600">The company's annual net income</p>
            </div>
            <div class="text-center">
                <h3 class="text-3xl font-semibold">315</h3>
                <p class="text-gray-600">Projects completed worldwide</p>
            </div>
            <div class="text-center">
                <h3 class="text-3xl font-semibold">120K</h3>
                <p class="text-gray-600">Employees work in all parts of the world</p>
            </div>

        </div>
        <div class="text-center md:mt-[100px] " data-aos="fade-up" data-aos-delay="400">
            <h1 class="text-3xl font-semibold text-gray-800 mb-4">Tujuan Aplikasi</h1>
            <p class="text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis recusandae,</br>
                 maiores alias cupiditate vero eum eveniet natus nihil assumenda exercitationem, optio accusantium architecto nulla incidunt aperiam voluptate at.</br>
                  Minima, animi?</p>
        </div>
        <a  href="#section2" class="">
            <div class="flex space-x-6 mt-8 justify-center">
                <button class="px-4 p-3 bg-sky-700 border-2 border-sky-700 text-white font-medium rounded-md hover:bg-white hover:text-sky-700" data-aos="fade-up" data-aos-delay="500" >Get in</button>
            </div>
        </a>
    </div>





    <!-- Team Section -->
    <div class="md:mt-[200px] md:mb-[200px] p-6 "id="section2" >
        <div class="text-center md:mt-[100px] " data-aos="fade-up" data-aos-delay="300">
            <h1 class="text-3xl font-semibold text-gray-800 md:mt-[10px]">Member UsahaKita</h1>
        </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 p-8  md:mt-[50px]"  data-aos="fade-up" data-aos-delay="400" >
        <!-- Team Member 1 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center ">
            <div class="w-48 h-48 mx-auto mb-4 overflow-hidden">
                <img src="https://cdn0-production-images-kly.akamaized.net/GvRUb3iZWoSiF3Lkqm73rjvUdJg=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4702936/original/067069900_1704003692-Zee_JKT48_0.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-semibold text-gray-800">Egi Danuajisantoso</h2>
            <p class="text-gray-600 text-sm font-medium">Ketua</p>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center ">
            <div class="w-48 h-48 mx-auto mb-4 overflow-hidden">
                <img src="https://cdn0-production-images-kly.akamaized.net/GvRUb3iZWoSiF3Lkqm73rjvUdJg=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4702936/original/067069900_1704003692-Zee_JKT48_0.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-semibold text-gray-800">Abraham Evan K.N</h2>
            <p class="text-gray-600 text-sm font-medium">Anggota 2</p>
        </div>

        <!-- Team Member 3 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center " >
            <div class="w-48 h-48 mx-auto mb-4 overflow-hidden">
                <img src="https://cdn0-production-images-kly.akamaized.net/GvRUb3iZWoSiF3Lkqm73rjvUdJg=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4702936/original/067069900_1704003692-Zee_JKT48_0.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-semibold text-gray-800">Naufal Maulana A.S</h2>
            <p class="text-gray-600 text-sm font-medium">Anggota 3</p>
        </div>

        <!-- Team Member 4 -->
        <div class="bg-white p-6 rounded-lg shadow-lg text-center" >
            <div class="w-48 h-48 mx-auto mb-4 overflow-hidden">
                <img src="https://cdn0-production-images-kly.akamaized.net/GvRUb3iZWoSiF3Lkqm73rjvUdJg=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4702936/original/067069900_1704003692-Zee_JKT48_0.jpg" alt="" class="w-full h-full object-cover">
            </div>
            <h2 class="text-xl font-semibold text-gray-800">Danira Ariani</h2>
            <p class="text-gray-600 text-sm font-medium">Anggota 4</p>
        </div>
    </div>
</div>

    <!-- Tambahkan AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </x-slot:content>
</x-layout>
