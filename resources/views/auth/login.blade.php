<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="">
        <div class="">
            <h1 class="text-2xl ">Login</h1>
            <p class="text-lg">Selamat datang! Pilih metode untuk login</p>
        </div>
        <form method="POST" class="mt-10" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" required
                    autofocus autocomplete="username" placeholder="Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                {{-- <x-input-label for="password" :value="__('Password')" /> --}}

                <x-text-input id="password" class=" w-full" type="password" name="password" required
                    autocomplete="current-password" placeholder="Password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            {{-- Container remember me dan forget password --}}
            <div class="flex mt-5 space-x-16">

                <!-- Remember Me -->
                <div class="">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                {{-- Forget Password --}}
                <div class="">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif


                </div>

            </div>
            {{-- Login Button --}}
            <div class="mt-6">
                <x-primary-button class="w-full justify-center">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

        </form>
        <div class="flex items-center justify-center mt-6 ">
            <hr class="w-1/2 h-px bg-gray-300 border-0">
            <h1 class="text-center text-xl">Atau </h1>
            <hr class="w-1/2 h-px bg-gray-300 border-0">
        </div>

        <div class="flex gap-1 mt-5">
            <p class="text-gray-500 text-sm">Belum punya akun?</p><a  href="{{ route('register') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register Akun</a>

        </div>

    </div>



</x-guest-layout>
