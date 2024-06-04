<x-app-layout>
    <div id="checkout-success-page" class="h-screen pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-start bg-primary">
        <div class="mx-auto px-5 container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-semibold">{{ __('Payment Successful') }}</h1>
                    <p class="mt-3">{{ __('Thank you for your purchase. Your transaction has been completed successfully.') }}</p>
                    <a href="{{ route('customer.dashboard.index') }}" class="text-indigo-600 hover:text-indigo-900 mt-4 inline-block">Retourner au tableau de bord</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
