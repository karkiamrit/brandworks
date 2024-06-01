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
            <h1 class=" text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">Inauguration and
                Celebrations
            </h1>
        </div>
    </div>

    {{--  image section start from here --}}
    <div class="px-10 image-title-section flex flex-row gap-20 mt-6">

        <div class="title-text text-yellow-500 mt-2 w-72 text-start justify-start font-extralight  text-3xl">
            Butwal Power Company <div class="mt-3">
                Inauguration of Nyadi Hydropower Project
            </div>
        </div>


        <div class="image-section grid grid-cols-2 gap-2 text-center items-start">
            <div class="flex flex-row justify-center items-center">
                <img src="eventAsset/wall.png" alt=""
                    class="h-[16rem]relative  w-[28rem] object-cover shadow-lg">
            </div>
            <div class="flex flex-row justify-center items-center">
                <img src="eventAsset/wall.png" alt=""
                    class="h-[18rem] relative left-4 w-[28rem] object-cover shadow-lg">
            </div>
            <div class="flex flex-row justify-center items-center">
                <img src="eventAsset/wall.png" alt=""
                    class="h-[16rem] relative right-14 bottom-6 w-[28rem] object-cover shadow-lg">
            </div>
            <div class="flex flex-row justify-center items-center">
                <img src="eventAsset/wall.png" alt=""
                    class="h-[16rem] relative right-6 top-4 w-[28rem] object-cover shadow-lg">
            </div>
        </div>
    </div>

    {{--  2nd section start from here --}}
    <div class="px-10 image-title-section flex flex-row gap-20 mt-6 py-32">

        <div class="image-section grid grid-cols-4 grid-rows-3 gap-2 text-center items-start">
            <div class="col-span-2 row-span-1 items-center">
                <div class="title-text text-yellow-500 mt-2 text-start justify-start font-extralight  text-3xl">
                    Inauguration of Tata Motors
                    exclusive car showroom with
                    the 2 new product launches
                </div>
            </div>
            <div class="col-span-2 row-span-2 items-center">
                <img src="eventAsset/ripab.jpeg" alt="" class="   object-cover shadow-lg">
            </div>
            <div class="col-span-1 row-span-2 items-center">
                <img src="eventAsset/tata.jpeg" alt="" class=" shadow-lg">
            </div>
            <div class="col-span-1 row-span-2 items-center">
                <img src="eventAsset/car.jpeg" alt="" class="  object-contain shadow-lg">
            </div>
            <div class="col-span-1 row-span-1 items-center">
                <img src="eventAsset/tv.jpeg" alt="" class="  object-contain shadow-lg">
            </div>
            <div class="col-span-1 row-span-1 items-center">
                <img src="eventAsset/tata-logo.jpeg" alt="" class=" shadow-lg">
            </div>
        </div>

    </div>


    {{-- 3rd section start from here --}}

    <div class="px-10 image-title-section flex flex-row gap-20 py-32">

        <div class="image-section grid grid-cols-3 grid-rows-2 gap-2 text-center items-start">
            <div class="col-span-1 row-span-1 items-center">
                <div
                    class="title-text text-yellow-500 pr-20 relative lg:top-10 text-start h-full font-extralight  text-3xl">
                    Inauguration Sarbottam Cement New Clinker Plant
                </div>
            </div>
            <div class="col-span-2 row-span-2 items-center h-full">
                <img src="eventAsset/sarbottam.jpeg" alt="" class="object-contain w-full h-full shadow-lg">
            </div>

            <div class="col-span-1 row-span-1 items-center" style="grid-column-start: 1; grid-row-start: 2;">
                <img src="eventAsset/show.jpeg" alt=""
                    class="object-contain relative lg:bottom-10 h-full shadow-lg">
            </div>

        </div>
    </div>
    <div class="px-10 image-title-section flex flex-row gap-20 py-32">

        <div class="w-full relative h-[540px] overflow-hidden text-left text-[18px] text-gold font-inter">
            <div class="absolute h-full w-full top-[0%] right-[0%] bottom-[0%] left-[0%]">
                <img class="absolute h-[62.02%] w-[43.98%] top-[23.54%] right-[5.04%] bottom-[24.44%] left-[50.98%] max-w-full overflow-hidden max-h-full object-cover" alt="" src="eventAsset/image73.jpeg">
                <img class="absolute h-[33.33%] w-[21.65%] top-[56.81%] right-[73.27%] bottom-[9.85%] left-[5.08%] max-w-full overflow-hidden max-h-full object-cover" alt="" src="eventAsset/image74.jpeg">
                <img class="absolute h-[33.33%] w-[28.14%] top-[56.98%] right-[44.24%] bottom-[9.69%] left-[27.63%] max-w-full overflow-hidden max-h-full object-cover" alt="" src="eventAsset/image75.jpeg">
            </div>
        </div>
    </div>
</div>    
