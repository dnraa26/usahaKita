<x-guest-layout>
    <div class="flex flex-col">
        <div class="text-sm text-gray-600">
            <h1 class="text-2xl">Forgot your password?</h1>
            <p>Enter your email address to reset your password</p>


        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center mt-5">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
            <div class="flex items-center justify-center mt-6 ">
                <hr class="w-1/2 h-px bg-gray-300 border-0">
                <h1 class="text-center text-xl">Atau </h1>
                <hr class="w-1/2 h-px bg-gray-300 border-0">
            </div>
            <div class="mt-3 flex gap-1">
                <p class="text-gray-500 text-sm">Ingat Password?</p>
                <a href="{{ route('login') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Back
                    to Login</a>
            </div>

        </form>
    </div>

</x-guest-layout>
