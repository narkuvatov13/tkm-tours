@extends('layouts.admin.app')
@extends('layouts.admin.sidebar')
@extends('layouts.admin.navbar')
{{-- Admin Title --}}
@section('title','Itinerary')

@push('style')

@endpush

{{-- Tours Lists Content --}}

@section('admin-content')
<section class="tour-lists p-8 ">

    @livewire('admin.itinerary.itinerary')

</section>
@endsection








@push('js')

<script>
</script>

@endpush
