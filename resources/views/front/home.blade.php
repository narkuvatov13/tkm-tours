@extends('layouts.front.app')
@extends('layouts.front.navigation')
@section('title', 'Türmenistan Tours')

@section('content')
    <main class="main">
        {{-- First Landing Page --}}
        <section class="h-screen w-full shadow border-b-8 ">
            <div
                class="landing-page-img h-screen w-full  bg-cover bg-no-repeat bg-center text-center flex flex-col justify-center items-center ">
            </div>
            <div
                class=" flex flex-col justify-center items-center absolute top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4">
                <h1
                    class="landing-page-img__subject uppercase text-2xl md:text-6xl font-semibold text-gray-200 select-none">
                    Explore Dream
                </h1>
                <h1
                    class="landing-page-img__subject uppercase text-2xl md:text-6xl font-semibold text-gray-200 select-none">
                    Destinition</h1>
                <p class="landing-page-img__paragraph max-w-fit w-96 text-sm text-gray-200 mb-6 select-none">
                    Your Perfect Tour In Turkmenistan Starts Here
                </p>
                <a href="#"
                    class="px-8 py-4 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600 text-lg font-semibold ">Book
                    A Tour</a>
            </div>
        </section>

        {{-- Content --}}
        <div class="content px-4 md:px-36">


            {{-- Second Page Us Information --}}
            <section class="more-about-us bg-[#fff] mt-20">
                <div class="flex flex-col justify-center items-center md:flex-row md:gap-20">
                    <div class="h-full mb-3 md:w-1/2">
                        <img class="h-[12.5rem] w-screen md:h-[31.25rem] md:w-full object-cover shadow-md shadow-gray-600 rounded"
                            src="{{asset('images/2.jpg')}}" alt="">
                    </div>
                    <div class="md:w-1/2">
                        <h1 class="m-2 text-center text-3xl uppercase text-indigo-700 font-semibold">Make the most of your
                        </h1>
                        <h1 class="m-2 text-center text-xl uppercase text-indigo-700 font-semibold">travel with us!</h1>

                        <p class="text-md text-gray-600 text-justify select-none tracking-wide">
                            Welcome to the renewed website of Turkmenistan Tourism.
                            We are one of the oldest and largest agencies in existence in Turkmenistan: since 1996 we have
                            been working continuously to improve, expand and innovate our services and make travel to
                            Turkmenistan accessible for travelers with diverse interests, comfort requirements, time and
                            budget limitations. In low season periods, our team travels through Turkmenistan in search of
                            new exciting destinations, as well as stay on top of new developments in well-traveled parts of
                            our country.
                        </p>
                        <hr class="my-2 border border-indigo-500 max-w-8 w-16">
                        <p class="text-md text-gray-600 text-justify select-none tracking-wide">
                            Our services are aimed at giving you the unique travel experience that you are looking for on
                            your journey through Turkmenistan, ranging from short 3-day classical cultural tours to 15-day
                            active and adventure journeys. You can opt for our fixed service package on one of our fixed
                            departure tours, or compose a tailor-made program with the support of our team, that fits your
                            particular interests.
                        </p>
                    </div>
                </div>
            </section>

            {{-- Tours --}}
            <section class="tours mt-20">
                <h1 class="text-center text-2xl uppercase font-semibold p-4 mb-8 text-indigo-700">Tours</h1>
                <div class="tour-cards flex flex-col items-center gap-4 flex-wrap md:flex-row  ">


                    @foreach($tours as $tour)
                        @if($loop->iteration <= 6)
                            <div
                                class="w-full max-w-[24.8rem] min-h-[25rem]  bg-white rounded shadow transition ease-linear delay-75  hover:-translate-y-1 hover:scale-105 duration-200">
                                <img class="object-cover w-full h-56" src="{{asset('storage/' . $tour->tour_img)}}"
                                    alt="tour image">
                                <div class="flex items-center px-6 py-3 bg-gray-800">
                                    <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-500 fill-current"
                                        viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                    </svg>
                                    <a href="https://www.google.com/maps/place/Dashoguz/@41.827586,59.9370288,15z/data=!4m6!3m5!1s0x41de6896264d2475:0x8314c6ef35c7a218!8m2!3d41.8368737!4d59.9651904!16zL20vMDc1Z2Nw?entry=ttu"
                                        target="__blank">
                                        <h1 class="mx-3 text-lg font-semibold text-white  hover:underline hover:transition-all">
                                            {{$tour->tour_location_title}}
                                        </h1>
                                    </a>
                                </div>

                                <div class="px-6 py-4">
                                    <a href="{{route('home.tours.show', $tour->id)}}"
                                        class="text-xl font-semibold text-indigo-500 hover:text-indigo-700 hover:transition-colors">{{$tour->tour_title}}</a>
                                    <p class="py-2 text-gray-500 overflow-hidden">{{Str::limit($tour->tour_text, 80)}}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </section>
            <hr class="my-10">


            {{-- Counter --}}
            <section class="counter my-36">
                <div class="counter_cards flex flex-col justify-around gap-2 md:flex-row  md:gap-8">

                    <div
                        class="counter_card p-16 m-auto w-3/4 md:w-1/4 flex flex-wrap flex-col justify-center items-center space-y-2 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                        <div class="counter_card__icon">
                            <svg class="h-16 w-16 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z" />
                            </svg>
                        </div>
                        <div class="counter_card__number">
                            <h1 class="number text-gray-100 text-5xl font-extrabold">+125</h1>
                        </div>
                        <p class=" text-gray-300 text-lg">Team Members</p>
                    </div>

                    <div
                        class="counter_card p-16 md:translate-y-8 m-auto w-3/4 md:w-1/4  flex flex-wrap flex-col justify-center items-center space-y-2 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                        <div class="counter_card__icon">
                            <svg class="h-16 w-16 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z" />
                            </svg>

                        </div>
                        <div class="counter_card__number">
                            <h1 class="number text-gray-100 text-5xl font-extrabold">+2000</h1>
                        </div>
                        <p class=" text-gray-300 text-lg">Happy Clients</p>
                    </div>

                    <div
                        class="counter_card p-16 m-auto w-3/4 md:w-1/4 flex flex-wrap flex-col justify-center items-center space-y-2 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                        <div class="counter_card__icon">
                            <svg class="h-16 w-16 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                            </svg>
                        </div>
                        <div class="counter_card__number">
                            <h1 class="number text-gray-100 text-5xl font-extrabold">15</h1>
                        </div>
                        <p class=" text-gray-300 text-lg">Unique Tours</p>
                    </div>

                    <div
                        class="counter_card p-16 md:translate-y-8 m-auto w-3/4 md:w-1/4 flex flex-wrap flex-col justify-center items-center space-y-2 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                        <div class="counter_card__icon">
                            <svg class="h-16 w-16 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M75 75L41 41C25.9 25.9 0 36.6 0 57.9V168c0 13.3 10.7 24 24 24H134.1c21.4 0 32.1-25.9 17-41l-30.8-30.8C155 85.5 203 64 256 64c106 0 192 86 192 192s-86 192-192 192c-40.8 0-78.6-12.7-109.7-34.4c-14.5-10.1-34.4-6.6-44.6 7.9s-6.6 34.4 7.9 44.6C151.2 495 201.7 512 256 512c141.4 0 256-114.6 256-256S397.4 0 256 0C185.3 0 121.3 28.7 75 75zm181 53c-13.3 0-24 10.7-24 24V256c0 6.4 2.5 12.5 7 17l72 72c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-65-65V152c0-13.3-10.7-24-24-24z" />
                            </svg>
                        </div>
                        <div class="counter_card__number">
                            <h1 class="number text-gray-100 text-5xl font-extrabold">25</h1>
                        </div>
                        <p class=" text-gray-300 text-lg">Years of Work</p>
                    </div>

                </div>
            </section>

            <hr class="my-5">

            {{--Choose Perfect Vocation --}}
            <section class="mt-24">
                <div class="flex flex-col justify-center items-center  md:flex-row md:gap-16">
                    <div
                        class="p-8 bg-gray-800 rounded-lg shadow-black flex flex-col justify-center items-center mb-4  md:shadow-2xl  md:w-2/4 ">
                        <h1 class="text-center text-2xl  uppercase text-gray-200 font-semibold md:text-6xl">We will help you
                            choose the perfect vacation!</h1>
                        <p class="text-sm text-gray-200">We will certainly take into account any wishes and can help you
                            with the choice of rest or try something new!</p>
                        <p class="text-sm text-gray-200">Any destinations of rest are waiting for you!</p>
                    </div>

                    <div class="choose_vocation_cards flex flex-col md:flex-row flex-wrap justify-between gap-4">
                        <div
                            class="choose_vocation_card p-8 w-fit  flex flex-col grow justify-center items-center gap-2 rounded-lg shadow transition ease-linear delay-150  hover:-translate-y-1 hover:scale-105 duration-300">
                            <a href="#" class="w-fit rounded-full">
                                <div
                                    class=" choose_vocation_icon p-6 border rounded-full bg-indigo-500 hover:bg-indigo-700 hover:transition-colors">
                                    <svg class="h-12 w-12 fill-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <p
                                    class="choose_vocation_title text-gray-600 text-lg font-bold hover:text-gray-800 hover:transition-colors">
                                    Planning</p>
                            </a>
                            <h1 class="choose_vocation_text text-gray-600">Contact us in any way convenient for you</h1>
                        </div>
                        <div
                            class="choose_vocation_card p-8 w-fit  flex flex-col grow justify-center items-center gap-2 rounded-lg shadow transition ease-linear delay-150  hover:-translate-y-1 hover:scale-105 duration-300 ">
                            <a href="#" class="w-fit rounded-full">
                                <div
                                    class=" choose_vocation_icon p-6 border rounded-full bg-indigo-500 hover:bg-indigo-700 hover:transition-colors ">
                                    <svg class="h-12 w-12 fill-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zm50.7-186.9L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <p
                                    class="choose_vocation_title text-gray-600 text-lg font-bold hover:text-gray-800 hover:transition-colors">
                                    Tour Selection</p>
                            </a>
                            <h1 class="choose_vocation_text text-gray-600">Contact us in any way convenient for you</h1>
                        </div>
                        <div
                            class="choose_vocation_card p-8 w-fit flex flex-col grow  justify-center items-center gap-2 rounded-lg  shadow transition ease-linear delay-150  hover:-translate-y-1 hover:scale-105 duration-300">
                            <a href="#" class="w-fit rounded-full">
                                <div
                                    class=" choose_vocation_icon p-6 border rounded-full bg-indigo-500 hover:bg-indigo-700 hover:transition-colors">
                                    <svg class="h-12 w-12 fill-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 640 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M208 352c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176c0 38.6 14.7 74.3 39.6 103.4c-3.5 9.4-8.7 17.7-14.2 24.7c-4.8 6.2-9.7 11-13.3 14.3c-1.8 1.6-3.3 2.9-4.3 3.7c-.5 .4-.9 .7-1.1 .8l-.2 .2 0 0 0 0C1 327.2-1.4 334.4 .8 340.9S9.1 352 16 352c21.8 0 43.8-5.6 62.1-12.5c9.2-3.5 17.8-7.4 25.3-11.4C134.1 343.3 169.8 352 208 352zM448 176c0 112.3-99.1 196.9-216.5 207C255.8 457.4 336.4 512 432 512c38.2 0 73.9-8.7 104.7-23.9c7.5 4 16 7.9 25.2 11.4c18.3 6.9 40.3 12.5 62.1 12.5c6.9 0 13.1-4.5 15.2-11.1c2.1-6.6-.2-13.8-5.8-17.9l0 0 0 0-.2-.2c-.2-.2-.6-.4-1.1-.8c-1-.8-2.5-2-4.3-3.7c-3.6-3.3-8.5-8.1-13.3-14.3c-5.5-7-10.7-15.4-14.2-24.7c24.9-29 39.6-64.7 39.6-103.4c0-92.8-84.9-168.9-192.6-175.5c.4 5.1 .6 10.3 .6 15.5z" />
                                    </svg>
                                </div>
                            </a>
                            <a href="#">
                                <p
                                    class="choose_vocation_title text-gray-600 text-lg font-bold hover:text-gray-800 hover:transition-colors">
                                    Contact Us</p>
                            </a>
                            <h1 class="choose_vocation_text text-gray-600">Contact us in any way convenient for you</h1>
                        </div>
                    </div>

                </div>
            </section>

            {{--Populer Comments --}}
            <section class="my-24">
                <div class="text-center mb-8">
                    <h1 class="text-center text-2xl uppercase text-indigo-700 font-semibold"> Personals Populer Comments
                    </h1>
                    <p class="text-lg text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum
                        eligendi aliquam, voluptatibus nam nihil sunt!</p>
                </div>
                <div class="cards flex flex-col md:flex-row justify-around gap-4  md:gap-8">
                    <div
                        class="card bg-gray-800 flex flex-col justify-center items-center   md:w-1/3 p-8 rounded-lg border-b-8 border-indigo-500 shadow-lg shadow-indigo-500">
                        <img class="object-cover w-24 h-24 mb-4 shadow rounded-full border-4 border-indigo-500"
                            src="{{asset('images/people/1.jpg')}}" alt="">
                        <p class="person_comment  text-sm text-white italic mb-4">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Dicta eveniet ab id nihil quibusdam distinctio debitis asperiores, vero animi
                            dolorem aspernatur laudantium qui eum accusantium expedita atque fugiat modi? Ipsam totam rerum
                        </p>
                        <h1 class="person_name text-white text-xl font-semibold">Nathan Taylor</h1>
                    </div>
                    <div
                        class="card bg-gray-800 md:translate-y-8 flex flex-col justify-center items-center   md:w-1/3 p-8 rounded-lg border-b-8 border-indigo-500 shadow-lg shadow-indigo-500">
                        <img class="object-cover w-24 h-24 mb-4 shadow rounded-full border-4 border-indigo-500"
                            src="{{asset('images/people/2.jpg')}}" alt="">
                        <p class="person_comment  text-sm text-white italic mb-4">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Dicta eveniet ab id nihil quibusdam distinctio debitis asperiores, vero animi
                            dolorem aspernatur laudantium qui eum accusantium expedita atque fugiat modi? Ipsam totam rerum
                        </p>
                        <h1 class="person_name text-white text-xl font-semibold">Nathan Taylor</h1>
                    </div>
                    <div
                        class="card bg-gray-800 flex flex-col justify-center items-center   md:w-1/3 p-8 rounded-lg border-b-8 border-indigo-500 shadow-lg shadow-indigo-500">
                        <img class="object-cover w-24 h-24 mb-4 shadow rounded-full border-4 border-indigo-500"
                            src="{{asset('images/people/3.jpg')}}" alt="">
                        <p class="person_comment  text-sm text-white italic mb-4">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Dicta eveniet ab id nihil quibusdam distinctio debitis asperiores, vero animi
                            dolorem aspernatur laudantium qui eum accusantium expedita atque fugiat modi? Ipsam totam rerum
                        </p>
                        <h1 class="person_name text-white text-xl font-semibold">Nathan Taylor</h1>
                    </div>
                </div>
            </section>
        </div>



    </main>
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
