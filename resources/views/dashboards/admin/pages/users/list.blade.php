<x-dashboard-admin-layout>
    <div class="toolbar-container flex justify-between py-6">
        <h1 class="title">
            {{ __('Users') }}
        </h1>
        <div class="actions-container">
            <a class="action" href="{{ route('admin.dashboard.users.create') }}" title="{{ __('Create') }}"><x-coolicon-add-plus-square /></a>
        </div>
    </div>
    <div>
        <x-table>
            <x-slot name="header">
                <x-table-column>ID</x-table-column>
                <x-table-column>  {{ __('Role') }}</x-table-column>
                <x-table-column>  {{ __('Username') }}</x-table-column>
                <x-table-column>  {{ __('Firstname') }}</x-table-column>
                <x-table-column>  {{ __('Lastname') }}</x-table-column>
                <x-table-column>  {{ __('Email') }}</x-table-column>
                <x-table-column>  {{ __('Actions') }}</x-table-column>
            </x-slot>
            @php
                $userAuth = Auth::guard('admin')->user();
            @endphp
            @foreach($users as $user)
                <tr>
                    <x-table-column>{{$user->id}}</x-table-column>
                    <x-table-column>{{$user->role->name}}</x-table-column>
                    <x-table-column>{{$user->username}}</x-table-column>
                    <x-table-column>{{$user->firstname}}</x-table-column>
                    <x-table-column>{{$user->lastname}}</x-table-column>
                    <x-table-column>{{$user->email}}</x-table-column>
                    <x-table-column css="border p-1"> 
                        <div class="actions-container flex justify-around">
                            <a class="action" href="{{ route('admin.dashboard.users.show',$user->id) }}" title="{{ __('Edit') }}"><x-coolicon-note-edit /></a>
                            @if($userAuth->id != $user->id)
                                <button 
                                    class="action" 
                                    {{-- href="{{ route('admin.dashboard.users.destroy',$user->id) }}"  --}}
                                    title="{{ __('Delete') }}" 
                                    wire:click="destroy"
                                    wire:confirm="Are you sure you want to delete this project?"
                                >
                                    <x-coolicon-remove-minus-circle />
                                </button>
                            @endif
                        </div>
                    </x-table-column>
                    
                </tr>
            @endforeach
        </x-table>        
    </div>
</x-dashboard-admin-layout>