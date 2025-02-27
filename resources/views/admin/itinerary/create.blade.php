@extends('layouts.admin.app')
@extends('layouts.admin.sidebar')
@extends('layouts.admin.navbar')

{{-- Create Title --}}
@section('title', 'Create Itinerary')

@push('style')

@endpush

{{-- home Content --}}

@section('admin-content')
    <section class="tour-lists p-8 ">
        <header class="tour-lists-header flex  items-center justify-between">
            <h1 class=" text-2xl font-semibold  capitalize"> Create Itinerary </h1>
            <div class="">

                @if(\App\Models\Tour::count() != 0)
                    <button id="add_paragraph"
                        class="mt-1 inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white capitalize transition-colors bg-indigo-500 border rounded-md hover:bg-indigo-600 active:bg-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Add
                        Itinerary Paragraph</button>
                @else
                    <a href="{{route('tours.create')}}"
                        class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white capitalize transition-colors bg-indigo-500 border rounded-md hover:bg-indigo-600 active:bg-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Tour
                        Create</a>

                @endif



            </div>
        </header>

        <div class="create-tour-content">
            @if(\App\Models\Tour::count() > 0)
                <form action="{{route('itinerary.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col ">
                        <div class="">
                            <div class="">
                                {{-- Itinerary Title --}}
                                <div class=" mb-4">
                                    <div class="flex justify-between mb-2">
                                        <label for="itinerary_title" class="text-sm text-gray-800">Itinerary Title</label>
                                    </div>

                                    <input type="text" name="itinerary_title" value="{{old('tour_location_title')}}"
                                        placeholder="Itinerary Title"
                                        class="block w-full px-4 py-2 mt-2  placeholder-gray-400  border border-gray-300  rounded-lg bg-white text-gray-800  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                        required />

                                    @error('itinerary_title')
                                        <span class="text-red-600 text-xs" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>


                                {{--Itinerary paragraph --}}
                                <div id="itinerary_paragraph_container" class="mb-4 border-b pb-1  border-gray-300">
                                    <div class="flex justify-between mb-2">
                                        <label for="itinerary_paragraph" class="text-sm text-gray-800">Itinenary
                                            Paragraph</label>
                                    </div>

                                    <input type="text" name="itinerary_paragraph[]" value="{{old('itinerary_paragraph')}}"
                                        placeholder="Itinerary paragraph"
                                        class=" block w-full px-4 py-2 mt-2  placeholder-gray-400  border border-gray-300  rounded-lg bg-white text-gray-800  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40"
                                        required />

                                    @error('itinerary_paragraph.*')
                                        <span class="text-red-600 text-xs" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror

                                </div>

                            </div>
                        </div>


                        {{-- Select Tour --}}
                        <div class="w-full mb-2">


                            <select name="tour" class=" flex text-gray-800 px-4 py-3 w-full rounded-md border  border-gray-300">
                                @foreach (\App\Models\Tour::all() as $tour)
                                    <option value="{{$tour->id}}">{{$tour->tour_location_title }}</option>
                                @endforeach
                            </select>
                        </div>



                        <button type=" submit"
                            class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white capitalize transition-colors bg-indigo-500 border rounded-md hover:bg-indigo-600 active:bg-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Create
                            Itinerary
                        </button>

                    </div>

                </form>
            @endif

        </div>
    </section>



    {{-- Modal --}}


@endsection









@push('js')
    <script>

        const addParagraph = document.getElementById('add_paragraph');
        // itinerary_paragraph
        addParagraph.addEventListener('click', function () {
            let container = document.getElementById('itinerary_paragraph_container');
            let newInput = document.createElement('input');
            newInput.setAttribute('type', 'text');
            newInput.setAttribute('name', 'itinerary_paragraph[]');
            newInput.setAttribute('placeholder', 'Itinerary paragraph');
            newInput.setAttribute('class',
                ' block w-full px-4 py-2 mt-2  placeholder-gray-400  border border-gray-300  rounded-lg bg-white text-gray-800  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40'
            );
            newInput.setAttribute('reqired', true);
            container.appendChild(newInput);

        });
    </script>
@endpush
