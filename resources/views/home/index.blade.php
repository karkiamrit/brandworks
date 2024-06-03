<x-guest-layout>
    <!-- Logo and Center Content -->
    <div class="mx-12">

        <div class="h-[90vh]  flex  flex-col justify-center ">
            <div class="text-center ">
                <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto">
            </div>
            <p class="text-center md:text-2xl text-xl flex flex-col">
                <span>Brand actions, Events,</span>
                <span>Activation, Fabrication </span>
            </p>
        </div>

        <div class="space-y-12 mb-40 lg:px-[110px]">
            <div class="text-center lg:w-1/3 md:mx-auto md:w-2/3 ">
                <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full">
            </div>

            <div class="grid lg:grid-cols-6 grid-cols-1 md:gap-4 align-middle min-h-max gap-6 ">

                @foreach ($logos as $logo)
                    <div class="text-center col-span-1 min-h-max self-center">
                        <div class="">
                            <img src="{{ asset($logo['image']) }}" alt="{{ $logo['name'] }}"
                                 class="mx-auto w-1/2 lg:h-full lg:w-full mix-blend-multiply object-contain">
                        </div>
                        <p class="md:text-xl text-sm text-gray-500">Advertising, Branding, Communication</p>
                    </div>
                @endforeach
            </div>

            <div
                class="py-3 flex items-center text-3xl text-gray-400  before:flex-1 before:border-t before:border-gray-500 before:me-6 after:flex-1 after:border-t after:border-gray-500 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600">
                avani aligns the best of the best
            </div>

            <div class="md:flex items-center sm:flex-wrap md:flex-nowrap">
                <div>
                    <img src="{{ asset('home/logo.png') }}" alt="Logo"
                         class="mx-auto md:w-3/4 md:border-r md:border-b-0 border-b border-gray-500">
                </div>
                <p class="md:text-xl lg:text-3xl text-xl text-center md:text-start  leading-10  md:w-[75%]">
                    started with a vision to support businesses with brand establishment, quality branding,
                    and creative design services; brandworks, is now a well-established independent firm
                    specializing in events, fabrications, brand actions and purpose-driven engagements.
                </p>
            </div>


            <div class="bg-gray-200 grid lg:grid-cols-3 items-center justify-center  space-y-12 md:space-y-0 py-20 ">
                <div class=" lg:col-span-1  md:w-2/3 md:mx-auto lg:mx-0 lg:w-full ">
                    <img src="{{ asset('eventAsset/image11.png') }}" alt="Logo" class="w-full">
                </div>
                <div class="lg:col-span-2  lg:w-2/3 mx-auto bg-gradient-to-bl  self-center justify-center ">
                    <p class="md:text-xl lg:text-3xl text-xl lg:!leading-[3.2rem] text-center lg:text-start">a motley group of strategic creative,
                        design, and marketing professionals who
                        believe in action to change the way
                        businesses communicate to the world.</p>
                </div>
            </div>


            <div class=" lg:relative space-y-12 md:space-y-0 h-[60%]  ">
                <div class="bg-gray-300 md:w-2/3 :mx-auto lg:mx-0  lg:w-1/2">
                    <img src="{{ asset('eventAsset/image13.png') }}" alt="Logo" class="w-full">
                </div>
                <p class="lg:absolute lg:top-[30%] lg:w-[650px]  lg:left-[46%] lg:!leading-[3rem] lg:text-3xl text-xl text-center lg:text-start"> Our  focus  is  on  collaborating  with  visionary  leaders and  organizations  who  share  our  belief  that the  power  of  brand  actions,  design  and  innovation  can  have  a  profound  impact  shaping  brighter  future  for  the  community  they  serve. </p>
            </div>


        </div>

    </div>

</x-guest-layout>
