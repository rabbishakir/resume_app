<div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <a href="{{ route('applicants.index') }}" class="flex items-center p-5">
            <div class="flex-shrink-0 bg-gray-900 rounded-md p-2">
                <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4C9.79 4 8 5.79 8
                            8C8 10.21 9.79 12 12 12ZM12 14C9.33 14 4 15.34 4 18V20H20V18C20 15.34
                            14.67 14 12 14Z"/>
                </svg>
            </div>
            <div class="ml-4 text-lg leading-7 font-semibold">Total Applicants: {{ $total }}</div>
        </a>
    </div>
</div>
