<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Applicant List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-message/>

            <div class="shadow overflow-hidden rounded-md">
                <table class="min-w-full divide-y divide-gray-100 w-full">
                    <thead class="bg-gray-50 shadow-thead">
                        <tr>
                            <th class="p-2 text-sm font-medium text-color-2 text-center w-6 whitespace-nowrap">Sl No.</th>
                            <th class="p-2 text-left text-sm font-medium text-color-2">Name</th>
                            <th class="p-2 text-left text-sm font-medium text-color-2">Email</th>
                            <th class="p-2 text-left text-sm font-medium text-color-2">Phone</th>
                            <th class="p-2 text-left text-sm font-medium text-color-2">Address</th>
                            <th class="p-2 text-sm font-medium text-color-2 text-center w-20 whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($data as $row)
                            <tr class="border-t border-b border-gray-100">
                                <td class="p-2 text-color-2 text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 text-color-2">{{ $row->first_name . ' ' . $row->last_name }}</td>
                                <td class="p-2 text-color-2">{{ $row->email }}</td>
                                <td class="p-2 text-color-2">{{ $row->phone }}</td>
                                <td class="p-2 text-color-2">{{ $row->address }}</td>
                                <td class="p-2 flex items-center justify-center">
                                    <a href="{{ route('applicants.show', $row->id) }}" class="inline-block bg-blue-400 hover:bg-blue-600 p-1 rounded mr-2">
                                        <x-icons.view/>
                                    </a>
                                    <a href="{{ route('applicants.edit', $row->id) }}" class="inline-block bg-yellow-400 hover:bg-yellow-600 p-1 rounded mr-2">
                                        <x-icons.edit/>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        @if(count($data) == 0)
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
                {!! $data->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
