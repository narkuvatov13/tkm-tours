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

        {{-- JQUERY --}}

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        {{-- <script src="{{asset('jquery/jquery-3.6.1.min.js')}}"></script> --}}

        <!-- Style -->
        @stack('style')
        @livewireStyles
        <style>
            .landing-page-img {
                background-image: url("{{asset('images/5.jpg')}}")
            }

            .landing-page-img::before {
                content: "";
                background-color: #000;
                width: 100%;
                height: 100vh;
                position: absolute;
                opacity: .4;
            }
        </style>
    </head>
    {{-- gray indigo white black--}}
    {{-- bg-[#0F172A] bg-gray-800--}}
    {{-- Text Title Color text-g-700 --}}
    {{-- Text Color text-gray-600 --}}
    {{-- Text Hovor Color text-indigo-800--}}
    {{-- Primary Color bg-indigo-600 --}
    {{-- body Color bg-[#f1f5f9] --}}
    {{-- Title Text Color text-indigo-700 --}}
    {{-- bg hover text-indigo-500 text-indigo-700 --}}
    {{-- btn hover:bg-indigo-600 bg-indigo-700 --}}

    <body class="antialiased">
        {{-- navigation --}}
        @yield('navigation')

        {{-- Content --}}
        @yield('content')

        {{-- footer --}}
        @yield('footer')

        {{-- Scripts --}}
        @stack('js')
        @livewireScripts


    </body>

</html>