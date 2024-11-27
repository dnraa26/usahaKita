<x-layout>
    <x-slot:title>Profile</x-slot:title>

    <x-slot:content>
        <div class="max-w-6xl mx-auto my-10 rounded-md shadow-md bg-gray-300 shadow-gray-500">
            <div class="bg-white shadow-md">
                <div class="relative rounded-md">
                    <img class="h-64 w-full object-cover rounded-t-md" src="https://images.unsplash.com/photo-1683322499436-f4383dd59f5a?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="image description">
                    <h1 class="absolute bottom-4 left-4 md:left-20 lg:left-40 xl:left-72 antialiased font-poppins text-white text-3xl md:text-5xl">
                        NTT Data Center
                    </h1>
                    <img class="absolute top-40 md:top-48 left-4 md:left-10 ring-4 ring-white rounded-full h-36 w-36 md:h-52 md:w-52 border-black object-cover object-center" src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Y2F0fGVufDB8MHwwfHx8MA%3D%3D" alt="image description">
                </div>
                <div class="flex flex-wrap md:flex-nowrap pt-28 md:pt-36 pb-10 px-5 gap-8">
                    <div class="w-full">
                        <h2 class="text-2xl md:text-4xl font-roboto">Sir Meow .P</h2>
                        <div class="inline-flex">
                            <p class="text-sm font-semibold">Location: <span class="text-gray-500 font-normal">Colorado, USA</span></p>
                        </div>
                        <p class="font-semibold text-gray-700">Expert in meowing and scratching comfy !</p>
                        <div class="inline-flex gap-2 mt-8 md:mt-12">
                            <button class="py-2 px-3 rounded-md text-sm text-white bg-blue-700">Invite To Project</button>
                            <button class="py-2 px-3 rounded-md text-sm ring-1 ring-gray-400">Contact</button>
                            <button class="py-2 px-3 rounded-md text-sm ring-1 ring-gray-400">Agenda</button>
                        </div>
                    </div>
                    <div class="w-full">
                        <p class="text-gray-700 font-roboto font-semibold">Languages</p>
                        <div class="flex flex-wrap gap-x-5 m-2 text-sm font-roboto">
                            <p>English: <span class="text-gray-700">Fluent</span></p>
                            <p>Spanish: <span class="text-gray-700">Fluent</span></p>
                            <p>German: <span class="text-gray-700">Fluent</span></p>
                            <p class="text-blue-500">+3 More</p>
                        </div>

                        <p class="text-gray-700 font-roboto font-semibold mt-6">Featured Skills (4)</p>
                        <div class="m-2 text-sm font-roboto">
                            <div class="inline-flex flex-wrap gap-x-5 mb-4">
                                <p>Google Ads Management</p>
                                <p>Social Ads Management</p>
                            </div>
                            <div class="inline-flex flex-wrap gap-x-5">
                                <p>Content SEO</p>
                                <p>Content SEO</p>
                                <p class="text-blue-500">+22 More</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white mt-5 p-5 shadow-md">
                <h2 class="text-lg font-semibold">Enterprise Companies I've Worked With</h2>
                <div class="flex flex-wrap items-center gap-8 mt-4">
                    <img class="h-12" src="{{URL::asset('/logo/google.png')}}" alt="Google">
                    <img class="h-12" src="{{URL::asset('/logo/microsoft.png')}}" alt="Microsoft">
                </div>
            </div>
            <div class="bg-white mt-5 p-5 shadow">
                <h2 class="text-lg font-semibold">Type of Projects I've Worked On</h2>
                <p class="text-gray-500 text-sm mt-2">Effective Data, AWS and ACC have agreed to implement and maintain</p>
            </div>
            <hr class="h-0.5 bg-gray-300 shadow-md">
            <div class="bg-white p-5">
                <p class="font-semibold">Learnexus - Start Your Learning Project <span class="ml-2 rounded font-semibold px-2 py-1 bg-gray-300 text-xs">Notion</span></p>
                <p class="text-xs text-gray-500 mb-3">May 2020 - Present</p>
                <p class="text-sm text-gray-800">The mission is to build the biggest online community for education, learning, and talent development employers and freelancers</p>
            </div>
        </div>
    </x-slot:content>
</x-layout>
