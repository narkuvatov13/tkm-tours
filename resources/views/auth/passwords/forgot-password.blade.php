<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__("Forget Password")}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>

    <body>

        <div class="bg-gray-900">
            <div class="flex justify-center h-screen">
                <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                    <div class="flex-1">
                        <div class="text-center">
                            <a href="{{route('login')}}" class="flex justify-center mx-auto">
                                <img class="w-auto h-10 sm:h-11" src="{{asset('images/Logo.png')}}" alt="">
                            </a>

                            <p class="mt-3 text-2xl md:text-4xl text-gray-500 dark:text-gray-300">Reset Password</p>
                        </div>
                        @if(session('status'))
                            <div class="px-4 py-8 bg-green-500" role="alert">
                                {{session('status')}}
                            </div>
                        @endif
                        <div class="mt-8">
                            <form method="POST" action="{{route('password.request')}}" enctype="multipart/form-data">
                                @csrf
                                <div>
                                    <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Email Address</label>
                                    <input type="email" name="email" id="email" placeholder="example@example.com" class=" @error('email') border-red-600 @enderror block w-full px-4 py-2 mt-2  placeholder-gray-400 bg-white border  rounded-lg dark:placeholder-gray-600 dark:bg-gray-900 text-gray-300 border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                                    @error('email')
                                        <span class="text-red-600 text-xs" role="alert"><strong>{{ $message }}</strong></span>
                                    @enderror
                                </div>

                                <div class="mt-6">
                                    <button type="submit" class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:bg-blue-400 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                                        Reset
                                    </button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>

</html>
