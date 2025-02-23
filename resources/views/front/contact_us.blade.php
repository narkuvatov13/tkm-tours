@extends('layouts.front.app')
@extends('layouts.front.navigation')
@section('title',' Travel Info Tours')
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
            <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">Contact Us</h1>
        </div>
    </header>
</section>


{{-- Contact Us Content --}}

<main class="container p-10 mt-4">

    <section class="contact-us flex flex-col md:flex-row gap-8 ">

        <div class="contact-us__text md:w-1/2 space-y-8">
            {{-- Text Content --}}
            <div class="contact-us__text__paragraphs space-y-2">
                <h1 class=" md:text-2xl  text-indigo-700 font-medium  md:font-semibold">We're available 24 hours a day, 7 days a week.</h1>
                <p class="text-md text-gray-600 text-justify select-none tracking-wide">For tour operators*</p>
                <p class="text-md text-gray-600 text-justify select-none tracking-wide">Tour operators and travel agents interested in potential cooperation with Turkmenistan Tourism, can contact the Turkmenistan Tourism marketing management directly, at the following email address: <a href="#" class="text-indigo-500 hover:text-indigo-600 hover:underline hover:underline-offset-2 transition-colors">xxxxxxx@xxxxxgmail.com.</a></p>
                <p class="text-md text-gray-600 text-justify select-none tracking-wide">The marketing management will then be able to provide you with details on our various tours and travel services, contracting and payment terms and conditions, promotion materials for your company’s office and sales team.</p>
            </div>

            {{-- Adress Icon--}}
            <div class="contact-us__text__icons flex flex-col gap-6">

                <div class="contact-us__text__icon flex flex-row items-center gap-3">
                    <div class="contact-us__text__icons-icon bg-gray-800 dark:border w-fit p-4 rounded-lg">
                        <svg class="h-4 w-6 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z" />
                        </svg>
                    </div>
                    <div class="contact-us__text__icons-text">
                        <h1 class="text-xl text-gray-800 font-semibold">Adress</h1>
                        <p class="text-md text-gray-600 text-justify select-none tracking-wide">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione, quod!</p>
                    </div>
                </div>

                <div class="contact-us__text__icon flex flex-row items-center gap-3">
                    <div class="contact-us__text__icons-icon bg-gray-800 w-fit p-4 rounded-lg dark:border">
                        <svg class="h-4 w-6 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg>
                    </div>
                    <div class="contact-us__text__icons-text">
                        <h1 class="text-xl text-gray-800 font-semibold">Phone</h1>
                        <p class="text-md text-gray-600 text-justify select-none tracking-wide">+993xxxxxxxx</p>
                    </div>
                </div>

                <div class="contact-us__text__icon flex flex-row items-center gap-3">
                    <div class="contact-us__text__icons-icon bg-gray-800 w-fit p-4 rounded-lg dark:border">
                        <svg class="h-4 w-6 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 96" id="email">
                            <g data-name="Layer 2">
                                <path d="M0 11.283V8a8 8 0 0 1 8-8h112a8 8 0 0 1 8 8v3.283l-64 40zm66.12 48.11a4.004 4.004 0 0 1-4.24 0L0 20.717V88a8 8 0 0 0 8 8h112a8 8 0 0 0 8-8V20.717z"></path>
                            </g>
                        </svg>
                    </div>
                    <div class="contact-us__text__icons-text">
                        <h1 class="text-xl text-gray-800 font-semibold">Email</h1>
                        <p class="text-md text-gray-600 text-justify select-none tracking-wide">example@gmail.com</p>
                    </div>
                </div>
            </div>

        </div>
        {{-- Form Content --}}
        <div class="contact-us__form md:w-1/2 px-10 bg-gray-800 rounded-lg shadow-lg shadow-gray-500">

            <div class="contact-us__form-content p-4">
                <form action="#" method="#" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 mt-4 md:grid-cols-2">
                        <div>
                            {{-- <label class="text-gray-200" for="username">Username</label> --}}
                            <input id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="What is your name?">
                        </div>

                        <div>
                            <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Your email adress">
                        </div>

                        <div>
                            <input id="country" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Your country">
                        </div>

                        <div>
                            <input id="traveling_people_number" type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Number of people traveling">
                        </div>
                        <div class="col-span-2">
                            <input id="purpose" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="What is (are) the purpose(s) of your travel to Turkmenistan?">
                        </div>
                        <div class="col-span-2 space-y-6">

                            {{-- Visited Radio --}}
                            <div class="">
                                <label class="text-gray-300 font-medium text-md">Have you visited Turkmenistan before?</label>
                                <div class="flex flex-row items-center gap-4">
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="no" name="visit" class="w-4 h-4" checked>
                                        <label for="no" class="text-gray-300 text-md">No</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="yes" name="visit" class="w-4 h-4">
                                        <label for="yes" class="text-gray-300 text-md">Yes</label>
                                    </div>
                                </div>
                            </div>

                            {{-- form date --}}
                            <div x-data="{
                                        datePickerOpen: false,
                                        datePickerValue: '',
                                        datePickerFormat: 'M d, Y',
                                        datePickerMonth: '',
                                        datePickerYear: '',
                                        datePickerDay: '',
                                        datePickerDaysInMonth: [],
                                        datePickerBlankDaysInMonth: [],
                                        datePickerMonthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                                        datePickerDays: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                        datePickerDayClicked(day) {
                                        let selectedDate = new Date(this.datePickerYear, this.datePickerMonth, day);
                                        this.datePickerDay = day;
                                        this.datePickerValue = this.datePickerFormatDate(selectedDate);
                                        this.datePickerIsSelectedDate(day);
                                        this.datePickerOpen = false;
                                        },
                                        datePickerPreviousMonth(){
                                        if (this.datePickerMonth == 0) {
                                        this.datePickerYear--;
                                        this.datePickerMonth = 12;
                                        }
                                        this.datePickerMonth--;
                                        this.datePickerCalculateDays();
                                        },
                                        datePickerNextMonth(){
                                        if (this.datePickerMonth == 11) {
                                        this.datePickerMonth = 0;
                                        this.datePickerYear++;
                                        } else {
                                        this.datePickerMonth++;
                                        }
                                        this.datePickerCalculateDays();
                                        },
                                        datePickerIsSelectedDate(day) {
                                        const d = new Date(this.datePickerYear, this.datePickerMonth, day);
                                        return this.datePickerValue === this.datePickerFormatDate(d) ? true : false;
                                        },
                                        datePickerIsToday(day) {
                                        const today = new Date();
                                        const d = new Date(this.datePickerYear, this.datePickerMonth, day);
                                        return today.toDateString() === d.toDateString() ? true : false;
                                        },
                                        datePickerCalculateDays() {
                                        let daysInMonth = new Date(this.datePickerYear, this.datePickerMonth + 1, 0).getDate();
                                        // find where to start calendar day of week
                                        let dayOfWeek = new Date(this.datePickerYear, this.datePickerMonth).getDay();
                                        let blankdaysArray = [];
                                        for (var i = 1; i <= dayOfWeek; i++) {
                                        blankdaysArray.push(i);
                                        }
                                        let daysArray = [];
                                        for (var i = 1; i <= daysInMonth; i++) {
                                        daysArray.push(i);
                                        }
                                        this.datePickerBlankDaysInMonth = blankdaysArray;
                                        this.datePickerDaysInMonth = daysArray;
                                        },
                                        datePickerFormatDate(date) {
                                        let formattedDay = this.datePickerDays[date.getDay()];
                                        let formattedDate = ('0' + date.getDate()).slice(-2); // appends 0 (zero) in single digit date
                                        let formattedMonth = this.datePickerMonthNames[date.getMonth()];
                                        let formattedMonthShortName = this.datePickerMonthNames[date.getMonth()].substring(0, 3);
                                        let formattedMonthInNumber = ('0' + (parseInt(date.getMonth()) + 1)).slice(-2);
                                        let formattedYear = date.getFullYear();
                                        if (this.datePickerFormat === 'M d, Y') {
                                        return `${formattedMonthShortName} ${formattedDate}, ${formattedYear}`;
                                        }
                                        if (this.datePickerFormat === 'MM-DD-YYYY') {
                                        return `${formattedMonthInNumber}-${formattedDate}-${formattedYear}`;
                                        }
                                        if (this.datePickerFormat === 'DD-MM-YYYY') {
                                        return `${formattedDate}-${formattedMonthInNumber}-${formattedYear}`;
                                        }
                                        if (this.datePickerFormat === 'YYYY-MM-DD') {
                                        return `${formattedYear}-${formattedMonthInNumber}-${formattedDate}`;
                                        }
                                        if (this.datePickerFormat === 'D d M, Y') {
                                        return `${formattedDay} ${formattedDate} ${formattedMonthShortName} ${formattedYear}`;
                                        }
                                        return `${formattedMonth} ${formattedDate}, ${formattedYear}`;
                                        },
                                        }" x-init="
                                        currentDate = new Date();
                                        if (datePickerValue) {
                                        currentDate = new Date(Date.parse(datePickerValue));
                                        }
                                        datePickerMonth = currentDate.getMonth();
                                        datePickerYear = currentDate.getFullYear();
                                        datePickerDay = currentDate.getDay();
                                        datePickerValue = datePickerFormatDate( currentDate );
                                        datePickerCalculateDays();
                                        " x-cloak>
                                <div class="">
                                    <div class="w-full mb-5">
                                        <label for="datepicker" class="block mb-1  font-medium text-gray-300 text-md ">When do you intend to visit Turkmenistan?</label>
                                        <div class="relative">
                                            <input x-ref="datePickerInput" type="text" @click="datePickerOpen=!datePickerOpen" x-model="datePickerValue" x-on:keydown.escape="datePickerOpen=false" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Select date" readonly />
                                            <div @click="datePickerOpen=!datePickerOpen; if(datePickerOpen){ $refs.datePickerInput.focus() }" :class="{ 'text-gray-600 hover:text-gray-800' : !datePickerOpen, 'text-gray-800' : datePickerOpen }" class="absolute top-0 right-0 px-3 py-2 cursor-pointer">
                                                <svg class="w-6 h-6 stroke-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div x-show="datePickerOpen" x-transition @click.away="datePickerOpen = false" class="absolute top-0 left-0 max-w-lg p-4 mt-12 antialiased bg-white border-2 border-neutral-800 shadow w-[17rem] border-neutral-200/70">
                                                <div class="flex items-center justify-between mb-2">
                                                    <div>
                                                        <span x-text="datePickerMonthNames[datePickerMonth]" class="text-lg font-bold text-gray-800"></span>
                                                        <span x-text="datePickerYear" class="ml-1 text-lg font-normal text-gray-600"></span>
                                                    </div>
                                                    <div>
                                                        <button @click="datePickerPreviousMonth()" type="button" class="inline-flex p-1 transition duration-100 ease-in-out cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100">
                                                            <svg class="inline-flex w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                            </svg>
                                                        </button>
                                                        <button @click="datePickerNextMonth()" type="button" class="inline-flex p-1 transition duration-100 ease-in-out cursor-pointer focus:outline-none focus:shadow-outline hover:bg-gray-100">
                                                            <svg class="inline-flex w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-7 mb-3">
                                                    <template x-for="(day, index) in datePickerDays" :key="index">
                                                        <div class="px-0.5">
                                                            <div x-text="day" class="text-xs font-medium text-center text-gray-800"></div>
                                                        </div>
                                                    </template>
                                                </div>
                                                <div class="grid grid-cols-7">
                                                    <template x-for="blankDay in datePickerBlankDaysInMonth">
                                                        <div class="p-1 text-sm text-center border border-transparent"></div>
                                                    </template>
                                                    <template x-for="(day, dayIndex) in datePickerDaysInMonth" :key="dayIndex">
                                                        <div class="px-0.5 mb-1 aspect-square">
                                                            <div x-text="day" @click="datePickerDayClicked(day)" :class="{
                                                                    'bg-neutral-200': datePickerIsToday(day) == true,
                                                                    'text-gray-600 hover:bg-neutral-200': datePickerIsToday(day) == false && datePickerIsSelectedDate(day) == false,
                                                                    'bg-neutral-800 text-white hover:bg-opacity-75': datePickerIsSelectedDate(day) == true
                                                                    }" class="flex items-center justify-center text-sm leading-none text-center cursor-pointer h-7 w-7">
                                                            </div>
                                                        </div>
                                                    </template>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--How Many Days --}}
                            <div>
                                <label class="text-gray-200" for="username">How many days do you wish to spend in Tukmenistan?</label>
                                <input type="number" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="">
                            </div>

                            {{-- Where do you plan to enter Turkmenistan--}}
                            <div class="flex flex-col gap-1">
                                <label class="text-gray-200" for="username">Where do you plan to enter Turkmenistan?</label>
                                <select name="enter" id="" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    <option value="">
                                        Ashgabat Airport
                                    </option>
                                    <option value="">
                                        Farap border post (Turkmen-Uzbek border)
                                    </option>
                                    <option value="">
                                        Garabogaz border post (Turkmen-Kazakh border)
                                    </option>
                                    <option value="">
                                        Gaudan border post (Turkmen-Iranian border)
                                    </option>
                                    <option value="">
                                        Gudurolum border post
                                    </option>
                                    <option value="">
                                        Khojeyli border post (Turkmen-Uzbek border)
                                    </option>
                                    <option value="">
                                        Serags border post (Turkmen-Iranian border)
                                    </option>
                                    <option value="">
                                        Shavat border post (Turkmen-Uzbek border)
                                    </option>
                                    <option value="">
                                        Turkmenbashi harbor (Turkmen-Azarbaijan border)
                                    </option>
                                </select>
                            </div>


                            {{--Where do you plan to exit Turkmenistan--}}
                            <div class="flex flex-col gap-1">
                                <label class="text-gray-200" for="username">Where do you plan to exit Turkmenistan?</label>
                                <select name="exit" id="" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                                    <option value="">
                                        Ashgabat Airport
                                    </option>
                                    <option value="">
                                        Farap border post (Turkmen-Uzbek border)
                                    </option>
                                    <option value="">
                                        Garabogaz border post (Turkmen-Kazakh border)
                                    </option>
                                    <option value="">
                                        Gaudan border post (Turkmen-Iranian border)
                                    </option>
                                    <option value="">
                                        Gudurolum border post
                                    </option>
                                    <option value="">
                                        Khojeyli border post (Turkmen-Uzbek border)
                                    </option>
                                    <option value="">
                                        Serags border post (Turkmen-Iranian border)
                                    </option>
                                    <option value="">
                                        Shavat border post (Turkmen-Uzbek border)
                                    </option>
                                    <option value="">
                                        Turkmenbashi harbor (Turkmen-Azarbaijan border)
                                    </option>
                                </select>
                            </div>

                            {{-- What is your preferred type of accommodation --}}
                            <div class="accommodation">
                                <label class="text-gray-300 font-medium text-md">What is your preferred type of accommodation?</label>
                                <div class="flex flex-row items-center gap-4">
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="hotel" name="accommodation" class="w-4 h-4" checked>
                                        <label for="hotel" class="text-gray-300 text-md">Hotel</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="camping" name="accommodation" class="w-4 h-4">
                                        <label for="camping" class="text-gray-300 text-md">Camping</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="combination" name="accommodation" class="w-4 h-4">
                                        <label for="combination" class="text-gray-300 text-md">Combination</label>
                                    </div>
                                </div>
                            </div>

                            {{-- What hotel category do you prefer --}}
                            <div class="hotel_prefer">
                                <label class="text-gray-300 font-medium text-md">What is your preferred type of accommodation?</label>
                                <div class="flex flex-row items-center gap-4">
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="budget" name="hotel_prefer" class="w-4 h-4" checked>
                                        <label for="budget" class="text-gray-300 text-md">Budget</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="standart" name="hotel_prefer" class="w-4 h-4">
                                        <label for="standart" class="text-gray-300 text-md">Standart</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="comfort" name="hotel_prefer" class="w-4 h-4">
                                        <label for="comfort" class="text-gray-300 text-md">Comfort</label>
                                    </div>
                                </div>
                            </div>

                            {{-- What meal plan do you prefer --}}
                            <div class="meal_prefer">
                                <label class="text-gray-300 font-medium text-md">What meal plan do you prefer?</label>
                                <div class="flex flex-row items-center gap-4">
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="bad_and_breakfast" name="meal_prefer" class="w-4 h-4" checked>
                                        <label for="bad_and_breakfast" class="text-gray-300 text-md">Bed and breakfast</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="lunch" name="meal_prefer" class="w-4 h-4">
                                        <label for="lunch" class="text-gray-300 text-md">Lunch only</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="dinner" name="meal_prefer" class="w-4 h-4">
                                        <label for="dinner" class="text-gray-300 text-md">Dinner Only</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="full_board" name="meal_prefer" class="w-4 h-4">
                                        <label for="full_board" class="text-gray-300 text-md">Full board</label>
                                    </div>
                                </div>
                            </div>

                            {{-- What type of transport do you prefer --}}
                            <div class="transport_prefer">
                                <label class="text-gray-300 font-medium text-md">What type of transport do you prefer?</label>
                                <div class="flex flex-row items-center gap-4">
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="road" name="transport_prefer" class="w-4 h-4" checked>
                                        <label for="road" class="text-gray-300 text-md">Road</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="air" name="transport_prefer" class="w-4 h-4">
                                        <label for="air" class="text-gray-300 text-md">Air</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="off_road" name="transport_prefer" class="w-4 h-4">
                                        <label for="off_road" class="text-gray-300 text-md">Off-road</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="train" name="transport_prefer" class="w-4 h-4">
                                        <label for="train" class="text-gray-300 text-md">Train</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="radio" id="transport_combination" name="transport_prefer" class="w-4 h-4">
                                        <label for="transport_combination" class="text-gray-300 text-md">Combination</label>
                                    </div>
                                </div>
                            </div>

                            {{-- What language do you prefer on guided excursions --}}
                            <div class="language_prefer">
                                <label class="text-gray-300 font-medium text-md">What language do you prefer on guided excursions ?</label>
                                <div class="flex flex-row flex-wrap items-center gap-4">
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="checkbox" id="english" name="english" class="w-4 h-4" checked>
                                        <label for="english" class="text-gray-300 text-md">English</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="checkbox" id="chinese" name="chinese" class="w-4 h-4">
                                        <label for="chinese" class="text-gray-300 text-md">Chinese</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="checkbox" id="spanish" name="spanish" class="w-4 h-4">
                                        <label for="spanish" class="text-gray-300 text-md">Spanish</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="checkbox" id="portuguese" name="portuguese" class="w-4 h-4">
                                        <label for="portuguese" class="text-gray-300 text-md">Portuguese</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="checkbox" id="german" name="german" class="w-4 h-4">
                                        <label for="german" class="text-gray-300 text-md">German</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="checkbox" id="french" name="french" class="w-4 h-4">
                                        <label for="french" class="text-gray-300 text-md">French</label>
                                    </div>
                                    <div class="flex flex-row items-center gap-1">
                                        <input type="checkbox" id="persian" name="persian" class="w-4 h-4">
                                        <label for="persian" class="text-gray-300 text-md">Persian</label>
                                    </div>

                                </div>
                            </div>

                            {{-- Are there any other comments that can help us prepare appropriate feedback to you --}}
                            <div class="">
                                <textarea name="appropriate_feedback" id="" cols="30" rows="5" class="block resize-y w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring" placeholder="Are there any other comments that can help us prepare appropriate feedback to you"></textarea>
                            </div>

                            <div class="flex justify-end mt-6">
                                <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Send Message</button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </section>
</main>


@endsection




@extends('layouts.front.footer')

@push('js')

<script>

</script>

@endpush