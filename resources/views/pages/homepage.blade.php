@push('header.styles')
    <link href="{{ asset('css/singular/homepage.css') }}" rel="stylesheet">
@endpush
@push('header.scripts')
    <script src="{{ asset('js/singular/homepage.js') }}"></script>
@endpush

<x-app-layout>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (\Auth::user())
                            {{ __('You are logged in!') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @include('pages.homepage.analyze')
    @include('pages.homepage.services')
    @include('pages.homepage.features')
    @include('pages.homepage.products')
</x-app-layout>