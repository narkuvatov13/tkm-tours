<div>
    <header class="tour-lists-header flex  items-center justify-between">
        {{-- Header --}}
        <h1 class=" text-2xl font-semibold  capitalize">Tour Lists </h1>
        {{-- Toast Message --}}
        @if(session()->has('tour'))
        <div class="bg-green-100 px-4 py-4 rounded-lg  ">
            <p class=" text-green-950">{{session()->get('tour')}}</p>
        </div>
        @endif
        {{-- Button --}}
        <a href="{{route('tours.create')}}" class="inline-flex items-center justify-center h-10 px-4 py-2 text-sm font-medium text-white capitalize transition-colors bg-indigo-500 border rounded-md hover:bg-indigo-600 active:bg-indigo-600 focus:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none">Create Tour</a>
    </header>

    <div class="flex flex-wrap">
        <div class="w-full max-w-full ">
            <div class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white mt-10">
                <div class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">

                    <div class="flex-auto ">
                        <div class="overflow-x-auto  rounded-lg">
                            <table class="w-full my-0   ">
                                <thead class="bg-gray-900 ">
                                    <tr class="font-semibold text-[0.95rem] text-white">
                                        <th class="pb-3 text-start min-w-[8rem] pl-8 py-4">TOUR IMAGE</th>
                                        <th class="pb-3 text-start min-w-[6.25rem]  py-4">TOUR NAME</th>
                                        <th class="pb-3 text-start min-w-[11rem]  py-4">TOUR TEXT</th>
                                        <th colspan="2" class="text-center min-w-[6rem] pr-8 py-4 ">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($tours as $tour )
                                    <tr class="border-b border-dashed last:border-b-0 hover:bg-gray-100">
                                        <td class="pl-8 py-4 text-start">
                                            <div class="flex items-center">
                                                <div class="relative ">
                                                    <img src="{{asset('storage/'.$tour->tour_img)}} " class="h-12 w-14 object-contain" alt="">
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" py-4 text-start">
                                            <span class="font-semibold text-light-inverse text-md/normal">{{$tour->tour_title}}</span>
                                        </td>
                                        <td class=" py-4 text-start">
                                            <span class="text-center align-baseline inline-flex px-2 py-1 mr-auto items-center font-semibold text-base/none text-success bg-success-light rounded-lg">
                                                {{ Str::limit($tour->tour_text,50)}}
                                            </span>
                                        </td>
                                        <td class="pr-8 py-4 text-end">
                                            <div class="flex items-center justify-center space-x-4">
                                                <a href="{{route('tours.edit',$tour->id)}}">
                                                    <svg class="w-6 h-6 fill-green-500 hover:fill-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                                        <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                                    </svg>

                                                </a>
                                                <form wire:submit.prevent="delete({{$tour->id}})" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">
                                                        <svg class="w-7 h-7 fill-red-500 hover:fill-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2023 Fonticons, Inc. -->
                                                            <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $tours->links('vendor.livewire.tour-paginate') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <table id="example" class="border-collapse border border-slate-500 border-spacing-4">
        <thead class="bg-gray-800">
            <tr>
                <th>Images</th>
                <th class="border border-slate-600">Name</th>
                <th>Text</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009-01-12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012-03-29</td>
                <td>$433,060</td>
            </tr>

        </tbody>

    </table> --}}
</div>
