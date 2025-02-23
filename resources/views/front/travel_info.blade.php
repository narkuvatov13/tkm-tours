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
            <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">Travel Info</h1>
        </div>
    </header>
</section>


{{-- Content --}}

<main class="container p-10 mt-4">
    {{-- before-you-go --}}
    <section class="before-you-go">
        <div class="flex flex-col justify-center items-center md:flex-row md:gap-20">
            <div class="h-full mb-3 md:w-1/2">
                <img class="h-[12.5rem] w-screen md:h-[31.25rem] md:w-full object-cover shadow-md shadow-gray-600 rounded" src="{{asset('images/travel_info/gary-lopater-dOOGrK3zcUc-unsplash.jpg')}}" alt="">
            </div>
            <div x-data="{isOpen:false}" class="md:w-1/2 ">
                <h1 class="m-2  text-3xl uppercase text-indigo-700 font-semibold">Before you go </h1>
                <div class="country-geography-content__text__paragraph">
                    <p class=" text-gray-600 font-semibold text-justify select-none tracking-wide">
                        In preparation for your trip through Turkmenistan, please bear in mind the following:
                    </p>
                    <ul class=" ml-16 mt-4 list-disc text-gray-500 font-semibold ">
                        <li>Bring cash USD bank notes (do not rely on EURO, credit cards or travelers cheques for your local expenses in Turkmenistan; visa, migration tax and vehicle transit costs can be paid in cash USD exclusively)</li>
                        <li>Bring some paper copies of your passport, while our staff takes your original passport for the registration on arrival procedure, that is usually done on the first working day after your first night’s accommodation in a hotel or motel.</li>
                        <li>MBring a mobile phone in order to contact our agency in case of unexpected delays in arriving at the Turkmen border; this way we can also contact you as soon as your LOI scan is waiting in your email inbox. A mobile phone is particularly useful for contact with us from Baku, in case you plan to take the cargo ferry to Turkmenbashi</li>
                        <li>Bring some properly packed print copies of the </li>
                    </ul>
                </div>

                <div class=" my-8 ">
                    <button x-cloak @click="isOpen=true" class="bg-indigo-500 text-gray-50 py-3 px-6 w-max  rounded text-base   transition ease-linear delay-150  duration-300  hover:bg-indigo-700 ">Read More...</button>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content p-4">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                        <ul class="list-disc text-gray-200 font-semibold space-y-2">
                            <li>Bring some properly packed print copies of the LOI, to be handed over to the visa authorities at the point where you intend to collect your visa on arrival. Or:</li>
                            <li>Determine several possible locations on your way to Turkmenistan where you can access your email and print the Turkmenistan LOI, prior to your arrival at the land border where you intend to collect your visa and enter Turkmenistan</li>
                            <li>Bring a head torch, flip-flops and a small towel for camp nights. A mirror and/or an inside sleeping sack (thin, silk) is recommended, too.</li>
                            <li>Bring a scarf for accessing local mosques (women) Bring a medium- to long-sleeved shirt and trousers for accessing mosques (for men)</li>
                            <li>Bring a medium- to long-sleeved shirt and trousers for accessing mosques (for men)</li>
                            <li>Do not bring and wear tank-tops outside hotels (sleeveless shirts are fine)</li>
                            <li>Do not bring and wear shorts outside hotels (knee-long trousers are fine)</li>
                            <li>Bring appropriate (light but sturdy) footwear for travel in mountains, canyons and desert areas</li>
                            <li>Bring your doctor’s prescription for any personal medication that you require and plan to bring with you</li>
                            <li>Bring glasses as alternative to contact lenses, in case the desert sand irritates your eyes</li>
                        </ul>
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
    </section>
    <hr class="border-none my-10">

    {{-- Visa --}}
    <section class="before-you-go">
        <div class="flex flex-col justify-center items-center md:flex-row md:gap-20">
            {{-- Content --}}
            <div x-data="{isOpen:false}" class="md:w-1/2 ">
                <h1 class="m-2 text-3xl uppercase text-indigo-700 font-semibold">Visa</h1>
                <div class="country-geography-content__text__paragraph">
                    <p class=" mb-8 text-gray-600 font-semibold text-justify select-none tracking-wide">
                        To enter Turkmenistan all leisure travelers are required to have a transit or tourist visa. The tourist visas are delivered on the basis of an approved visa support letter, also referred to as a Letter of Invitation (LOI). Turkmenistan Tourism is a licensed tourism travel agency in Turkmenistan that can provide you with the Letter of Invitation. The LOI requires usually 6-11 working days to process. Once the LOI is has been issued/approved, we will send a scanned copy of it to you by email.
                    </p>
                    <p class="text-gray-600 font-semibold text-justify select-none tracking-wide">
                        With an approved LOI you can apply for your visa at a Turkmen embassy or consulate abroad, or obtain it directly at the Turkmen land border at Gaudan (Bajgiran/Mashhad, Iran), Farab (Bukhara, Uzbekistan), Shavat (Khiva, Uzbekistan), Khojeyli (Nukus, Uzbekistan); at Bekdash (Aktau, Kazakhstan), or at the international airport in Ashgabat upon arrival. Visa are not issued at the land borders of Serakhs (Iran), Serhetabat (Afghanistan) and Turkmenbashi (the Caspian Sea Port).
                    </p>
                </div>

                <div class=" my-8 ">
                    <button x-cloak @click="isOpen=true" class="bg-indigo-500 text-gray-50 py-3 px-6 w-max  rounded text-base   transition ease-linear delay-150  duration-300  hover:bg-indigo-700 ">Read More...</button>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content p-4 space-y-2">
                        <div class="">
                            <h1 class="uppercase text-medium font-semibold text-gray-200">Visa</h1>
                        </div>
                        <p class="capitalize tracking-wider text-gray-200 select-none">
                            To enter Turkmenistan all leisure travelers are required to have a transit or tourist visa. The tourist visas are delivered on the basis of an approved visa support letter, also referred to as a Letter of Invitation (LOI). Turkmenistan Tourism is a licensed tourism travel agency in Turkmenistan that can provide you with the Letter of Invitation. The LOI requires usually 10-15 working days to process. Once the LOI is has been issued/approved, we will send a scanned copy of it to you by email.
                        </p>
                        <p class="capitalize tracking-wider text-gray-200 select-none">
                            With an approved LOI you can apply for your visa at a Turkmen embassy or consulate abroad, or obtain it directly at the Turkmen land border at Gaudan (Bajgiran/Mashhad, Iran), Serags (Sarakhs, Iran), Farab (Bukhara, Uzbekistan), Shavat (Khiva, Uzbekistan), Khojeyli (Nukus, Uzbekistan), Turkmenbashi harbor (by ferry arrival from Baku) or at the international airport in Ashgabat upon arrival. Please kindly note that Garabogaz border post (Temirbaba, Kazakhstan) is temporarily closed and the only possibility to enter Turkmenistan from Kazakhstan is using a flight from Almaty to Ashgabat (3 times a week).
                        </p>
                        <p class="capitalize tracking-wider text-gray-200 select-none">
                            Next to the LOI, an Entry Travel Pass and country registration is automatically required. Turkmenistan Tourism provides you automatically with these services if you order a tour, or if you book as a minimum all transport and accommodation services through our agency for the full duration of your stay in Turkmenistan.
                        </p>
                        <p class="capitalize tracking-wider text-gray-200 select-none">
                            For information about obtaining the LOI, see the Section “Visa Support” under <a href="#" class=" text-indigo-500 hover:text-indigo-600 hover:underline hover:underline-offset-2 transition-colors ">Services</a>.
                        </p>
                        <p class="capitalize tracking-wider text-gray-200 select-none">
                            As we submit the LOI documentation in advance of your arrival we need this information preferably 8 weeks, but at least 4 weeks prior to your arrival date in Turkmenistan. This extended period allows us time to complete your itinerary and site visits, and to determine your type of transport and accommodation en route. If we do not have this information by this time we will not be able to supply you with the LOI for your visa.
                        </p>
                        <p class="capitalize tracking-wider text-gray-200 select-none">
                            You do not need to wait at home for the mail to arrive with your LOI; we will send you a scanned copy to your email address, so all you need is a place with access to Internet and a printer, in order to arrive at the Turkmen border with a printed LOI copy.
                        </p>
                        <p class="capitalize tracking-wider text-gray-200 select-none">
                            Transit visas are issued only directly at Turkmen embassies abroad. Please contact the relevant embassy directly for detailed information about prices and procedures.
                        </p>

                        <div class=" space-y-2">
                            <h1 class="uppercase text-medium font-semibold text-gray-200">Turkmenistan embassies abroad</h1>

                            <p class="capitalize tracking-wider text-gray-200 select-none">
                                Turkmen Embassies can
                                <a href="https://www.mfa.gov.tm/en/articles/63?breadcrumbs=no" class="text-indigo-500 hover:text-indigo-600 hover:underline hover:underline-offset-2 transition-colors">be found</a>
                                in Armenia, Afghanistan, Azerbaijan, Austria, Belgium, Belarus, Germany, Georgia, France, China, India, Iran, Italy, Japan, Kazakhstan, Korea, Kyrgyzstan, Malaysia, Pakistan, Romania, Russia, Saudi Arabia, Switzerland, UAE, UK, Ukraine, USA, Uzbekistan, Tajikistan, Turkey.
                            </p>
                            <p class="capitalize tracking-wider text-gray-200 select-none">
                                Check the website of Ministry of Foreign Affairs of Turkmenistan for the most recent information, and contact the embassies prior to arriving there to collect your Turkmen visa, as there may be differences between various embassies in terms of visa cost and duration, and processing requirements and their duration.
                            </p>
                        </div>
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

            {{-- Content Img --}}
            <div class="h-full mb-3 md:w-1/2">
                <img class="h-[12.5rem] w-screen md:h-[31.25rem] md:w-full object-cover shadow-md shadow-gray-600 rounded" src="{{asset('images/travel_info/global-residence-index-LPdaW746WAw-unsplash.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <hr class="border-none my-10">

    {{-- Info --}}
    <section>
        <div class="info-content p-4  bg-gray-800 shadow-lg shadow-gray-600 ">
            <div class="cards flex flex-col md:flex-row items-stretch  divide-x-2">
                <div class="card p-4">
                    <h1 class="text-lg text-gray-300 font-semibold">By air</h1>
                    <div class="info-text text-gray-400 text-justify tracking-wide">
                        <p>
                            Turkmenistan airlines operate regular air connections from Ashgabat to five other major Turkmenistan cities (Turkmenabat, Mary, Dashoguz, Turkmenbashi, and Balkanabad). Infrequent flights operate between some of these cities as well. Flight and time tables are regularly updated; when composing itineraries our team will be able to suggest to you the use the most optimal air connections.
                        </p>
                        <p>
                            Domestic flights are inexpensive. Flights are serviced by 717 Boeing aircrafts. Air tickets can be purchased through our company. Turkmenistan Airlines authorities set up a maximum baggage allowance of 20 kg (this is including hand luggage).
                        </p>
                    </div>

                </div>

                <div class="card p-4">
                    <h1 class="text-lg text-gray-300 font-semibold">By rail</h1>
                    <div class="info-text text-gray-400 text-justify tracking-wide">
                        <p>
                            These same five major Turkmenistan cities are also easily accessible by rail from Ashgabat. Turkmen State Railways has recently obtained new train compartments and locomotives, which allows for comfortable travel conditions in both summer heat and winter cold. Most trains operate night services. Tickets can be purchased through our company.
                        </p>
                    </div>

                </div>


                <div class="card p-4">
                    <h1 class="text-lg text-gray-300 font-semibold">By road</h1>
                    <div class="info-text text-gray-400 text-justify tracking-wide">
                        <p>
                            The Turkmenistan road network is relatively well-developed. Motorists have at their disposal a extensive network of fuel stations run by the Turkmen National Oil Company. Most stations, especially those on intercity routes, are open 24 hours. Almost all fuel stations sell a range of fuel, including standard (92 octane) and super (95 octane) as well as diesel and car accessories.
                        </p>
                    </div>

                </div>


                <div class="card p-4">
                    <h1 class="text-lg text-gray-300 font-semibold">Our transport fleet</h1>
                    <div class="info-text text-gray-400 text-justify tracking-wide">
                        <p>
                            Turkmenistan Tourism owns a vehicle fleet that is made up of several comfortable air-conditioned city cars, four-wheel drives, minibuses and buses. These are based in Ashgabat. Several additional city cars, four-wheel drives and buses are based in other large cities in the country, for easy response to last-minute travel changes, airport-hotel transfers, or border transfers.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <hr class="border-none my-10">


    {{-- Get to --}}
    <section class="before-you-go">
        <div class="flex flex-col justify-center items-center md:flex-row md:gap-20">
            <div class="h-full mb-3 md:w-1/2">
                <img class="h-[12.5rem] w-screen md:h-[31.25rem] md:w-full object-cover shadow-md shadow-gray-600 rounded" src="{{asset('images/travel_info/eva-darron-oCdVtGFeDC0-unsplash.jpg')}}" alt="">
            </div>
            <div x-data="{isOpen:false}" class="md:w-1/2 ">
                <h1 class="m-2  text-3xl uppercase text-indigo-700 font-semibold">Get to</h1>
                <div class="country-geography-content__text__paragraph space-y-2">
                    <p class=" text-gray-600 font-semibold text-justify select-none tracking-wide">
                        The international airport of Ashgabat is one of Turkmenistan’s major gateways. The <a href="https://turkmenistanairlines.tm/" class=" text-indigo-500 hover:text-indigo-600 hover:underline hover:underline-offset-2 transition-colors">National Airline of Turkmenistan</a> (Turkmenistan Airlines, abbreviation T5) operates regular flights to Frankfurt, Moscow, Sankt-Petersburg, Kazan, Minsk, Almaty, London, Birmingham, Istanbul, Ankara, Abu Dhabi, Dubai, Delhi, Peking and Bangkok. Since independence the national airline of Turkmenistan has completely replenished its fleet with Boeing aircrafts.
                    </p>
                    <p class="text-gray-600 font-semibold text-justify select-none tracking-wide">
                        Several foreign air-carriers operate flights to Ashgabat: Turkish Airlines, FlyDubai, Belavia and S7/Siberia Airlines. Turkish Airlines has <a href="https://www.turkishairlines.com/" class=" text-indigo-500 hover:text-indigo-600 hover:underline hover:underline-offset-2 transition-colors">daily flights</a> between Istanbul and Ashgabat, and is most frequently used by travelers coming from Europe. FlyDubai has three flights from Dubai to Ashgabat, and is most frequently used by travelers coming from Australia, Japan and USA. For more details on these international flights, please check out the internet or contact us.
                    </p>
                </div>

                <div class=" my-8 ">
                    <button x-cloak @click=" isOpen=true" class="bg-indigo-500 text-gray-50 py-3 px-6 w-max  rounded text-base   transition ease-linear delay-150  duration-300  hover:bg-indigo-700 ">Read More...</button>
                </div>
                {{-- Modal --}}
                <div x-show="isOpen" class="modal bg-gray-800 opacity-90 w-[32rem] h-[28rem]  p-6 fixed top-1/2 left-1/2 -translate-y-1/2  -translate-x-1/2 z-50 overflow-y-auto">
                    {{-- Modal Content --}}
                    <div class="modal-content p-4 space-y-2">
                        <div class="mb-4"></div>
                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            Tourists coming from Nukus, Khiva, Bukhara or northern Iran can reach Turkmenistan over land: from Khiva to Dashoguz (Shavat crossing), from Nukus to Kunya Urgench (Khojeyli crossing), from Bukhara to Turkmenabad (Farab crossing), and from Mashhad to Ashgabat (Gaudan/Bajgiran crossing) or Serags (Sarakhs crossing).
                        </p>

                        <p class=" capitalize tracking-wider text-gray-200 select-none">
                            Turkmenbashi port is the sea gate to Central Asia. Tourists coming from Baku in Azerbaijan can reach Turkmenistan by crossing the Caspian Sea by ferry. The drawback of the ferry is that it has an irregular timetable, so you will have to have a flexible travel itinerary and spare time built in.
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
    </section>
    <hr class="border-none my-10">

    {{-- When to go --}}
    <section class="before-you-go">
        <div class="flex flex-col justify-center items-center md:flex-row md:gap-20">
            {{-- Content --}}
            <div x-data="{isOpen:false}" class="md:w-1/2 ">
                <h1 class="m-2 text-3xl uppercase text-indigo-700 font-semibold">When to go</h1>
                <div class="country-geography-content__text__paragraph">
                    <p class=" mb-8 text-gray-600 font-semibold text-justify select-none tracking-wide">
                        Turkmenistan’s climate is extremely continental with hot, dry summers. Midsummer temperature can reach 45 °C. However, such temperatures are quite bearable because of the very low humidity.
                    </p>
                    <p class="text-gray-600 font-semibold text-justify select-none tracking-wide">
                        Winter is mild with average temperatures below freezing for only a few days in January and February. However, in the north of the country winter is severe. January temperatures in Dashoguz average - 23 degrees Celsius. Most rainfall occurs in March and April.
                    </p>
                    <p class="text-gray-600 font-semibold text-justify select-none tracking-wide">
                        Spring (April-June) and autumn (August-October) are the best seasons to visit Turkmenistan.
                    </p>
                </div>
            </div>

            {{-- Content Img --}}
            <div class="h-full mb-3 md:w-1/2">
                <img class="h-[12.5rem] w-screen md:h-[31.25rem] md:w-full object-cover shadow-md shadow-gray-600 rounded" src="{{asset('images/travel_info/jeshoots-com-mSESwdMZr-A-unsplash.jpg')}}" alt="">
            </div>
        </div>
    </section>
    <hr class="border-none my-10">
</main>
@endsection











@extends('layouts.front.footer')

@push('js')

<script>

</script>

@endpush