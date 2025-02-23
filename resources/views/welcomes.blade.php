<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Turkmenistan Tours</title>
        {{-- Links --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')


        @yield("style")

        <!-- Fonts -->
        @livewireStyles
        <style>
            .landing-page-img {
                background-image: url("images/9.jpg");
            }

            .landing-page-img::before {
                content: "";
                background-color: #000;
                width: 100%;
                height: 100vh;
                position: absolute;
                opacity: .2;
            }
        </style>
    </head>
    {{-- bg-[#0F172A] --}}
    {{-- Text Color text-gray-700 --}}
    {{-- Text Hovor Color --}}
    {{-- Primary Color bg-indigo-600 --}
    {{-- body Color bg-[#f1f5f9] --}}

    <body>
        <div>
            {{-- navigation --}}
            <nav x-data="{ isOpen: false }" class="fixed top-0 w-full opacity-80 bg-[#0F172A] shadow-md z-50">
                <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
                    <div class="flex items-center justify-between">
                        <a href="#">
                            <img class="w-auto h-6 sm:h-7" src="images/logo.png" alt="">
                        </a>
                        <!-- Mobile menu button -->
                        <div class="flex lg:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                                </svg>

                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 mt-4' : '-translate-x-full ']" class="absolute inset-x-0 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
                        <div class="flex flex-col justify-center items-center md:flex-row md:mx-6">
                            <a class="my-2 text-white md-text-gray-700  transition-colors duration-300 transform hover:text-indigo-600 md:mx-4 md:my-0" href="#">Home</a>
                            <a class="my-2 text-white md-text-gray-700  transition-colors duration-300 transform hover:text-indigo-600 md:mx-4 md:my-0" href="#">Tours</a>
                            <a class="my-2 text-white md-text-gray-700  transition-colors duration-300 transform hover:text-indigo-600 md:mx-4 md:my-0" href="#">Private Tour</a>
                            <a class="my-2 text-white md-text-gray-700  transition-colors duration-300 transform hover:text-indigo-600 md:mx-4 md:my-0" href="#">About Us</a>
                            <a class="my-2 text-white md-text-gray-700  transition-colors duration-300 transform hover:text-indigo-600 md:mx-4 md:my-0" href="#">Contact</a>
                            {{-- <a class="my-2 text-white md-text-gray-700  transition-colors duration-300 transform hover:text-blue-600 md:mx-4 md:my-0" href="#">Services</a> --}}
                            {{-- <a class="my-2 text-white md-text-gray-700  transition-colors duration-300 transform hover:text-blue-600 md:mx-4 md:my-0" href="#">Travel Info</a> --}}
                        </div>
                    </div>
                </div>
            </nav>

            {{-- main --}}
            <main class="main">
                {{-- First Landing Page --}}
                <section class="h-screen w-full shadow">
                    <div class="landing-page-img  h-screen w-full  bg-cover bg-no-repeat bg-center text-center flex flex-col justify-center items-center ">
                        <h1 class="landing-page-img__subject uppercase text-6xl font-semibold text-gray-100">
                            Explore Dream Destinition
                        </h1>
                        <p class="landing-page-img__paragraph text-gray-300 mb-6 z-10">
                            Your Perfect Tour In Turkmenistan Starts Here
                        </p>
                        <button class="text-gray-300 font-semibold z-10 text-xl py-3 px-4 bg-indigo-600 inline-block w-48 rounded transition-colors hover:bg-indigo-800">Book A Tour</button>
                    </div>

                </section>

                {{-- Second Page Us Information --}}
                <section class="more-about-us p-8 bg-[#fff]">
                    <div class="p-4 flex flex-col md:flex-row">
                        <div class=" w-fit md:w-1/2 p-4 max-w-fit flex flex-col">
                            <h1 class="text-center text-2xl uppercase text-gray-700 font-semibold">Make the most of your travel with us!</h1>
                            <p class=" text-lg text-gray-700 text-justify mb-2 md-4">
                                We like to think of ourselves as the funnest travel company in Turkmenistan, run by a team of awesome locals.
                                Our vision is to create unforgettable local experiences for all our guests visiting Turkmenistan!
                                As your tour partner, we’ll help you disconnect from your everyday world, so you can immerse yourself in local culture and reconnect with yourself.
                            </p>
                            <a href="#" class="bg-indigo-600 py-2 px-4 self-center  text-white rounded hover:bg-indigo-700 transition-colors"> More About Us</a>
                        </div>
                        <div class="flex flex-col justify-center items-center space-y-6 md:w-1/2 rounded ">
                            <a href="#" class="px-4 py-2 text-white text-center md:w-2/3 bg-indigo-600 hover:bg-indigo-700 transition-colors">Book Now</a>
                            <a href="#" class="px-4 py-2 text-white text-center md:w-2/3 bg-indigo-600 hover:bg-indigo-700 transition-colors">Sending Email</a>
                        </div>
                    </div>
                </section>
                {{--Most Populer Tours --}}
                <section class="most-populer-tours">
                    <h1 class="text-center text-2xl uppercase text-gray-700 font-semibold p-4 mb-8">Most Popular Tours</h1>
                    <div class="tour-cards flex flex-col justify-center items-center md:flex-row gap-8 flex-wrap">

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour1.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Lebap</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Special tour "Highlights"</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour2.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Lebap</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">A Week of Highlights</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour3.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Lebap</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Silk Road Revisited</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour4.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Lebap</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Heart of the Karakum</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour5.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Lebap</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Special tour "Novruz holiday"</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour6.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Lebap</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Special tour "Ahalteke Horses"</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>
                    </div>
                </section>

                <hr class="m-10">
                {{-- City Tours --}}
                <section class="most-populer-tours">
                    <h1 class="text-center text-2xl uppercase text-gray-700 font-semibold p-4 mb-8">City Tours</h1>
                    <div class="tour-cards flex flex-col justify-center items-center md:flex-row gap-8 flex-wrap">

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour1.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Lebap</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Special tour "Highlights"</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour2.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Dashoguz</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">A Week of Highlights</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour3.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Asgabat</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Silk Road Revisited</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour4.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Mary</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Heart of the Karakum</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>

                        <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow-lg ">
                            <img class="object-cover object-center w-full h-56" src="/images/tour5.webp" alt="avatar">
                            <div class="flex items-center px-6 py-3 bg-gray-900">
                                <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-600 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                </svg>
                                <h1 class="mx-3 text-lg font-semibold text-white">Ahal</h1>
                            </div>

                            <div class="px-6 py-4">
                                <a href="#" class="text-xl font-semibold text-indigo-600 ">Special tour "Novruz holiday"</a>
                                <p class="py-2 text-gray-700 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                            </div>
                        </div>
                    </div>
                </section>
                <hr class="m-10">

                {{-- --}}
                <section>
                    <div class="text-center">
                        <h1 class="text-center text-2xl uppercase text-gray-700 font-semibold">We will help you choose the perfect vacation!</h1>
                        <p class="text-lg text-gray-700">We will certainly take into account any wishes and can help you with the choice of rest or try something new!</p>
                        <p class="text-lg text-gray-700">Any destinations of rest are waiting for you!</p>
                    </div>
                    <div class="">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                            </svg>
                        </div>
                    </div>
                </section>



            </main>
            <hr class="m-20">


            {{-- footer --}}
            <footer class="bg-white dark:bg-gray-900">
                <div class="container px-6 py-8 mx-auto">
                    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <div>
                            <div class="text-xs font-medium text-gray-400 uppercase">
                                Contact Us
                            </div>

                            <a href="#" class="block mt-5 text-sm font-medium text-gray-500 duration-700 dark:text-gray-300 hover:text-gray-400 dark:hover:text-gray-200 hover:underline">
                                +993 xxxxxxxx
                            </a>
                            <a href="#" class="block mt-3 text-sm font-medium text-gray-500 duration-700 dark:text-gray-300 hover:text-gray-400 dark:hover:text-gray-200 hover:underline">
                                +993 xxxxxxxx
                            </a>
                            <a href="#" class="block mt-3 text-sm font-medium text-gray-500 duration-700 dark:text-gray-300 hover:text-gray-400 dark:hover:text-gray-200 hover:underline">
                                xxxxxxx@gmail.com
                            </a>

                        </div>

                        <div>
                            <div class="text-xs font-medium text-gray-400 uppercase">
                                Visit Us
                            </div>
                            <p class="block mt-5 text-sm font-medium text-gray-500 duration-700 dark:text-gray-300 hover:text-gray-400 dark:hover:text-gray-200">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est ad maxime error quas ea molestias eveniet tempora nostrum repellat ut!
                            </p>
                        </div>
                    </div>

                    <hr class="my-10 border-gray-200 dark:border-gray-700">

                    <div class="sm:flex sm:items-center sm:justify-between">
                        <p class="text-sm text-gray-400">© Copyright 2021. All Rights Reserved.</p>

                        <div class="flex mt-3 -mx-2 sm:mt-0">
                            <a href="#" class="mx-2 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="#" class="mx-2 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Facebook">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="#" class="mx-2 text-gray-400 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        @livewireScripts
    </body>

</html>