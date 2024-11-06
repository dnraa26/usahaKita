<x-layout-form>
    <x-slot:title>Pemilihan Role</x-slot:title>
    <x-slot:content>
        <div class="min-h-screen flex items-center justify-center">
            <div class="bg-gray-50 rounded-lg w-8/12 shadow-lg p-8 md:w-3/2">
                <h1 class="text-3xl font-bold mb-4 text-center">Your account has been successfully created!</h1>
                <p class="text-lg text-center mb-8">Choose Your Role</p>
                <form action="{{ route('pickRole') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Businessman box -->
                        <div class="relative bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                            <input type="radio" id="businessman" name="role" value="2"
                                class="absolute top-4 right-4">
                            <label for="businessman" class="flex flex-col items-center cursor-pointer">
                                <img src="[link_to_businessman_svg]" alt="Businessman Icon"
                                    class="w-16 h-16 mx-auto mb-4">
                                <h2 class="text-xl font-semibold text-center">Businessman</h2>
                                <p class="text-gray-700 text-justify mt-2">Sebagai seorang Business Man, Anda diharapkan
                                    untuk
                                    memimpin dan mengelola berbagai aspek dalam dunia bisnis dengan tujuan utama untuk
                                    mengembangkan dan
                                    memperluas jaringan bisnis...</p>
                            </label>
                        </div>

                        <!-- Business Partner box -->
                        <div class="relative bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                            <input type="radio" id="business-partner" name="role" value="3"
                                class="absolute top-4 right-4">
                            <label for="business-partner" class="flex flex-col items-center cursor-pointer">
                                <img src="[link_to_business_partner_svg]" alt="Business Partner Icon"
                                    class="w-16 h-16 mx-auto mb-4">
                                <h2 class="text-xl font-semibold text-center">Business Partner</h2>
                                <p class="text-gray-700 text-justify mt-2">Sebagai seorang Business Partner, Anda akan
                                    berperan
                                    sebagai mitra strategis dalam menciptakan peluang bisnis yang saling
                                    menguntungkan...</p>
                            </label>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6 space-x-4">
                        <button type="button" onclick="window.history.back();"
                            class="bg-gray-200 text-gray-700 px-5 py-2 rounded-lg hover:bg-gray-300 transition">Cancel</button>
                        <button type="submit"
                            class="bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 transition">Select</button>
                    </div>
                </form>
            </div>
        </div>

    </x-slot:content>
    </x-layout>
