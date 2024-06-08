<x-guest-layout>
    <!-- Logo and Center Content -->
    <div class="px-3 md:px-0 overflow-hidden">

        <div class="h-[90vh]  flex  flex-col justify-center ">
            <div class="text-center ">
                <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto">
            </div>
            <p class="text-center md:text-2xl text-xl flex flex-col">
                <span>{{ trans('texts.brand_actions') }}</span>
                <span>{{ trans('texts.activation_fabrication') }} </span>
            </p>
        </div>

        <div class="space-y-12 mb-40 ">
            <div class="text-center lg:w-1/3 md:mx-auto md:w-2/3 ">
                <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full">
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 md:gap-4 align-middle min-h-max gap-6  mx-6">

                @foreach ($logos as $logo)
                    <div class="text-center col-span-1 min-h-max self-center">
                        <div class="">
                            <img src="{{ asset($logo['image']) }}" alt="{{ $logo['name'] }}"
                                class="mx-auto w-1/2 lg:h-full lg:w-full mix-blend-multiply object-contain">
                        </div>
                        <p class="lg:text-lg text-sm text-gray-500">{{ trans('texts.branding_communication') }}</p>
                    </div>
                @endforeach
            </div>

            <div
                class="py-3 flex items-center text-xl lg:text-2xl text-gray-400  before:flex-1 before:border-t before:border-gray-500 before:me-6 after:flex-1 after:border-t after:border-gray-500 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
                {{ trans('texts.avani_aligns') }}
            </div>

            <div class="md:flex items-center sm:flex-wrap md:flex-nowrap h-screen">
                <div>
                    <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto lg:w-3/4 md:w-5/6  ">
                </div>
                <p
                    class="md:text-2xl lg:text-2xl text-xl text-center md:text-start  leading-10  md:w-[75%] md:border-l px-6 md:border-b-0 border-t md:border-t-0 border-gray-500">
                    {{ trans('texts.brandworks_vision') }}

                </p>
            </div>


            <div class="bg-gray-200 grid lg:grid-cols-3 items-center justify-center  space-y-12 md:space-y-0 py-20 ">
                <div class=" lg:col-span-1  md:w-2/3 md:mx-auto lg:mx-0 lg:w-full ">
                    <img src="{{ asset('eventAsset/image11.png') }}" alt="Logo" class="w-full">
                </div>
                <div class="lg:col-span-2  lg:w-2/3 mx-auto bg-gradient-to-bl  relative lg:bottom-20 self-center justify-center ">
                    <p class="text-xl lg:text-2xl  lg:!leading-[3.2rem] text-center lg:text-start md:text-2xl">
                        {{ trans('texts.motley_group') }}</p>
                </div>
            </div>


            <div class=" lg:flex lg:justify-between lg:pe-12 lg:items-center space-y-12 md:space-y-0 h-[60%]  ">
                <div class="bg-gray-300 md:w-2/3 md:mx-auto lg:mx-0  lg:w-1/2">
                    <img src="{{ asset('eventAsset/image12.jpg') }}" alt="Logo" class="w-full">
                </div>
                <p
                    class=" lg:w-[650px]  lg:left-[46%] lg:!leading-[3rem] lg:text-3xl text-xl text-center lg:text-start md:text-2xl">
                    {{ trans('texts.mission') }}
                </p>
                <div class="absolute top-0 right-0 w-4/12 h-full bg-gradient-to-l from-transparent to-gray-200"></div>
            </div>



            <div class="flex lg:flex-row  flex-col md:space-y-0 h-screen  w-full items-center my-40">
                <div class="lg:w-[58%] w-full md:w-[70%] mx-auto">
                    <img src="{{ asset('eventAsset/image13.png') }}" alt="Logo" class="w-full right-16 ">
                </div>
                <p
                    class=" lg:w-[650px]  lg:left-[46%] lg:!leading-[3rem] lg:text-2xl mx-10 text-xl text-center lg:text-start md:text-2xl">
                    {{ trans('texts.focus') }}</p>
            </div>



            <div class="bg-black px-5">
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
            </div>


            <div class="md:h-[50rem] gap-12 lg:gap-0 flex flex-col justify-around py-5 lg:py-0"
                style="background-image: url({{ asset('home/chess-mat.png') }}); background-repeat: no-repeat; background-size: cover">
                <p class="text-center  lg:text-3xl lg:w-1/2 lg:mx-auto text-gray-100 lg:!leading-[3rem] md:text-2xl">
                    {{ trans('texts.skill_set') }}
                </p>
                <p class="text-center lg:text-3xl lg:w-2/3 lg:mx-auto text-gray-100 lg:!leading-[3rem] md:text-2xl">
                    {{ trans('texts.allied_partners') }}
                </p>
            </div>


            <div class="md:min-h-[50rem] flex flex-col lg:space-y-6 justify-center lg:pt-16 items-start bg-blend-multiply bg-blue-300 "
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
                    class="grid justify-center items-center lg:py-4 lg:grid-cols-4 w-full lg:mx-12 md:grid-cols-3 grid-cols-1">

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
                        <p class="md:text-2xl lg:!leading-10 text-white lg:w-2/3 md:w-full">{{ trans('texts.diverse_community') }}</p>
                        <div>
                            <img src="{{ asset('home/sea-horse.jpg') }}" alt="">
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>

</x-guest-layout>
