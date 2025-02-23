@extends('layouts.admin.app')
@extends('layouts.admin.sidebar')
@extends('layouts.admin.navbar')
{{-- Admin Title --}}
@section('title','Admin Home')

@push('style')

@endpush

{{-- home Content --}}

@section('admin-content')

<section class="tour-lists p-8">
    <header class="tour-lists-header flex  items-center justify-between">
        {{-- Header --}}
        <h1 class=" text-2xl font-semibold  capitalize">Dashboard</h1>
    </header>

    <section class="mt-8">
        <div class="cards grid grid-cols-3 gap-8">
            <div class="card border flex flex-col justify-center items-center space-y-4 py-4 bg-white shadow rounded-md">
                <h1 class="text-gray-800 text-2xl font-semibold tracking-wide">Tours</h1>
                <span class="text-8xl text-gray-700">{{$tour_counts}} </span>
            </div>
        </div>
    </section>
</section>


@endsection









@push('js')

@endpush
