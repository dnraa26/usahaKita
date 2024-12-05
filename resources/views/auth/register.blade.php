<x-guest-layout>
    <div>
        <div class="">
            <h1 class="text-2xl ">Register</h1>
            <p class="text-lg">Selamat datang! Pilih metode untuk login</p>
        </div>
        <form method="POST" class="mt-10" action="{{ route('register') }}">
            @csrf

            <!-- Nama Depan -->
            <div>
                {{-- <x-input-label for="nama_depan" :value="__('Nama Depan')" /> --}}
                <x-text-input id="nama_depan" class="w-full" type="text" name="nama_depan" :value="old('nama_depan')" required autofocus autocomplete="given-name" placeholder="Nama Depan" />
                <x-input-error :messages="$errors->get('nama_depan')" class="mt-2" />
            </div>

            <!-- Nama Belakang -->
            <div class="mt-4">
                {{-- <x-input-label for="nama_belakang" :value="__('Nama Belakang')" /> --}}
                <x-text-input id="nama_belakang" class="w-full" type="text" name="nama_belakang" :value="old('nama_belakang')" required autocomplete="family-name" placeholder="Nama Belakang" />
                <x-input-error :messages="$errors->get('nama_belakang')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                <x-text-input id="password" class="w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                {{-- <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" /> --}}
                <x-text-input id="password_confirmation" class="w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-primary-button class="w-full justify-center" >
                    {{ __('Register') }}
                </x-primary-button>
            </div>

            <div class="flex items-center justify-center mt-6 ">
                <hr class="w-1/2 h-px bg-gray-300 border-0">
                <h1 class="text-center text-xl">Atau </h1>
                <hr class="w-1/2 h-px bg-gray-300 border-0">
            </div>

            <div class="flex mt-5 gap-1" >
                <p class="text-sm text-gray-600" >
                    Already Registered?
                </p>
                <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> {{ __('Login') }}</a>
            </div>
        </form>
    </div>

</x-guest-layout>
