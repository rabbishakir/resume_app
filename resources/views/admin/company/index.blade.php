<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-message/>

            <div class="flex items-center justify-end mb-2">
                <a href="{{ route('company.create') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mr-2">Add New</a>
            </div>

            <div class="shadow overflow-hidden rounded-md">
                <table class="min-w-full divide-y divide-gray-100 w-full">
                    <thead class="bg-gray-50 shadow-thead">
                        <tr>
                            <th class="p-2 text-sm font-medium text-color-2 text-center w-6 whitespace-nowrap">Sl No.</th>
                            <th class="p-2 text-left text-sm font-medium text-color-2">Name</th>
                            <th class="p-2 text-left text-sm font-medium text-color-2">Address</th>
                            <th class="p-2 text-sm font-medium text-color-2 text-center w-20 whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($companies as $row)
                            <tr class="border-t border-b border-gray-100">
                                <td class="p-2 text-color-2 text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 text-color-2">{{ $row->name }}</td>
                                <td class="p-2 text-color-2">{{ $row->address }}</td>
                                <td class="p-2 flex items-center justify-center">
                                    <a href="{{ route('company.edit', $row->id) }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 p-1 text-white rounded mr-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('company.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="inline-block bg-red-500 hover:bg-red-600 p-1 text-white rounded">
                                            <svg class="w-4 h-4" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="3 6 5 6 21 6"/>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"/>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        @if(count($companies) == 0)
                            <tr>
                                <td class="p-4 text-base text-center text-red-500 font-medium" colspan="11">
                                    No Records Found!
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="shadow rounded bg-white mt-3 px-2 py-3">
                {!! $companies->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
