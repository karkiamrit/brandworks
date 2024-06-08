@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

<div class="px-10 flex flex-col sticky top-6 z-40 bg-black py-4 w-full overflow-hidden">
    <div class="flex flex-row items-center justify-start">
        <a class="text-2xl font-bold flex justify-start grayscale opacity-45" href={{ route('home') }}>
            <x-application-logo
                class="block h-9 w-auto fill-current text-gray-600 text-start mt-2 filter grayscale" /> </a>
    </div>
    <div class="title flex items-center justify-center">
        <h1 class="text-xl h-9 lg:h-auto  lg:text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">ACTIVATIONS
        </h1>
    </div>
</div>

<!-- Logo and Center Content -->
<div class=" bg-black w-full">
    <!--Activation page first section -->
    <div class="grid grid-rows-2 p-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <img src="eventAsset/image180.jpeg" alt=""
                class="h-auto md:h-[16rem] w-full md:w-[26rem] object-cover shadow-lg">
            <div class="border-gray-500 text-white border-2 h-auto md:h-36 flex items-center mx-2 md:mx-12">
                <div class="flex-col pr-2 ml-auto">
                    <p class="flex justify-end">Tata Motors</p>
                    <p class="flex justify-end">Nexon EV Range Test Challenge</p>
                    <p class="flex justify-end gap-2"><span>1<sup class="pt-3">st</sup><span> of kind in Nepal</p>
                </div>
            </div>
            <img src="eventAsset/image179.jpeg" alt=""
                class="h-auto md:h-[16rem] w-full md:w-[34rem] object-cover shadow-lg">
        </div>
        <div class="flex flex-col md:flex-row gap-2">
            <img src="eventAsset/image181.jpeg" alt=""
                class="h-auto md:h-[17rem] w-full md:w-[37%] object-cover shadow-lg">
            <img src="eventAsset/image182.jpeg" alt=""
                class="h-auto md:h-[17rem] w-full md:w-[25%] object-cover shadow-lg">
            <img src="eventAsset/image178.jpeg" alt=""
                class="h-auto md:h-[17rem] w-full md:w-[37%] object-cover shadow-lg">
        </div>
    </div>

    <!--Activation page second section -->
    <!-- Large screen layout -->
    <div class="hidden xl:grid grid-cols-3 p-10">
        <div class="flex flex-col gap-10">
            <img src="eventAsset/image184.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <img src="eventAsset/image185.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
        </div>
        <div class="flex flex-col mt-10 md:mt-0">
            <div
                class="border-gray-500 mt-10 text-white border-2 ml-20 h-24 flex items-center md:mt-64 xl:mt-0 md:ml-20 md:h-24">
                <div class="flex-col ml-auto pr-2 md:pr-2">
                    <p class="flex justify-end">The Man From Kathmandu</p>
                    <p>Patan Activation</p>
                </div>
            </div>
            <div
                class="border-gray-500 text-white border-2 relative left-4 -ml-5 mr-20 h-24 flex items-center md:-ml-5 md:mr-20 md:h-24 lg:mt-7">
                <div class="flex-col pl-2">
                    <p>Shivam Cement</p>
                    <p>Product Activation</p>
                </div>
            </div>
            <div
                class="border-gray-500 mt-10 text-white border-2 ml-20 h-24 flex items-center md:mt-64 xl:mt-12 md:ml-20 md:h-24">
                <div class="flex-col ml-auto pr-2 md:pr-2">
                    <p class="flex justify-start">Radio On Wheels</p>

                </div>
            </div>
            <div
                class="border-gray-500 mt-10 text-white border-2 -ml-5 mr-20 h-24 flex items-center md:mt-[70px] md:-ml-5 md:mr-20 md:h-24 relative left-4">
                <div class="flex-col pl-2">
                    <p>Tata NRG</p>
                    <p>Mall Activation</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 mt-10 md:mt-0">
            <img src="eventAsset/image183.jpeg" alt=""
                class="h-[12rem] w-full md:w-[28rem] object-cover shadow-lg">
            <img src="eventAsset/image186.jpeg" alt=""
                class="h-[12rem] w-full md:w-[28rem] object-cover shadow-lg">
        </div>
    </div>

    <!-- Small upto large screen layout -->
    <div class="grid xl:hidden grid-cols-1 p-10">
        <div class="flex flex-col gap-10">
            <img src="eventAsset/image184.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <div
                class="border-gray-500 text-white border-2 -ml-5 mr-20 h-24 flex items-center md:-ml-5 md:mr-20 md:h-24">
                <div class="flex-col pl-2">
                    <p>Shivam Cement</p>
                    <p>Central Activation</p>
                </div>
            </div>
            <img src="eventAsset/image185.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <div
                class="border-gray-500 mt-10 text-white border-2 -ml-5 mr-20 h-24 flex items-center lg:mt-[95px] md:mb-5 md:-ml-5 md:mr-20 md:h-24">
                <div class="flex-col pl-2">
                    <p>Tata NRG</p>
                    <p>Mall Activation</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 mt-10 md:mt-0">
            <img src="eventAsset/image183.jpeg" alt=""
                class="lg:h-[20rem] h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <div
                class="border-gray-500 mt-10 text-white border-2 ml-20 h-24 flex items-center lg:mt-64 xl:mt-32 md:ml-20 md:h-24">
                <div class="flex-col ml-auto pr-2 md:pr-2">
                    <p class="flex justify-end">The Man From Kathmandu</p>
                    <p>Patan Activation</p>
                </div>
            </div>
            <!-- Add the missing image and text here -->
            <img src="eventAsset/image186.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <div
                class="border-gray-500 mt-10 text-white border-2 -ml-5 mr-20 h-24 flex items-center lg:mt-[70px] md:-ml-5 md:mr-20 md:h-24">
                <div class="flex-col pl-2">
                    <p>Radio On Wheels</p>
                </div>
            </div>
        </div>
    </div>

    <!--Activation page third section -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 justify-items-center">
        <div class="flex justify-center items-center">
            <img src="eventAsset/image188.jpeg" alt=""
                class="h-[16rem] w-full md:w-[23rem] object-cover shadow-lg">
        </div>
        <div class="grid grid-rows-2">
            <div class="border-gray-500 mt-10 text-white border-2 h-28 flex items-center lg:items-end lg:my-20 lg:w-[35rem]">
                <div class="flex-col ml-auto p-2 md:pr-2">
                    <p class="flex justify-end">Tata Motors</p>
                    <p class="flex justify-end">Trust of Nepal</p>
                    <p class="flex justify-end">All Nepal Health Drive Campaign</p>
                    <p class="flex justify-end">1<sup class="pt-3">st</sup> of a kind in Nepal</p>

                </div>
            </div>
            <img src="eventAsset/image193.jpeg" alt=""
                class="h-[16rem] w-full md:w-[23rem] object-cover shadow-lg lg:ml-24 lg:-my-16">
        </div>
        <div class="flex justify-center items-center">
            <img src="eventAsset/image192.jpeg" alt=""
                class="h-[16rem] w-full md:w-[23rem] object-cover shadow-lg">
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-2 mt-5 lg:mt-0">
        <img src="eventAsset/image187.jpeg" alt=""
            class="h-[16rem] w-full md:w-[26rem] object-cover shadow-lg">
        <img src="eventAsset/image189.jpeg" alt=""
            class="h-[16rem] w-full md:w-[26rem] object-cover shadow-lg">
        <img src="eventAsset/image190.jpeg" alt=""
            class="h-[16rem] w-full md:w-[26rem] object-cover shadow-lg">
        <img src="eventAsset/image191.jpeg" alt=""
            class="h-[16rem] w-full md:w-[26rem] object-cover shadow-lg">
    </div>

    <!--Activation page second lage section -->
    <!-- Large screen layout -->
    <div class="hidden xl:grid grid-cols-3 p-10">
        <div class="flex flex-col gap-10">
            <img src="eventAsset/image194.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <img src="eventAsset/image196.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
        </div>
        <div class="flex flex-col mt-10 md:mt-0">
            <div
                class="border-gray-500 text-white border-2 -ml-5 mr-20 h-24 flex items-center md:-ml-5 md:mr-20 md:h-24 relative left-4">
                <div class="flex-col pl-2">
                    <p>TataH5</p>
                    <p>Activation</p>
                </div>
            </div>
            <div
                class="border-gray-500 mt-10 text-white border-2 ml-20 h-24 flex items-center md:mt-64 xl:mt-32 md:ml-20 md:h-24 ">
                <div class="flex-col ml-auto pr-2 md:pr-2">
                    <p class="flex justify-end">Honda Grazia</p>
                    <p>SuperMarket Activation</p>
                </div>
            </div>
            <div
                class="border-gray-500 mt-10 text-white border-2 -ml-5 mr-20 h-24 flex items-center md:mt-[95px] md:-ml-5 md:mr-20 md:h-24 relative left-4">
                <div class="flex-col pl-2 ">
                    <p>Tata Motors Commercial Vehicle</p>
                    <p>Exchange Group</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 mt-10 md:mt-0">
            <img src="eventAsset/image195.jpeg" alt=""
                class="lg:h-[20rem] h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
        </div>
    </div>

    <!-- Small upto large screen layout -->
    <div class="grid xl:hidden grid-cols-1 p-10">
        <div class="flex flex-col gap-10">
            <img src="eventAsset/image194.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <div
                class="border-gray-500 text-white border-2 -ml-5 mr-20 h-24 flex items-center md:-ml-5 md:mr-20 md:h-24">
                <div class="flex-col pl-2">
                    <p>TataH5</p>
                    <p>Activation</p>
                </div>
            </div>
            <img src="eventAsset/image196.jpeg" alt=""
                class="h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <div
                class="border-gray-500 mt-10 text-white border-2 -ml-5 mr-20 h-24 flex items-center lg:mt-[95px] md:mb-5 md:-ml-5 md:mr-20 md:h-24">
                <div class="flex-col pl-2">
                    <p>Tata Motors Commercial Vehicle</p>
                    <p>Exchange Group</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-4 mt-10 md:mt-0">
            <img src="eventAsset/image195.jpeg" alt=""
                class="lg:h-[20rem] h-[16rem] w-full md:w-[28rem] object-cover shadow-lg">
            <div
                class="border-gray-500 mt-10 text-white border-2 ml-20 h-24 flex items-center lg:mt-64 xl:mt-32 md:ml-20 md:h-24">
                <div class="flex-col ml-auto pr-2 md:pr-2">
                    <p class="flex justify-end">Honda Grazia</p>
                    <p>SuperMarket Activation</p>
                </div>
            </div>
        </div>
    </div>

    <!--Activation page last section -->
    <div class="grid grid-cols-1 md:grid-rows-2 p-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <img src="eventAsset/image198.jpeg" alt=""
                    class="h-[16rem] md:h-auto w-full object-cover shadow-lg">
            </div>
            <div class="border-gray-500 text-white border-2 h-36 flex items-center mx-2 md:mx-12">
                <div class="flex-col pr-2 ml-auto">
                    <p class="flex md:justify-start xl:justify-end justify-end">Tata Motors</p>
                    <p class="flex md:justify-start xl:justify-end justify-end">Global Service Camp</p>
                    <p class="flex md:justify-start xl:justify-end justify-end"> 1<sup class="pt-2">st</sup> of kind in Nepal</p>
                </div>
            </div>
            <div>
                <img src="eventAsset/image199.jpeg" alt=""
                    class="h-[16rem] md:h-auto w-full object-cover shadow-lg">
            </div>
        </div>
        <div class="flex justify-center mt-2 md:mt-0">
            <img src="eventAsset/image197.jpeg" alt=""
                class="h-[16rem] md:h-auto w-full md:w-[30rem] object-cover shadow-lg">
        </div>
    </div>

</div>
