<x-layout>
    <x-slot:title>Pemilihan Role</x-slot:title>
    <x-slot:content>

        <div class="py-10 flex justify-center">
            <div class="bg-gray-50 rounded-lg shadow-lg p-8 w-[1024px] md:w-3/2">
                <h1 class="text-3xl font-bold mb-4 text-center">Your account has been successfully created!</h1>
                <p class="text-lg text-center mb-8">Choose Your Role</p>

                <!-- Two box layout for roles -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Businessman box -->
                    <div class="relative bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                        <input type="radio" name="role" value="business-man" class="absolute top-4 right-4">
                        <img src="[link_to_businessman_svg]" alt="Businessman Icon" class="w-16 h-16 mx-auto mb-4">
                        <h2 class="text-xl font-semibold text-center">Businessman</h2>
                        <p class="text-gray-700 text-justify mt-2">Sebagai seorang Business Man, Anda diharapkan untuk
                            memimpin dan
                            mengelola berbagai aspek dalam dunia bisnis dengan tujuan utama untuk mengembangkan dan
                            memperluas jaringan bisnis...</p>
                    </div>

                    <!-- Business Partner box -->
                    <div class="relative bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                        <input type="radio" name="role" value="business-partner" class="absolute top-4 right-4">
                        <img src="[link_to_business_partner_svg]" alt="Business Partner Icon"
                            class="w-16 h-16 mx-auto mb-4">
                        <h2 class="text-xl font-semibold text-center">Business Partner</h2>
                        <p class="text-gray-700 text-justify mt-2">Sebagai seorang Business Partner, Anda akan berperan
                            sebagai mitra
                            strategis dalam menciptakan peluang bisnis yang saling menguntungkan...</p>
                    </div>
                </div>

                <div class="flex justify-end mt-6 space-x-4">
                    <button
                        class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-300 transition">Cancel</button>
                    <button
                        class="bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">Select</button>
                </div>
            </div>
        </div>
    </x-slot:content>
</x-layout>
