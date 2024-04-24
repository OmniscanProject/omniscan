@php
    $title = isset($adminUser) ? __('User')." : ". $adminUser->username : __('New user')
@endphp

<x-dashboard-admin-layout>
    <div class="toolbar-container flex justify-between py-6">
        <h1 class="title">
            {{ $title }}
        </h1>
        <div class="actions-container">
            <a class="action flex" href="{{ URL::previous() }}" title="{{ __('Return') }}">
                <x-coolicon-arrow-left-md class="mr-1"/>
                {{ __('Return') }}
            </a>
        </div>
    </div>
    @if (isset($adminUser))
        <form action="{{ route('admin.dashboard.users.update', $adminUser->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
    @else
        <form action="{{ route('admin.dashboard.users.store') }}" method="POST" enctype="multipart/form-data">
    @endif
        @csrf

        <!-- Role -->
        @if(!empty($roles))
            <div class="mt-4">
                <x-input-label for="role" :value="__('Role')" />
                <select name="role" id="role" class="form-control">
                    <option value=""> -- {{ __('Choose an option') }} --</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}"  {{ (isset($adminUser->role_id) && $adminUser->role_id == $role->id ) ? "selected":"" }}>{{ $role->name }}</option>
                    @endforeach 
                </select>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        @endif

        <!-- Lastname -->
        <div>
            <x-input-label for="lastname" :value="__('Lastname')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" value="{{ old('lastname', $adminUser->lastname ?? '') }}" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>

        <!-- Firstname -->
        <div>
            <x-input-label for="firstname" :value="__('Firstname')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" value="{{ old('firstname', $adminUser->firstname ?? '') }}" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>

        <!-- Username -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="tel" name="username" value="{{ old('username', $adminUser->username ?? '') }}" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email', $adminUser->email ?? '') }}" required autocomplete="username" />
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

        <!-- Actions -->
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                @if(isset($adminUser))
                    {{ __('Edit') }}
                @else 
                    {{ __('Add') }} 
                @endif
            </x-primary-button>
        </div>
    </form>
</x-dashboard-admin-layout>