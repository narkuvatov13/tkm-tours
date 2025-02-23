@extends('layouts.front.app')
@extends('layouts.front.navigation')
@section('title',' Services')
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
            <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">Services</h1>
        </div>
    </header>
</section>

<main class="container p-10">

    {{-- Services --}}
    <section class="services">
        <div class="services_cards grid grid-cols-1 md:grid-cols-3  gap-2  md:gap-8">

            {{-- Tailor-made programs --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zM329 305c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-95 95-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L329 305z" />
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">Tailor-made programs</h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">Our tailor-made programs are fully personalized to your specific interests and travel wishes: services are privately arranged for you or your group.</p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Tailor-made programs are fully personalized to your specific interests and travel wishes: services are privately arranged for you or your group. While visa support, accommodation and transportation are compulsory components of such programs, they allow for flexibility in tour duration (from 2 to 20 days), in accommodation comfort levels (from camp arrangements to 5-star hotel room reservations), in means of transport (from off-road jeep safari transport, to road travel, and train and air travel), in meal arrangements (bed and breakfast, half board or full board meal services), and in guide and interpretation services (fully guided tours, local excursions or non-guided leisure). Programs can be completely adjusted to your wishes with the help of the advice of our sales team. Tailor-made programs are also available from our sales team for groups with special interests, such as:
                            </p>
                            <ul class=" ml-16 mt-4 list-disc text-indigo-600 font-semibold ">
                                <li>Archeology</li>
                                <li>Arts and Crafts</li>
                                <li>Geology</li>
                                <li>Bird watching</li>
                                <li>Flowers and flora</li>
                                <li>Horse riding</li>
                                <li>Hiking and trekking</li>
                            </ul>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                Please note that no specialized guides are available for the first 5 above-mentioned programs, and therefore you will need to bring your own expertise on such tours, in the form of specialized or trained staff or literature. Of course, horse riding and hiking and trekking tours will be accompanied by appropriately trained staff.
                            </p>
                            <p class="tracking-wider text-gray-200 select-none">
                                Last but not least, Turkmenistan Tourism is also able to arrange services for your onward travel through Uzbekistan, and able to advice on service support for travel through Iran, Kazakhstan, Kyrgyzstan and Tajikistan.
                            </p>
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

            {{-- Tour guide and excursions --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 fill-gray-100" viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm82.29 357.6c-3.9 3.88-7.99 7.95-11.31 11.28-2.99 3-5.1 6.7-6.17 10.71-1.51 5.66-2.73 11.38-4.77 16.87l-17.39 46.85c-13.76 3-28 4.69-42.65 4.69v-27.38c1.69-12.62-7.64-36.26-22.63-51.25-6-6-9.37-14.14-9.37-22.63v-32.01c0-11.64-6.27-22.34-16.46-27.97-14.37-7.95-34.81-19.06-48.81-26.11-11.48-5.78-22.1-13.14-31.65-21.75l-.8-.72a114.792 114.792 0 0 1-18.06-20.74c-9.38-13.77-24.66-36.42-34.59-51.14 20.47-45.5 57.36-82.04 103.2-101.89l24.01 12.01C203.48 89.74 216 82.01 216 70.11v-11.3c7.99-1.29 16.12-2.11 24.39-2.42l28.3 28.3c6.25 6.25 6.25 16.38 0 22.63L264 112l-10.34 10.34c-3.12 3.12-3.12 8.19 0 11.31l4.69 4.69c3.12 3.12 3.12 8.19 0 11.31l-8 8a8.008 8.008 0 0 1-5.66 2.34h-8.99c-2.08 0-4.08.81-5.58 2.27l-9.92 9.65a8.008 8.008 0 0 0-1.58 9.31l15.59 31.19c2.66 5.32-1.21 11.58-7.15 11.58h-5.64c-1.93 0-3.79-.7-5.24-1.96l-9.28-8.06a16.017 16.017 0 0 0-15.55-3.1l-31.17 10.39a11.95 11.95 0 0 0-8.17 11.34c0 4.53 2.56 8.66 6.61 10.69l11.08 5.54c9.41 4.71 19.79 7.16 30.31 7.16s22.59 27.29 32 32h66.75c8.49 0 16.62 3.37 22.63 9.37l13.69 13.69a30.503 30.503 0 0 1 8.93 21.57 46.536 46.536 0 0 1-13.72 32.98zM417 274.25c-5.79-1.45-10.84-5-14.15-9.97l-17.98-26.97a23.97 23.97 0 0 1 0-26.62l19.59-29.38c2.32-3.47 5.5-6.29 9.24-8.15l12.98-6.49C440.2 193.59 448 223.87 448 256c0 8.67-.74 17.16-1.82 25.54L417 274.25z" />
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">Tour guide and excursions</h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">Turkmenistan Tourism has its own guides who have been trained and licensed by the Tourism Committee of Turkmenistan and work in different languages.</p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Due to the limited volume and detail of foreign-language information available about places to visit in Turkmenistan, both locally as well as abroad, Turkmenistan Tourism employs its own guides. Various guides have been trained and licensed by the Turkmenistan Tourism Committee, and work in various languages:
                            </p>
                            <ul class=" ml-16 mt-4 list-disc text-indigo-600 font-semibold ">
                                <li>English</li>
                                <li>German</li>
                                <li>French</li>
                                <li>Spanish</li>
                                <li>Italian</li>
                                <li>Chinese</li>
                                <li>Turkish</li>
                                <li>Arabic</li>
                                <li>Japanese</li>
                            </ul>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                Guides have been trained in particular on providing excursions in Ashgabat, Merw (UNESCO), Kunya Urgench (UNESCO) and Nissa (UNESCO), and the various cultural characteristics that are reflected in Turkmenistan today.
                            </p>
                            <p class="tracking-wider text-gray-200 select-none">
                                Turkmenistan Tourism offers fully guided tours, which means that a guide can accompany travelers on an entire route, both on transfers from one location to another, as well as during site visits, where excursions are taking place. Alternatively, local guides can be requested selectively, for excursions in Ashgabat (for city tours and day trips from Ashgabat), Mary (for trips to Merw, Gonur Depe or Talkhatan Baba) or Dashoguz (for trips to Kunya Urgench and Yzmukshir) only.
                            </p>
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

            {{-- Transportation and ticketing --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M135.2 117.4L109.1 192H402.9l-26.1-74.6C372.3 104.6 360.2 96 346.6 96H165.4c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32H346.6c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2V400v48c0 17.7-14.3 32-32 32H448c-17.7 0-32-14.3-32-32V400H96v48c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V400 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z" />
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">Transportation and ticketing</h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">Turkmenistan Tourism owns a wide variety of vehicles, and employs its own drivers, in order to offer safe, clean and comfortable overland travel.</p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Turkmenistan Tourism owns a wide variety of vehicles, and employs its own drivers, in order to offer safe, clean and comfortable overland travel. Our car park in Ashgabat consists of city cars, minivans, SUV’s, jeeps, minibuses and touring cars. At our car parks in Mary and Dashoguz towns several more vehicles are located.
                            </p>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                We also arrange for your domestic train or air tickets. Even though our agency is based in Ashgabat, ticketing services are offered on all routes in Turkmenistan, irrespective of the departure point of such train journeys or flights.
                            </p>

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

            {{-- Support to overland expeditions and rallies --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M256 32H181.2c-27.1 0-51.3 17.1-60.3 42.6L3.1 407.2C1.1 413 0 419.2 0 425.4C0 455.5 24.5 480 54.6 480H256V416c0-17.7 14.3-32 32-32s32 14.3 32 32v64H521.4c30.2 0 54.6-24.5 54.6-54.6c0-6.2-1.1-12.4-3.1-18.2L455.1 74.6C446 49.1 421.9 32 394.8 32H320V96c0 17.7-14.3 32-32 32s-32-14.3-32-32V32zm64 192v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V224c0-17.7 14.3-32 32-32s32 14.3 32 32z" />
                        </svg>

                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">Support to overland expeditions and rallies
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    Turkmenistan Tourism offers accommodation, transportation and guide services for expatriates, and can also put together a variety of short trips to various destinations.
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Although travelers arriving in Turkmenistan on a Transit Visa do not require visa support or Letters of Invitation from a local travel agency, they may wish to contact us for transport or accommodation services, or local excursions at sites located on their way from one land border to the next. Please contact us directly for more information, and terms and conditions of service agreements and payment.
                            </p>

                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                Please note that Turkmenistan Tourism is unable to facilitate Transit Visa support: transit visas must be applied for directly by travelers at a Turkmen Embassy abroad. For more information about the pros and cons of a Transit Visa versus a Tourist Visa, contact us directly
                            </p>

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

            {{-- Expatriates travel support --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 " viewBox="0 -0.5 17 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g class="fill-gray-100" transform="translate(1.000000, 0.000000)">
                                    <g transform="translate(0.000000, 2.000000)">
                                        <path d="M8.005,10.094 C6.563,10.094 5.098,9.238 4.243,8.105 C0.141,8.105 0.017,13.965 0.017,13.965 L15.992,13.965 C15.992,13.965 16.314,8.079 11.701,8.079 C10.847,9.226 9.447,10.094 8.005,10.094 Z" class="si-glyph-fill">

                                        </path>
                                        <path d="M11.441,3.069 C11.441,4.755 9.902,7.979 8.002,7.979 C6.105,7.979 4.565,4.754 4.565,3.069 C4.565,1.384 6.104,0.016 8.002,0.016 C9.902,0.017 11.441,1.385 11.441,3.069 L11.441,3.069 Z" class="si-glyph-fill">

                                        </path>
                                    </g>
                                    <path d="M12.975,3.614 C12.975,3.298 12.535,3.043 11.989,3.041 L11.989,2.39 C11.989,2.293 12.026,0.022 8.014,0.022 C4.004,0.022 4.041,2.293 4.041,2.39 L4.041,3.064 C4.031,3.064 4.023,3.061 4.014,3.061 C3.471,3.061 3.034,3.312 3.034,3.623 L3.034,6.377 C3.034,6.686 3.472,6.938 4.014,6.938 C4.556,6.938 4.996,6.686 4.996,6.377 L4.996,3.623 C4.996,3.58 4.969,3.541 4.953,3.501 L4.953,2.75 C4.953,2.681 4.665,0.967 8.014,0.967 C11.364,0.967 11.016,2.681 11.016,2.75 L11.016,3.541 C11.01,3.566 10.991,3.588 10.991,3.614 L10.991,6.431 C10.991,6.748 11.434,7.005 11.983,7.005 C11.995,7.005 12.004,7.001 12.016,7.001 L12.016,8.03 L11.032,8.03 L11.032,9 L12.985,9 L12.975,3.614 L12.975,3.614 Z" class="si-glyph-fill">

                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">
                            Expatriates travel support
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    Turkmenistan Tourism offers accommodation, transport and guide services to expatriates and their visiting friends or family, and can compose various day trip or short breaks to various destinations.
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Although expatriates based in Turkmenistan for work purposes do not require visa support, Turkmenistan Tourism offers accommodation, transport and guide services to expatriates and their visiting friends or family, and can compose various day trip or short breaks to various destinations inside Turkmenistan, as well as to neighboring Uzbekistan. Programs included, but are not limited to, the following suggestions:
                            </p>
                            <ul class=" ml-16 mt-4 list-disc text-indigo-600 font-semibold ">
                                <li>City tour Ashgabat</li>
                                <li>Day trip Ashgabat Surroundings</li>
                                <li>Day trip Kopetdag Mountains</li>
                                <li>Day trip Merw</li>
                                <li>Day trip Kunya Urgench</li>
                                <li>Day trip Caspian Sea</li>
                                <li>2-day trip Merw and Gonur Depe</li>
                                <li>2-day trip Karakum Desert (and Kunya Urgench)</li>
                                <li>2-day trip Yangikala Canyons</li>
                                <li>3-day trip Yangikala Canyons and Dehistan</li>
                                <li>3-day trip Kugitang Mountains</li>
                            </ul>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                Please note that several trips, such as those to Kunya Urgench and/or Kugitang Mountains are subject to availability of relevant border zone permissions. Such permissions have to be arranged for by the inviting party (employer) and cannot be facilitated by Turkmenistan Tourism. For detailed information on the trip suggestions mentioned above, as well as additional possibilities, please contact us directly.
                            </p>

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

            {{-- Support for those arriving by ferry from Baku --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M224 0H352c17.7 0 32 14.3 32 32h75.1c20.6 0 31.6 24.3 18.1 39.8L456 96H120L98.8 71.8C85.3 56.3 96.3 32 116.9 32H192c0-17.7 14.3-32 32-32zM96 128H480c17.7 0 32 14.3 32 32V283.5c0 13.3-4.2 26.3-11.9 37.2l-51.4 71.9c-1.9 1.1-3.7 2.2-5.5 3.5c-15.5 10.7-34 18-51 19.9H375.6c-17.1-1.8-35-9-50.8-19.9c-22.1-15.5-51.6-15.5-73.7 0c-14.8 10.2-32.5 18-50.6 19.9H183.9c-17-1.8-35.6-9.2-51-19.9c-1.8-1.3-3.7-2.4-5.6-3.5L75.9 320.7C68.2 309.8 64 296.8 64 283.5V160c0-17.7 14.3-32 32-32zm32 64v96H448V192H128zM306.5 421.9C329 437.4 356.5 448 384 448c26.9 0 55.3-10.8 77.4-26.1l0 0c11.9-8.5 28.1-7.8 39.2 1.7c14.4 11.9 32.5 21 50.6 25.2c17.2 4 27.9 21.2 23.9 38.4s-21.2 27.9-38.4 23.9c-24.5-5.7-44.9-16.5-58.2-25C449.5 501.7 417 512 384 512c-31.9 0-60.6-9.9-80.4-18.9c-5.8-2.7-11.1-5.3-15.6-7.7c-4.5 2.4-9.7 5.1-15.6 7.7c-19.8 9-48.5 18.9-80.4 18.9c-33 0-65.5-10.3-94.5-25.8c-13.4 8.4-33.7 19.3-58.2 25c-17.2 4-34.4-6.7-38.4-23.9s6.7-34.4 23.9-38.4c18.1-4.2 36.2-13.3 50.6-25.2c11.1-9.4 27.3-10.1 39.2-1.7l0 0C136.7 437.2 165.1 448 192 448c27.5 0 55-10.6 77.5-26.1c11.1-7.9 25.9-7.9 37 0z" />
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">
                            Support for those arriving by ferry from Baku
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    Turkmenistan Tourism can support such adventurous travelers with flexible visa support, accommodation and transport arrangement.
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Another growing group of travelers arrive in Turkmenistan from Baku in Azerbaijan, using the services of the cargo ferry that connects Baku and Turkmenbashi. Although there are no timetables for these cargo ferries, and arrival in Turkmenbashi cannot be predicted, Turkmenistan Tourism can support such adventurous travelers with flexible visa support, accommodation and transport arrangements. Please contact us directly for more information.
                            </p>
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

            {{-- Visa support --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 " viewBox="0 -139.5 750 750" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                            <desc>Created with Sketch.</desc>
                            <defs>

                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g id="visa" class="fill-gray-100" fill-rule="nonzero">
                                    <path d="M52.8846154,28.2035928 C39.6085397,28.2035928 28.8461538,38.7262417 28.8461538,51.7065868 L28.8461538,419.293413 C28.8461538,432.273758 39.6085397,442.796407 52.8846154,442.796407 L697.115385,442.796407 C710.39146,442.796407 721.153846,432.273758 721.153846,419.293413 L721.153846,51.7065868 C721.153846,38.7262417 710.39146,28.2035928 697.115385,28.2035928 L52.8846154,28.2035928 Z M52.8846154,0 L697.115385,0 C726.322751,-5.0099645e-15 750,23.1498275 750,51.7065868 L750,419.293413 C750,447.850173 726.322751,471 697.115385,471 L52.8846154,471 C23.6772488,471 3.41607085e-15,447.850173 0,419.293413 L0,51.7065868 C-3.41607085e-15,23.1498275 23.6772488,5.0099645e-15 52.8846154,0 Z" id="outline">

                                    </path>
                                    <g id="Logo" transform="translate(60.000000, 139.000000)">
                                        <polygon id="Shape" points="222.597614 191.12625 254.442205 4.26252273 305.375795 4.26252273 273.50925 191.12625">

                                        </polygon>
                                        <path d="M457.520795,8.29261364 C447.429341,4.50688636 431.61825,0.444340909 411.871568,0.444340909 C361.544114,0.444340909 326.092295,25.7884773 325.790659,62.1117955 C325.507159,88.9622045 351.099477,103.940932 370.419477,112.879295 C390.244432,122.038159 396.910023,127.879977 396.815523,136.058523 C396.689523,148.584068 380.983432,154.306568 366.343568,154.306568 C345.957341,154.306568 335.127068,151.474432 318.400568,144.497659 L311.837114,141.527114 L304.688523,183.359114 C316.585023,188.57475 338.583477,193.094523 361.424795,193.328386 C414.964295,193.328386 449.721205,168.274432 450.116386,129.486477 C450.30825,108.229705 436.738432,92.0520682 407.353705,78.7161136 C389.550477,70.07175 378.647659,64.3034318 378.763159,55.55025 C378.763159,47.7831136 387.991705,39.4776136 407.931205,39.4776136 C424.587068,39.2189318 436.651568,42.8509773 446.051932,46.6367045 L450.616568,48.7930227 L457.520795,8.29261364" id="Shape">

                                        </path>
                                        <path d="M588.586568,4.26252273 L549.229705,4.26252273 C537.037295,4.26252273 527.91375,7.59006818 522.55875,19.7586136 L446.915795,191.006932 L500.399932,191.006932 C500.399932,191.006932 509.145477,167.981386 511.123295,162.926114 C516.967977,162.926114 568.924841,163.006295 576.353114,163.006295 C577.876568,169.547795 582.550023,191.006932 582.550023,191.006932 L629.811477,191.006932 L588.586568,4.26252273 Z M526.143068,124.92375 C530.355477,114.157432 546.43575,72.6881591 546.43575,72.6881591 C546.135068,73.1854773 550.616659,61.8693409 553.189159,54.8534318 L556.632205,70.96425 C556.632205,70.96425 566.384795,115.569205 568.42275,124.922795 L526.143068,124.922795 L526.143068,124.92375 Z" id="Path">

                                        </path>
                                        <path d="M179.361477,4.26252273 L129.496023,131.689568 L124.183023,105.793705 C114.900068,75.94125 85.9773409,43.5993409 53.6430682,27.4073864 L99.2388409,190.828432 L153.127705,190.766386 L233.313341,4.26252273 L179.361477,4.26252273" id="Path">

                                        </path>
                                        <path d="M82.9686136,4.26252273 L0.838568182,4.26252273 L0.188522727,8.15038636 C64.0848409,23.6178409 106.364523,60.9968864 123.914795,105.909205 L106.056205,20.0382955 C102.973023,8.20575 94.0308409,4.67488636 82.9686136,4.26252273" id="Shape">

                                        </path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">
                            Visa support
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    Turkmenistan Tourism is licensed to apply at the state visa authority for Letters of Invitation (LOI) for travelers requiring a Tourist Visa
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Turkmenistan Tourism is licensed to apply at the state visa authority for Letters of Invitation (LOI) for travelers requiring a Tourist Visa (for several border areas, additional border zone permission is required; these permissions are automatically applied for in conjunction with the general visa application). We process requests for applications as early as 8 weeks prior to your intended arrival in Turkmenistan, and up to as late as 4 weeks prior to your intended arrival. In order to process such applications, we will need to formally agree with you on your day-to-day travel plan, including your chosen modes of transport and type of accommodation. We will also need to receive the following information:
                            </p>
                            <ul class=" ml-16 mt-4 list-decimal text-indigo-600 font-semibold ">
                                <li>Color scan of your original passport (full photo page, including bar code; clearly readable, no shiny or glossy sections)</li>
                                <li>Color scan of an original recent pass photo of yours, of which the original must be 3x4 cm in size</li>
                                <li>Full name</li>
                                <li>Any other name(s) used before (e.g. before marriage)</li>
                                <li>Current citizenship</li>
                                <li>Marital status (single, married, divorced, widowed)</li>
                                <li>Full name, date of birth and citizenship of spouse</li>
                                <li>Full name(s), date(s) of birth and citizenship of child(ren)</li>
                                <li>Home address (full address of permanent residence; for expats: not the address of temporary residence)</li>
                                <li>E-mail address</li>
                                <li>Work position (position/function/title of current job, for example economist, engineer, medical doctor, retired, housewife, student)</li>
                                <li>Place of work (name and place of work and address)</li>
                                <li>Previous visits to Turkmenistan (year, month and purpose)</li>
                            </ul>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                Once we obtain the above information in the correct formats, our team will prepare and submit the LOI application. The duration of processing is variable (between 5 and 15 working days) and the process and/or the result cannot be predicted or influenced by Turkmenistan Tourism. Once the result of the application is issued, we will immediately notify you. We are able to scan and send the LOI to you by email. You will need to print it, and bring it with you to the place where you intend to pick up your Turkmenistan Tourist Visa: at a Turkmenistan Embassy abroad, on arrival at one of the land borders that offers visa services, or at Ashgabat International Airport. Please note that Turkmenistan does not issue group tourist visas, so each person needs to be in a possession of a passport with a validity of no less than 6 months at the moment of arrival in Turkmenistan, and needs to have at least 2 empty pages, for visa and registration stamps.
                            </p>
                            <p class="tracking-wider text-gray-200 select-none">
                                Turkmenistan Tourism does not offer visa support for people on a personal (friends or family) visit or medical treatment trip, business or conference trip, media trip or official visit to Turkmenistan. People traveling to Turkmenistan with these purposes will need to contact a Turkmen Embassy abroad for advice on obtaining the appropriate Letter of Invitation. However, on receiving proof of having received the appropriate LOI, Turkmenistan Tourism does offer other travel services, such as accommodation and transportation services. See more information in the chapter <a href="https://www.mfa.gov.tm/en/articles/63?breadcrumbs=no" class="text-indigo-500 underlin underline-offset-2">MICE Services</a> below.
                            </p>
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

            {{-- MICE Service Suppor --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 fill-gray-100 version=" 1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="800px" height="800px" viewBox="0 0 33.34 33.34" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M12.251,18.962c0,0.354-0.289,0.646-0.645,0.646h-0.645c-0.354,0-0.646-0.29-0.646-0.646v-0.558l-9.994-2.006v6.755
			                         c0,1.419,1.161,2.58,2.58,2.58h16.765c1.418,0,2.579-1.16,2.579-2.58v-6.755l-9.995,2.006L12.251,18.962L12.251,18.962z" />
                                    <path d="M19.667,10.787h-4.059c0.002-0.039,0.011-0.076,0.011-0.118V9.379c0-0.979-0.795-1.773-1.773-1.773H8.723
			                         c-0.979,0-1.773,0.795-1.773,1.773v1.289c0,0.042,0.009,0.079,0.012,0.118H2.903C1.302,10.787,0,12.088,0,13.689v2.039
			                         L10.317,17.8v-0.772c0-0.354,0.291-0.644,0.646-0.644h0.645c0.355,0,0.645,0.29,0.645,0.644V17.8l10.315-2.071v-2.039
			                         C22.568,12.087,21.27,10.787,19.667,10.787z M14.653,10.668c0,0.042-0.019,0.079-0.025,0.118H7.94
			                         c-0.006-0.039-0.023-0.076-0.023-0.118V9.379c0-0.444,0.36-0.806,0.807-0.806h5.123c0.446,0,0.808,0.361,0.808,0.806v1.289H14.653
			                         z" />
                                    <rect x="23.453" y="12.703" width="5.279" height="0.837" />
                                    <rect x="23.453" y="14.937" width="7.583" height="0.838" />
                                    <rect x="23.453" y="17.169" width="9.887" height="0.837" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">
                            MICE Service Support
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    Turkmenistan Tourism does offer best forms of assistance to MICE travelers.
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Although people that travel to Turkmenistan for meetings, conferences or exhibition purposes will not require visa support (these must be facilitated by the inviting party of such events), Turkmenistan Tourism does offer other forms of assistance to such travelers, such as:
                            </p>
                            <ul class=" ml-16 mt-4 list-disc text-indigo-600 font-semibold ">
                                <li>Accommodation and board</li>
                                <li>Airport transfers</li>
                                <li>Transportation rental</li>
                                <li>Language support (outside official event)</li>
                                <li>Business lunches</li>
                                <li>Half day and full day city tours (classical, architecture, history, culture)</li>
                                <li>One-day or overnight trips into the Kopetdag Mountains or into the Karakum Desert</li>

                            </ul>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                For an overview of the complete selection of MICE support services available and a price list, please contact us directly.
                            </p>

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

            {{-- Traditional dinner show --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">
                        <svg class="h-20 w-20 fill-gray-100" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve">
                            <path d="M31.6,10.8c0-0.3-0.2-0.5-0.4-0.7C31,10,30.7,10,30.4,10c-6,1.5-12.8,1.5-18.8,0c-0.3-0.1-0.6,0-0.8,0.1s-0.4,0.4-0.4,0.7
	                                  c-0.2,1.4-0.4,2.9-0.4,4.3C10,24.4,14.9,32,21,32s11-7.6,11-16.9C32,13.7,31.9,12.3,31.6,10.8z M15,21c-0.6,0-1-0.4-1-1
	                                  c0-1.7,1.3-3,3-3s3,1.3,3,3c0,0.6-0.4,1-1,1s-1-0.4-1-1c0-0.6-0.4-1-1-1s-1,0.4-1,1C16,20.6,15.6,21,15,21z M21,28
	                                  c-2.6,0-4.8-2.1-5-4.9c0-0.4,0.2-0.7,0.5-0.9c0.3-0.2,0.7-0.2,1.1,0c1.9,1.2,5,1.2,6.9,0c0.3-0.2,0.7-0.2,1.1,0
	                                  c0.3,0.2,0.5,0.6,0.5,0.9C25.8,25.9,23.6,28,21,28z M27,21c-0.6,0-1-0.4-1-1c0-0.6-0.4-1-1-1s-1,0.4-1,1c0,0.6-0.4,1-1,1s-1-0.4-1-1
	                                  c0-1.7,1.3-3,3-3s3,1.3,3,3C28,20.6,27.6,21,27,21z" />
                            <path d="M8,16.6c-0.2,0.1-0.4,0.2-0.5,0.3C7.4,16.9,7.2,17,7,17c-0.2,0-0.4,0-0.5-0.1C6.2,16.7,6,16.3,6,15.9c0.1-1.7,1-3.1,2.2-4
	                                 c0.1-0.5,0.1-0.9,0.2-1.4c0.1-0.4,0.2-0.8,0.5-1.2C8.3,9.7,7.7,10,7,10c-1.7,0-3-1.3-3-3c0-0.6,0.4-1,1-1s1,0.4,1,1c0,0.6,0.4,1,1,1
	                                 s1-0.4,1-1c0-0.6,0.4-1,1-1s1,0.4,1,1c0,0.6-0.2,1.2-0.5,1.7c0.1-0.1,0.1-0.1,0.2-0.2c0.7-0.5,1.6-0.6,2.4-0.4c0,0,0.1,0,0.1,0
	                                 C12.1,7.8,12,7.4,12,7c0-0.6,0.4-1,1-1s1,0.4,1,1c0,0.6,0.4,1,1,1s1-0.4,1-1c0-0.6,0.4-1,1-1s1,0.4,1,1c0,0.8-0.3,1.4-0.8,2
	                                 c1.5,0.1,3,0.2,4.4,0.2c0.2-1.3,0.3-2.7,0.3-4c0-1.4-0.1-2.9-0.4-4.3c0-0.3-0.2-0.5-0.4-0.7C21,0,20.7,0,20.4,0
	                                 c-6,1.5-12.8,1.5-18.8,0C1.3,0,1,0,0.8,0.2C0.6,0.3,0.4,0.6,0.4,0.8C0.1,2.3,0,3.7,0,5.1c0,8.1,3.8,15,8.8,16.5
	                                 C8.4,20.1,8.1,18.4,8,16.6z" />
                        </svg>
                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">
                            Traditional dinner show
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    On certain holidays Turkmenistan Tourism hosts traditional holiday dinner.
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Although traditional dinner shows are not organized by Turkmenistan Tourism on fixed or recurring dates or weekdays, in high season they may take place fairly frequently. The venue is at a central location in Ashgabat, and the duration is from 1900h till 2100h. Please contact us directly for information about planned dinner shows in the month that you plan to be in Ashgabat.
                            </p>

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

            {{-- Accommodation and meals --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">

                        <svg class="h-20 w-20 fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                        </svg>

                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">
                            Accommodation and meals
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    Turkmenistan Tourism has contracts with a large number of hotels in Turkmenistan sowe can offer room reservations in hotels of various categories.
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Turkmenistan Tourism has contracts with a large number of hotels in Turkmenistan. In Ashgabat, Mary, Turkmenbashi and Awaza Seaside Recreational Zone we offer room reservations in hotels of various categories. In Dashoguz, Turkmenabad and Balkanabad hotels do not yet offer diverse categories, and we make reservations in those hotels available. In Koyten (Kugitang) reservations can be made for stay in the local base lodge. Outside these locations, accommodation is restricted to ad hoc camp arrangements.
                            </p>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                We have our own camp accommodation gear, that includes a large number of trekking tents for single or double share use, sleeping mats, sleeping bags, pillows and tent lights. We also bring camp dining gear, such as floor covers, plates, cups and cutlery and camp lighting. On request, camp tables and chairs can be provided, as well as camp latrine tents and camp shower tents.
                            </p>
                            <div class="mb-4"></div>
                            <p class="tracking-wider text-gray-200 select-none">
                                In terms of meals, Turkmenistan offers as a minimum Bed & Breakfast services, plus dinner services at those locations where no form of public dining is available. In practice, this means dinners are automatically served for overnight location where accommodation is either in tents or in the base lodge in Kugitang. Picnic lunches are recommended on those route sections where no alternative dining services are available. Restaurant-based lunch and dinner services are optional and are offered in every city.
                            </p>
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

            {{-- Transit traveler Support --}}
            <div x-data="{isOpen:false}" class="services_card p-12 flex flex-wrap flex-col justify-center items-center space-y-6 rounded shadow-lg shadow-gray-500 bg-gray-800 ">
                <div class="services_card__header flex flex-col items-center">
                    <div class="services_card__icon mb-2">


                        <svg class="h-20 w-20 " viewBox="-5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="icomoon-ignore">
                            </g>
                            <path class="fill-gray-100" d="M11.544 11.284h7.342l3.147-3.698-3.147-3.645h-7.342v-2.102h-1.049v2.102h-9.446v7.343h9.446v1.045h-7.348l-3.147 3.645 3.147 3.698h7.348v10.49h1.049v-10.49h9.44v-7.343h-9.44v-1.045zM2.098 10.234v-5.245h16.308l2.246 2.6-2.25 2.645h-16.304zM19.935 13.378v5.245h-16.303l-2.251-2.644 2.246-2.601 16.308 0z">

                            </path>
                            <path class="fill-gray-100" d="M3.139 6.034h5.245v1.049h-5.245v-1.049z">

                            </path>
                            <path class="fill-gray-100" d="M13.632 14.432h5.245v1.049h-5.245v-1.049z">

                            </path>
                        </svg>


                    </div>
                    <div class="services_card__number ">
                        <h1 class="number text-gray-100 text-lg font-extrabold">
                            Transit traveler Support
                        </h1>
                    </div>
                </div>

                <p class=" text-gray-300 text-lg text-center">
                    Turkmenistan Tourism can offer transportation, accommodation, or excursions to locations along the way from one land border to the next.
                </p>
                {{-- Modal Button --}}
                <div class="">
                    <button x-cloak @click="isOpen=true" class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-indigo-700 rounded-md hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Read More ...</button>
                    {{-- Modal --}}
                    <div x-show="isOpen" class="modal bg-gray-800 opacity-95 w-[32rem] h-[32rem]  p-4 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                        {{-- Modal Content --}}
                        <div class="modal-content ">
                            <div class="mb-4"></div>
                            <p class=" tracking-wider text-gray-200 select-none">
                                Although travelers arriving in Turkmenistan on a Transit Visa do not require visa support or Letters of Invitation from a local travel agency, they may wish to contact us for transport or accommodation services, or local excursions at sites located on their way from one land border to the next. Please contact us directly for more information, and terms and conditions of service agreements and payment.
                            </p>
                            <div class="mb-4"></div>
                            <p class="mb-10 tracking-wider text-gray-200 select-none">
                                Please note that Turkmenistan Tourism is unable to facilitate Transit Visa support: transit visas must be applied for directly by travelers at a Turkmen Embassy abroad. For more information about the pros and cons of a Transit Visa versus a Tourist Visa, contact us directly.
                            </p>
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
    </section>
</main>














@endsection







@extends('layouts.front.footer')

@push('js')

<script>

</script>

@endpush