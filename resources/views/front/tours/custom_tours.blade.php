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
            <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">Custom Tours</h1>
        </div>
    </header>
</section>


<main class="container p-10 mt-4">
    {{--Most Populer Tours --}}
    <section class="most-populer-tours">
        <div class="tour-cards flex flex-col justify-center items-center md:flex-row gap-8 flex-wrap">

            <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow transition ease-linear delay-75  hover:-translate-y-1 hover:scale-105 duration-200">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/2.jpg')}}" alt="avatar">
                <div class="flex items-center px-6 py-3 bg-gray-800">
                    <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-500 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                    </svg>
                    <a href="https://www.google.com/maps/place/Dashoguz/@41.827586,59.9370288,15z/data=!4m6!3m5!1s0x41de6896264d2475:0x8314c6ef35c7a218!8m2!3d41.8368737!4d59.9651904!16zL20vMDc1Z2Nw?entry=ttu" target="__blank">
                        <h1 class="mx-3 text-lg font-semibold text-white  hover:underline hover:transition-all">Lebap</h1>
                    </a>
                </div>

                <div class="px-6 py-4">
                    <a href="#" class="text-xl font-semibold text-indigo-500 hover:text-indigo-700 hover:transition-colors">Special tour "Highlights"</a>
                    <p class="py-2 text-gray-600 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                </div>
            </div>

            <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow transition ease-linear delay-75  hover:-translate-y-1 hover:scale-105 duration-200 ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/2.jpg')}}" alt="avatar">
                <div class="flex items-center px-6 py-3 bg-gray-800">
                    <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-500 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                    </svg>
                    <a href="https://www.google.com/maps/place/Dashoguz/@41.827586,59.9370288,15z/data=!4m6!3m5!1s0x41de6896264d2475:0x8314c6ef35c7a218!8m2!3d41.8368737!4d59.9651904!16zL20vMDc1Z2Nw?entry=ttu" target="__blank">
                        <h1 class="mx-3 text-lg font-semibold text-white hover:underline hover:transition-all">Lebap</h1>
                    </a>
                </div>

                <div class="px-6 py-4">
                    <a href="#" class="text-xl font-semibold text-indigo-500 hover:text-indigo-700 hover:transition-colors">Special tour "Highlights"</a>
                    <p class="py-2 text-gray-600 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                </div>
            </div>

            <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow transition ease-linear delay-75  hover:-translate-y-1 hover:scale-105 duration-200 ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/2.jpg')}}" alt="avatar">
                <div class="flex items-center px-6 py-3 bg-gray-800">
                    <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-500 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                    </svg>
                    <a href="https://www.google.com/maps/place/Dashoguz/@41.827586,59.9370288,15z/data=!4m6!3m5!1s0x41de6896264d2475:0x8314c6ef35c7a218!8m2!3d41.8368737!4d59.9651904!16zL20vMDc1Z2Nw?entry=ttu" target="__blank">
                        <h1 class="mx-3 text-lg font-semibold text-white hover:underline hover:transition-all">Dashoguz</h1>
                    </a>
                </div>

                <div class="px-6 py-4">
                    <a href="#" class="text-xl font-semibold text-indigo-500 hover:text-indigo-700 hover:transition-colors">A Week of Highlights</a>
                    <p class="py-2 text-gray-600 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                </div>
            </div>

            <div class="w-full max-w-sm overflow-hidden bg-white rounded shadow transition ease-linear delay-75  hover:-translate-y-1 hover:scale-105 duration-200 ">
                <img class="object-cover object-center w-full h-56" src="{{asset('images/2.jpg')}}" alt="avatar">
                <div class="flex items-center px-6 py-3 bg-gray-800">
                    <svg aria-label="location pin icon" class="w-6 h-6 text-indigo-500 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                    </svg>
                    <a href="https://www.google.com/maps/place/Dashoguz/@41.827586,59.9370288,15z/data=!4m6!3m5!1s0x41de6896264d2475:0x8314c6ef35c7a218!8m2!3d41.8368737!4d59.9651904!16zL20vMDc1Z2Nw?entry=ttu" target="__blank">
                        <h1 class="mx-3 text-lg font-semibold text-white hover:underline hover:transition-all">Asgabat</h1>
                    </a>
                </div>

                <div class="px-6 py-4">
                    <a href="#" class="text-xl font-semibold text-indigo-500 hover:text-indigo-700 hover:transition-colors">Silk Road Revisited</a>
                    <p class="py-2 text-gray-600 overflow-hidden">This 7-day tour is for people with a general interest in Turkmenistan, wanting to explore as many aspects of the…</p>
                </div>
            </div>
        </div>
    </section>
    <hr class="my-10">

</main>













@endsection











@extends('layouts.front.footer')

@push('js')

<script>

</script>

@endpush