<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>


        {{-- Links --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        {{-- Icon --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        {{-- Vite --}}
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        {{-- DataTable --}}

        {{-- JQUERY --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script src="{{asset('jquery/jquery-3.6.1.min.js')}}"></script> --}}

        <!-- Style -->
        @stack('style')
        @livewireStyles

    </head>

    <body>
        <div class="wrapper flex h-screen overflow-y-hidden">

            {{-- Sidebar --}}
            @yield('admin-sidebar')

            <div class="container flex flex-col">
                {{-- Navbar --}}
                @yield('admin-navbar')
                {{-- Main Content --}}
                <main class="overflow-auto bg-gray-200 h-screen">
                    @yield('admin-content')
                </main>
            </div>

        </div>
        {{-- Scripts --}}
        <script>
            new DataTable('#example');
        </script>
        @stack('js')
        @livewireScripts
    </body>

</html>
