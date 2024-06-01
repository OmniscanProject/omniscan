<x-app-layout>
    <div class="pb-20">
        <div id="login-page" class="bg-primary px-5 md:pr-10 py-20 h-full">
            <x-auth-session-status class="mb-4 mx-auto" :status="session('status')" />
            <div class="login-container h-max relative flex flex-col md:flex-row bg-tertiary rounded-xl shadow-container md:mx-auto">
                <div class="left-side w-full md:w-1/2 bg-white rounded-xl flex justify-center items-center p-8">
                    <img src="{{ asset('assets/svg/logo-vertical.svg') }}" alt="OmniScan - vertical logo" class="w-1/3">
                </div>
                <div class="right-side w-full md:w-1/2 p-7 md:p-12 bg-tertiary rounded-xl">
                    <h1 class="text-xl md:text-3xl font-semibold font-title text-center mb-6 md:mb-10">{{ __('Login') }}</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-black text-black shadow-sm focus:ring-black" name="remember">
                                <span class="ms-2 text-sm text-black">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <x-primary-button class="my-8 md:my-10">
                            {{ __('Log in') }}
                        </x-primary-button>

                        <div class="flex items-center justify-between mt-4">
                            @if (Route::has('register'))
                                <a class="underline text-sm text-black hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black" href="{{ route('register') }}" title="{{ __("Don't have an account ?") }}">
                                    {{ __("Don't have an account ?") }}
                                </a>
                            @endif
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-black hover:text-black rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black" href="{{ route('password.request') }}" title="{{ __('Forgot your password ?') }}">
                                    {{ __('Forgot your password ?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
