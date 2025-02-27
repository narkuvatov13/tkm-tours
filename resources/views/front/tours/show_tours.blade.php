@extends('layouts.front.app')
@extends('layouts.front.navigation')
@section('title', ' About Us Türmenistan Tours')
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
                <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">
                    {{$tour->tour_title}}
                </h1>
            </div>
        </header>
    </section>

    <main class="container p-10">


        <ol class="relative border-s border-gray-200">

            @foreach ($itenary as $key => $itinerary)
                <li class="mb-10 ms-6">
                    <span
                        class="absolute flex items-center justify-center w-6 h-6 rounded-full -start-3 ring-8 ring-white bg-sky-200">
                        <svg class="w-2.5 h-2.5 text-blue-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                        </svg>
                    </span>
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 ">Day {{$key + 1}}:
                        {{$itinerary->itinerary['itinerary_title']}}
                    </h3>
                    @foreach ($itinerary->itinerary['itinerary_paragraph'] as $itinerary_paragraph)

                        <p class="mb-4 text-base font-normal text-gray-500">
                            {{$itinerary_paragraph}}
                        </p>
                    @endforeach

                </li>

            @endforeach



        </ol>




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
