<x-app-layout>
    <div class="pb-20">
        <div id="reset-password-page" class="bg-primary px-5 md:pr-10 py-20 h-full">
            <x-auth-session-status class="mb-4 mx-auto" :status="session('status')" />
            <div class="reset-password-container h-max relative flex flex-col md:flex-row bg-quaternary rounded-xl shadow-container md:mx-auto">
                <div class="left-side w-full md:w-1/2 bg-white rounded-xl flex justify-center items-center p-8">
                    <img src="{{ asset('assets/svg/logo-vertical.svg') }}" alt="OmniScan - vertical logo" class="w-1/3">
                </div>
                <div class="right-side w-full md:w-1/2 p-7 md:p-12 bg-quaternary rounded-xl">
                    <h1 class="text-xl md:text-3xl font-semibold font-title text-center mb-6 md:mb-10">{{ __('Reset Password') }}</h1>
                    <form method="POST" action="{{ route('password.store') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
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

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
