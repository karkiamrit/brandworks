@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

<div class="px-10 flex flex-col sticky top-0 z-50 bg-black py-4 w-full">
    <div class="flex flex-row items-center justify-start">
        <a class="text-2xl font-bold flex justify-start grayscale opacity-45" href={{ route('home') }}>
            <x-application-logo
                class="block h-9 w-auto fill-current text-gray-600 text-start mt-2 filter grayscale" /> </a>
    </div>
    <div class="title flex items-center justify-center">
        <h1 class="text-xl lg:text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">CONCLAVES AND
            CONFERENCES
        </h1>
    </div>
</div>
<!-- Logo and Center Content -->
<div class=" bg-black w-full overflow-hidden">
    {{-- Page 22 --}}

    <div
        class="w-full overflow-hidden flex flex-col md:flex-row items-start lg:mt-10 justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 pb-4 pr-1 lg:pl-6 box-border relative md:gap-12 max-w-full text-left text-2xl text-gold font-inter lg:gap-6 mx-12 lg:mx-0">
            <div
                class="self-stretch flex flex-col md:flex-row items-start justify-start py-0 pr-px lg:pl-5 box-border max-w-full">
                <div class="flex-1 flex flex-col items-start justify-start gap-4 max-w-full">
                    <div
                        class="self-stretch flex flex-col md:flex-row items-start justify-between w-full max-w-full gap-5  lg:flex-wrap">
                        <div
                            class="flex flex-col items-start justify-start pt-6 px-0 pb-0 lg:pl-4 [text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl">
                            <span class="text-decoration-none relative text-inherit z-1">
                                Nagarik Nayak
                            </span>
                            <span class="text-decoration-none relative text-inherit z-1">
                                Nepal Republic Media
                            </span>
                        </div>
                        <img class="w-full mx-0 sm:mx-24 lg:h-96 relative mr-auto lg:pr-8 sm:pr-2 max-h-full object-cover max-w-full z-1 lg:flex-1"
                            loading="lazy" alt="" src="eventAsset/image100.jpeg" />
                    </div>
                    <div
                        class="w-full lg:w-full flex flex-col md:flex-row items-start justify-start py-0 sm:px-0.5 box-border max-w-full">
                        <div
                            class="flex-1 overflow-hidden flex sm:flex-row flex-col items-start justify-start py-0 pr-px pl-0 box-border gap-10 max-w-full lg:gap-5">
                            <img class="self-stretch w-full md:w-3/12 relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image101.jpeg" />
                            <img class="self-stretch w-full md:w-[36%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image102.jpeg" />
                            <img class="self-stretch w-full md:w-[36%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image99.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 23 --}}

    <div
        class="w-full overflow-hidden flex flex-col md:flex-row items-start mt-10 justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 pb-4 pr-1 lg:pl-6 box-border relative gap-12 max-w-full text-left text-2xl text-gold font-inter lg:gap-6 mx-12 lg:mx-0 ">
            <div
                class="self-stretch flex flex-col md:flex-row items-start justify-start py-0 pr-px lg:pl-5 box-border max-w-full">
                <div class="flex-1 flex flex-col w-full items-start justify-start gap-4 max-w-full">
                    <div
                        class="self-stretch flex flex-col md:flex-row items-center justify-between w-full max-w-full gap-5  lg:flex-wrap">
                        <div
                            class="flex flex-col items-start justify-start px-0 pb-0  [text-decoration:none] relative text-[inherit] ld:whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl lg:pl-2">
                            <span class="text-decoration-none relative text-inherit z-1 xl:bottom-36 lg:w-full">
                                2<sup>nd</sup> International Conference of Dermatology
                            </span>
                        </div>
                        <img class="lg:h-96 relative lg:pr-8 xl:justify-end md:justify-center md:w-full xl:w-auto max-h-full object-contain max-w-full z-1 lg:flex"
                            loading="lazy" alt="" src="eventAsset/image105.jpeg" />
                    </div>
                    <div
                        class="w-full lg:w-full flex flex-col md:flex-row items-start justify-start py-0 px-0.5 box-border max-w-full">
                        <div
                            class="flex-1 overflow-hidden flex flex-col md:flex-row items-start justify-start py-0 pr-px pl-0 box-border gap-10 max-w-full lg:gap-5">
                            <img class="self-stretch w-full md:w-[30%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image103.jpeg" />
                            <img class="self-stretch w-full md:w-[30%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image104.jpeg" />
                            <img class="self-stretch w-full md:w-[30%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image106.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 24 --}}
    <div class="w-full flex flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 md:pb-2 pb-5 box-border relative gap-12 max-w-full text-left text-2xl text-silver font-inter lg:gap-6">
            <div
                class="flex flex-col items-start justify-start top-5 md:top-20 left-10 px-0 pb-0 [text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl">
                <span class="text-decoration-none relative text-inherit z-1">
                    Republic Development Conclave
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    Nagarik Nayak
                </span>
            </div>
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-2xl text-gold">
                <div class="h-full lg:h-[409.9px] flex-1 relative max-w-full mb-40 lg:mb-96">
                    <img class="md:absolute md:top-1 md:mx-8 sm:mx-0 sm:left-0 md:left-[26.9px] lg:left-[526.9px] xl:left-[680.9px] lg:w-1/2 h-full object-contain z-1"
                        loading="lazy" alt="" src="eventAsset/image107.jpeg" />
                    <div
                        class="md:absolute top-0 left-0 lg:w-[760.1px] flex flex-col items-start justify-start max-w-full">
                        <div
                            class="w-full hidden  lg:w-full lg:flex flex-row items-start justify-start py-0 lg:px-40 px-36 box-border max-w-full">
                            <img class="h-[259px] mr-36 my-40 pb-8 lg:pb-16 md:pb-0 mx-16 flex-1 relative right-24 max-w-full object-contain md:object-cover scale-[6] sm:scale-[3] md:scale-100 z-1"
                                loading="lazy" alt="" src="eventAsset/image109.jpeg" />
                        </div>
                        <div
                            class="self-stretch flex flex-row items-center justify-center max-w-full scale-[1.4] -my-44 md:my-0">
                            <img class="w-[220px] lg:w-full relative h-32  lg:h-40 top-40 lg:top-0 max-h-full lg:left-[35%] object-cover max-w-full z-1"
                                loading="lazy" alt="" src="eventAsset/image108.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 25 --}}
    <div class="w-full flex flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-2xl text-silver font-inter lg:gap-6">
            <div
                class="flex flex-col items-start justify-start lg:top-20 top-10 left-16 px-0 pb-0 [text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl">
                <span class="text-decoration-none relative text-inherit z-1">
                    Midea Coolference 2017
                </span>
            </div>
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-2xl text-gold">
                <div class="h-full lg:h-[409.9px] flex-1 relative max-w-full mb-10 lg:mb-96">
                    <img class="sm:absolute sm:top-1 md:right-0 sm:h-full sm:object-contain object-cover z-1"
                        loading="lazy" alt="" src="eventAsset/image110.jpeg" />
                    <div
                        class="sm:absolute sm:top-0 sm:left-0 w-full lg:w-[760.1px] gap-5 flex flex-row sm:my-48 sm:items-start justify-start max-w-full">
                        {{-- <div class="w-full lg:w-[307.3px] flex flex-col items-start justify-start pt-0 px-0 pb-2 box-border gap-2">
                            <div class="self-stretch flex flex-row items-start justify-end">
                                <div class="relative z-1"> Development Conclave</div>
                            </div>
                            <div class="relative inline-block min-w-[124px] z-1">
                                Nagarik Nayak
                            </div>
                        </div> --}}
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1 lg:left-10"
                                loading="lazy" alt="" src="eventAsset/image111.jpeg" />
                        </div>
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1 lg:left-10"
                                loading="lazy" alt="" src="eventAsset/image112.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 26 --}}
    <div class="w-full flex flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-2xl text-silver font-inter lg:gap-6">
            <div
                class="flex lg:flex-col flex-wrap gap-2 md:gap-0 items-start justify-start top-4 lg:top-24 left-10 px-0 pb-0 [text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl">
                <span class="text-decoration-none relative text-inherit z-1">
                    NEEK
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    25<sup>th</sup> Year
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    Celebration
                </span>
            </div>
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-2xl text-gold">
                <div class="h-full lg:h-[450.9px] flex-1 relative max-w-full mb-96">
                    <img class="absolute top-1 left-[736.9px] w-full lg:w-1/2 h-full object-contain z-1"
                        loading="lazy" alt="" src="eventAsset/image114.jpeg" />
                    <div
                        class="absolute top-0 left-0 w-full lg:w-[760.1px] flex flex-col items-start justify-start max-w-full">
                        {{-- <div class="w-full lg:w-[307.3px] flex flex-col items-start justify-start pt-0 px-0 pb-2 box-border gap-2">
                            <div class="self-stretch flex flex-row items-start justify-end">
                                <div class="relative z-1"> Development Conclave</div>
                            </div>
                            <div class="relative inline-block min-w-[124px] z-1">
                                Nagarik Nayak
                            </div>
                        </div> --}}
                        <div
                            class="w-full lg:w-full flex flex-row items-start justify-end py-0 lg:px-10 box-border max-w-full">
                            <img class="h-[370px] mr-36 mx-16 flex-1 relative right-24 max-w-full  object-cover z-1 left-36"
                                loading="lazy" alt="" src="eventAsset/image115.jpeg" />
                        </div>
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full">
                            <img class="w-full lg:w-full relative h-full max-h-full mt-6 lg:mt-0 lg:scale-75 object-cover -my-4 max-w-full z-1 lg:left-16"
                                loading="lazy" alt="" src="eventAsset/image113.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 27 --}}
    <div class="w-full flex flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 lg:top-0 top-36 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-2xl text-silver font-inter lg:gap-6">
            <div
                class="flex flex-col items-start justify-start -top-2 lg:top-24 my-20 md:my-0 xl:my-0 left-10 px-0 pb-0 [text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl lg:pl-2">
                <span class="text-decoration-none relative text-inherit z-1">
                    Thai Airways 50<sup>th</sup> year
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    of operation in Nepal
                </span>
            </div>
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-2xl text-gold">
                <div class="h-full lg:h-[350.9px] flex-1 relative max-w-full mb-96 w-full">
                    <img class="md:absolute relative -top-10 md:top-1 md:right-0 h-full object-cover object-center z-1  lg:w-[62%] lg:-mx-5 mx-6"
                        loading="lazy" alt="" src="eventAsset/image116.jpeg" />
                    <div
                        class="absolute top-0 left-0 w-full lg:w-[560.1px] flex flex-row my-48 gap-2 items-start justify-start max-w-full -mx-7">
                        {{-- <div class="w-full lg:w-[307.3px] flex flex-col items-start justify-start pt-0 px-0 pb-2 box-border gap-2">
                            <div class="self-stretch flex flex-row items-start justify-end">
                                <div class="relative z-1"> Development Conclave</div>
                            </div>
                            <div class="relative inline-block min-w-[124px] z-1">
                                Nagarik Nayak
                            </div>
                        </div> --}}
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full ">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1 "
                                loading="lazy" alt="" src="eventAsset/image117.jpeg" />
                        </div>
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1"
                                loading="lazy" alt="" src="eventAsset/image118.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 28 --}}
    <div class="w-full flex flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-2xl text-silver font-inter lg:gap-6">
            <div
                class="flex lg:flex-col flex-wrap items-start justify-start lg:top-28 left-0 md:left-8 px-0 pb-0 [text-decoration:none] relative text-[inherit] lg:whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl">
                <span class="text-decoration-none relative text-inherit z-1">
                    Butwal Power Company partners with major
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    Chinese companies for the development of
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    Hydropower projects in Nepal
                </span>
            </div>
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-2xl text-gold">
                <div class="h-full lg:h-[450.9px] flex-1 relative max-w-full mb-96 w-full">
                    <img class="md:absolute relative top-4 md:top-1 right-0 h-full object-cover object-center z-1  lg:w-1/2"
                        loading="lazy" alt="" src="eventAsset/image119.jpeg" />
                    <div
                        class="absolute top-24 lg:top-0 left-0 w-full lg:w-[660.1px] flex flex-row my-48 gap-2 items-start justify-start max-w-full -mx-7">
                        {{-- <div class="w-full lg:w-[307.3px] flex flex-col items-start justify-start pt-0 px-0 pb-2 box-border gap-2">
                            <div class="self-stretch flex flex-row items-start justify-end">
                                <div class="relative z-1"> Development Conclave</div>
                            </div>
                            <div class="relative inline-block min-w-[124px] z-1">
                                Nagarik Nayak
                            </div>
                        </div> --}}
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full ">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1 left-10"
                                loading="lazy" alt="" src="eventAsset/image120.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 29 --}}
    <div
        class="w-full flex flex-col md:flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-2xl text-silver font-inter lg:gap-6">
            <div
                class="flex flex-col items-start justify-start top-10 lg:top-28 left-10 px-0 pb-0 [text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl lg:pl-2">
                <span class="text-decoration-none relative text-inherit z-1">
                    Honda Partner's Meet
                </span>
            </div>
            <div
                class="self-stretch flex flex-col md:flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-2xl text-gold">
                <div class="h-full lg:h-[450.9px] flex-1 relative max-w-full mb-24 lg:mb-96 w-full">
                    <img class="lg:absolute relative top-1 right-0 h-full object-cover object-center z-1  lg:w-[45%]"
                        loading="lazy" alt="" src="eventAsset/image121.jpeg" />
                    <div
                        class="lg:absolute relative top-0 left-0 w-full lg:w-[260.1px] flex flex-col md:flex-row lg:my-96 my-10 gap-2 items-start justify-start max-w-full lg:mx-[14.5rem]">
                        <div
                            class="self-stretch flex flex-col md:flex-row items-center justify-center max-w-full gap-2">
                            <img class="w-full md:w-1/3 lg:w-full relative h-full max-h-full object-cover max-w-full z-1 "
                                loading="lazy" alt="" src="eventAsset/image122.jpeg" />
                            <img class="w-full md:w-1/3 lg:w-full relative h-full max-h-full object-cover max-w-full z-1 "
                                loading="lazy" alt="" src="eventAsset/image124.jpeg" />
                            <img class="w-full md:w-1/3 lg:w-full relative h-full max-h-full object-cover max-w-full z-1 "
                                loading="lazy" alt="" src="eventAsset/image123.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 30 --}}
    <div
        class="flex-wrap lg:flex-col items-start justify-start left-6 lg:left-12 bottom-10 lg:bottom-52 [text-decoration:none] relative text-[inherit] lg:whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl lg:pl-2">
        <span class="text-decoration-none relative text-inherit z-1">
            Nokia Nepal Innovation Day 2022
        </span>
    </div>
    <div class="flex flex-col lg:flex-row gap-12 lg:gap-2 w-full">

        <div>
            <img class="w-full relative h-[390px] lg:h-[390px] max-h-full object-contain max-w-full z-1 scale-100 mb-10 lg:mb-0 lg:scale-150 mx-0 lg:mx-48 right-0 lg:right-12"
                loading="lazy" alt="" src="eventAsset/image125.jpeg" />
        </div>
        <div class="flex flex-col">
            <img class="col-span-2 w-full lg:w-[67%] mx-0 lg:mx-60 -my-24" loading="lazy" alt=""
                src="eventAsset/image127.jpeg" />
        </div>
        <div class="flex flex-col -mx-24 lg:mx-16 lg:mr-16 -my-64 gap-10">
            <img class="col-span-2 w-full" loading="lazy" alt="" src="eventAsset/image126.jpeg" />
            <img class="col-span-2 w-full" loading="lazy" alt="" src="eventAsset/image128.jpeg" />
        </div>
    </div>

    {{-- Page 31 --}}
    <div
        class="flex flex-row items-center justify-start [text-decoration:none] md:left-10 left-4 relative text-[inherit] md:whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl lg:pl-2 md:mt-16 lg:top-0 mt-72">
        <span class="text-decoration-none relative text-inherit z-1 flex items-center">
            Celebrating growth and success of QFX Cinemas
        </span>
    </div>
    <div class="flex flex-col mt-10 gap-5">
        <div class="flex flex-row items-center justify-center gap-5">
            <img class="w-[30%]" loading="lazy" alt="" src="eventAsset/image131.jpeg" />
            <img class="w-[30%]" loading="lazy" alt="" src="eventAsset/image130.jpeg" />
        </div>
        <div class="flex flex-row items-center justify-center gap-5">
            <img class="lg:w-[80%] h-[400px] object-cover" loading="lazy" alt=""
                src="eventAsset/image129.jpeg" />
        </div>
    </div>

    {{-- Page 32 --}}
    <div
        class="w-full flex flex-row items-start justify-start leading-normal tracking-normal mt-10 {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-2xl text-silver font-inter lg:gap-6">
            <div
                class="flex flex-col lg:left-6 items-start justify-start lg:top-28 top-5 gap-2 px-0 pb-0 [text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1] title-text text-yellow-500 font-century  lg:text-2xl text-xl lg:pl-2">
                <span class="text-decoration-none relative text-inherit z-1">
                    Launch of ACE EV
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    1<sup>st</sup> Commercial EV from Tata Motors in
                </span>
                <span class="text-decoration-none relative text-inherit z-1">
                    Nepal
                </span>
            </div>
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-2xl text-gold">
                <div class="h-full lg:h-[450.9px] flex-1 relative max-w-full lg:mb-64 w-full">
                    <div class="flex flex-col gap-2">
                        <img class="lg:absolute top-1 right-0 h-full object-cover object-center z-1  lg:w-[55%]"
                            loading="lazy" alt="" src="eventAsset/image132.jpeg" />
                        {{-- <img class="lg:absolute top-[30rem] right-0 mx-44 h-full object-cover object-center z-1  lg:w-[40%]"
                            loading="lazy" alt="" src="eventAsset/image134.jpeg" /> --}}
                    </div>
                    <div
                        class="lg:absolute top-0 left-0 w-full lg:w-[600.1px] flex flex-row lg:my-48 my-4 gap-2 items-start justify-start max-w-full -mx-7">
                        {{-- <div class="w-full lg:w-[307.3px] flex flex-col items-start justify-start pt-0 px-0 pb-2 box-border gap-2">
                            <div class="self-stretch flex flex-row items-start justify-end">
                                <div class="relative z-1"> Development Conclave</div>
                            </div>
                            <div class="relative inline-block min-w-[124px] z-1">
                                Nagarik Nayak
                            </div>
                        </div> --}}
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full ">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1 left-10"
                                loading="lazy" alt="" src="eventAsset/image133.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
