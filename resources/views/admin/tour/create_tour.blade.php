@extends('layouts.admin.app')
@extends('layouts.admin.sidebar')
@extends('layouts.admin.navbar')
{{-- Create Title --}}
@section('title','Create Tour')

@push('style')

@endpush

{{-- home Content --}}

@section('admin-content')
<section class="tour-lists p-8 ">
    <header class="tour-lists-header flex  items-center justify-between">
        <h1 class=" text-2xl font-semibold  capitalize">Create Tour </h1>
    </header>

    <div class="create-tour-content">
        <form action="{{route('tours.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col ">
                {{--Tour Img File Upload --}}
                <div class="my-6 flex items-center justify-between">
                    {{-- Image Preview --}}
                    <div class="image flex items-center space-x-4 ">
                        <img id="image" class="hidden w-32 h-20 object-contain">
                        <div class="file-name">Select File</div>
                    </div>
                    <div class="image-upload">
                        <button type="button" id="upload_btn" class=" pointer-events-auto inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white capitalize transition-colors bg-indigo-500 border rounded-md cursor-pointer hover:bg-indigo-600 active:bg-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Upload Image</button>
                        <input id="image_upload_input" type="file" name="tour_image" value="{{old('tour_image')}}" class="bg-indigo" hidden>
                    </div>

                </div>

                {{-- Tour Location Title --}}
                <div class=" mb-4">
                    <div class="flex justify-between mb-2">
                        <label for="tour_location_title" class="text-sm text-gray-800">Location Title</label>
                    </div>

                    <input type="text" name="tour_location_title" value="{{old('tour_location_title')}}" id=" tour_location_title" placeholder="Tour Location Title" class=" @error('tour_location_title') border-red-600 @enderror block w-full px-4 py-2 mt-2  placeholder-gray-400  border border-gray-300  rounded-lg bg-white text-gray-800  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />

                    @error('tour_location_title')
                    <span class="text-red-600 text-xs" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                {{-- Tour Location URL Address --}}
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <label for="tour_location_url" class="text-sm text-gray-800">Location Url</label>
                    </div>

                    <input type="text" name="tour_location_url" value="{{old('tour_location_url')}}" id=" tour_location_url" placeholder="Tour Location Url Address" class=" @error('tour_location_url') border-red-600 @enderror block w-full px-4 py-2 mt-2  placeholder-gray-400  border border-gray-300  rounded-lg bg-white text-gray-800  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />

                    @error('tour_location_url')
                    <span class="text-red-600 text-xs" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                {{--Tour Title --}}
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <label for="tour_title" class="text-sm text-gray-800">Title</label>
                    </div>

                    <input type="text" name="tour_title" value="{{old('tour_title')}}" id="tour_title" placeholder="Tour Title" class=" @error('tour_title') border-red-600 @enderror block w-full px-4 py-2 mt-2  placeholder-gray-400  border border-gray-300  rounded-lg bg-white text-gray-800  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />

                    @error('tour_title')
                    <span class="text-red-600 text-xs" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                {{-- Tour Text --}}
                <div class="mb-4">
                    <div class="flex justify-between mb-2">
                        <label for="tour_text" class="text-sm text-gray-800">Text</label>
                    </div>

                    <textarea name="tour_text" value="{{old('tour_text')}}" id="tour_text" cols="30" rows="5" placeholder="Tour Text" class=" @error('tour_text') border-red-600 @enderror block w-full px-4 py-2 mt-2  placeholder-gray-400  border border-gray-300  rounded-lg bg-white text-gray-800  focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 resize-none"></textarea>

                    @error('tour_text')
                    <span class="text-red-600 text-xs" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <button type="submit" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white capitalize transition-colors bg-indigo-500 border rounded-md hover:bg-indigo-600 active:bg-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Create Tour</button>

            </div>

        </form>
    </div>
</section>



{{-- Modal --}}


@endsection









@push('js')

<script>
    const uploadBtn = document.querySelector('#upload_btn');
    const uploadImageInput = document.querySelector('#image_upload_input');
    const fileName = document.querySelector('.file-name');
    const image = document.querySelector('#image');
    let regExp= /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

    uploadBtn.addEventListener('click', function(){
        uploadImageInput.click();

    })

    uploadImageInput.addEventListener("change", function(){
            image.classList.remove('hidden');
            const file = this.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function(){
                const result = reader.result;
                image.src = result;
            }
            reader.readAsDataURL(file);
            }
            if(this.value){
                let valueStore =this.value.match(regExp);
                fileName.textContent = valueStore;
            }
        });


</script>
@endpush