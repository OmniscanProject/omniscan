<x-dashboard-admin-layout>
    <h1 class="title">
        {{ __('Users') }}
    </h1>
    <div>
        <x-table>
            <x-slot name="header">
                <x-table-column>ID</x-table-column>
                <x-table-column>  {{ __('Username') }}</x-table-column>
                <x-table-column>  {{ __('Firstname') }}</x-table-column>
                <x-table-column>  {{ __('Lastname') }}</x-table-column>
                <x-table-column>  {{ __('Email') }}</x-table-column>
            </x-slot>
            @foreach($users as $user)
                <tr>
                    <x-table-column>{{$user->id}}</x-table-column>
                    <x-table-column>{{$user->username}}</x-table-column>
                    <x-table-column>{{$user->firstname}}</x-table-column>
                    <x-table-column>{{$user->lastname}}</x-table-column>
                    <x-table-column>{{$user->email}}</x-table-column>
                </tr>
            @endforeach
        </x-table>        
    </div>
</x-dashboard-admin-layout>