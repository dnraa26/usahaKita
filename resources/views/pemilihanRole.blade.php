<x-layout>
    <x-slot:title>Pemilihan Role</x-slot:title>
    <x-slot:content>

        <div class="py-10 flex justify-center">
            <div class="bg-gray-100 rounded-lg shadow-md p-4 w-[1024px] md:w-3/2">
                <h1 class="text-2xl font-semibold">Your account has been successfully created!</h1>
                <p class="text-sm mb-4">Choose Your Role!</p>

                <!-- Menambahkan dua kotak di dalam kotak besar -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Kotak pertama -->
                    <div class="relative bg-white rounded-lg shadow p-4">
                        <input type="radio" name="role" value="business-man" class="absolute top-2 right-2">
                        <h2 class="text-lg font-semibold">Businessman</h2>
                        <p class="text-gray-600 mb-4">Sebagai seorang Business Man, Anda diharapkan untuk memimpin dan
                            mengelola berbagai aspek dalam dunia bisnis dengan tujuan utama untuk mengembangkan dan
                            memperluas jaringan bisnis. Dalam peran ini, Anda akan bertanggung jawab untuk merumuskan
                            strategi bisnis yang efektif, mengidentifikasi peluang pasar, dan menjalin hubungan yang
                            kuat dengan klien serta mitra. Keahlian dalam manajemen, pemasaran, dan pengambilan
                            keputusan yang tepat sangat penting untuk mencapai pertumbuhan yang berkelanjutan dan
                            kesuksesan perusahaan. Bergabunglah dengan kami untuk memperkuat fondasi bisnis Anda dan
                            berkontribusi pada pengembangan industri yang lebih luas..</p>
                    </div>

                    <!-- Kotak kedua -->
                    <div class="relative bg-white rounded-lg shadow p-4">
                        <input type="radio" name="role" value="business-partner" class="absolute top-2 right-2">
                        <h2 class="text-lg font-semibold">Business Partner</h2>
                        <p class="text-gray-600 mb-4">Sebagai seorang Business Partner, Anda akan berperan sebagai mitra
                            strategis dalam menciptakan peluang bisnis yang saling menguntungkan. Dalam posisi ini, Anda
                            diharapkan untuk menjalin kerjasama dengan berbagai entitas bisnis, mengidentifikasi tren
                            industri, serta mengembangkan solusi inovatif yang memenuhi kebutuhan pasar. Kemampuan
                            analitis yang kuat dan pemahaman mendalam tentang berbagai sektor industri akan membantu
                            Anda dalam menemukan dan memanfaatkan peluang investasi yang menguntungkan. Bergabunglah
                            dengan kami untuk membangun hubungan yang berkelanjutan dan berkontribusi pada pertumbuhan
                            bisnis yang inovatif dan efisien.</p>
                    </div>
                </div>

                <div class="flex justify-end mt-4 space-x-4">
                    <button
                        class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400 transition">Cancel</button>
                    <button
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Select</button>
                </div>

            </div>
        </div>
    </x-slot:content>
</x-layout>
