<!-- Success/Error Message -->
@if (session('success'))
    <div class="bg-green-600 text-white p-4 rounded-lg mb-3">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-400 text-white p-4 rounded-lg mb-3">
        {{ session('error') }}
    </div>
@endif
