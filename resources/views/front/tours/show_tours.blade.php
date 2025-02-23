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
            <h1 class="uppercase text-4xl lg:text-6xl font-semibold text-gray-200 z-10 select-none">{{$tour->tour_title}}</h1>
        </div>
    </header>
</section>

<main class="container p-10">

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
