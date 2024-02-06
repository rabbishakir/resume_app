<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-message/>

            <div class="flex items-center justify-end mb-2">
                <a href="{{ route('skills.create') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mr-2">Add New</a>
            </div>

            <div class="shadow overflow-hidden rounded-md">
                <table class="min-w-full divide-y divide-gray-100 w-full">
                    <thead class="bg-gray-50 shadow-thead">
                        <tr>
                            <th class="p-2 text-sm font-medium text-color-2 text-center w-6 whitespace-nowrap">Sl No.</th>
                            <th class="p-2 text-left text-sm font-medium text-color-2">Name</th>
                            <th class="p-2 text-sm font-medium text-color-2 text-center w-20 whitespace-nowrap">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @foreach($skills as $skill)
                            <tr class="border-t border-b border-gray-100">
                                <td class="p-2 text-color-2 text-center">{{ $loop->iteration }}</td>
                                <td class="p-2 text-color-2">{{ $skill->name }}</td>
                                <td class="p-2 flex items-center justify-center">
                                    <a href="{{ route('skills.show', $skill->id) }}" class="inline-block bg-blue-400 hover:bg-blue-600 p-1 rounded mr-2">
                                        <svg class="w-4 h-4 text-white" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g>
                                                <path d="M256.108,106.02c-91.39,0-162.63,57.202-250,149.943c75.277,79.298,138.444,150.053,250,150.053   s193.547-89.572,250-148.377C448.32,188.751,366.322,106.02,256.108,106.02z M256.108,389.349   c-99.032,0-158.813-61.422-227.018-133.37c81.152-84.619,145.679-133.292,227.018-133.292c96.297,0,171.557,69.442,227.555,134.285   C428.593,314.393,354.033,389.349,256.108,389.349z" fill="#ffffff"/>
                                                <path d="M256.108,156.027c-55.143,0-100,44.857-100,99.992s44.857,99.992,100,99.992s100-44.857,100-99.992   S311.252,156.027,256.108,156.027z M256.108,339.345c-45.948,0-83.333-37.378-83.333-83.325c0-45.947,37.386-83.326,83.333-83.326   s83.333,37.378,83.333,83.326C339.442,301.967,302.056,339.345,256.108,339.345z" fill="#ffffff"/>
                                                <path d="M256.108,197.687c-32.162,0-58.333,26.172-58.333,58.333c0,32.161,26.172,58.333,58.333,58.333   c32.162,0,58.333-26.173,58.333-58.333C314.442,223.858,288.27,197.687,256.108,197.687z M256.108,297.687   c-22.973,0-41.667-18.693-41.667-41.667c0-22.974,18.693-41.667,41.667-41.667s41.667,18.692,41.667,41.667   C297.775,278.993,279.082,297.687,256.108,297.687z" fill="#ffffff"/>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="{{ route('skills.edit', $skill->id) }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 p-1 text-white rounded mr-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg>
                                    </a>
                                    <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
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

                        @if(count($skills) == 0)
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
                {!! $skills->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
