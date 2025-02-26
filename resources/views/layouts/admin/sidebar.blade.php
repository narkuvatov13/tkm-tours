@section('admin-sidebar')

<sidebar class="flex flex-col px-8 py-4 bg-gray-900 max-h-screen h-screen w-max">
    <header class="flex items-center space-x-3 mb-12 pl-6">
        <img class="h-8 w-8 rounded-full" src="{{asset('images/Logo.png')}}" alt="company-logo">
        <h1 class="text-gray-200 font-semibold">Thecodenarsoft</h1>
    </header>

    <ul class=" flex flex-col space-y-2">
        {{-- Dashboard --}}
        <li class="flex items-center">
            <a href="{{route('admin.index')}}" class=" flex items-center  rounded-md space-x-4 py-3 pl-4 pr-8 text-center  w-full  cursor-pointer outline-none hover:bg-indigo-600 transition-colors">
                <svg class="w-10 h-6 fill-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                </svg>
                <span class="text-gray-200 tracking-wider">
                    Dashboard
                </span>
            </a>
        </li>

        {{-- Dropdown Btn Posts --}}
        <li class="flex flex-col">
            <a href="{{route('tours.index')}}" class="flex items-center  rounded-md space-x-4 py-3 pl-4 pr-8 text-center  w-full  cursor-pointer outline-none hover:bg-indigo-600 transition-colors">
                <svg class="w-10 h-6 fill-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H368c-8.8 0-16 7.2-16 16s7.2 16 16 16h48v48c0 8.8 7.2 16 16 16s16-7.2 16-16V384h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H448V304z" />
                </svg>
                <span class="text-gray-200  text-center tracking-wider">
                    Tours
                </span>
            </a>
            {{-- Dropdown Content --}}
            {{-- <ul>
                <li class="flex items-center ">
                    <a href="#" class="flex items-center justify-center  rounded-md space-x-4 py-3 pl-4 pr-8 text-center  w-full  cursor-pointer outline-none hover:bg-indigo-600 transition-colors">
                        <svg class="w-4 h-4 fill-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                            <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm16 80c0-8.8-7.2-16-16-16s-16 7.2-16 16v48H368c-8.8 0-16 7.2-16 16s7.2 16 16 16h48v48c0 8.8 7.2 16 16 16s16-7.2 16-16V384h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H448V304z" />
                        </svg>
                        <span class="text-gray-200 text-sm text-center tracking-wider">
                            Post Create
                        </span>
                    </a>
                </li>
            </ul> --}}
        </li>
    </ul>

    <div class=" mt-auto logout flex flex-col items-center">
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class=" flex items-center  rounded-md space-x-4 py-3 pl-4 pr-8 text-center  w-full  cursor-pointer outline-none hover:bg-indigo-600 transition-colors">
            <svg class="w-10 h-6 fill-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                <path d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z" />
            </svg>
            <span class="text-gray-200 tracking-wider">
                Sign Out
            </span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </a>
        <div class="w-full mt-4">
            <a class="flex items-center justify-center text-gray-200  tracking-wider py-3 pl-4 pr-8  rounded-md cursor-pointer outline-none hover:bg-indigo-600 transition-colors" href="{{ route('home.index') }}">
                Home
            </a>
        </div>
    </div>

</sidebar>

@endsection