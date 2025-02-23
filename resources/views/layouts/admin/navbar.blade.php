{{-- Navbar --}}


@section('admin-navbar')
<nav class="flex items-center justify-end space-x-6 bg-gray-900 md:w-full md:h-16 p-8">
    <div class=" profile flex items-center space-x-2">
        <img class="w-10 h-10 rounded-full object-cover" src="{{asset('images/people/4.jpg')}}" alt="user_img">
        <div class="profile-text-content flex flex-col text-center">
            <h1 class="text-gray-200 tracking-wider capitalize">{{ auth()->user()->name}}</h1>
            {{-- <p class="text-gray-500 tracking-wide text-xs">Full Stack Developer</p> --}}
        </div>
    </div>
</nav>
@endsection