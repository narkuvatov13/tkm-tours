@extends('layouts.admin.app')
@extends('layouts.admin.sidebar')
@extends('layouts.admin.navbar')
{{-- Admin Title --}}
@section('title','Admin Home')

@push('style')

@endpush

{{-- Tours Lists Content --}}

@section('admin-content')
<section class="tour-lists p-8 ">

    @livewire('admin.tour.show-tours')

</section>
@endsection








@push('js')

<script>
</script>

@endpush