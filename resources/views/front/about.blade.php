@extends('layouts.front.app')
@extends('layouts.front.navigation')
@section('title',' About Us Türmenistan Tours')
@push('style')
<style>
    .about-header-img {
        background-image: url("{{ asset('images/6.jpg') }}");

    }

    .about-header-img::before {
        content: "";
        background-color: #000;
        position: absolute;
        opacity: .4;
        height: 8rem;
        width: 100%;
    }
</style>
@endpush

@section('content')
{{-- Header --}}
<section class="about-container">
    <header class="about-header relative w-full">
        <div class="about-header-img h-32 w-full bg-cover  flex items-center justify-center ">
            <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">About Us</h1>
        </div>
    </header>
</section>

<main class="container p-10 mx-auto">
    {{-- Who Us Are --}}
    <section class="more-about-us bg-[#fff] ">
        <div class="flex flex-col justify-center items-center md:flex-row md:gap-20">
            <div class="h-full mb-3 md:w-1/2 flex justify-center items-center">
                <img class=" md:w-fit md:h-[32rem] object-contain shadow-md shadow-gray-600 rounded" src="{{asset('images/people/4.jpg')}}" alt="">
            </div>
            <div class="md:w-1/2">
                <h1 class="my-3 text-3xl uppercase text-indigo-700 font-semibold underline-offset-4 underline">Who We Are ? </h1>

                <p class="text-md text-gray-600 text-justify select-none tracking-wide">
                    Welcome to the renewed website of Turkmenistan Tourism.
                    We are one of the oldest and largest agencies in existence in Turkmenistan: since 1996 we have been working continuously to improve, expand and innovate our services and make travel to Turkmenistan accessible for travelers with diverse interests, comfort requirements, time and budget limitations. In low season periods, our team travels through Turkmenistan in search of new exciting destinations, as well as stay on top of new developments in well-traveled parts of our country.
                </p>
                <hr class="my-2 border border-indigo-500 max-w-8 w-16 tracking-wide">
                <p class="text-md text-gray-600 text-justify select-none tracking-wide">
                    Our services are aimed at giving you the unique travel experience that you are looking for on your journey through Turkmenistan, ranging from short 3-day classical cultural tours to 15-day active and adventure journeys. You can opt for our fixed service package on one of our fixed departure tours, or compose a tailor-made program with the support of our team, that fits your particular interests.
                </p>
            </div>
        </div>
    </section>
    <hr class="my-10">

    {{--Work With Proffesionals --}}
    <section x-data="{ isShow: false }" class="work-with-proffesionals">
        <header class="flex justify-center items-center mb-12">
            <h1 class="text-xl lg:text-3xl uppercase text-indigo-700 font-semibold ">Work With Proffesionals </h1>
        </header>

        <div class="cards flex flex-col md:flex-row md:flex-wrap justify-center items-center gap-12">

            {{-- card-1 --}}
            <div x-data="{ isOpen: false }" class="card">
                <div class="card-content relative card max-w-xs flex flex-col items-center justify-center  w-[32rem] rounded     shadow-md shadow-gray-600  transition delay-150 duration-300 ease-linear hover:scale-105 ">
                    <img class=" card-img w-full h-96 object-cover object-center rounded" src="{{asset('images/people/6.jpg')}}" alt="">
                    <div class="card-content-text absolute p-4 bottom-0 left-0 w-full bg-gray-800 opacity-95 rounded">

                        <div class="card--header flex items-center justify-between mb-2 ">
                            <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-wider">Mike Jordan</h1>
                            <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                                <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                </svg>
                            </button>
                        </div>
                        <p class="card-text capitalize text-sm text-gray-50 tracking-wide line-clamp-2 ">English-Turkish-Persian-Arabic Speakin Guide</p>
                    </div>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem]   p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content">
                        <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-widest text-center select-none">Mike Jordan</h1>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nulla tempora dignissimos ab? Ea sint voluptate cupiditate maxime dicta omnis! Officiis perferendis necessitatibus molestias possimus nesciunt qui tenetur dolores veniam fugit debitis, autem animi iste repellendus quidem repudiandae ut! Magni asperiores animi fugit eum laboriosam. Minus at rem itaque natus.</p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- card-2 --}}
            <div x-data="{ isOpen: false }" class="card">
                <div class="card-content relative card max-w-xs flex flex-col items-center justify-center  w-[32rem] rounded     shadow-md shadow-gray-600  transition delay-150 duration-300 ease-linear hover:scale-105 ">
                    <img class=" card-img w-full h-96 object-cover object-center rounded" src="{{asset('images/people/6.jpg')}}" alt="">
                    <div class="card-content-text absolute p-4 bottom-0 left-0 w-full bg-gray-800 opacity-95 rounded">

                        <div class="card--header flex items-center justify-between mb-2 ">
                            <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-wider">Mike Jordan</h1>
                            <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                                <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                </svg>
                            </button>
                        </div>
                        <p class="card-text capitalize text-sm text-gray-50 tracking-wide line-clamp-2 ">English-Turkish-Persian-Arabic Speakin Guide</p>
                    </div>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem]   p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content">
                        <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-widest text-center select-none">Mike Jordan</h1>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nulla tempora dignissimos ab? Ea sint voluptate cupiditate maxime dicta omnis! Officiis perferendis necessitatibus molestias possimus nesciunt qui tenetur dolores veniam fugit debitis, autem animi iste repellendus quidem repudiandae ut! Magni asperiores animi fugit eum laboriosam. Minus at rem itaque natus.</p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- card-3 --}}
            <div x-data="{ isOpen: false }" class="card">
                <div class="card-content relative card max-w-xs flex flex-col items-center justify-center  w-[32rem] rounded     shadow-md shadow-gray-600  transition delay-150 duration-300 ease-linear hover:scale-105 ">
                    <img class=" card-img w-full h-96 object-cover object-center rounded" src="{{asset('images/people/6.jpg')}}" alt="">
                    <div class="card-content-text absolute p-4 bottom-0 left-0 w-full bg-gray-800 opacity-95 rounded">

                        <div class="card--header flex items-center justify-between mb-2 ">
                            <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-wider">Mike Jordan</h1>
                            <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 hover:bg-indigo-600 rounded-full  transition-all">
                                <svg class="card-header__icon w-3 h-3 text-white  fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                </svg>
                            </button>
                        </div>
                        <p class="card-text capitalize text-sm text-gray-50 tracking-wide line-clamp-2 ">English-Turkish-Persian-Arabic Speakin Guide</p>
                    </div>
                </div>
                {{-- Modal --}}
                {{-- x-transition:enter="transition duration-300 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" aria-labelledby="modal-title" role="dialog" aria-modal="true" --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem]   p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content">
                        <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-widest text-center select-none">Mike Jordan</h1>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nulla tempora dignissimos ab? Ea sint voluptate cupiditate maxime dicta omnis! Officiis perferendis necessitatibus molestias possimus nesciunt qui tenetur dolores veniam fugit debitis, autem animi iste repellendus quidem repudiandae ut! Magni asperiores animi fugit eum laboriosam. Minus at rem itaque natus.</p>
                    </div>
                    {{-- Modal Button --}}
                    <button @click="isOpen = false" class="absolute top-3 right-4">
                        <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                    </button>
                </div>
            </div>
            {{-- More Button onclick --}}
            <div x-show="isShow" class="more flex flex-col md:flex-row md:flex-wrap justify-center items-center gap-12">
                {{-- card-1 --}}
                <div x-data="{ isOpen: false }" class="card">
                    <div class="card-content relative card max-w-xs flex flex-col items-center justify-center  w-[32rem] rounded     shadow-md shadow-gray-600  transition delay-150 duration-300 ease-linear hover:scale-105 ">
                        <img class=" card-img w-full h-96 object-cover object-center rounded" src="{{asset('images/people/6.jpg')}}" alt="">
                        <div class="card-content-text absolute p-4 bottom-0 left-0 w-full bg-gray-800 opacity-95 rounded">

                            <div class="card--header flex items-center justify-between mb-2 ">
                                <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-wider">Mike Jordan</h1>
                                <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 rounded-full hover:bg-indigo-700 transition-colors">
                                    <svg class="card-header__icon w-3 h-3 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="card-text capitalize text-sm text-gray-50 tracking-wide line-clamp-2 ">English-Turkish-Persian-Arabic Speakin Guide</p>
                        </div>
                    </div>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem]   p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto" x-transition:enter="transition duration-300 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        {{-- Modal Content --}}
                        <div class="modal-content">
                            <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-widest text-center select-none">Mike Jordan</h1>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nulla tempora dignissimos ab? Ea sint voluptate cupiditate maxime dicta omnis! Officiis perferendis necessitatibus molestias possimus nesciunt qui tenetur dolores veniam fugit debitis, autem animi iste repellendus quidem repudiandae ut! Magni asperiores animi fugit eum laboriosam. Minus at rem itaque natus.</p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpen = false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- card-2 --}}
                <div x-data="{ isOpen: false }" class="card">
                    <div class="card-content relative card max-w-xs flex flex-col items-center justify-center  w-[32rem] rounded     shadow-md shadow-gray-600  transition delay-150 duration-300 ease-linear hover:scale-105 ">
                        <img class=" card-img w-full h-96 object-cover object-center rounded" src="{{asset('images/people/6.jpg')}}" alt="">
                        <div class="card-content-text absolute p-4 bottom-0 left-0 w-full bg-gray-800 opacity-95 rounded">

                            <div class="card--header flex items-center justify-between mb-2 ">
                                <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-wider">Mike Jordan</h1>
                                <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 rounded-full hover:bg-indigo-700 transition-colors">
                                    <svg class="card-header__icon w-3 h-3 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="card-text capitalize text-sm text-gray-50 tracking-wide line-clamp-2 ">English-Turkish-Persian-Arabic Speakin Guide</p>
                        </div>
                    </div>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem]   p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto" x-transition:enter="transition duration-300 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        {{-- Modal Content --}}
                        <div class="modal-content">
                            <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-widest text-center select-none">Mike Jordan</h1>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nulla tempora dignissimos ab? Ea sint voluptate cupiditate maxime dicta omnis! Officiis perferendis necessitatibus molestias possimus nesciunt qui tenetur dolores veniam fugit debitis, autem animi iste repellendus quidem repudiandae ut! Magni asperiores animi fugit eum laboriosam. Minus at rem itaque natus.</p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpen = false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- card-3 --}}
                <div x-data="{ isOpen: false }" class="card">
                    <div class="card-content relative card max-w-xs flex flex-col items-center justify-center  w-[32rem] rounded     shadow-md shadow-gray-600  transition delay-150 duration-300 ease-linear hover:scale-105 ">
                        <img class=" card-img w-full h-96 object-cover object-center rounded" src="{{asset('images/people/6.jpg')}}" alt="">
                        <div class="card-content-text absolute p-4 bottom-0 left-0 w-full bg-gray-800 opacity-95 rounded">

                            <div class="card--header flex items-center justify-between mb-2 ">
                                <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-wider">Mike Jordan</h1>
                                <button @click="isOpen = true" class="flex  items-center justify-center p-2 bg-indigo-500 rounded-full hover:bg-indigo-700 transition-colors">
                                    <svg class="card-header__icon w-3 h-3 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                    </svg>
                                </button>
                            </div>
                            <p class="card-text capitalize text-sm text-gray-50 tracking-wide line-clamp-2 ">English-Turkish-Persian-Arabic Speakin Guide</p>
                        </div>
                    </div>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem]   p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto" x-transition:enter="transition duration-300 ease-out" x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in" x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100" x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        {{-- Modal Content --}}
                        <div class="modal-content">
                            <h1 class="card-header__name capitalize text-lg font-semibold text-white tracking-widest text-center select-none">Mike Jordan</h1>
                            <p class=" capitalize tracking-wider text-gray-200 select-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima nulla tempora dignissimos ab? Ea sint voluptate cupiditate maxime dicta omnis! Officiis perferendis necessitatibus molestias possimus nesciunt qui tenetur dolores veniam fugit debitis, autem animi iste repellendus quidem repudiandae ut! Magni asperiores animi fugit eum laboriosam. Minus at rem itaque natus.</p>
                        </div>
                        {{-- Modal Button --}}
                        <button @click="isOpen = false" class="absolute top-3 right-4">
                            <svg class="h-6 w-6 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        {{-- More Button --}}
        <div class="text-center my-8 ">
            <button x-show="!isShow" @click="isShow = !isShow" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium  ">Show More ...</button>
            <button x-show="isShow" @click="isShow = !isShow" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium">Okay, I Get The Point</button>
        </div>
    </section>
    <hr class="my-20">

    {{-- Transportation --}}

    <section class="transportation">

        <div class="transportation-text">
            <h1 class="transportation-text-subject text-center text-xl lg:text-3xl uppercase text-indigo-700 font-semibold">Transportation</h1>
            <p class="transportation-text-paragraph text-gray-600 tracking-wide text-center mb-8">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet suscipit aliquam eos reprehenderit autem, unde itaque tempore neque maiores hic?</p>
        </div>
        {{-- Cards --}}
        <div class="transportation-cards flex flex-col md:flex-row md:flex-wrap justify-center items-center gap-8">
            {{-- card1 --}}
            <div class="flex max-w-md max-h-48 overflow-hidden rounded-lg shadow-lg bg-gray-800">
                <div class="transportation-content-img w-1/3 ">
                    <img class=" object-fill h-full w-full" src="{{asset('images/cars/yutong-bus.webp')}}" alt="">
                </div>
                <div class="transportation-content-text   w-2/3 p-4 md:p-4">
                    <h1 class=" text-xl font-bold text-indigo-500 ">Yutong Bus</h1>
                    <div class="cars-properties flex flex-col  justify-center">
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Color: <span class=" text-sm text-gray-300">White</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Seats: <span class="text-sm text-gray-300">45</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume Engine: <span class="text-sm text-gray-300">7.81</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume of Luggage Trunk: <span class="text-sm text-gray-300">6.5m <sup>3</sup></span></span>
                    </div>
                </div>
            </div>

            {{-- card2 --}}
            <div class="flex max-w-md max-h-48 overflow-hidden rounded-lg shadow-lg bg-gray-800">
                <div class="transportation-content-img w-1/3 ">
                    <img class=" object-fill h-full w-full" src="{{asset('images/cars/toyota-hilux.webp')}}" alt="">
                </div>
                <div class="transportation-content-text   w-2/3 p-4 md:p-4">
                    <h1 class=" text-xl font-bold text-indigo-500 ">Toyota Hilux</h1>
                    <div class="cars-properties flex flex-col  justify-center">
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Color: <span class=" text-sm text-gray-300">White</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Seats: <span class="text-sm text-gray-300">3</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume Engine: <span class="text-sm text-gray-300">2.71</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume of Luggage Trunk: <span class="text-sm text-gray-300">6201</span></span>
                    </div>
                </div>
            </div>

            {{-- card3 --}}
            <div class="flex max-w-md max-h-48 overflow-hidden rounded-lg shadow-lg bg-gray-800">
                <div class="transportation-content-img w-1/3 ">
                    <img class=" object-fill h-full w-full" src="{{asset('images/cars/toyoto_hiace.webp')}}" alt="">
                </div>
                <div class="transportation-content-text   w-2/3 p-4 md:p-4">
                    <h1 class=" text-xl font-bold text-indigo-500 ">Toyota Hiace</h1>
                    <div class="cars-properties flex flex-col  justify-center">
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Color: <span class=" text-sm text-gray-300">White</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Seats: <span class="text-sm text-gray-300">14</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume Engine: <span class="text-sm text-gray-300">2.71</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume of Luggage Trunk: <span class="text-sm text-gray-300">1200</span></span>
                    </div>
                </div>
            </div>

            {{-- card4 --}}
            <div class="flex max-w-md max-h-48 overflow-hidden rounded-lg shadow-lg bg-gray-800">
                <div class="transportation-content-img w-1/3 ">
                    <img class=" object-fill h-full w-full" src="{{asset('images/cars/toyota-avalon.webp')}}" alt="">
                </div>
                <div class="transportation-content-text   w-2/3 p-4 md:p-4">
                    <h1 class=" text-xl font-bold text-indigo-500 ">Toyota Avalon</h1>
                    <div class="cars-properties flex flex-col  justify-center">
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Color: <span class=" text-sm text-gray-300">White</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Seats: <span class="text-sm text-gray-300">3</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume Engine: <span class="text-sm text-gray-300">3.31</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume of Luggage Trunk: <span class="text-sm text-gray-300">4101</span></span>
                    </div>
                </div>
            </div>

            {{-- card5 --}}
            <div class="flex max-w-md max-h-48 overflow-hidden rounded-lg shadow-lg bg-gray-800">
                <div class="transportation-content-img w-1/3 ">
                    <img class=" object-fill h-full w-full" src="{{asset('images/cars/toyota-sienna.webp')}}" alt="">
                </div>
                <div class="transportation-content-text   w-2/3 p-4 md:p-4">
                    <h1 class=" text-xl font-bold text-indigo-500 ">Toyota Sienna</h1>
                    <div class="cars-properties flex flex-col  justify-center">
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Color: <span class=" text-sm text-gray-300">White</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Seats: <span class="text-sm text-gray-300">5</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume Engine: <span class="text-sm text-gray-300">3.31</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume of Luggage Trunk: <span class="text-sm text-gray-300">9001</span></span>
                    </div>
                </div>
            </div>

            {{-- card6 --}}
            <div class="flex max-w-md max-h-48 overflow-hidden rounded-lg shadow-lg bg-gray-800">
                <div class="transportation-content-img w-1/3 ">
                    <img class=" object-fill h-full w-full" src="{{asset('images/cars/toyota-land-cruiser.webp')}}" alt="">
                </div>
                <div class="transportation-content-text   w-2/3 p-4 md:p-4">
                    <h1 class=" text-xl font-bold text-indigo-500 ">Toyota Land Cruiser</h1>
                    <div class="cars-properties flex flex-col  justify-center">
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Color: <span class=" text-sm text-gray-300">White</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Seats: <span class="text-sm text-gray-300">3</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume Engine: <span class="text-sm text-gray-300">2.71</span></span>
                        <span class="text-gray-50 font-semibold tracking-wide text-base">Volume of Luggage Trunk: <span class="text-sm text-gray-300">6201</span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-20">


    {{-- Comments --}}

    <section class="comment-contents">
        {{-- Comments Contents --}}
        <div class="comments-header mb-12">
            <h1 class="transportation-text-subject text-center text-xl lg:text-3xl uppercase text-indigo-700 font-semibold">Quality - Do Something Properly Even When No One Sees</h1>
        </div>

        {{-- Comment Cards --}}
        <div x-data="{ isShow: false }" class="comment-cards flex flex-col  gap-8">

            {{-- card1 --}}
            <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                <header class="comment-card__header flex flex-row items-center justify-between  ">
                    <div class="flex flex-row items-center gap-3">
                        <div class="comment-card__header__img">
                            <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                        </div>
                        <div class="comment-card__header__text">
                            <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                            <p class=" text-gray-500 font-medium">Remix & React Training</p>
                        </div>
                    </div>
                </header>

                <div class="comment-card__content mt-4">
                    <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, dolorem ut id magnam assumenda totam, non, quaerat aut voluptate voluptatum quis in. Saepe sint, iusto nobis, ea, repellendus amet minus excepturi assumenda mollitia dolor cum officia laboriosam recusandae! Quod, expedita doloribus vel corrupti fugit ullam corporis assumenda molestias sit doloremque, architecto reprehenderit aliquam ipsum obcaecati? Suscipit odit necessitatibus ullam corrupti.</p>
                </div>
            </div>

            {{-- card2 --}}
            <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                <header class="comment-card__header flex flex-row items-center justify-between  ">
                    <div class="flex flex-row items-center gap-3">
                        <div class="comment-card__header__img">
                            <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                        </div>
                        <div class="comment-card__header__text">
                            <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                            <p class=" text-gray-500 font-medium">Remix & React Training</p>
                        </div>
                    </div>
                </header>

                <div class="comment-card__content mt-4">
                    <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur,</p>
                </div>
            </div>

            {{-- card3 --}}
            <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                <header class="comment-card__header flex flex-row items-center justify-between  ">
                    <div class="flex flex-row items-center gap-3">
                        <div class="comment-card__header__img">
                            <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                        </div>
                        <div class="comment-card__header__text">
                            <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                            <p class=" text-gray-500 font-medium">Remix & React Training</p>
                        </div>
                    </div>
                </header>

                <div class="comment-card__content mt-4">
                    <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugiat cumque quaerat totam facere qui unde laborum asperiores possimus libero!</p>
                </div>
            </div>

            {{-- card4 --}}
            <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                <header class="comment-card__header flex flex-row items-center justify-between  ">
                    <div class="flex flex-row items-center gap-3">
                        <div class="comment-card__header__img">
                            <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                        </div>
                        <div class="comment-card__header__text">
                            <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                            <p class=" text-gray-500 font-medium">Remix & React Training</p>
                        </div>
                    </div>
                </header>

                <div class="comment-card__content mt-4">
                    <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugiat cumque quaerat totam facere qui unde laborum asperiores possimus libero!</p>
                </div>
            </div>

            {{-- card5 --}}
            <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                <header class="comment-card__header flex flex-row items-center justify-between  ">
                    <div class="flex flex-row items-center gap-3">
                        <div class="comment-card__header__img">
                            <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                        </div>
                        <div class="comment-card__header__text">
                            <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                            <p class=" text-gray-500 font-medium">Remix & React Training</p>
                        </div>
                    </div>
                </header>

                <div class="comment-card__content mt-4">
                    <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugiat cumque quaerat totam facere qui unde laborum asperiores possimus libero!</p>
                </div>
            </div>




            <div x-show="isShow" class="more-comments-cards flex flex-col gap-8">
                {{-- card6 --}}
                <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                    <header class="comment-card__header flex flex-row items-center justify-between  ">
                        <div class="flex flex-row items-center gap-3">
                            <div class="comment-card__header__img">
                                <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                            </div>
                            <div class="comment-card__header__text">
                                <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                                <p class=" text-gray-500 font-medium">Remix & React Training</p>
                            </div>
                        </div>
                    </header>

                    <div class="comment-card__content mt-4">
                        <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugiat cumque quaerat totam facere qui unde laborum asperiores possimus libero!</p>
                    </div>
                </div>

                {{-- card7 --}}
                <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                    <header class="comment-card__header flex flex-row items-center justify-between  ">
                        <div class="flex flex-row items-center gap-3">
                            <div class="comment-card__header__img">
                                <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                            </div>
                            <div class="comment-card__header__text">
                                <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                                <p class=" text-gray-500 font-medium">Remix & React Training</p>
                            </div>
                        </div>
                    </header>

                    <div class="comment-card__content mt-4">
                        <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugiat cumque quaerat totam facere qui unde laborum asperiores possimus libero!</p>
                    </div>
                </div>

                {{-- card8 --}}
                <div class="comment-card bg-gray-800 p-8 rounded-lg max-w-full ">
                    <header class="comment-card__header flex flex-row items-center justify-between  ">
                        <div class="flex flex-row items-center gap-3">
                            <div class="comment-card__header__img">
                                <img class="h-14 w-14 object-cover rounded-full " src="{{asset('images/people/6.jpg')}}" alt="">
                            </div>
                            <div class="comment-card__header__text">
                                <h1 class="comment-card__header__text__name text-gray-200 font-semibold text-lg">Ryan Florence</h1>
                                <p class=" text-gray-500 font-medium">Remix & React Training</p>
                            </div>
                        </div>
                    </header>

                    <div class="comment-card__content mt-4">
                        <p class="text-gray-200 tracking-wide ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem fugiat cumque quaerat totam facere qui unde laborum asperiores possimus libero!</p>
                    </div>
                </div>
            </div>

            {{-- More Cards Show Me Btn --}}
            <div class="more-comments-cards-show-me">
                <div class="text-center my-8 ">
                    <button x-show="!isShow" @click="isShow = !isShow" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium ">Show Comments More...</button>
                    <button x-show="isShow" @click="isShow = !isShow" class="px-8 py-2.5  text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-medium ">Okay, I Get The Point</button>
                </div>
            </div>
        </div>


    </section>








</main>
<hr class="mb-auto">
@endsection




@extends('layouts.front.footer')

@push('js')

<script>
    // $(document).ready(function(){
    //     $('.numbconterer').counterUp({
    //         delay:10,
    //         time:1200
    //     });
    // });
</script>

@endpush