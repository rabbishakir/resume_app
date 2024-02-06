<div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
    <x-message />

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
            @if(!auth()->user()->payment_status)
                Pay first to access the system <a href="{{ route('payment') }}" class="text-blue-500">Click here</a>
            @else
                <h1 class="text-2xl font-bold">Welcome {{ auth()->user()->name }}</h1>
                <p class="text-gray-600">You can now access the system</p>
                <a href="{{ route('app') }}" class="text-gray-600 underline">Application Form</a>
            @endif
        </div>
    </div>
</div>
