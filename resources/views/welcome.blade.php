<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SilverSoftware WEB</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="min-h-screen selection:bg-red-500 selection:text-white">
            <div class="justify-start size-20">
                <img src="/images/logo.jpg" alt="S1lv3rf0x80" />
                <div class="justify-center ml-5 text-left z-10 font-semibold text-gray-600">
                    <span style=" text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">SILVERSOFTWARE</span>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <!-- Main -->
                <div class="grid grid-flow-col grid-rows-2 grid-cols-3 gap-12">
                    <div class="rotate-12 border-2 bg-white">
                        <img src="/images/thumbs/01.jpg" alt="SP" loading="lazy">
                    </div>
                    <div class="scale-y-125 -rotate-12 translate-x-2 translate-y-15 border-2 bg-white">
                        <img src="/images/thumbs/02.jpg" alt="WIESBADEN" loading="lazy">
                    </div>
                    <div class="rotate-6 translate-x-10 border-x-2 border-2 bg-white">
                        <img src="/images/thumbs/03.jpg" alt="SORRENTO" loading="lazy">
                    </div>
                    <div class="-rotate-45 translate-y-20 border-x-2 border-2 bg-white">
                        <img src="/images/thumbs/04.jpg" alt="RJ" loading="lazy">
                    </div>
                    <div class="-rotate-6 translate-x-200 translate-y-4 border-2 bg-white">
                        <img src="/images/thumbs/05.jpg" alt="POSITANO" loading="lazy">
                    </div>
                    <div class="rotate-6 translate-x-10 translate-y-4 border-2 bg-white">
                        <img src="/images/thumbs/06.jpg" alt="FRANKFURT" loading="lazy">
                    </div>
                </div>             
            </div>
            <!--FOOTER-->           
            <div class="mr-4 mt-20 text-gray-500 text-right sm:ml-0">
                SilverSoftware <a href="https://silversoftware.cloud">WEB</a> powered by Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>         
        </div>
    </body>
</html>
