<div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
    <div class="flex justify-center mb-6">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-32 h-32 object-contain">
    </div>

    <div class="text-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">AkuntanKu</h2>
        <p class="text-gray-600">Sistem Manajemen Keuangan</p>
    </div>

    {{-- Alert Global --}}
    @if (session('error'))
        <div class="mb-3 text-red-600 text-sm text-center">
            {{ session('error') }}
        </div>
    @endif

    @if (session('alert'))
        <div class="mb-3 text-red-600 text-sm text-center">
            {{ session('alert') }}
        </div>
    @endif

    @if (session('success'))
        <div class="mb-3 text-green-600 text-sm text-center">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="login" class="space-y-4">

        {{-- EMAIL --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" wire:model.debounce.500ms="email" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
        </div>

        {{-- PASSWORD --}}
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" wire:model="password"
                class="w-full px-3 py-2 border border-gray-300
                       rounded-md shadow-sm focus:outline-none
                       focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
        </div>

        {{-- Remember & Forgot --}}
        <div class="flex justify-between items-center">
            <div class="flex items-center">
                <input type="checkbox" wire:model="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                <label class="ml-2 text-sm text-gray-700">Ingat Saya</label>
            </div>

            <a class="text-sm text-blue-600 hover:text-blue-500 cursor-pointer">
                Lupa Password?
            </a>
        </div>

        {{-- BUTTON --}}
        <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700
                   text-white font-medium py-2 px-4 rounded-md transition">
            Masuk
        </button>
    </form>

    <div class="text-center text-gray-500 text-sm mt-6">
        © Projek FarizqiDev 2025.
    </div>
</div>
