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
            <h1 class=" text-2xl font-light tracking-widest uppercase text-gray-300 opacity-85">LAUNCHES AND INTRODUCTION
            </h1>
        </div>
    </div>

    {{--  32 page start form here --}}

    {{-- <div
        class="w-full overflow-hidden flex flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <header
            class="h-[540px] flex-1 flex flex-col items-start justify-start pt-[3.5px] pb-[14.5px] pr-[13px] pl-[26px] box-border relative gap-[76.1px] max-w-full text-left text-lg text-gold font-inter mq480:gap-[38px]">

            <div
                class="self-stretch flex-1 flex flex-row items-start justify-start py-0 pr-px pl-[19px] box-border max-w-full">

                <div <div
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
                    <div class="w-[422px] flex flex-row items-start justify-start py-0 px-[39px] box-border max-w-full">
                        <img class="h-[147.4px] flex-1 relative max-w-full overflow-hidden object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image134.jpeg" />
                    </div>
                </div>
            </div>
    </div>
    </header>
</div> --}}

    <div
        class="w-full px-4 sm:px-6 md:px-8 lg:px-10 xl:px-12 overflow-hidden flex flex-col md:flex-row items-start justify-start leading-[normal] tracking-[normal] {{ $className = $className ?? '' }} my-4 sm:my-8 md:my-12 lg:my-16 xl:my-20">

        <div class="flex flex-col gap-y-8 sm:gap-y-16 md:gap-y-24 lg:gap-y-32 xl:gap-y-40 items-start">
            <div
                class="text relative left-1 sm:left-2 md:left-3 lg:left-4 xl:left-5 whitespace-nowrap z-[1]  title-text text-yellow-500  text-start h-full font-century text-sm sm:text-base md:text-lg lg:text-2xl xl:text-2xl">
                Launch of ACE EV <br>
                1st Commercial EV from <br> Tata Motors in Nepal
            </div>
            <div class="img">
                <img src="eventAsset/image133.jpeg"
                    class="h-[9rem] sm:h-[12rem] md:h-[15rem] lg:h-[18rem] xl:h-[21rem] w-[15rem] sm:w-[20rem] md:w-[25rem] lg:w-[30rem] xl:w-[35rem] relative left-2 sm:left-4 md:left-6 lg:left-8 xl:left-10"
                    alt="">
            </div>
        </div>
        <div class="flex flex-col mt-4 sm:mt-8 lg:mt-16 xl:mt-20 md:mt-0">
            <div class="img">
                <img src="eventAsset/image132.jpeg"
                    class="w-[22rem] sm:w-[28rem] md:w-[34rem] lg:w-[40rem] xl:w-[44rem] h-[9rem] sm:h-[12rem] md:h-[15rem] lg:h-[18rem] xl:h-[21rem] relative left-2 sm:left-4 md:left-6 lg:left-8 xl:left-10"
                    alt="">
            </div>
            <div class="img">
                <img src="eventAsset/image134.jpeg"
                    class="h-[7rem] sm:h-[10rem] md:h-[12rem] lg:h-[14rem] xl:h-[16rem] w-[13rem] sm:w-[18rem] md:w-[22rem] lg:w-[26rem] xl:w-[30rem] relative top-2 sm:top-3 md:top-4 lg:top-5 xl:top-6 left-10 sm:left-20 md:left-30 lg:left-40 xl:left-50"
                    alt="">
            </div>
        </div>
    </div>


    {{-- 33 page start from here  --}}
    <div
        class="w-full overflow-hidden flex flex-col md:flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="h-auto md:h-[540px] flex-1 flex flex-col items-start justify-start pt-8 md:pt-[122.8px] px-4 md:px-[45px] pb-8 md:pb-[123px] box-border relative max-w-full text-left text-lg text-gold font-inter">
            <div class="flex flex-col items-start justify-start gap-2 md:gap-[7.4px]">
                <div
                    class="relative left-1 md:left-4 whitespace-nowrap z-[1]  title-text text-yellow-500  text-start h-full font-century text-lg md:text-2xl">
                    Launch of MG4 EV
                    <br>
                    1st EV to be launched and <br> driven at MX Track 5085ft above sea level
                </div>
                <div class="flex flex-col items-start justify-start">
                    <div class="flex flex-row items-end justify-end relative">
                        <div
                            class="h-auto md:h-[365.6px] w-full md:w-[863.3px] absolute m-0 left-0 md:left-[300.8px] bottom-0 md:bottom-[-296.8px]">
                            <img class="absolute bottom-0 md:bottom-[190px] left-0 md:left-[300.3px] w-full md:w-[702.9px] h-auto md:h-[200.1px] object-cover z-10"
                                loading="lazy" alt="" src="eventAsset/image135.jpeg" />
                            <img class="absolute top-0 md:top-[143.9px] left-0 md:left-[-260px] w-full md:w-[562.4px] h-auto md:h-[217.1px] object-cover z-20"
                                alt="" src="eventAsset/image136.jpeg" />
                            <img class="absolute top-0 md:top-[198.6px] right-0 md:left-[700.8px] w-full md:w-[300.5px] h-auto md:h-[161px] object-cover z-10"
                                loading="lazy" alt="" src="eventAsset/image137.jpeg" />
                            <img class="absolute top-0 md:top-[198.6px] left-0 md:left-[343.1px] w-full md:w-[315.6px] h-auto md:h-[161.8px] object-cover z-10"
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
                        class=" whitespace-nowrap z-[1]  title-text text-yellow-500 relative right-[69rem] my-2 mt-16 h-full font-century text-2xl">

                        Launch of Aprilia SXR160
                    </div>
                    <div
                        class="self-stretch flex md:flex-row items-end justify-start gap-[2.8px] max-w-full mq750:flex-wrap sm:flex-col">
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
            <div class="  text-yellow-500  mt-16 relative  h-full font-century text-2xl">
                SJ MOTO Launch
            </div>

            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-[25px] pl-[23px] box-border max-w-full">


                <div
                    class="flex-1 flex md:flex-row items-end justify-start gap-[60.9px] max-w-full mq450:gap-[15px] mq825:flex-wrap mq825:gap-[30px]">

                    <div
                        class="flex-1 flex flex-col items-start justify-start pt-0 px-0 pb-[50px] box-border min-w-[285px] min-h-[343px] max-w-full">
                        <img class="self-stretch h-[292.6px] relative max-w-full overflow-hidden shrink-0 object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image145.jpeg" />
                    </div>
                    <div
                        class="h-[412.3px] w-[360.2px] relative min-w-[360.20000000000005px] max-w-full mq675:min-w-full mq825:flex-1 sm:flex-col sm:w-full">
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
            <div class="  text-yellow-500  mt-16 relative left-12 top-20 h-full font-century text-2xl">
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
                                class="relative inline-block min-w-[50px] z-[1]  text-yellow-500  h-full font-century text-2xl">

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
             text-yellow-500   font-century text-2xl">

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
            text-yellow-500 font-century text-2xl">
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
                                <img class=" hidden lg:inline-block self-stretch h-[200.5px] relative min-w-[500px] right-72 overflow-hidden shrink-0 object-cover [debug_commit:bf4bc93] z-[1]"
                                    loading="lazy" alt="" src="eventAsset/image161.jpeg" />
                            </div>
                            <img class="h-[300.1px] w-[350.3px] relative object-cover shrink-0 [debug_commit:bf4bc93] z-[1] mq675:flex-1"
                                loading="lazy" alt="" src="eventAsset/image157.jpeg" />
                        </div>
                        <div class="self-stretch flex lg:flex-row flex-col items-start lg:justify-between  mq675:flex-wrap">
                            <img class="self-stretch lg:w-[262px] relative  lg:max-h-full object-cover lg:min-h-[108px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image157.jpeg" />
                            <img class="self-stretch w-[262px] relative max-h-full object-cover min-h-[108px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image158.jpeg" />
                            <img class="self-stretch w-[269.6px] relative max-h-full object-cover min-h-[108px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image161.jpeg" />
                            <img class="self-stretch lg:w-[262px] relative lg:max-h-full object-cover lg:min-h-[108px] z-[1]"
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
                        <div class="self-stretch flex flex-col lg:flex-row items-start justify-between gap-[20px] mq625:flex-wrap">
                            <div class="flex lg:flex-col flex-row items-start justify-start lg:pt-[26.8px] px-0 pb-0">
                                <div
                                    class="relative  z-[1] px-4 top-24
                                text-yellow-500 font-century text-2xl">
                                    Tata Motors <br>
                                    Emperor Program</div>
                            </div>
                            <img class="lg:h-[176.5px] lg:w-[289.8px] lg:relative object-cover z-[1] w-full" loading="lazy"
                                alt="" src="eventAsset/image165.jpeg" />
                        </div>
                        <div
                            class="lg:self-stretch flex lg:flex-row sm:flex-col sm:w-full items-start justify-start lg:gap-[29.2px] lg:max-w-full mq625:flex-wrap">
                            <img class="lg:self-stretch lg:w-[285.2px] relative  sm:right-80 lg:right-0 max-h-full object-cover min-h-[144px] z-[1] mq625:flex-1"
                                loading="lazy" alt="" src="eventAsset/image166.jpeg" />
                            <img class="self-stretch flex-1 relative overflow-hidden object-cover w-[16px] h-[244px] z-[1]"
                                loading="lazy" alt="" src="eventAsset/image163.jpeg" />
                        </div>
                    </div>
                    <img class="self-stretch w-[350px] lg:w-[297.2px] relative object-cover lg:h-[460px] h-[300px] shrink-0 [debug_commit:bf4bc93] z-[1]"
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
                                text-yellow-500 font-century tracking-widest text-2xl gap-5">
                HONDA CB Hornet Launch</div>
            <div class="self-stretch flex flex-row items-start justify-end py-0  box-border max-w-full">
                
                <div
                    class="lg:w-[720.9px] flex flex-row items-end justify-start gap-[43.8px] max-w-full mq725:flex-wrap mq725:gap-[22px]">
                    <img class="hidden lg:flex lg:h-[326.3px] sm:h-[100px]  flex-1 relative right-60 max-w-full overflow-hidden object-cover min-w-[623px] shrink-0 [debug_commit:bf4bc93] z-[1]"
                        loading="lazy" alt="" src="eventAsset/image167.jpeg" />
                    <div
                        class="lg:h-[450.2px] sm:h-[250px] lg:w-[280px] sm:w-[100px] relative lg:right-60 flex flex-col items-start justify-start gap-[16.4px] min-w-[180px] shrink-0 [debug_commit:bf4bc93] mq725:flex-1">
                        <img class="self-stretch flex-1 relative w-[370px] h-[400px] lg:max-w-full overflow-hidden lg:max-h-full object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image168.jpeg" />
                        <img class="sself-stretch flex-1 relative w-[370px] h-[400px] lg:max-w-full overflow-hidden lg:max-h-full object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image169.jpeg" />
                        <img class="self-stretch flex-1 relative w-[370px] h-[400px] lg:max-w-full overflow-hidden lg:max-h-full object-cover z-[1]"
                            loading="lazy" alt="" src="eventAsset/image170.jpeg" />
                    </div>
                </div>
            </div>
        </section>
    </div>



    {{-- 42 page start from here --}}
    <div class=" flex flex-row lg:gap-20 {{ $className ?? '' }} lg:my-24 my-12 px-7">
        <div class="flex flex-col lg:gap-32">
            <div
                class="relative left-10 top-12 z-[1] px-4 
                            text-yellow-500 font-century tracking-widest text-2xl gap-5">
                Unveiling MV Augusta in Nepal
            </div>
            <div class="img ">
                <img src="eventAsset/image172.jpeg" class="lg:h-[450px] w-full h-full lg:w-[350px] lg:relative lg:left-52" alt="">
            </div>
        </div>
        <div class="flex flex-col justify-end">
            <div class="imgone">
                <img src="eventAsset/image173.jpeg" class="lg:h-[250px] lg:w-[450px] h-full w-full lg:relative lg:left-60 flex  justify-center" alt="">

            </div>
            <div class="imgtwo">
                <img src="eventAsset/image171.jpeg" class="lg:h-[250px] lg:w-[450px] lg:relative lg:left-20 flex justify-center items-start w-full " alt="">
            </div>
        </div>
    </div>





</div>
