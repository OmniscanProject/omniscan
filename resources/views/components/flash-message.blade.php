@if(session()->has('success'))
    <div class="alert alert-succces alert-dismissible fade show px-2 py-1" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <x-coolicon-close-sm />
        </button>
    </div>
@endif