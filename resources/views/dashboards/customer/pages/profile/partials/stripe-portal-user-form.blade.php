@php
    $stripeId = Auth::guard('customer')->user()->stripe_id;
@endphp

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Billings') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Manage your billings, your payment methods or request a refund.') }}
        </p>
    </header>

    <div class="mt-6">
        <form method="POST" action="{{ route('billing.createSession') }}">
            @csrf
            @if ($stripeId)
                <x-primary-button type="submit">{{ __('Manage billing') }}</x-primary-button>
            @else
                <button type="button" Title='{{ __('you have not yet made a purchase.') }}'
                    class="disabled:opacity-50 cursor-not-allowed bg-gray-300 text-gray-700 px-4 py-2 rounded-lg">
                    {{ __('Manage billing') }}
                </button>
            @endif
        </form>
    </div>
</section>
