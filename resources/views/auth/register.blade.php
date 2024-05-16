<x-app-layout>
    <div class="pb-20">
        <div id="register-page" class="bg-primary px-5 md:pr-10 py-20 flex items-center md:justify-center">
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <div class="register-container h-max relative flex flex-col md:flex-row bg-quaternary rounded-xl shadow-container">
                <div class="left-side w-full md:w-1/2 bg-white rounded-xl flex justify-center items-center p-8">
                    <img src="{{ asset('assets/svg/logo-vertical.svg') }}" alt="OmniScan - vertical logo" class="w-1/3">
                </div>
                <div class="right-side w-full md:w-1/2 p-7 md:p-12 bg-quaternary rounded-xl">
                    <h1 class="text-xl md:text-3xl font-semibold font-title text-center mb-6 md:mb-10">{{ __('Register') }}</h1>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Firstname -->
                        <div>
                            <x-input-label for="firstname" :value="__('Firstname')" />
                            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                        </div>

                        <!-- Lastname -->
                        <div class="mt-4">
                            <x-input-label for="lastname" :value="__('Lastname')" />
                            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <x-primary-button class="my-8 md:my-10">
                            {{ __('Register') }}
                        </x-primary-button>
                        
                        <div class="flex items-center justify-start mt-4">
                            <a class="underline text-sm text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
