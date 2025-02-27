@section('navigation')

{{-- lg screen navbar --}}
<nav class=" absolute lg:sticky lg:top-0 invisible lg:visible  shadow lg:w-full   bg-gray-800 z-20">
    <div class="container   px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center lg:justify-between">

            <div class="flex items-center justify-between gap-2">
                <a href="{{ route('home.index') }}">
                    <img class="w-auto h-6 sm:h-7" src="{{asset('images/Logo.png')}}" alt="">
                </a>
                <h1 class="text-gray-200 font-semibold">Thecodenarsoft</h1>
            </div>

            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
            <div class="absolute inset-x-0 z-30 w-full px-6 py-4bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">
                {{-- List Items --}}
                <div class="flex flex-col lg:flex-row lg:items-center lg:mx-8">


                    {{-- Tours --}}
                   <div class="group relative flex flex-col " id="adsada">
                        {{-- Dropdown Button --}}
                        <div class="flex flex-row items-center px-3 py-2  mt-2 mb-2 lg:mb-0 text-gray-200 transform rounded-md lg:mt-0 hover:bg-gray-700 select-none ">
                            <a href="#" class="flex flex-col mx-2">
                                Tours
                            </a>
                        </div>
                    </div>

                    {{-- Services --}}
                    <a href="{{route('services.index')}}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Services</a>
                    {{-- Travel Info --}}
                    <a href="{{route('travel-info.index')}}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Travel Info</a>

                    {{-- About --}}
                    <div class="group relative flex flex-col ">
                        {{-- Dropdown Button --}}
                        <div class="flex flex-row items-center px-3 py-2  mt-2 mb-2 lg:mb-0 text-gray-200 transform rounded-md lg:mt-0 hover:bg-gray-700 select-none ">
                            <a href="{{ route('about.index') }}" class="flex flex-col mx-2">
                                About
                            </a>
                        </div>

                        {{-- Dropdown Content --}}
                        <div class=" flex flex-col justify-center lg:w-max p-2 rounded-lg lg:group-hover:visible lg:invisible lg:absolute lg:top-10 lg:left-0 bg-gray-600 lg:bg-gray-800 lg:rounded-md">
                            <a href="{{ route('about.index') }}" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                About Us
                            </a>
                            <a href="{{route('about-country.index')}}" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                About Country
                            </a>
                        </div>

                    </div>
                    {{-- Contact Us --}}
                    <a href="{{route('contact-us.index')}}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Contact Us</a>
                    @auth
                    <a href="{{ route('admin.index') }}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Admin</a>
                    @endauth
                    @guest

                    <a href="{{ route('login') }}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Login</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</nav>



{{-- Mobile Navbar --}}
<nav x-data="{ isOpen: false }" class="sticky top-0 block lg:hidden shadow  bg-gray-800 z-20">
    <div class="container px-6 py-4 mx-auto">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex items-center justify-between">
                <a href="{{ route('home.index') }}">
                    <img class="w-auto h-6 sm:h-7" src="{{asset('images/Logo.png')}}" alt="">
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
            <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center">

                {{-- List Items Dropdowns --}}
                <div class="flex flex-col lg:flex-row lg:items-center lg:mx-8">

                    {{-- Dropdown Services --}}
                    {{-- <div x-data="{ isOpen: false }" class="group relative flex flex-col ">

                        <div x-cloak @click="isOpen = !isOpen" class="flex flex-row items-center px-3 py-2  mt-2 mb-2 lg:mb-0 text-gray-200 transform rounded-md lg:mt-0 hover:bg-gray-700 select-none ">
                            <a href="#" class="flex flex-col mx-2">
                                Services
                            </a>
                            <svg x-show="!isOpen" class=" h-6 w-6  fill-gray-200 transition ease-linear duration-700 delay-700 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                            <svg x-show="isOpen" class="h-6 w-6 fill-gray-200 transition ease-linear delay-150 duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z" />
                            </svg>
                        </div>

                        <div x-cloak x-show="isOpen" class=" flex flex-col justify-center lg:w-max p-2 rounded-lg lg:group-hover:visible lg:invisible lg:absolute lg:top-10 lg:left-0 bg-gray-600 lg:bg-gray-800 lg:rounded-md">
                            <a href="#" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                Darwaza Yurt Camp
                            </a>

                        </div>

                    </div> --}}

                    {{-- Dropdown Tour --}}
                    <div x-data="{ isOpen: false }" class="group relative flex flex-col ">
                        {{-- Dropdown Button --}}
                        <div x-cloak @click="isOpen = !isOpen" class="flex flex-row items-center px-3 py-2  mt-2 mb-2 lg:mb-0 text-gray-200 transform rounded-md lg:mt-0 hover:bg-gray-700 select-none ">
                            <a href="#" class="flex flex-col mx-2">
                                Tours
                            </a>
                            <svg x-show="!isOpen" class=" h-6 w-6  fill-gray-200 transition ease-linear duration-700 delay-700 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                            <svg x-show="isOpen" class="h-6 w-6 fill-gray-200 transition ease-linear delay-150 duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z" />
                            </svg>
                        </div>

                        {{-- Dropdown Content --}}
                        {{-- <div x-cloak x-show="isOpen" class=" flex flex-col justify-center lg:w-max p-2 rounded-lg lg:group-hover:visible lg:invisible lg:absolute lg:top-10 lg:left-0 bg-gray-600 lg:bg-gray-800 lg:rounded-md">
                            <a href="#" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                Custom Tours
                            </a>
                            <a href="#" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                Fixed Departure Tours
                            </a>
                            <a href="#" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                Combi Tours
                            </a>
                            <a href="#" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                Festival Tours
                            </a>
                        </div> --}}

                    </div>
                    {{-- Services --}}
                    <a href="{{route('services.index')}}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Services</a>
                    {{-- Travel Info --}}
                    <a href="{{route('travel-info.index')}}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Travel Info</a>

                    {{-- Dropdown About --}}
                    <div x-data="{ isOpen: false }" class="group relative flex flex-col ">
                        {{-- Dropdown Button --}}
                        <div x-cloak @click="isOpen = !isOpen" class="flex flex-row items-center px-3 py-2  mt-2 mb-2 lg:mb-0 text-gray-200 transform rounded-md lg:mt-0 hover:bg-gray-700 select-none ">
                            <a href="{{ route('about.index') }}" class="flex flex-col mx-2">
                                About
                            </a>
                            <svg x-show="!isOpen" class=" h-6 w-6  fill-gray-200 transition ease-linear duration-700 delay-700 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z" />
                            </svg>
                            <svg x-show="isOpen" class="h-6 w-6 fill-gray-200 transition ease-linear delay-150 duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z" />
                            </svg>
                        </div>

                        {{-- Dropdown Content --}}
                        <div x-cloak x-show="isOpen" class=" flex flex-col justify-center lg:w-max p-2 rounded-lg lg:group-hover:visible lg:invisible lg:absolute lg:top-10 lg:left-0 bg-gray-600 lg:bg-gray-800 lg:rounded-md">
                            <a href="{{route('about.index')}}" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                About Us
                            </a>
                            <a href="{{route('about-country.index')}}" class="p-2 transition-colors duration-300 transform rounded-md lg:mt-0 text-gray-200 hover:bg-gray-500 ">
                                About Country
                            </a>
                        </div>

                    </div>
                    {{-- Contact Us --}}
                    <a href="{{route('contact-us.index')}}" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Contact Us</a>
                    {{-- <a href="#" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Random Item</a> --}}
                    {{-- <a href="#" class="px-3 py-2 mx-3 mt-2 text-gray-700 transition-colors duration-300 transform rounded-md lg:mt-0 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700">Experts</a> --}}
                </div>












                {{-- <div class="flex items-center mt-4 lg:mt-0">
                    <button class="hidden mx-4 text-gray-600 transition-colors duration-300 transform lg:block dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 focus:text-gray-700 dark:focus:text-gray-400 focus:outline-none" aria-label="show notifications">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <button type="button" class="flex items-center focus:outline-none" aria-label="toggle profile dropdown">
                        <div class="w-8 h-8 overflow-hidden border-2 border-gray-400 rounded-full">
                            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="object-cover w-full h-full" alt="avatar">
                        </div>

                        <h3 class="mx-2 text-gray-700 dark:text-gray-200 lg:hidden">Khatab wedaa</h3>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
</nav>



@endsection
