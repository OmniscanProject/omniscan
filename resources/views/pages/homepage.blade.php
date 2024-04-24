@push('styles')
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet">
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

    @include('components.search-website')
    @include('components.features')
    @include('pages.homepage.products')
    @include('components.testimonial')
    @include('layouts.footer')
</x-app-layout>