@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

<div class="px-10 flex flex-col sticky top-0 z-40 bg-black py-4 w-full">
    <div class="flex flex-row items-center justify-start">
        <a class="text-2xl font-bold flex justify-start grayscale opacity-45" href={{ route('home') }}>
            <x-application-logo class="block h-9 w-auto fill-current text-gray-600 text-start mt-2 filter grayscale" />
        </a>
    </div>
    <div class="title flex items-center justify-center">
        <h1 class=" text-xl lg:text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">CORPORATE EVENTS AND
            CELEBRATIONS
        </h1>
    </div>
</div>
<!-- Logo and Center Content -->
<div class=" bg-black w-full overflow-hidden px-4">
    {{-- Page 18 --}}

    <div class="title-text text-yellow-500 relative mt-20 mb-10 ml-16 text-start h-full font-century lg:text-2xl text-xl">
        Shivam Kriti Samaroha
    </div>
    <div
        class="w-full overflow-hidden flex flex-col lg:flex-row items-start justify-start leading-normal tracking-normal pb-10 {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 pb-1 pr-1 pl-0 box-border relative gap-10 lg:gap-16 max-w-full text-left text-lg text-silver font-inter">
            <div class="self-stretch flex flex-col justify-start relative max-w-full">
                <div
                    class="h-auto lg:h-[372.4px] flex-1 flex flex-col items-end justify-start pt-0 px-0 pb-10 box-border gap-4 lg:gap-14 max-w-full">
                    <div class="self-stretch flex flex-col lg:flex-row items-start justify-end max-w-full lg:-mx-24">
                        <div
                            class="w-full lg:w-[781.3px] flex flex-col lg:flex-row items-end justify-center py-0 pr-0 pl-5 lg:pl-0 box-border gap-1 lg:gap-2 shrink-0 max-w-full ">
                            <img class="h-auto lg:h-[345.4px] flex-1 relative max-w-full overflow-hidden object-cover min-w-full lg:min-w-[800px] z-10"
                                loading="lazy" alt="" src="eventAsset/image76.jpeg">
                            <div
                                class="h-auto lg:h-[345.4px] w-full lg:w-[216px] flex flex-col items-start justify-start gap-2 lg:gap-6 min-w-full lg:min-w-[516px]">
                                <img class="self-stretch h-1/2 relative max-w-full overflow-hidden object-cover z-10 lg:w-80"
                                    loading="lazy" alt="" src="eventAsset/image83.jpeg">
                                <img class="self-stretch h-1/2 flex-1 relative max-w-full overflow-hidden lg:w-80 object-cover z-10 "
                                    loading="lazy" alt="" src="eventAsset/image82.jpeg">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full flex flex-row xl:flex-wrap items-stretch justify-center lg:justify-start py-0 lg:pl-16 box-border gap-2 lg:gap-3 max-w-full mt-10 mx-0">
                    <img class="w-1/6 lg:w-1/6 max-h-48 lg:max-h-[200px] object-cover" loading="lazy" alt=""
                        src="eventAsset/image77.jpeg">
                    <img class="w-1/6 lg:w-[10%] max-h-48 lg:max-h-[200px] object-cover lg:pt-0" loading="lazy"
                        alt="" src="eventAsset/image78.jpeg">
                    <img class="w-1/6 lg:w-1/6 max-h-48 lg:max-h-[200px] object-cover" loading="lazy" alt=""
                        src="eventAsset/image79.jpeg">
                    <img class="w-1/6 lg:w-[20%] max-h-48 lg:max-h-[200px] object-cover" loading="lazy" alt=""
                        src="eventAsset/image80.jpeg">
                    <img class="w-1/6 lg:w-[30%] max-h-48 lg:max-h-[200px] object-cover" loading="lazy" alt=""
                        src="eventAsset/image81.jpeg">
                </div>
            </div>
        </section>
    </div>

    {{-- Page 19 --}}

    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal]  {{ $className ?? '' }}">
        <section
            class="bg-black flex-1 flex flex-col items-start justify-start pt-0 px-0 pb-[13.3px] box-border relative gap-[19.5px] max-w-full text-left text-[18px] text-gold font-inter">
            <div
                class="title-text text-yellow-500  relative xl:top-20 left-12 lg:left-16 xl:mt-20 mb-10 text-start h-full font-century  lg:text-2xl text-xl">
                Honda 50 Years Celebration
            </div>
            <div
                class="bg-black self-stretch flex flex-row items-start justify-end py-0 px-[47px] box-border max-w-full mq900:pl-[23px] mq900:pr-[23px] mq900:box-border">
                <div
                    class="w-[795.9px] flex flex-row flex-wrap items-start justify-start gap-[174.1px] max-w-full lg:top-0 sm:top-4">
                    <div class="flex-1 flex flex-col items-start justify-start gap-[5.6px] min-w-[288px] max-w-full">
                        <img class="self-stretch h-64 relative max-w-full overflow-hidden shrink-0 object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image84.jpeg">
                        <img class="self-stretch h-64 relative max-w-full overflow-hidden shrink-0 object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image85.jpeg">
                        <div class="flex flex-row items-start justify-start lg:gap-[45.9px] gap-8">
                            <img class="self-stretch h-full w-[30%] relative max-h-full object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image87.jpeg">
                            <img class="self-stretch w-[30%]  h-full relative max-h-full object-cover z-[1] lg:mx-6"
                                loading="lazy" alt="" src="eventAsset/image88.jpeg">
                            <img class="w-full lg:w-[33%] lg:h-full relative object-cover z-[1] md:h-[9.2rem] h-20 lg:transform lg:scale-[.7] lg:-my-9 lg:-mx-12 "
                                loading="lazy" alt="" src="eventAsset/image86.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- Page 20 --}}
    <div
        class="w-full overflow-hidden flex flex-col sm:flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <section
            class="bg-black flex-1 flex flex-col items-start justify-start pt-[3.5px] px-[26px] pb-[35.5px] box-border relative gap-[42.1px] max-w-full text-left text-[20.1px] text-silver font-inter mqp700:gap-[21px]">
            <div
                class="title-text text-yellow-500  relative xl:top-44 md:top-10  left-5 text-start h-full font-century  lg:text-2xl text-xl">
                British Gurkha NEPAL Officers & SNCO's </br>
                Mess Winter Ball
            </div>
            <div
                class="self-stretch flex flex-col sm:flex-row items-start justify-start py-0 pr-[22px] pl-[19px] box-border max-w-full text-[18px] text-gold">
                <div class="flex-1 flex flex-col items-end justify-start gap-[8.4px] max-w-full">
                    <div
                        class="self-stretch flex flex-col sm:flex-row items-end justify-start gap-[7.1px] max-w-full mp900:flex-wrap">
                        <div
                            class="flex-1  flex flex-col items-start justify-end pt-0 px-0 pb-[8.4px] box-border w-full sm:w-1/2">
                            <div
                                class="self-stretch flex flex-col items-start justify-start gap-[33.1px] max-w-full mp450:gap-[17px]">
                                <div
                                    class="self-stretch flex flex-col sm:flex-row items-start justify-start py-0 pr-0 pl-0.5 box-border max-w-full">
                                    <div
                                        class="flex-1 flex flex-col sm:flex-row items-start justify-start max-w-full gap-2 mq450:flex-wrap">
                                        <div
                                            class="flex flex-col items-start justify-start pt-0.5 px-0 pb-0 box-border w-full sm:min-w-1/6">
                                            <img class="self-stretch h-64 relative max-w-full overflow-hidden w-full shrink-0 object-cover z-[1]"
                                                loading="lazy" alt="" src="eventAsset/image91.jpeg">
                                        </div>
                                        <img class="h-64 relative max-w-full overflow-hidden object-cover w-full sm:min-w-1/2 left-0 z-[1]"
                                            loading="lazy" alt="" src="eventAsset/image94.jpeg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="w-full sm:w-[45%] relative max-h-full object-cover max-w-full z-[1] mp900:flex-1"
                            loading="lazy" alt="" src="eventAsset/image89.jpeg">
                    </div>
                    <div
                        class="flex flex-col sm:flex-row w-full items-center justify-center gap-[55px] max-w-full p-4 -mx-3">
                        <img class="w-full sm:w-2/6 lg:w-full relative max-h-full object-cover h-72 min-h-52 z-[1]"
                            loading="lazy" alt="" src="eventAsset/image90.jpeg">
                        <img class="w-full sm:w-2/6 lg:w-full max-h-full object-cover h-72 max-w-full z-[1] -mx-3"
                            loading="lazy" alt="" src="eventAsset/image92.jpeg">
                        <img class="w-full sm:w-2/6 lg:w-full max-h-full object-cover h-72 z-[1]" loading="lazy"
                            alt="" src="eventAsset/image93.jpeg">
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- Page 21 --}}
    <div
        class="w-full overflow-hidden flex flex-row items-center justify-center leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <header
            class="bg-black flex flex-col items-start justify-start pt-[122.8px] lg:pt-[122.8px] px-[45px] lg:px-[45px] pb-[22.9px] lg:pb-[22.9px] box-border relative gap-[107.5px] lg:gap-[107.5px] max-w-full text-left text-lg text-gold font-inter md:gap-[54px] md:pt-20 md:px-[22px] md:pb-5 md:box-border">
            <div class="flex flex-col items-start justify-start gap-[26.8px] md:gap-4 my-10 sm:my-0 ">
                <a
                    class="[text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl">EO
                    Everest Summit</a>
                <div
                    class="flex flex-col items-start justify-start relative [text-decoration:none] text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl">
                    <div class="relative !m-[0] top-[-19.4px] md:top-0 left-[0px] whitespace-nowrap z-[1]">EO Nepal's
                        signature event </div>
                    <div class="relative whitespace-nowrap z-[2]">exclusively for EO members</div>
                </div>
            </div>
            <div
                class="flex flex-col sm:flex-row items-center w-full justify-center gap-[51.1px] lg:gap-[51.1px] lg:ml-24 xl:ml-36 max-w-full md:gap-4 md:ml-0 scale-[1.2] lg:pl-0 md:pl-52 sm:pl-24">
                <img class="h-full  sm:w-[25%] lg:w-[25%] relative object-cover min-h-[216px] lg:min-h-[216px] z-[1] md:min-h-0"
                    loading="lazy" alt="" src="eventAsset/image95.png" />
                <img class="self-stretch  sm:w-[25%] lg:w-[25%] relative max-h-full object-contain max-w-full z-[2]"
                    alt="" src="eventAsset/image98.png" />
                <div class="flex flex-row items-start justify-start relative w-full sm:w-6/12">
                    <img class="h-full w-full absolute !m-[0] sm:top-[-200px] md:top-[-150px] lg:top-[-216.2px] left-[-100.7px] lg:left-[-238.7px] object-cover z-[1]"
                        alt="" src="eventAsset/image96.png" />
                    <img class="h-full sm:w-[58%] lg:w-[58%] relative object-cover z-[2]" loading="lazy"
                        alt="" src="eventAsset/image97.png" />
                </div>
            </div>
            {{-- <img class="w-[43.2px] h-[43.2px] absolute !m-[0] top-[3.5px] left-[26.8px] object-cover z-[1]" loading="lazy" alt="" src="eventAsset/image96.png" /> --}}
        </header>
    </div>

</div>
