<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Modern</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-slate-100">

    <nav class="fixed top-0 left-0 h-full bg-white shadow-lg w-64 flex flex-col justify-between py-8 px-6">
        <!-- Logo & Brand -->
        <div>
            <div class="flex items-center gap-4 mb-10">
                <div class="bg-gradient-to-tr from-amber-400 to-yellow-300 rounded-full p-2 flex items-center justify-center shadow-md"
                    style="width: 56px; height: 56px;">
                    <img src="{{ asset('img/logo.png') }}" alt="logo" class="w-12 h-12 rounded-full object-cover">
                </div>
                <span class="font-bold text-2xl text-gray-800 tracking-wide">Akuntansi</span>
            </div>
            <!-- Navigation Links -->
            <ul class="flex flex-col gap-4">
                <li>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg bg-amber-100 text-amber-700 font-semibold hover:bg-amber-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10m9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5m.754-4.246a.39.39 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.39.39 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd"
                                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10m8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3" />
                        </svg> Dashboard
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cash-coin" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                            <path
                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                            <path
                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                        </svg>
                        Transaction
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-wallet-fill" viewBox="0 0 16 16">
                            <path
                                d="M1.5 2A1.5 1.5 0 0 0 0 3.5v2h6a.5.5 0 0 1 .5.5c0 .253.08.644.306.958.207.288.557.542 1.194.542s.987-.254 1.194-.542C9.42 6.644 9.5 6.253 9.5 6a.5.5 0 0 1 .5-.5h6v-2A1.5 1.5 0 0 0 14.5 2z" />
                            <path
                                d="M16 6.5h-5.551a2.7 2.7 0 0 1-.443 1.042C9.613 8.088 8.963 8.5 8 8.5s-1.613-.412-2.006-.958A2.7 2.7 0 0 1 5.551 6.5H0v6A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5z" />
                        </svg>
                        Wallet
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-gray-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                            <path
                                d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                        </svg>
                        Analytics
                    </a>
                </li>
            </ul>
        </div>
        <!-- Logout Button -->
        <form action="{{ route('logout') }}" method="POST" class="mt-10">
            @csrf
            <button type="submit"
                class="flex items-center gap-2 w-full px-4 py-3 rounded-lg bg-red-500 text-white font-semibold hover:bg-red-600 transition drop-shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                    <path fill-rule="evenodd"
                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                </svg>
                Logout
            </button>
        </form>
    </nav>

    {{-- halamam utama disini --}}

    <div class="ml-64 py-8 px-6">
        <div class="p-4 flex flex-row justify-between">
            <div>
                <h2 class="font-extrabold text-4xl mb-3">Halo, {{ auth()->user()->name ?? 'Guest' }}! 👋</h2>
                <p class="text-slate-500">{{ $today }}</p>
            </div>
            <div class="flex flex-row gap-5 justify-center items-center">

                <!-- Filter Bulan -->
                <div
                    class="bg-white rounded-2xl py-3 px-6 shadow-lg flex items-center gap-3 hover:shadow-xl transition-all cursor-pointer">
                    <p class="text-slate-700 font-semibold text-lg">Bulan ini</p>

                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-funnel-fill text-slate-700" viewBox="0 0 16 16">
                        <path
                            d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5z" />
                    </svg>
                </div>

                <!-- Tombol Kalender -->
                <div
                    class="bg-white rounded-2xl p-3 shadow-lg flex items-center justify-center hover:shadow-xl transition-all cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-calendar-fill text-slate-700" viewBox="0 0 16 16">
                        <path
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5h16V4H0V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5" />
                    </svg>
                </div>
            </div>
        </div>


        <div class="flex flex-row gap-6 p-4">
            <div class="flex flex-col max-w-96 p-4 rounded-2xl bg-white shadow-lg">
                <div class="flex justify-between items-baseline mb-10">
                    <div class="w-16 h-16 flex items-center justify-center bg-white rounded-lg shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                            <path
                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                            <path
                                d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118z" />
                        </svg>
                    </div>
                    <div class="bg-green-600 py-1 px-3 rounded-4xl shadow-lg">
                        <p class="font-bold text-white"> + 2.08%</p>
                    </div>
                </div>
                <div>
                    <p class="font-light text-slate-500 mb-4">Total Penjualan</p>
                </div>
                <div class="flex flex-row gap-3 justify-center items-center">
                    <div class="font-extrabold text-5xl">$123,45</div>
                    <div class="font-bold">Production vs last mounth</div>
                </div>
            </div>
            
            <div class="flex flex-col max-w-96 p-6 rounded-3xl bg-white shadow-xl border border-slate-100">
                <div class="flex justify-between items-start mb-8">

                    <!-- ICON -->
                    <div
                        class="w-16 h-16 flex items-center justify-center rounded-2xl 
                                bg-gradient-to-br from-blue-50 to-blue-100 shadow-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-600" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                            <path
                                d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293z" />
                        </svg>
                    </div>

                    <!-- BADGE -->
                    <div class="bg-green-500 text-white px-4 py-1 rounded-full shadow-lg text-sm font-semibold">
                        + 2.08%
                    </div>
                </div>

                <!-- LABEL -->
                <p class="text-slate-500 font-medium tracking-tight mb-3">
                    Total Penjualan
                </p>

                <!-- VALUE -->
                <div class="flex items-center gap-4">
                    <div class="text-5xl font-extrabold tracking-tight text-slate-800">
                        $123,45
                    </div>
                    <div class="text-slate-400 font-medium text-sm">
                        dibanding bulan lalu
                    </div>
                </div>
            </div>

        </div>
        <p class="mt-4 p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam unde tenetur non illo
            molestiae, labore voluptatem laboriosam facilis totam dicta accusamus ea at, officiis esse. Qui debitis
            fugit incidunt cum.</p>
    </div>
    @livewireScripts
</body>

</html>
