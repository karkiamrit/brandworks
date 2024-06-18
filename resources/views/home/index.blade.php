<x-guest-layout>
    <!-- Logo and Center Content -->
    <div class="px-3 md:px-0 overflow-hidden ">

        <div class="lg:h-[100vh] h-[36vh] flex  flex-col justify-center ">
            <div class="text-center  flex justify-center items-center">
                {{-- <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto"> --}}
                @foreach (trans('texts.herologo') as $event)
                    <div class="">
                        @include('components.hero-carousel', [
                            'images' => $event['images'],
                        ])
                    </div>
                @endforeach
            </div>
            {{-- <p class="text-center md:text-2xl text-xl flex flex-col relative bottom-12">
                <span>{{ trans('texts.brand_actions') }}</span>
                <span>{{ trans('texts.activation_fabrication') }} </span>
            </p> --}}
        </div>



        {{-- <div
            class=" flex items-center text-xl lg:text-2xl text-gray-400  before:flex-1 before:border-t before:border-gray-500 before:me-6 after:flex-1 after:border-t after:border-gray-500 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600 mb-20">
            {{ trans('texts.avani_aligns') }}
        </div> --}}


        <div class="">
            <div
                class=" flex items-center text-xl lg:text-5xl font-black text-gray-700  before:flex-1 before:border-t before:border-gray-500 before:me-6 after:flex-1 after:border-t after:border-gray-500 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600 lg:mt-0 mt-10">
                Our Group Of Companies
            </div>

            <div class="flex justify-center items-center space-x-4 -my-12 lg:-my-0">
                @foreach (trans('texts.partnerlogo') as $event)
                    <div>
                        @include('components.partners-carousel', [
                            'carousels' => [
                                'images' => $event['images'],
                            ],
                        ])
                    </div>
                @endforeach
            </div>

            {{-- 
            <div class="md:flex items-center sm:flex-wrap md:flex-nowrap h-screen">
                <div>
                    <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto lg:w-3/4 md:w-5/6  ">
                </div>
                <p
                    class="md:text-2xl lg:text-2xl text-xl text-center md:text-start  leading-10  md:w-[75%] md:border-l px-6 md:border-b-0 border-t md:border-t-0 border-gray-500">
                    {{ trans('texts.brandworks_vision') }}

                </p>
            </div> --}}

            <div class="md:flex items-center sm:flex-wrap md:flex-nowrap relative bg-fixed bg-center bg-cover opacity-90 h-[70vh] lg:h-[60vh]"
                style="background-image: url('{{ asset('eventAsset/image201.png') }}');">
                <div class="flex lg:flex-row lg:items-center flex-col ">
                    <div>
                        <img src="{{ asset('home/logo.png') }}" alt="Logo"
                            class="mx-auto lg:w-3/4 md:w-5/6 lg:mt-0 mt-5">
                    </div>
                    <p
                        class="md:text-2xl lg:text-2xl text-lg text-center text-gray-300 md:text-start  md:w-[75%] md:border-l px-6 md:border-b-0 border-t md:border-t-0 border-gray-500">
                        {{ trans('texts.brandworks_vision') }}
                    </p>
                </div>
            </div>

            <script>
                window.addEventListener('scroll', function() {
                    const parallax = document.querySelector('.h-screen');
                    let scrollPosition = window.pageYOffset;

                    parallax.style.transform = 'translateY(' + scrollPosition * parallax.dataset.speed + 'px)';
                });
            </script>

            <div
                class="bg-gradient-to-r from-gray-400  to-white grid lg:grid-cols-3 items-center justify-center  space-y-12 md:space-y-0 lg:h-screen ">
                <div class=" lg:col-span-1  md:w-2/3 md:mx-auto lg:mx-0 lg:w-full ">
                    <img src="{{ asset('eventAsset/image11.png') }}" alt="Logo" class="w-full ">
                </div>
                <div class="lg:col-span-2  lg:w-2/3 mx-auto   relative self-center justify-center  bg-none">
                    <p class="text-xl lg:text-2xl  lg:!leading-[3.2rem] text-center lg:text-start md:text-2xl pb-10">
                        {{ trans('texts.motley_group') }}</p>
                </div>
            </div>


            {{-- <div class=" lg:flex lg:justify-between lg:pe-12 lg:items-center space-y-12 md:space-y-0 h-[60%]  ">
                <div class="bg-gray-300 md:w-2/3 md:mx-auto lg:mx-0  lg:w-1/2">
                    <img src="{{ asset('eventAsset/image12.jpg') }}" alt="Logo" class="w-full">
                </div>
                <p
                    class=" lg:w-[650px]  lg:left-[46%] lg:!leading-[3rem] lg:text-3xl text-xl text-center lg:text-start md:text-2xl">
                    {{ trans('texts.mission') }}
                </p>
                <div class="absolute top-0 right-0 w-4/12 h-full bg-gradient-to-l from-transparent to-gray-200"></div>
            </div> --}}



            {{-- <div class="flex lg:flex-row  flex-col md:space-y-0 h-screen  w-full items-center my-40">
                <div class="lg:w-[58%] w-full md:w-[70%] mx-auto">
                    <img src="{{ asset('eventAsset/image13.png') }}" alt="Logo" class="w-full right-16 ">
                </div>
                <p
                    class=" lg:w-[650px]  lg:left-[46%] lg:!leading-[3rem] lg:text-2xl mx-10 text-xl text-center lg:text-start md:text-2xl">
                    {{ trans('texts.focus') }}</p>
            </div> --}}



            {{-- <div class="bg-black px-5">
                <div>
                    <img src="{{ asset('home/gray-brandwork-logo.png') }}" class="grayscale w-[100px]" alt="">
                </div>
                <div class="flex flex-col lg:flex-row items-center justify-between lg:pr-[5rem]">
                    <div>
                        <img src="{{ asset('home/path-picture.png') }}" alt="" class="w-full lg:w-fit">
                    </div>
                    <div>
                        <ul
                            class="lg:text-2xl lg:space-y-16 lg:text-end  text-center space-y-4 text-md  md:text-xl pb-8 lg:pb-0 text-gray-100">
                            @foreach (trans('texts.footer_list') as $footerItem)
                                <li>{{ $footerItem }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> --}}


            {{-- <div class="md:h-[50rem] gap-12 lg:gap-0 flex flex-col justify-around py-5 lg:py-0"
                style="background-image: url({{ asset('home/chess-mat.png') }}); background-repeat: no-repeat; background-size: cover">
                <p class="text-center  lg:text-3xl lg:w-1/2 lg:mx-auto text-gray-100 lg:!leading-[3rem] md:text-2xl">
                    {{ trans('texts.skill_set') }}
                </p>
                <p class="text-center lg:text-3xl lg:w-2/3 lg:mx-auto text-gray-100 lg:!leading-[3rem] md:text-2xl">
                    {{ trans('texts.allied_partners') }}
                </p>
            </div>


            <div class="md:min-h-[50rem] flex flex-col lg:space-y-6 justify-center lg:pt-16 items-start bg-blend-multiply bg-blue-300 overflow-hidden"
                style="background-image: url({{ asset('home/chess-mat.png') }}); background-repeat: no-repeat; background-size: cover;">

                <div class="flex w-full lg:flex-row flex-col lg:space-x-20 space-y-12 lg:space-y-0">

                    @if (isset($dataList['work']))
                        @foreach ($dataList['work'] as $category)
                            @if (isset($category['title']) && isset($category['content']))
                                <div class="space-y-3 lg:w-1/4 w-full  h-full lg:px-12 px-4">
                                    <h2 class="text-4xl text-gray-100">{{ $category['title'] }}</h2>
                                    <div class="bg-black opacity-80  space-y-2 p-3">
                                        @foreach ($category['content'] as $item)
                                            <li class="text-white text-md md:text-2xl lg:text-lg">{{ $item }}
                                            </li>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div
                    class="grid justify-center items-center lg:py-4 lg:grid-cols-4 w-full lg:mx-4 md:grid-cols-3 grid-cols-1">

                    @if (isset($dataList['eventPlanning']))
                        @foreach ($dataList['eventPlanning'] as $plan)
                            <p class="uppercase">{{ $plan }}</p>
                        @endforeach
                    @endif
                </div>

            </div>

            <div class="p-3 bg-black">
                <div class="bg-black lg:py-20 lg:px-20 md:min-h-[50rem] md:py-16  border-orange-500 border p-3">
                    <p class="lg:text-3xl lg:w-10/12 text-white md:text-2xl">{{ trans('texts.purpose') }}</p>
                    <div class="flex md:flex-row flex-col py-16 lg:py-0 justify-start items-center">
                        <p class="md:text-2xl lg:!leading-10 text-white lg:w-2/3 md:w-full">
                            {{ trans('texts.diverse_community') }}</p>
                        <div>
                            <img src="{{ asset('home/sea-horse.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>

        </div> --}}

        </div>
        {{-- why brandwork section  --}}
        <div
            class="bg-gradient-to-r from-gray-400  to-white mx-auto lg:items-left items-left space-y-4  justify-start flex flex-col h-72 lg:pl-24 ">
            <div class="w-fit pl-4 lg:pl-0">
                <h2 class="text-4xl text-start">{{ trans('texts.why_title') }}</h2>
                <img src="{{ asset('eventAsset/image19.png') }}" alt="Logo" class="w-fit">
            </div>
            {{-- @if (Storage::exists('public/testimonial.pdf'))
                    <div class="mt-4  py-3">
                        <a href="{{ Storage::url('public/testimonial.pdf') }}" download
                            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Download Testimonial PDF
                        </a>
                    </div>
                @endif --}}
        </div>

        {{-- section about --}}

        <div
            class="bg-gradient-to-r from-gray-400  to-white lg:grid lg:grid-cols-8 grid-col relative  bg-[#707070] pr-24 pb-24 ">
            <div
                class="lg:absolute lg:top-[10%] lg:right-0 lg:w-fit lg:text-center lg:left-13 lg:px-12 lg:leading-[50px] -my-24 md:my-0">
                <div class="pl-20 md:pl-0 pb-10 lg:pb-0">
                    <h1 class="text-xl lg:text-5xl lg:!leading-[120px] text-center text-gray-600">
                        {{ trans('texts.pan_nepal_reach_title') }}
                    </h1>
                    <p class=" text-lg lg:text-3xl text-gray-600 text-center">
                        {{ trans('texts.pan_nepal_reach_description') }}</p>
                </div>
            </div>
            <div class=" w-full space-y-12 self-end ms-24 col-span-2 pt-24 md:pt-0">
                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                        alt="">
                    <p class="text-red-700  text-2xl">{{ trans('texts.qfx_network_offices') }}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}"
                        class="w-[25px] h-[28px] text-center self-center fill-yellow-400" alt="">
                    <p class="text-green-500  text-2xl">{{ trans('texts.edu_institution_network') }}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                        alt="">
                    <p class="text-yellow-400  text-2xl">{{ trans('texts.associates_media_network') }}</p>
                </div>
            </div>
            <div class="w-full self-end col-span-6">
                <img src="{{ asset('eventAsset/nepal-map.png') }}" alt="Logo" class="w-full">
            </div>
        </div>


        <div>
            @include('home.services.services')
        </div>


        {{-- section two  --}}

        <div class="bg-gradient-to-r from-gray-400  to-white py-6">


            <div class="text-center text-xl lg:text-5xl font-black  py-4 text-gray-700 ">
                {{-- <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full"> --}}
                Our Trusted Clients
            </div>


            <div class="flex justify-center items-center space-x-4">
                @foreach (trans('texts.brandlogo') as $event)
                    <div>
                        @include('components.group-company-carousel', [
                            'carousels' => [
                                'images' => $event['images'],
                            ],
                        ])
                    </div>
                @endforeach
            </div>

        </div>

        <div class="bg-gradient-to-r from-gray-400  to-white py-6">


            <div class="text-center text-xl lg:text-5xl font-black  py-4 text-gray-700 mb-10">
                {{-- <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full"> --}}
                Blogs
            </div>
            <div class="flex lg:flex-row flex-col">
                @foreach (trans('texts.blogs') as $post)
                    @include('components.blog-card', ['post' => $post])
                @endforeach
            </div>




        </div>

        {{-- <div class="div">
                @foreach (trans('texts.brandlogo') as $event)
                    <div class="">
                        @include('components.swiper-carousel', [
                            'images' => $event['images'],
                        ])
                    </div>
                @endforeach

            </div> --}}

    </div>


</x-guest-layout>
