<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(auth()->user()->role =='admin')
                @include('admin.dashboard')
            @endif

            @if(auth()->user()->role =='student')
                @include('student.dashboard')
            @endif
        </div>
    </div>
</x-app-layout>
