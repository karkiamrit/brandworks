<x-guest-layout>
    <!-- Logo and Center Content -->
    <div class="mx-12 font-century">

        <div class="h-[90vh]  flex  flex-col justify-center ">
            <div class="text-center ">
                <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto">
            </div>
            <p class="text-center md:text-2xl text-xl flex flex-col">
                <span>Brand actions, Events,</span>
                <span>Activation, Fabrication </span>
            </p>
        </div>

        <div class="">
            <div class="text-center ">
                <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto">
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 md:gap-4 align-middle min-h-fit gap-6  my-16">
                <div class="text-center col-span-1">
                    <div>
                        <img src="{{ asset('home/avani-logo.png') }}" alt="Logo"
                            class="mx-auto md:w-2/3 w-1/2 h-[120px]">
                    </div>
                    <p class="md:text-xl text-sm text-gray-500">Advertising, Branding, Communication</p>
                </div>
                <div class="text-center col-span-1">
                    <div>
                        <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto md:w-2/3 w-1/2 h-[120px]">
                    </div>
                    <p class="md:text-xl text-sm text-gray-500">Brand actions, Events,
                        Activation, Fabrication</p>
                </div>
                <div class="text-center col-span-1">
                    <div>
                        <img src="{{ asset('home/limez-marketing.png') }}" alt="Logo"
                            class="mx-auto md:w-2/3 w-1/2 h-[120px]">
                    </div>
                    <p class="md:text-xl text-sm text-gray-500">Marketing Partner for QFX,
                        DCN and LABIM Mall</p>
                </div>
                <div class="text-center col-span-1">
                    <div>
                        <img src="{{ asset('home/marching-ant.png') }}" alt="Logo"
                            class="mx-auto md:w-2/3 w-1/2 h-[120px]">
                    </div>
                    <p class="md:text-xl text-sm text-gray-500">Data-driven Digital
                        Marketing</p>
                </div>
                <div class="text-center col-span-1">
                    <div>
                        <img src="{{ asset('home/mantra-it.png') }}" alt="Logo"
                            class="mx-auto md:w-2/3 w-1/2 h-[120px]">
                    </div>
                    <p class="md:text-xl text-sm text-gray-500">IT Services</p>
                </div>
                <div class="text-center col-span-1">
                    <div>
                        <img src="{{ asset('home/impact.png') }}" alt="Logo"
                            class="mx-auto md:w-2/3 w-1/2 h-[120px]">
                    </div>
                    <p class="md:text-xl text-sm text-gray-500">Creative Marketing
                        and Communications</p>
                </div>
            </div>

            <div
                class="py-3 flex items-center text-2xl text-gray-400  before:flex-1 before:border-t before:border-gray-500 before:me-6 after:flex-1 after:border-t after:border-gray-500 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600 my-28">
                avani aligns the best of the best
            </div>

            <div class="md:flex items-center sm:flex-wrap md:flex-nowrap h-screen w-full">
                <div class="">
                    <img src="{{ asset('home/logo.png') }}" alt="Logo"
                        class="mx-auto md:w-3/4 justify-start md:border-r md:border-b-0 border-b border-gray-500">
                </div>
                <p class="md:text-xl lg:text-2xl text-xl text-center md:text-start  leading-10  md:w-full">
                    started with a vision to support businesses with brand establishment, quality branding,
                    and creative design services; brandworks, is now a well-established independent firm
                    specializing in events, fabrications, brand actions and purpose-driven engagements.
                </p>
            </div>


            <div class="bg-gray-200 flex items-center justify-between  space-y-12  h-screen">
                <div class=" lg:col-span-1  ">
                    <img src="{{ asset('eventAsset/image11.png') }}" alt="Logo"
                        class="w-full scale-150 flex justify-start relative right-10">
                </div>
                <div class="flex  lg:w-2/3 mx-auto bg-gradient-to-bl  justify-end
                 ">
                    <p class="md:text-xl lg:text-2xl text-xl lg:!leading-[3.2rem] relative bottom-24 w-[70%]">a motley
                        group of strategic creative,
                        design, and marketing professionals who
                        believe in action to change the way
                        businesses communicate to the world.</p>
                </div>
            </div>

            {{-- <div
                class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-l from-transparent via-transparent to-current  h-screen w-full">
            </div> --}}

            <div class="flex flex-row md:space-y-0 h-screen  w-full items-center bg-gray-200">
                <div class="w-7/12">
                    <img src="{{ asset('eventAsset/image12.jpg') }}" alt="Logo"
                        class="w-full relative right-16 mix-blend-">
                </div>
                <div class="text-2xl font-century w-4/12 pr-30">
                    We are on a mission to help create the brands, products and experiences of tomorrow </div>
            </div>



            <div class="flex flex-row md:space-y-0 h-screen  w-full items-center my-40">
                <div class="w-8/12">
                    <img src="{{ asset('eventAsset/image13.png') }}" alt="Logo" class="w-full relative right-16 ">
                </div>
                <div class="text-2xl font-century w-4/12 pr-30">
                    Our focus is on collaborating with visionary leaders and organizations who share our belief that the
                    power of <strong class="bold">brand actions
                    </strong> , design and innovation can have a profound impact shaping brighter future for
                    the community they serve. </div>
            </div>



        </div>

    </div>

</x-guest-layout>
