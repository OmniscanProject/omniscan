<x-app-layout>
    <div class="pb-20">
        <div id="forgot-password-page" class="bg-primary px-5 md:pr-10 py-20 h-full">
            <x-auth-session-status class="mb-4 mx-auto" :status="session('status')" />
            <div class="forgot-password-container h-max relative flex flex-col md:flex-row bg-tertiary rounded-xl shadow-container md:mx-auto">
                <div class="left-side w-full md:w-1/2 bg-white rounded-xl flex justify-center items-center p-8">
                    <img src="{{ asset('assets/svg/logo-vertical.svg') }}" alt="OmniScan - vertical logo" class="w-1/3">
                </div>
                <div class="right-side w-full md:w-1/2 p-7 md:p-12 bg-tertiary rounded-xl">
                    <h1 class="text-xl md:text-3xl font-semibold font-title text-center mb-6 md:mb-10">{{ __('Forgot your password ?') }}</h1>
                    <div class="text-sm text-black">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div class="block mt-6 md:mt-8">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>


                        <x-primary-button class="my-8 md:my-10">
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
