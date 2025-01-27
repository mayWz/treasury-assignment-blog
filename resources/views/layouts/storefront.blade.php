<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>

<body class="font-sans antialiased">
    <div class="overflow-x-hidden bg-gray-100">
        <div class="relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <a href="/">
                        <div class="flex">
                            <?xml version='1.0' encoding='iso-8859-1'?>
                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                            <svg fill="#000000" class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 470"
                                xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 470 470">
                                <g>
                                    <path
                                        d="M452.159,32.728h-68.798V7.5c0-4.143-3.357-7.5-7.5-7.5H94.139c-4.142,0-7.5,3.357-7.5,7.5v25.228H17.841   C8.003,32.728,0,40.73,0,50.568v329.204c0,9.838,8.003,17.841,17.841,17.841h163.807V455h-70.739c-4.142,0-7.5,3.357-7.5,7.5   s3.358,7.5,7.5,7.5h214.979c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5h-37.536v-57.387h30.867c4.143,0,7.5-3.357,7.5-7.5   s-3.357-7.5-7.5-7.5H17.841c-1.54,0-2.841-1.301-2.841-2.841V50.568c0-1.54,1.301-2.841,2.841-2.841h68.798v273.863H38.523   c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5H319.22c4.143,0,7.5-3.357,7.5-7.5s-3.357-7.5-7.5-7.5h-58.884v-61.296   c0-4.143-3.357-7.5-7.5-7.5H134.139c-4.142,0-7.5,3.357-7.5,7.5v61.296h-25V40.237c0-0.02,0-25.237,0-25.237h266.723v68.339   c0,4.143,3.357,7.5,7.5,7.5s7.5-3.357,7.5-7.5V47.728h68.798c1.54,0,2.841,1.301,2.841,2.841v329.204   c0,1.54-1.301,2.841-2.841,2.841H432.5c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5,7.5,7.5h19.659c9.838,0,17.841-8.003,17.841-17.841   V50.568C470,40.73,461.997,32.728,452.159,32.728z M273.353,455h-76.705v-57.387h76.705V455z M141.639,267.795h103.697v53.796   H141.639V267.795z" />
                                    <path
                                        d="m409.906,178.564c-0.016-0.108-0.028-0.217-0.049-0.324-0.031-0.157-0.072-0.31-0.113-0.464-0.021-0.078-0.037-0.157-0.06-0.235-0.048-0.16-0.105-0.315-0.163-0.47-0.022-0.058-0.038-0.118-0.061-0.175l-.037-.093c-0.007-0.016-0.013-0.032-0.019-0.048l-26.583-66.211c-1.142-2.842-3.896-4.705-6.96-4.705s-5.818,1.863-6.96,4.705l-26.587,66.217c-0.012,0.029-0.054,0.134-0.054,0.134-0.025,0.063-0.043,0.129-0.067,0.193-0.055,0.149-0.111,0.298-0.156,0.451-0.024,0.08-0.041,0.162-0.062,0.243-0.04,0.152-0.081,0.302-0.111,0.458-0.021,0.108-0.033,0.217-0.05,0.326-0.02,0.13-0.043,0.257-0.056,0.389-0.024,0.244-0.037,0.489-0.037,0.735v256.17c0,18.825 15.315,34.141 34.141,34.141 18.824,0 34.14-15.315 34.14-34.141v-256.17c0-0.246-0.013-0.491-0.037-0.735-0.015-0.133-0.039-0.261-0.059-0.391zm-53.186,8.625h38.28v214.186h-38.28v-214.186zm19.14-53.721l15.547,38.722h-31.094l15.547-38.722zm0,321.532c-10.554,0-19.141-8.587-19.141-19.141v-19.484h38.281v19.484c0,10.554-8.586,19.141-19.14,19.141z" />
                                    <path
                                        d="m134.139,107.795h201.723c4.143,0 7.5-3.357 7.5-7.5v-52.795c0-4.143-3.357-7.5-7.5-7.5h-201.723c-4.142,0-7.5,3.357-7.5,7.5v52.795c-1.42109e-14,4.143 3.358,7.5 7.5,7.5zm7.5-52.795h186.723v37.795h-186.723v-37.795z" />
                                    <path
                                        d="m335.861,122.795h-201.722c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5 7.5,7.5h201.723c4.143,0 7.5-3.357 7.5-7.5s-3.358-7.5-7.501-7.5z" />
                                    <path
                                        d="m252.836,162.795h-118.697c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5 7.5,7.5h118.697c4.143,0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                    <path
                                        d="m320.664,162.795h-37.828c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5 7.5,7.5h37.828c4.143,0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                    <path
                                        d="m252.836,192.795h-118.697c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5 7.5,7.5h118.697c4.143,0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                    <path
                                        d="m319.22,192.795h-36.384c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5 7.5,7.5h36.384c4.143,0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                                    <path
                                        d="m252.836,222.795h-118.697c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5 7.5,7.5h118.697c4.143,0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5z" />
                                    <path
                                        d="m319.22,222.795h-36.384c-4.143,0-7.5,3.357-7.5,7.5s3.357,7.5 7.5,7.5h36.384c4.143,0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5z" />
                                </g>
                            </svg>
                        </div>
                    </a>
                    <div class="flex"></div>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-end">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                </header>

                <main class="mt-6">
                    {{ $slot }}
                </main>

                <footer class="py-16 text-center text-sm text-black">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>

    @stack('modals')
    @livewireScripts

</body>

</html>
