<x-dashboard-customer-layout>

    <div id="customer-profile-page" class="pt-10 md:pt-18 pb-24 md:pb-40 flex justify-center items-start bg-white">
        <div class="mx-auto px-5 container">
        <x-slot name="header"">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Profile') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-tertiary shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('dashboards.customer.pages.profile.partials.update-profile-information-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-tertiary shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('dashboards.customer.pages.profile.partials.update-password-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-tertiary shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('dashboards.customer.pages.profile.partials.stripe-portal-user-form')
                    </div>
                </div>

                <div class="p-4 sm:p-8 bg-tertiary shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('dashboards.customer.pages.profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-customer-layout>

