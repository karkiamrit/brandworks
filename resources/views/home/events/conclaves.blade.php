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
            <h1 class=" text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">CONCLAVES AND
                CONFERENCES
            </h1>
        </div>
    </div>


    {{-- Page 21 --}}
    <div
        class="w-full overflow-hidden flex flex-row items-center justify-center leading-[normal] tracking-[normal] {{ $className ?? '' }}">
        <header
            class="bg-black flex flex-col items-start justify-start pt-[122.8px] px-[45px] pb-[22.9px] box-border relative gap-[107.5px] max-w-full text-left text-lg text-gold font-inter mq450:gap-[54px] mq450:pt-20 mq450:px-[22px] mq450:pb-5 mq450:box-border">
            <div class="flex flex-col items-start justify-start gap-[26.8px]">
                <a class="[text-decoration:none] relative text-[inherit] whitespace-nowrap z-[1]">EO Everest Summit</a>
                <div class="flex flex-row items-start justify-start relative">
                    <div class="absolute !m-[0] top-[-19.4px] left-[0px] whitespace-nowrap z-[1]">EO Nepal's signature
                        event</div>
                    <div class="relative whitespace-nowrap z-[2]">exclusively for EO members</div>
                </div>
            </div>
            <div
                class="flex flex-row items-center w-full justify-center gap-[51.1px] ml-36 max-w-full mq450:gap-[26px] scale-[1.2]">
                <img class="h-full w-[25%] relative object-cover min-h-[216px] z-[1]" loading="lazy" alt=""
                    src="eventAsset/image95.png" />
                <img class="self-stretch w-[25%] relative max-h-full object-contain max-w-full z-[2]" alt=""
                    src="eventAsset/image98.png" />
                <div class="flex flex-row items-start justify-start relative w-6/12">
                    <img class="h-full w-full absolute !m-[0] top-[-216.2px] left-[-238.7px] object-cover z-[1]"
                        alt="" src="eventAsset/image96.png" />
                    <img class="h-full w-[58%] relative object-cover z-[2]" loading="lazy" alt=""
                        src="eventAsset/image97.png" />
                </div>
            </div>
            {{-- <img class="w-[43.2px] h-[43.2px] absolute !m-[0] top-[3.5px] left-[26.8px] object-cover z-[1]" loading="lazy" alt="" src="eventAsset/image96.png" /> --}}
        </header>
    </div>

    {{-- Page 22 --}}

    <div
        class="w-full overflow-hidden flex flex-row items-start mt-10 justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 pb-4 pr-1 pl-6 box-border relative gap-12 max-w-full text-left text-lg text-gold font-inter lg:gap-6">
            <div class="self-stretch flex flex-row items-start justify-start py-0 pr-px pl-5 box-border max-w-full">
                <div class="flex-1 flex flex-col items-start justify-start gap-4 max-w-full">
                    <div
                        class="self-stretch flex flex-row items-start justify-between w-full max-w-full gap-5  lg:flex-wrap">
                        <div class="flex flex-col items-start justify-start pt-6 px-0 pb-0">
                            <a class="text-decoration-none relative text-inherit z-1">
                                Nepal Republic Media
                            </a>
                        </div>
                        <img class="w-full mx-24 h-96 relative mr-auto pr-2 max-h-full object-cover max-w-full z-1 lg:flex-1"
                            loading="lazy" alt="" src="eventAsset/image100.jpeg" />
                    </div>
                    <div
                        class="w-full lg:w-full flex flex-row items-start justify-start py-0 px-0.5 box-border max-w-full">
                        <div
                            class="flex-1 overflow-x-auto flex flex-row items-start justify-start py-0 pr-px pl-0 box-border gap-10 max-w-full lg:gap-5">
                            <img class="self-stretch w-3/12 relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image101.jpeg" />
                            <img class="self-stretch w-[36%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image102.jpeg" />
                            <img class="self-stretch w-[36%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image99.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 23 --}}

    <div
        class="w-full overflow-hidden flex flex-row items-start mt-10 justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 pb-4 pr-1 pl-6 box-border relative gap-12 max-w-full text-left text-lg text-gold font-inter lg:gap-6">
            <div class="self-stretch flex flex-row items-start justify-start py-0 pr-px pl-5 box-border max-w-full">
                <div class="flex-1 flex flex-col w-full items-start justify-start gap-4 max-w-full">
                    <div
                        class="self-stretch flex flex-row items-center justify-between w-full max-w-full gap-5  lg:flex-wrap">
                        <div class="flex flex-col items-start justify-start pt-6 px-0 pb-0">
                            <a class="text-decoration-none relative text-inherit z-1">
                                Nepal Republic Media
                            </a>
                        </div>
                        <img class="h-96 relative pr-8 lg:justify-end  max-h-full object-contain max-w-full z-1 lg:flex"
                            loading="lazy" alt="" src="eventAsset/image105.jpeg" />
                    </div>
                    <div
                        class="w-full lg:w-full flex flex-row items-start justify-start py-0 px-0.5 box-border max-w-full">
                        <div
                            class="flex-1 overflow-x-auto flex flex-row items-start justify-start py-0 pr-px pl-0 box-border gap-10 max-w-full lg:gap-5">
                            <img class="self-stretch w-[30%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image103.jpeg" />
                            <img class="self-stretch w-[30%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
                                loading="lazy" alt="" src="eventAsset/image104.jpeg" />
                            <img class="self-stretch w-[30%] relative max-h-full shrink-0 object-cover min-h-[180px] z-1"
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
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-lg text-silver font-inter lg:gap-6">
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-lg text-gold">
                <div class="h-full lg:h-[409.9px] flex-1 relative max-w-full mb-96">
                    <img class="absolute top-1 left-[736.9px] w-full lg:w-1/2 h-full object-contain z-1" loading="lazy"
                        alt="" src="eventAsset/image107.jpeg" />
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
                            class="w-full lg:w-full flex flex-row items-start justify-start py-0 px-10 box-border max-w-full">
                            <img class="h-[259px] mr-36 my-40 mx-16 flex-1 relative right-24 max-w-full  object-cover z-1"
                                loading="lazy" alt="" src="eventAsset/image109.jpeg" />
                        </div>
                        <div
                            class="self-stretch flex flex-row items-center justify-center max-w-full scale-[1.4] -my-16">
                            <img class="w-full lg:w-full relative h-40 max-h-full lg:left-[35%] object-cover max-w-full z-1"
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
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-lg text-silver font-inter lg:gap-6">
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-lg text-gold">
                <div class="h-full lg:h-[409.9px] flex-1 relative max-w-full mb-96">
                    <img class="absolute top-1 right-0  h-full object-contain z-1" loading="lazy" alt=""
                        src="eventAsset/image110.jpeg" />
                    <div
                        class="absolute top-0 left-0 w-full lg:w-[760.1px] gap-5 flex flex-row my-48 items-start justify-start max-w-full">
                        {{-- <div class="w-full lg:w-[307.3px] flex flex-col items-start justify-start pt-0 px-0 pb-2 box-border gap-2">
                            <div class="self-stretch flex flex-row items-start justify-end">
                                <div class="relative z-1"> Development Conclave</div>
                            </div>
                            <div class="relative inline-block min-w-[124px] z-1">
                                Nagarik Nayak
                            </div>
                        </div> --}}
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1 left-10"
                                loading="lazy" alt="" src="eventAsset/image111.jpeg" />
                        </div>
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full">
                            <img class="w-full lg:w-full relative h-full max-h-full object-cover max-w-full z-1 left-10"
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
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-lg text-silver font-inter lg:gap-6">
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-lg text-gold">
                <div class="h-full lg:h-[409.9px] flex-1 relative max-w-full mb-96">
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
                            class="w-full lg:w-full flex flex-row items-start justify-end py-0 px-10 box-border max-w-full">
                            <img class="h-[259px] mr-36 mx-16 flex-1 relative right-24 max-w-full  object-cover z-1 left-40"
                                loading="lazy" alt="" src="eventAsset/image115.jpeg" />
                        </div>
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full">
                            <img class="w-full lg:w-full relative h-full max-h-full scale-75 object-cover -my-4 max-w-full z-1 left-20"
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
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-lg text-silver font-inter lg:gap-6">
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-lg text-gold">
                <div class="h-full lg:h-[350.9px] flex-1 relative max-w-full mb-96 w-full">
                    <img class="absolute top-1 right-0 h-full object-cover object-center z-1  lg:w-[62%] -mx-5"
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
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-lg text-silver font-inter lg:gap-6">
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-lg text-gold">
                <div class="h-full lg:h-[450.9px] flex-1 relative max-w-full mb-96 w-full">
                    <img class="absolute top-1 right-0 h-full object-cover object-center z-1  lg:w-1/2" loading="lazy"
                        alt="" src="eventAsset/image119.jpeg" />
                    <div
                        class="absolute top-0 left-0 w-full lg:w-[660.1px] flex flex-row my-48 gap-2 items-start justify-start max-w-full -mx-7">
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
    <div class="w-full flex flex-row items-start justify-start leading-normal tracking-normal {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-lg text-silver font-inter lg:gap-6">
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-lg text-gold">
                <div class="h-full lg:h-[450.9px] flex-1 relative max-w-full mb-96 w-full">
                    <img class="absolute top-1 right-0 h-full object-cover object-center z-1  lg:w-[45%]"
                        loading="lazy" alt="" src="eventAsset/image121.jpeg" />
                    <div
                        class="absolute top-0 left-0 w-full lg:w-[260.1px] flex flex-row my-96 gap-2 items-start justify-start max-w-full mx-[14.5rem]">
                        {{-- <div class="w-full lg:w-[307.3px] flex flex-col items-start justify-start pt-0 px-0 pb-2 box-border gap-2">
                            <div class="self-stretch flex flex-row items-start justify-end">
                                <div class="relative z-1"> Development Conclave</div>
                            </div>
                            <div class="relative inline-block min-w-[124px] z-1">
                                Nagarik Nayak
                            </div>
                        </div> --}}
                        <div class="self-stretch flex flex-row items-center justify-center max-w-full gap-2">
                            <img class="w-1/3 lg:w-full relative h-full max-h-full object-cover max-w-full z-1 "
                                loading="lazy" alt="" src="eventAsset/image122.jpeg" />
                            <img class="w-1/3 lg:w-full relative h-full max-h-full object-cover max-w-full z-1 "
                                loading="lazy" alt="" src="eventAsset/image124.jpeg" />
                            <img class="w-1/3 lg:w-full relative h-full max-h-full object-cover max-w-full z-1 "
                                loading="lazy" alt="" src="eventAsset/image123.jpeg" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Page 30 --}}
    <div class="flex flex-row gap-2 w-full">
        <div>
            <img class="w-full lg:w-full relative h-[390px] max-h-full object-contain max-w-full z-1 scale-150 mx-48 right-12"
                loading="lazy" alt="" src="eventAsset/image125.jpeg" />
        </div>
        <div class="flex flex-col">
            <img class="col-span-2 w-[67%] mx-60 -my-24" loading="lazy" alt=""
                src="eventAsset/image127.jpeg" />
        </div>
        <div class="flex flex-col mx-16 mr-16 -my-64 gap-10">
            <img class="col-span-2 w-full" loading="lazy" alt="" src="eventAsset/image126.jpeg" />
            <img class="col-span-2 w-full" loading="lazy" alt="" src="eventAsset/image128.jpeg" />
        </div>
    </div>

    {{-- Page 31 --}}
    <div class="flex flex-col mt-10 gap-5">
        <div class="flex flex-row items-center justify-center gap-5">
            <img class="w-[30%]" loading="lazy" alt="" src="eventAsset/image131.jpeg" />
            <img class="w-[30%]" loading="lazy" alt="" src="eventAsset/image130.jpeg" />
        </div>
        <div class="flex flex-row items-center justify-center gap-5">
            <img class="w-[80%] h-[400px] object-cover" loading="lazy" alt=""
                src="eventAsset/image129.jpeg" />
        </div>
    </div>

    {{-- Page 32 --}}
    <div
        class="w-full flex flex-row items-start justify-start leading-normal tracking-normal mt-10 {{ $className ?? '' }}">
        <section
            class="flex-1 flex flex-col items-start justify-start pt-1 px-6 pb-2 box-border relative gap-12 max-w-full text-left text-lg text-silver font-inter lg:gap-6">
            <div
                class="self-stretch flex flex-row items-start justify-start py-0 pr-5 pl-5 box-border max-w-full text-lg text-gold">
                <div class="h-full lg:h-[450.9px] flex-1 relative max-w-full mb-96 w-full">
                    <div class="flex flex-col gap-2">
                        <img class="absolute top-1 right-0 h-full object-cover object-center z-1  lg:w-[55%]"
                            loading="lazy" alt="" src="eventAsset/image132.jpeg" />
                        <img class="absolute top-[30rem] right-0 mx-44 h-full object-cover object-center z-1  lg:w-[40%]"
                            loading="lazy" alt="" src="eventAsset/image134.jpeg" />
                    </div>
                    <div
                        class="absolute top-0 left-0 w-full lg:w-[600.1px] flex flex-row my-48 gap-2 items-start justify-start max-w-full -mx-7">
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
