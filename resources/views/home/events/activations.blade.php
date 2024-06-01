@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

<!-- Logo and Center Content -->
<div class=" bg-black w-full">

    <div class="px-10 flex flex-col sticky top-0 z-50 bg-black py-4 w-full">
        <div class="flex flex-row items-center justify-start">
            <a class="text-2xl font-bold flex justify-start grayscale opacity-45" href={{ route('home') }}>
                <x-application-logo
                    class="block h-9 w-auto fill-current text-gray-600 text-start mt-2 filter grayscale" /> </a>
        </div>
        <div class="title flex items-center justify-center">
            <h1 class=" text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">ACTIVATIONS
            </h1>
        </div>
    </div>

    <!--Activation page second lage section -->
    <div class="grid grid-cols-3 p-10">
        <div class="flex flex-col gap-10">
            <img src="eventAsset/image194.jpeg" alt=""
                class="h-[16rem]relative  w-[28rem] object-cover shadow-lg">
            <img src="eventAsset/image196.jpeg" alt=""
                class="h-[16rem]relative  w-[28rem] object-cover shadow-lg ">
        </div>
        <div class="flex flex-col">
            <div class="border-gray-500 text-white border-2 md:-ml-5 md:mr-20 md:h-24 flex items-center">
                <div class="flex-col pl-2">
                    <p>TataH5</p>
                    <p>Activation</p>
                </div>
            </div>

            <div class="border-gray-500 mt-64 text-white border-2  md:ml-20 md:h-24 flex items-center">
                <div class="flex-col ml-auto md:pr-2">
                    <p class="flex justify-end">Honda Grazia</p>
                    <p>SuperMarket Activation</p>
                </div>
            </div>

            <div class="border-gray-500 text-white border-2 md:-ml-5 md:mr-20 md:h-24 flex items-center md:mt-[95px]">
                <div class="flex-col pl-2 ">
                    <p>Tata Motors Commercial Vehicle</p>
                    <p>Exchange Group</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <img src="eventAsset/image195.jpeg" alt=""
                class="h-[16rem]relative  w-[28rem] object-cover shadow-lg">

        </div>

    </div>

    <!--Activation page last section -->
    <div class="grid grid-rows-2 p-10">
        <div class="grid grid-cols-3">
            <div>
                <img src="eventAsset/image198.jpeg" alt=""
                    class="h-[16rem]relative  w-full object-cover shadow-lg">
            </div>
            <div class="border-gray-500 text-white border-2 md:h-36 flex items-center mx-12">
                <div class="flex-col md:pr-2 ml-auto">
                    <p class="flex justify-end">Tata Motors</p>
                    <p class="flex justify-end">Global Service Camp</p>
                    <p class="flex justify-end">1st of kind in Nepal</p>
                </div>
            </div>
            <div>
                <img src="eventAsset/image199.jpeg" alt=""
                    class="h-[16rem]relative  w-full object-cover shadow-lg">
            </div>

        </div>
        <div class="flex justify-center md:mt-2">
            <img src="eventAsset/image197.jpeg" alt=""
                class="h-[16rem]relative w-[30rem] object-cover shadow-lg">
        </div>
    </div>

    <!--Activation page first section -->
    <div class="grid grid-rows-2 p-10">
        <div class="grid grid-cols-3">
            <img src="eventAsset/image180.jpeg" alt=""
                class="h-[16rem]relative  w-[26rem] object-cover shadow-lg">
            <div class="border-gray-500 text-white border-2 md:h-36 flex items-center mx-12">
                <div class="flex-col md:pr-2 ml-auto">
                    <p class="flex justify-end">Tata Motors</p>
                    <p class="flex justify-end">Nexon EV Range Test Challenge</p>
                    <p class="flex justify-end gap-2"><span>1<sup class="pt-3">st</sup><span> of kind in Nepal</p>
                </div>
            </div>
            <img src="eventAsset/image179.jpeg" alt=""
                class="h-[17rem]relative  w-[34rem] object-cover shadow-lg">
        </div>
        <div class="flex flex-row gap-2">
            <img src="eventAsset/image181.jpeg" alt=""
                class="h-[8rem]relative md:w-[33rem] object-cover shadow-lg">
            <img src="eventAsset/image182.jpeg" alt=""
                class="h-[8rem]relative  md:w-[22rem] object-cover shadow-lg">
            <img src="eventAsset/image178.jpeg" alt=""
                class="h-[8rem]relative  md:w-[32rem] object-cover shadow-lg">
        </div>
    </div>
