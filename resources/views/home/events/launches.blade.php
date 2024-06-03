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
            <h1 class=" text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">LAUNCHES AND INTRODUCTION
            </h1>
        </div>
    </div>

    {{--  32 page start form here --}}
    {{-- 
    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className = $className ?? '' }}">
        <header
            class="h-[540px] flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-[14.5px] pr-[13px] pl-[26px] box-border relative gap-[76.1px] max-w-full text-left text-lg text-gold font-inter mq480:gap-[38px]">
            <img class="w-full h-full absolute !m-[0] top-[0px] right-[0px] bottom-[0px] left-[0px] max-w-full overflow-hidden max-h-full"
                alt="" src="" />
            <img class="w-[43.2px] h-[43.2px] relative object-cover z-[1]" loading="lazy" alt=""
                src="" />
            <div
                class="self-stretch flex-1 flex flex-row items-start justify-start py-0 pr-px pl-[19px] box-border max-w-full">
                <div class="self-stretch flex-1 flex flex-row items-start justify-start gap-[9.1px] max-w-full">
                    <div
                        class="w-[387.6px] flex flex-col items-start justify-start gap-[76.4px] max-w-full mq388:gap-[38px]">
                        <div class="flex flex-col items-start justify-start py-0 pr-5 pl-0 gap-[7.4px]">
                            <div
                                class="relative whitespace-nowrap z-[1]             title-text text-yellow-500  text-start h-full font-extralight  text-3xl">

                                Launch of ACE EV
                            </div>
                            <div class="flex flex-col items-start justify-start">
                                <div class="flex flex-row items-start justify-start gap-[3.9px]">
                                    <div
                                        class="relative whitespace-nowrap z-[1]             title-text text-yellow-500  text-start h-full font-extralight  text-3xl">

                                        1st Commercial EV from Tata Motors in Nepal </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="self-stretch flex flex-row items-start justify-start py-0 pr-0 pl-[3px] box-border max-w-full">
                            <img class="h-[216.1px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image133.jpeg" />
                        </div>
                    </div>
                    <div
                        class="self-stretch flex-1 flex flex-col items-start justify-start pt-[4.6px] px-0 pb-0 box-border max-w-full">
                        <div class="self-stretch flex-1 flex flex-col items-start justify-start gap-[6.1px] max-w-full">
                            <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image132.jpeg" />
                            <div
                                class="w-[422px] flex flex-row items-start justify-start py-0 px-[39px] box-border max-w-full">
                                <img class="h-[147.4px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image134.jpeg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div> --}}

    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <header
            class="h-[540px] flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-[14.5px] pr-[13px] pl-[26px] box-border relative gap-[76.1px] max-w-full text-left text-lg text-gold font-inter mq480:gap-[38px]">
            <img class="w-full h-full absolute !m-[0] top-[0px] right-[0px] bottom-[0px] left-[0px] max-w-full overflow-hidden max-h-full"
                alt="" src="/clip-path-group.svg" />
            <img class="w-[43.2px] h-[43.2px] relative object-cover z-[1]" loading="lazy" alt=""
                src="/mask-group@2x.png" />
            <div
                class="self-stretch flex-1 flex flex-row items-start justify-start py-0 pr-px pl-[19px] box-border max-w-full">
                <div class="self-stretch flex-1 flex flex-row items-start justify-start gap-[9.1px] max-w-full">
                    <div
                        class="w-[387.6px] flex flex-col items-start justify-start gap-[76.4px] max-w-full mq388:gap-[38px]">
                        <div class="flex flex-col items-start justify-start py-0 pr-5 pl-0 gap-[7.4px]">
                            <div class="relative whitespace-nowrap z-[1]">
                                Launch of ACE EV
                            </div>
                            <div class="flex flex-col items-start justify-start">
                                <div class="flex flex-row items-start justify-start gap-[3.9px]">
                                    <a
                                        class="[text-decoration:none] relative text-[inherit] inline-block min-w-[9px] z-[1]">
                                        1
                                    </a>
                                    <div
                                        class="flex flex-col items-start justify-start pt-[1.8px] px-0 pb-0 text-[11.8px]">
                                        <div class="relative inline-block min-w-[11px] z-[1]">
                                            st
                                        </div>
                                    </div>
                                    <div class="relative whitespace-nowrap z-[1]">
                                        Commercial EV from Tata
                                    </div>
                                </div>
                                <div class="relative whitespace-nowrap z-[1] mt-[-2.6px]">
                                    Motors in Nepal
                                </div>
                            </div>
                        </div>
                        <div
                            class="self-stretch flex flex-row items-start justify-start py-0 pr-0 pl-[3px] box-border max-w-full">
                            <img class="h-[216.1px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image133.jpeg" />
                        </div>
                    </div>
                    <div
                        class="self-stretch flex-1 flex flex-col items-start justify-start pt-[4.6px] px-0 pb-0 box-border max-w-full">
                        <div class="self-stretch flex-1 flex flex-col items-start justify-start gap-[6.1px] max-w-full">
                            <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image132.jpeg" />
                            <div
                                class="w-[422px] flex flex-row items-start justify-start py-0 px-[39px] box-border max-w-full">
                                <img class="h-[147.4px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image134.jpeg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    {{-- 33 page start from here  --}}
    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className = $className ?? '' }}">
        <section
            class="h-[540px] flex-1 flex flex-col items-start justify-start pt-[122.8px] px-[45px] pb-[123px] box-border relative max-w-full text-left text-lg text-gold font-inter mq373:pl-5 mq373:pr-5 mq373:box-border">

            <div class="flex flex-col items-start justify-start gap-[7.4px]">
                <div
                    class="relative left-4 whitespace-nowrap z-[1]  title-text text-yellow-500  text-start h-full font-extralight  text-2xl">
                    Launch of MG4 EV
                    <br>
                    1st EV to be launched and <br> driven at MX Track 5085ft above sea level
                </div>

                <div class="flex flex-col items-start justify-start">

                    <div class="flex flex-row items-end justify-end relative">
                        <div class="h-[365.6px] w-[863.3px] absolute !m-[0] left-[400.8px] bottom-[-296.8px]">
                            <img class="absolute bottom-[190px] left-[250.3px] w-[702.9px] h-[200.1px] object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image135.jpeg" />
                            <img class="absolute top-[143.9px] left-[-100px] w-[362.4px] h-[217.1px] object-cover z-[2]"
                                alt="" src="eventAsset/image136.jpeg" />
                            <img class="absolute top-[198.6px] left-[626.8px] w-[300.5px] h-[161px] object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image137.jpeg" />
                            <img class="absolute top-[198.6px] left-[283.1px] w-[315.6px] h-[161.8px] object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image138.jpeg" />
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </div>


    {{-- 34 page start from here --}}
    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ? $className : '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-[16.9px] pr-2.5 pl-[26px] box-border relative gap-[47.2px] max-w-full text-left text-[20.1px] text-silver font-inter mq675:gap-[24px]">
            <div class="self-stretch flex flex-row items-start justify-start py-0 pr-px pl-5 box-border max-w-full">
                <div
                    class="flex-1 flex flex-col items-end justify-start py-0 pr-px pl-0 box-border gap-[8.8px] max-w-full">
                    <div
                        class=" whitespace-nowrap z-[1]  title-text text-yellow-500 relative right-[69rem] my-2 mt-16 h-full font-extralight text-2xl">

                        Launch of Aprilia SXR160
                    </div>
                    <div
                        class="self-stretch flex flex-row items-end justify-start gap-[2.8px] max-w-full mq750:flex-wrap">
                        <img class="w-[395.4px] relative max-h-full object-cover max-w-full z-[1] mq750:flex-1"
                            loading="lazy" alt="" src="eventAsset/image143.jpeg" />
                        <img class="h-[307px] flex-1 relative max-w-full overflow-hidden object-cover min-w-[328px] z-[1]"
                            loading="lazy" alt="" src="eventAsset/image139.jpeg" />
                    </div>
                    <div class="self-stretch flex flex-row flex-wrap items-end justify-start gap-[21.6px] max-w-full">
                        <div
                            class="h-[180px] w-[135.7px] flex flex-col items-start justify-start py-0 pr-[15px] pl-0 box-border">
                            <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image142.jpeg" />
                        </div>
                        <img class="h-[180px] w-[269.9px] relative object-cover min-h-[180px] z-[1]" loading="lazy"
                            alt="" src="eventAsset/image140.jpeg" />
                        <img class="h-[180px] flex-1 relative max-w-full overflow-hidden object-cover min-w-[291px] min-h-[180px] z-[1]"
                            loading="lazy" alt="" src="eventAsset/image141.jpeg" />
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- 35 page start from here --}}


    <div
        class="w-full px-4 overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ? $className : '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] px-[26px] pb-[0.1px] box-border relative gap-[48px] max-w-full mq675:gap-[24px]">
            <div class="  text-yellow-500  mt-16 relative  h-full font-extralight text-2xl">
                SJ MOTO Launch
            </div>

            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-[25px] pl-[23px] box-border max-w-full">


                <div
                    class="flex-1 flex flex-row items-end justify-start gap-[60.9px] max-w-full mq450:gap-[15px] mq825:flex-wrap mq825:gap-[30px]">

                    <div
                        class="flex-1 flex flex-col items-start justify-start pt-0 px-0 pb-[50px] box-border min-w-[285px] min-h-[343px] max-w-full">
                        <img class="self-stretch h-[292.6px] relative max-w-full overflow-hidden shrink-0 object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image145.jpeg" />
                    </div>
                    <div
                        class="h-[412.3px] w-[360.2px] relative min-w-[360.20000000000005px] max-w-full mq675:min-w-full mq825:flex-1">
                        <img class="absolute top-[115.3px] left-[30.3px] w-[299.8px] h-[297px] object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image144.jpeg" />
                        <img class="absolute top-[0px] left-[0px] w-[360.2px] h-[214.9px] object-cover z-[2]"
                            alt="" src="eventAsset/image146.jpeg" />
                    </div>
                </div>
            </div>
        </section>
    </div>


    {{-- 36 page start from here --}}

    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ? $className : '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] px-3 pb-[15.6px] box-border relative gap-[42.1px] max-w-full text-left text-[18px] text-gold font-inter mq479:gap-[21px]">
            <div class="  text-yellow-500  mt-16 relative left-12 top-20 h-full font-extralight text-2xl">
                Bosch Home Appliances <br>
                in Nepal
            </div>

            <div class="self-stretch px-12 flex flex-col items-end justify-start gap-[15.5px] max-w-full">
                <div
                    class="w-[919.5px] flex flex-row items-start justify-between py-0 pr-0 pl-5 box-border max-w-full gap-[20px] mq638:flex-wrap">
                    <div class="flex flex-col items-start justify-start pt-[30.5px] px-0 pb-0">

                    </div>
                    <img class="h-[207.2px] w-[504px] relative object-cover max-w-full z-[1]" loading="lazy"
                        alt="" src="eventAsset/image147.jpeg" />
                </div>
                <div class="self-stretch flex flex-row flex-wrap items-start justify-start gap-[21.1px] max-w-full">
                    <img class="h-[180px] flex-1 relative max-w-full overflow-hidden object-cover min-w-[211px] min-h-[180px] z-[1]"
                        loading="lazy" alt="" src="eventAsset/image148.jpeg" />
                    <div
                        class="h-[180px] w-[270.2px] flex flex-col items-start justify-start py-0 pr-1 pl-0 box-border">
                        <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image149.jpeg" />
                    </div>
                    <img class="h-[180px] w-[296.5px] relative object-cover min-h-[180px] z-[1]" loading="lazy"
                        alt="" src="eventAsset/image150.jpeg" />
                </div>
            </div>
        </section>
    </div>


    {{-- 37 page start from here --}}
    <section
        class="flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-0 pr-[18px] pl-[26px] box-border relative gap-[45.8px] max-w-full mq675:gap-[23px]">

        <div
            class="h-[80.6px] w-[423.1px] flex flex-col items-start justify-start pt-[16.8px] px-0 pb-0 box-border min-w-[423.1000000000003px] max-w-full mq675:min-w-full mq750:flex-1">
        </div>
    </section>

    <div
        class="w-full overflow-hidden flex pr-10 flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className = $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-0 pr-[18px] pl-[26px] box-border relative gap-[45.8px] max-w-full mq675:gap-[23px]">

            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-px pl-[19px] box-border max-w-full">
                <footer
                    class="flex-1 flex flex-row items-start justify-start py-0 pr-px pl-0 box-border gap-[9.9px] max-w-full text-left text-[18px] text-gold font-inter mq750:flex-wrap">
                    <div
                        class="h-[414.6px] w-[423.1px] flex flex-col items-start justify-start pt-[16.8px] px-0 pb-0 box-border min-w-[423.1000000000003px] max-w-full mq675:min-w-full mq750:flex-1">
                        <div
                            class="self-stretch flex-1 flex flex-col items-start justify-start gap-[35.5px] shrink-0 [debug_commit:bf4bc93] max-w-full mq450:gap-[18px]">
                            <div
                                class="relative inline-block min-w-[50px] z-[1]  text-yellow-500  h-full font-extralight text-2xl">

                                XING Party with Sunny Leone in Nepal
                            </div>
                            <div
                                class="self-stretch flex-1 flex flex-row items-start justify-start py-0 pr-0 pl-1 box-border max-w-full">
                                <div
                                    class="self-stretch flex-1 flex flex-col items-start justify-start gap-[8.7px] max-w-full">
                                    <div class="self-stretch flex flex-row items-start justify-end">
                                        <img class="h-[165.8px] w-[248.9px] relative object-cover z-[1]"
                                            loading="lazy" alt="" src="eventAsset/image153.jpeg" />
                                    </div>
                                    <img class="w-[248.9px] flex-1 relative max-h-full object-cover z-[1]"
                                        loading="lazy" alt="" src="eventAsset/image151.jpeg" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="h-[311.8px] flex-1 relative  overflow-hidden object-cover shrink-0 [debug_commit:bf4bc93] z-[1]"
                        loading="lazy" alt="" src="eventAsset/image152.jpeg" />
                </footer>
            </div>
        </section>
    </div>


    {{-- 38 page start from here --}}


    <div
        class="w-full px-4 overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] px-[26px] pb-[49px] box-border relative gap-[47px] max-w-full text-left text-[20.1px] text-silver font-inter mq450:pt-5 mq450:pb-8 mq450:box-border mq675:gap-[23px]">
            <div
                class="relative min-w-[50px] z-[1] px-4 top-16
             text-yellow-500   font-extralight text-2xl">

                Asian Premier League T20 </div>


            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-[23px] pl-[21px] box-border max-w-full">
                <div class="flex-1 flex flex-row items-start justify-start gap-[9.4px] max-w-full mq750:flex-wrap">
                    <div
                        class="flex-1 flex flex-col items-start justify-start pt-[64.3px] px-0 pb-0 box-border min-w-[293px] max-w-full mq450:pt-[42px] mq450:box-border">
                        <div
                            class="self-stretch flex flex-col items-end justify-start gap-[5.9px] shrink-0 [debug_commit:bf4bc93]">
                            <div class="self-stretch flex flex-row items-start justify-start">
                                <img class="h-[200.9px] w-[500.2px] relative object-cover shrink-0 [debug_commit:bf4bc93] z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image155.jpeg" />
                            </div>
                            <img class="w-[333.2px] h-[200.3px] relative object-cover shrink-0 [debug_commit:bf4bc93] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image156.jpeg" />
                        </div>
                    </div>
                    <img class="w-[502.8px] relative max-h-full object-cover shrink-0 [debug_commit:bf4bc93] max-w-full z-[1] mq750:flex-1"
                        loading="lazy" alt="" src="eventAsset/image154.jpeg" />
                </div>
            </div>
        </section>
    </div>

    {{-- page 39 start from here  --}}
    <div
        class="w-full px-4 overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] px-[26px] pb-[54px] box-border relative gap-[42.1px] max-w-full text-left text-[18px] text-gold font-inter mq675:gap-[21px] mq450:pt-5 mq450:pb-[35px] mq450:box-border">

            <div class="relative  z-[1] px-4 top-24
            text-yellow-500 font-extralight text-2xl">
                BYD SEAL <br>
                LAUNCH IN NEPAL</div>

            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-6 pl-[19px] box-border max-w-full">
                <div
                    class="flex-1 flex flex-row flex-wrap items-end justify-start gap-[68.6px] max-w-full mq450:gap-[17px] mq900:gap-[34px]">
                    {{-- <div class="w-[165.3px] flex flex-col items-start justify-start gap-[203px]">
                        <div class="self-stretch flex flex-row items-start justify-start py-0 pr-0 pl-[3px]">
                            <img class="h-[108px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                                loading="lazy" alt="" src="eventAsset/image157.jpeg" />
                        </div>
                    </div> --}}
                    <div
                        class="flex-1 flex flex-col items-end justify-start gap-[35.4px] min-w-[410px] max-w-full mq675:gap-[18px] mq675:min-w-full">
                        <div
                            class="w-[609.7px] flex flex-row items-end justify-start gap-[10.4px] max-w-full mq675:flex-wrap">
                            <div
                                class="flex-1 flex flex-col items-start justify-end pt-0 px-0 pb-[1.6px] box-border min-w-[199px]">
                                <img class="self-stretch h-[200.5px] relative min-w-[500px] right-72 overflow-hidden shrink-0 object-cover [debug_commit:bf4bc93] z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image161.jpeg" />
                            </div>
                            <img class="h-[300.1px] w-[350.3px] relative object-cover shrink-0 [debug_commit:bf4bc93] z-[1] mq675:flex-1"
                                loading="lazy" alt="" src="eventAsset/image157.jpeg" />
                        </div>
                        <div class="self-stretch flex flex-row items-start justify-between  mq675:flex-wrap">
                            <img class="self-stretch w-[262px] relative max-h-full object-cover min-h-[108px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image157.jpeg" />
                            <img class="self-stretch w-[262px] relative max-h-full object-cover min-h-[108px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image158.jpeg" />
                            <img class="self-stretch w-[269.6px] relative max-h-full object-cover min-h-[108px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image161.jpeg" />
                            <img class="self-stretch w-[262px] relative max-h-full object-cover min-h-[108px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image162.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- 40 page start from here --}}
    <div
        class="w-full overflow-hidden  mt-6 flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] px-[26px] pb-[54.6px] box-border relative gap-[45.8px] max-w-full text-left text-[20.1px] text-silver font-inter mq625:gap-[23px] mq450:pt-5 mq450:pb-[35px] mq450:box-border">

            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-6 pl-[19px] box-border max-w-full text-[18px] text-gold">
                <div class="flex-1 flex flex-row flex-wrap items-start justify-start gap-[17.9px] max-w-full">
                    <div
                        class="flex-1 flex flex-col items-end justify-start gap-[39.5px] shrink-0 [debug_commit:bf4bc93] max-w-full mq625:min-w-full mq650:gap-[20px]">
                        <div class="self-stretch flex flex-row items-start justify-between gap-[20px] mq625:flex-wrap">
                            <div class="flex flex-col items-start justify-start pt-[26.8px] px-0 pb-0">
                                <div
                                    class="relative  z-[1] px-4 top-24
                                text-yellow-500 font-extralight text-2xl">
                                    Tata Motors <br>
                                    Emperor Program</div>
                            </div>
                            <img class="h-[176.5px] w-[289.8px] relative object-cover z-[1]" loading="lazy"
                                alt="" src="eventAsset/image165.jpeg" />
                        </div>
                        <div
                            class="self-stretch flex flex-row items-start justify-start gap-[29.2px] max-w-full mq625:flex-wrap">
                            <img class="self-stretch w-[285.2px] relative max-h-full object-cover min-h-[144px] z-[1] mq625:flex-1"
                                loading="lazy" alt="" src="eventAsset/image166.jpeg" />
                            <img class="self-stretch flex-1 relative overflow-hidden object-cover w-[16px] h-[244px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image163.jpeg" />
                        </div>
                    </div>
                    <img class="self-stretch w-[297.2px] relative object-cover h-[460px] shrink-0 [debug_commit:bf4bc93] z-[1]"
                        loading="lazy" alt="" src="eventAsset/image164.jpeg" />
                </div>
            </div>
        </section>
    </div>


    {{-- 41 page start from here --}}
    <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <section
            class="flex-1 px-9 flex flex-col items-start justify-start pt-[3.5px] pb-[15.3px] box-border relative gap-[49.9px] max-w-full text-left text-[20.1px] text-silver font-inter mq650:gap-[25px]">

            <div
                class="relative top-24 z-[1] px-4 
                                text-yellow-500 font-extralight tracking-widest text-2xl gap-5">
                HONDA CB Hornet Launch</div>
            <div class="self-stretch flex flex-row items-start justify-end py-0  box-border max-w-full">


                <div
                    class="w-[720.9px] flex flex-row items-end justify-start gap-[43.8px] max-w-full mq725:flex-wrap mq725:gap-[22px]">
                    <img class="h-[326.3px] flex-1 relative right-60 max-w-full overflow-hidden object-cover min-w-[623px] shrink-0 [debug_commit:bf4bc93] z-[1]"
                        loading="lazy" alt="" src="eventAsset/image167.jpeg" />
                    <div
                        class="h-[450.2px] w-[280px] relative right-60 flex flex-col items-start justify-start gap-[16.4px] min-w-[180px] shrink-0 [debug_commit:bf4bc93] mq725:flex-1">
                        <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image168.jpeg" />
                        <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image169.jpeg" />
                        <img class="self-stretch flex-1 relative max-w-full overflow-hidden max-h-full object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image170.jpeg" />
                    </div>
                </div>
            </div>
        </section>
    </div>



    {{-- 42 page start from here --}}
    {{-- <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-[3.5px] px-[26px] pb-0.5 box-border relative gap-[42.1px] max-w-full mq480:gap-[21px]">

            <div class="self-stretch flex flex-row items-start justify-end py-0 px-[22px] box-border max-w-full">
                <div class="w-[794.2px] flex flex-row items-end justify-start gap-[15.7px] max-w-full mq731:flex-wrap">
                    <img class="mb-[-2.0999999999994543px] h-[343.7px] w-72 relative object-cover z-[1] mq731:flex-1"
                        loading="lazy" alt="" src="eventAsset/image171.jpeg" />
                    <div class="flex-1 flex flex-col items-end justify-start gap-[10.3px] min-w-[318px] max-w-full">
                        <img class="w-[360px] relative max-h-full object-cover max-w-full z-[1]" loading="lazy"
                            alt="" src="eventAsset/image172.jpeg" />
                        <div class="self-stretch flex flex-row items-start justify-start max-w-full">
                            <img class="w-[371.4px] relative max-h-full object-cover max-w-full z-[1]" loading="lazy"
                                alt="" src="eventAsset/image173.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}





</div>
