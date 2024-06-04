@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

<!-- Logo and Center Content -->
<div class=" bg-black w-full overflow-hidden">

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
    <div class="px-4 sm:px-10 image-title-section flex flex-col sm:flex-row gap-6 sm:gap-20 mt-6 overflow-hidden">

        <div class="title-text text-yellow-500 pl-2 sm:pl-4 mt-2 w-full sm:w-80 text-start justify-start font-extralight text-3xl">
            Butwal Power Company 
            <div class="mt-3">
                Inauguration of Nyadi Hydropower Project
            </div>
        </div>
    
        <div class="image-section pl-4 sm:pl-16 grid grid-cols-1 sm:grid-cols-2 gap-2 text-center items-start">
            <div class="flex flex-row justify-center items-center">
                <img src="eventAsset/image57.jpeg" alt="" class="h-32 sm:h-[14rem] w-full sm:w-[30rem] object-cover shadow-lg md:pr-8">
            </div>
            <div class="flex flex-row justify-center items-center">
                <img src="eventAsset/image58.jpeg" alt="" class="h-40 sm:h-[20rem] w-full sm:w-[30rem] object-cover shadow-lg">
            </div>
            <div class="flex flex-row justify-center items-center md:-my-16">
                <img src="eventAsset/image60.jpeg" alt="" class="h-36 sm:h-[18rem] w-full sm:w-[30rem] object-contain sm:object-cover shadow-lg md:pr-16 md:-ml-20">
            </div>
            <div class="flex flex-row justify-center items-center">
                <img src="eventAsset/image59.jpeg" alt="" class="h-36 sm:h-[18rem] w-full sm:w-[30rem] object-cover shadow-lg md:mr-44">
            </div>
        </div>
    </div>

    {{--  2nd section start from here --}}
    <div class="px-4 md:px-10 image-title-section flex flex-col md:flex-row gap-6 md:gap-20 mt-6 py-8 md:py-32">

        <div class="image-section grid grid-cols-1 md:grid-cols-4 grid-rows-3 gap-2 text-center items-start">
            <div class="col-span-2 md:col-span-2 row-span-1 items-center">
                <div class="title-text text-yellow-500 p-4 md:p-10 pl-2 md:pl-8 mt-2 text-start justify-start font-extralight text-lg md:text-3xl">
                    Inauguration of Tata Motors
                    exclusive car showroom with
                    the 2 new product launches
                </div>
            </div>
            <div class="col-span-2 md:col-span-2 row-span-2 items-center object-cover">
                <img src="eventAsset/ripab.jpeg" alt="" class="object-cover shadow-lg">
            </div>
            <div class="col-span-1 md:col-span-1 row-span-2 items-center md:h-full md:w-full">
                <img src="eventAsset/tata.jpeg" alt="" class="shadow-lg md:h-full md:mx-7 md:object-cover ">
            </div>
            <div class="col-span-1 md:col-span-1 row-span-2 items-center md:h-full">
                <img src="eventAsset/car.jpeg" alt="" class="object-contain shadow-lg md:w-80 md:h-full md:mx-5">
            </div>
            <div class="col-span-1 md:col-span-1 row-span-1 items-center">
                <img src="eventAsset/tv.jpeg" alt="" class="object-contain shadow-lg">
            </div>
            <div class="col-span-1 md:col-span-1 row-span-1 items-center">
                <img src="eventAsset/tata-logo.jpeg" alt="" class="shadow-lg">
            </div>
        </div>
    
    </div>


    {{-- 3rd section start from here --}}

    <div class="px-4 sm:px-16 image-title-section flex flex-col sm:flex-row gap-4 sm:gap-20">

        <div class="image-section grid grid-cols-1 sm:grid-cols-3 grid-rows-2 gap-2 text-center md:items-start items-end -mt-48 md:mt-0">
            <div class="col-span-1 row-span-1 items-center relative lg:top-10">
                <div class="title-text text-yellow-500 pr-4 sm:pr-20 text-start h-full font-extralight text-2xl sm:text-3xl">
                    Inauguration Sarbottam Cement New Clinker Plant
                </div>
            </div>
            <div class="col-span-1 sm:col-span-2 row-span-2 items-center h-full">
                <img src="eventAsset/sarbottam.jpeg" alt="" class="object-contain w-full h-full shadow-lg md:-my-[58px]">
            </div>
    
            <div class="col-span-1 row-span-1 items-center relative lg:bottom-24 sm:col-start-1 sm:row-start-2">
                <img src="eventAsset/show.jpeg" alt="" class="object-contain h-full shadow-lg">
            </div>
    
        </div>
    </div>

    {{-- Page 17 --}}
    <div class="image-title-section flex flex-col sm:flex-row gap-4 sm:gap-20">

        <div class="w-full relative h-[540px] sm:h-[540px] overflow-hidden text-left text-[18px] text-gold font-inter">
            <div class="absolute h-full w-full top-[0%] right-[0%] bottom-[0%] left-[0%]">
                <div class="title-text text-yellow-500 relative left-4 sm:left-16 top-16 sm:top-32 text-start h-full font-extralight text-xl sm:text-3xl">
                    Islington College <br> 
                    Graduation Ceremony
                </div>
                <img class="absolute h-[62.02%] w-[43.98%] top-[23.54%] right-[5.04%] bottom-[24.44%] left-[50.98%] max-w-full overflow-hidden max-h-full object-cover"
                    alt="" src="eventAsset/image73.jpeg">
                <img class="absolute h-[45%] w-[21.65%] top-[56.81%] right-[73.27%] bottom-[9.85%] left-[5.08%] max-w-full overflow-hidden max-h-full object-cover"
                    alt="" src="eventAsset/image74.jpeg">
                <img class="absolute h-[45%] w-[28.14%] top-[56.98%] right-[44.24%] bottom-[9.69%] left-[27.63%] max-w-full overflow-hidden max-h-full object-cover"
                    alt="" src="eventAsset/image75.jpeg">
            </div>
        </div>
    </div>
</div>
