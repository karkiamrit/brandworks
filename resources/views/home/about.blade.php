<x-guest-layout>
    <div class="min-h-screen lg:px-[110px] pb-14 ">

        <div class="mx-auto items-center space-y-4  justify-center flex flex-col  h-[90vh] py-16">
            <div class="w-fit">
                <h2 class="text-4xl text-start">{{ trans('texts.why_title') }}</h2>
                <img src="{{ asset('eventAsset/image19.png') }}" alt="Logo" class="w-fit">
            </div>
            @if (Storage::exists('public/testimonial.pdf'))
                <div class="mt-4 text-center py-3">
                    <a  href="{{ Storage::url('public/testimonial.pdf') }}" download class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Download Testimonial PDF
                    </a>
                </div>
            @endif
        </div>

        <div class="lg:grid lg:grid-cols-8 grid-col hidden relative  bg-[#707070] py-16 ">
            <div class="lg:absolute lg:top-[10%] lg:right-0 lg:w-fit lg:text-center lg:left-13 lg:px-12 lg:leading-[50px]">
                <div >
                    <h1 class="text-5xl !leading-[120px] text-white">{{ trans('texts.pan_nepal_reach_title') }}</h1>
                    <p class="text-3xl text-white">{{ trans('texts.pan_nepal_reach_description') }}</p>
                </div>
            </div>
            <div class=" w-full space-y-12 self-end ms-24 col-span-2 ">
                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                         alt="">
                    <p class="text-red-700  text-2xl">{{trans('texts.qfx_network_offices')}}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center fill-yellow-400"
                         alt="">
                    <p class="text-green-500  text-2xl">{{trans('texts.edu_institution_network')}}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                         alt="">
                    <p class="text-yellow-400  text-2xl">{{trans('texts.associates_media_network')}}</p>
                </div>
            </div>
            <div class="w-full self-end col-span-6">
                <img src="{{ asset('eventAsset/nepal-map.png') }}" alt="Logo" class="w-full">
            </div>
        </div>

        <div class="lg:hidden bg-gray-500 ">
            <div class="py-12">
                <h1 class="text-xl text-center text-white">{{trans('texts.pan_nepal_reach_title')}}</h1>
                <p class="text-md text-center text-white">{{trans('texts.pan_nepal_reach_description')}}</p>
            </div>
            <div class="py-4 md:flex md:flex-col md:items-end">
                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[15px] h-[18px] text-center self-center"
                         alt="">
                    <p class="text-red-700  text-2xl">{{trans('texts.qfx_network_offices')}}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[15px] h-[18px] text-center self-center"
                         alt="">
                    <p class="text-green-500  text-2xl">{{trans('texts.qfx_network_offices')}}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[15px] h-[18px] text-center self-center"
                         alt="">
                    <p class="text-yellow-400  text-2xl">{{trans('texts.qfx_network_offices')}}</p>
                </div>
            </div>

            <div class="w-full self-end col-span-6 py-5">
                <img src="{{ asset('eventAsset/nepal-map.png') }}" alt="Logo" class="w-full">
            </div>
        </div>


        <div class="lg:grid  lg:grid-cols-8 py-4  pt-20  ">
            <div class="lg:col-span-2 py-16 px-4 bg-white lg:relative">
                <div class="">
                    <h2 class="text-4xl lg:text-start text-center">{{trans('texts.why_title')}}</h2>
                    <img src="{{ asset('eventAsset/image19.png') }}" alt="Logo" class="lg:w-[65%] mx-auto lg:mx-0 ">
                </div>
                <div class="lg:absolute lg:left-[10%] lg:top-[25%] lg:space-y-12 md:space-y-8 space-y-6 lg:py-5 py-8 font-century">
                    <div class="flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">{{trans('texts.years_of_experience')}}</p>
                        <p class="lg:text-xl md:text-xl !m-0 text-xl text-center lg:text-start text-gray-800 lg:!leading-[1.2rem] lg:pt-3">Collective experience</p>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">{{trans('texts.project_count')}}</p>
                        <p  class="lg:text-xl md:text-xl !m-0 text-xl  text-center text-gray-800 lg:!leading-[1.2rem] lg:pt-3">Projects</p>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">{{trans('texts.client_count')}}</p>
                        <p  class="lg:text-xl  md:text-xl !m-0  text-xl text-center text-gray-800 lg:!leading-[1.2rem] lg:pt-3">Clients</p>
                    </div>

                    <div class="flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">11+</p>
                        <p class=" !m-0 text-xl text-center text-gray-600 lg:!leading-[1.2rem] lg:pt-3 lg:w-1/5">{{trans('texts.seasoned_professionals')}}</p>
                    </div>

                </div>
            </div>
            <div class="col-span-6">
                <img src="{{ asset('eventAsset/image18.png') }}" alt="Logo" class="w-full">
            </div>
        </div>

        <div class="grid lg:grid-cols-6 grid-cols-2 gap-8 pt-20 ">
            <div class="grid col-span-3 h-2/3 md:px-10">
                <img src="{{ asset('eventAsset/image19.jpg') }}" alt="Logo" class="h-full w-full ">
                <p class="md:text-3xl text-xl px-3 md:px-0 md:py-6 lg:py-0">{{trans('texts.worked_with_title')}}</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 col-span-3 lg:gap-3  px-10 lg:px-0">
                @for ($i =1 ; $i <= 35; $i++)
                    <div class="flex items-center justify-center w-32 h-32 "> <!-- Fixed width and height -->
                        <img src="{{ asset('eventAsset/client-logos/' . $i . '.png') }}" alt="{{$i}}" class="h-full w-full mix-blend-multiply object-contain"> <!-- Ensure images fit within the container -->
                    </div>
                @endfor
            </div>

        </div>

    </div>
</x-guest-layout>
