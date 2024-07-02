<x-guest-layout>
    <!-- Logo and Center Content -->
    <div class="px-3 md:px-0 overflow-hidden ">

        <div class="lg:h-[100vh] h-[36vh] flex  flex-col justify-center ">
            <div class="text-center  flex justify-center items-center">
                {{-- <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto"> --}}
                @foreach (trans('texts.herologo') as $event)
                    <div class="">
                        @include('components.hero-carousel', [
                            'images' => $event['images'],
                        ])
                    </div>
                @endforeach
            </div>
            {{-- <p class="text-center md:text-2xl text-xl flex flex-col relative bottom-12">
                <span>{{ trans('texts.brand_actions') }}</span>
                <span>{{ trans('texts.activation_fabrication') }} </span>
            </p> --}}
        </div>




        {{-- <div
            class=" flex items-center text-xl lg:text-2xl text-gray-400  before:flex-1 before:border-t before:border-gray-500 before:me-6 after:flex-1 after:border-t after:border-gray-500 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600 mb-20">
            {{ trans('texts.avani_aligns') }}
        </div> --}}



        <div class="">
            {{-- 
            <div class="md:flex items-center sm:flex-wrap md:flex-nowrap h-screen">
                <div>
                    <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto lg:w-3/4 md:w-5/6  ">
                </div>
                <p
                    class="md:text-2xl lg:text-2xl text-xl text-center md:text-start  leading-10  md:w-[75%] md:border-l px-6 md:border-b-0 border-t md:border-t-0 border-gray-500">
                    {{ trans('texts.brandworks_vision') }}

                </p>
            </div> --}}

            {{-- <div class="md:flex items-center sm:flex-wrap md:flex-nowrap relative bg-fixed bg-center bg-cover opacity-90 pb-10 lg:pb-0 lg:h-[60vh]"
                style="background-image: url('{{ asset('eventAsset/image201.png') }}');">
                <div class="flex lg:flex-row lg:items-center flex-col ">
                    <div>
                        <img src="{{ asset('home/logo.png') }}" alt="Logo"
                            class="mx-auto lg:w-3/4 md:w-5/6 lg:mt-0 mt-5">
                    </div>
                    <p
                        class="md:pl-0 md:text-2xl lg:text-2xl text-lg text-center text-gray-300 lg:text-start  md:w-[75%] md:border-l px-6 md:border-b-0 border-t md:border-t-0 border-gray-500">
                        {{ trans('texts.brandworks_vision') }}
                    </p>
                </div>
            </div> --}}

            {{-- about section  --}}

            @include('home/about', [
                'about' => [
                    'title' => 'Marching Ants: Digital Marketing Agency In Nepal',
                    'description' =>
                        'Marching Ants is a leading professional data-driven Digital Marketing Agency in Nepal. We have been offering our data-centered digital marketing services for our clients since 2015. We offer 360 digital marketing solutions for customers to enhance their digital presence via online marketing strategies. A team of experts in Marching Ants makes optimum use of standard tools to improve your digital presence and digital marketing strategies. After carrying out extensive research, we craft your ad campaigns and social media campaigns. Further, we provide you with authentic, transparent information about reach, leads, and conversions. We are also a trusted SEO Agency in Nepal, offering organic growth to our clients. Our everyday goal is to make our clients\'  online presence best in class via effective digital marketing tools. We assure to provide actionable and result-driven digital marketing experiences via our unique digital campaigns and boost your business to greater heights.',
                    'image' => 'home/jarayo.jpg',
                ],
            ])

            {{-- company  section  --}}
            <div class="div mt-52 lg:my-16">

                <div
                    class=" flex items-center text-xl lg:text-5xl font-black text-gray-700  before:flex-1 before:border-t before:border-gray-500 before:me-6 after:flex-1 after:border-t after:border-gray-500 after:ms-6 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600 lg:mt-0 mt-10">
                    Our Group Of Companies
                </div>


                <div class="flex justify-center items-center space-x-4 -my-12 lg:-my-0">
                    @foreach (trans('texts.partnerlogo') as $event)
                        <div>
                            @include('components.partners-carousel', [
                                'carousels' => [
                                    'images' => $event['images'],
                                ],
                            ])

                        </div>
                    @endforeach
                </div>
            </div>



            <script>
                window.addEventListener('scroll', function() {
                    const parallax = document.querySelector('.h-screen');
                    let scrollPosition = window.pageYOffset;

                    parallax.style.transform = 'translateY(' + scrollPosition * parallax.dataset.speed + 'px)';
                });
            </script>

            <div
                class="bg-gradient-to-r from-gray-400  to-white grid lg:grid-cols-3 items-center justify-center  space-y-12 md:space-y-0 lg:h-screen lg:px-24 py-10 lg:py-0">
                <div class=" lg:col-span-1  md:w-2/3 md:mx-auto lg:mx-0 lg:w-full ">
                    <img src="{{ asset('eventAsset/image11.png') }}" alt="Logo" class="w-full ">
                </div>
                <div class="lg:col-span-2  lg:w-2/3 mx-auto   relative self-center justify-center  bg-none">
                    <p class="text-xl lg:text-2xl  lg:!leading-[3.2rem] text-center lg:text-start md:text-2xl pb-10">

                        {{ trans('texts.motley_group') }}</p>
                </div>
            </div>



        </div>

        {{-- why brandwork section  --}}
        <div
            class="hidden bg-gradient-to-r from-gray-400  to-white mx-auto lg:items-left items-center space-y-4  lg:justify-start lg:flex lg:flex-col h-52 lg:pl-24 ">
            <div class="w-fit pl-4 lg:pl-0">
                <h2 class="text-4xl text-start">{{ trans('texts.why_title') }}</h2>
                <img src="{{ asset('eventAsset/image19.png') }}" alt="Logo" class="w-fit">
            </div>
        </div>

        <div class="lg:grid  lg:grid-cols-8 bg-gradient-to-r from-gray-400 to-white lg:px-24">
            <div class="lg:col-span-2 lg:py-16 px-4  lg:relative">
                <div class="">
                    <h2 class="text-4xl lg:text-start text-center">{{ trans('texts.why_title') }}</h2>
                    <img src="{{ asset('eventAsset/image19.png') }}" alt="Logo" class="lg:w-[65%] mx-auto lg:mx-0 ">
                </div>
                <div
                    class="lg:absolute lg:left-[10%] lg:top-[25%] lg:space-y-12 md:space-y-8 space-y-6 lg:py-5 py-8 font-century">
                    <div class="flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">
                            {{ trans('texts.years_of_experience') }}</p>
                        <p
                            class="lg:text-xl md:text-xl !m-0 text-xl text-center lg:text-start text-gray-800 lg:!leading-[1.2rem] lg:pt-3">
                            Collective experience</p>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">
                            {{ trans('texts.project_count') }}</p>
                        <p
                            class="lg:text-xl md:text-xl !m-0 text-xl  text-center text-gray-800 lg:!leading-[1.2rem] lg:pt-3">
                            Projects</p>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">
                            {{ trans('texts.client_count') }}</p>
                        <p
                            class="lg:text-xl  md:text-xl !m-0  text-xl text-center text-gray-800 lg:!leading-[1.2rem] lg:pt-3">
                            Clients</p>
                    </div>

                    <div
                        class="hidden lg:flex flex-col lg:flex-row items-center justify-start lg:justify-end space-x-3 lg:pl-10">
                        <p class="lg:text-6xl text-4xl font-bold text-blue-600 md:text-5xl">11+</p>
                        <p class=" !m-0 text-xl text-left text-gray-600 lg:!leading-[1.2rem] lg:pt-3 lg:w-1/5 ">
                            {{ trans('texts.seasoned_professionals') }}</p>
                    </div>

                </div>
            </div>
            <div class="col-span-6">
                <img src="{{ asset('eventAsset/image18.png') }}" alt="Logo" class="w-full ">
            </div>
        </div>

        {{-- section about --}}
        <div
            class="flex items-center bg-transparent py-4 bg-gradient-to-r from-gray-400  to-white text-xl lg:text-5xl pt-10">
            <hr class="flex-grow border-t border-gray-500/50 ">
            <span class="px-3 text-blue-500 font-bold flex-col mt-6">
                {{ trans('texts.nationwide_presence') }}
                <div class="p text-sm lg:text-lg text-center my-1 text-gray-500">PAN Nepal 24/7 support</div>
            </span>
            <hr class="flex-grow border-t border-gray-400">
        </div>
        <div
            class="bg-gradient-to-r pb-10  from-gray-400  to-white lg:grid lg:grid-cols-10 grid-col relative  bg-[#707070] lg:pb-24 lg:pt-16">


            <div class="w-full self-end col-span-6 lg:pl-20">
                <img src="{{ asset('eventAsset/nepal-map.png') }}" alt="Logo" class="w-full">
            </div>

            <div class=" w-full lg:space-y-12 space-y-6 self-end lg:ms-24 col-span-2 pt-24 md:pt-0">

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                        alt="">
                    <p class="text-red-700  text-2xl">{{ trans('texts.qfx_network_offices') }}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}"
                        class="w-[25px] h-[28px] text-center self-center fill-yellow-400" alt="">
                    <p class="text-green-500  text-2xl">{{ trans('texts.edu_institution_network') }}</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                        alt="">
                    <p class="text-yellow-400  text-2xl">{{ trans('texts.associates_media_network') }}</p>
                </div>
            </div>

        </div>


        <div>
            @include('home.services.services')
        </div>


        {{-- section two  --}}

        <div class="bg-gradient-to-r from-gray-400  to-white py-6">


            <div class="text-center text-xl lg:text-5xl font-black  py-4 text-gray-700 ">
                {{-- <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full"> --}}
                Our Trusted Clients

            </div>


            <div class="flex justify-center items-center space-x-4">
                @foreach (trans('texts.brandlogo') as $event)
                    <div>
                        @include('components.group-company-carousel', [
                            'carousels' => [
                                'images' => $event['images'],
                            ],
                        ])
                    </div>
                @endforeach
            </div>

        </div>

        <div class="bg-gradient-to-r from-gray-400  to-white py-6">
            @include('home.faq')

        </div>

    </div>

</x-guest-layout>
