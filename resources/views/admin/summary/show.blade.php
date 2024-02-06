<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skill Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden rounded-md bg-white p-4 mb-4">
                <h3 class="font-semibold text-xl">{{ $skill->name }}</h3>
            </div>

            @foreach($skill->skillDescription as $skillDescription)
                <div class="shadow overflow-hidden rounded-md bg-white p-4 mb-4">
                    {!! $skillDescription->description !!}
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
