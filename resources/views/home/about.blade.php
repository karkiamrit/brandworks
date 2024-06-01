<x-guest-layout>
    <div class="min-h-screen lg:px-[110px] pb-14 ">

        <div class="mx-auto items-center space-y-4  justify-center flex flex-col  h-[90vh] py-16">
            <div class="w-fit">
                <h2 class="text-4xl text-start">Why</h2>
                <img src="{{ asset('eventAsset/image19.png') }}" alt="Logo" class="w-fit">
            </div>
        </div>

        <div class="grid grid-cols-8 relative  bg-[#707070] py-16 ">
            <div class="absolute top-[10%] right-0 w-fit text-center left-13 px-12 leading-[50px]">
                <div class="">
                    <h1 class="text-5xl !leading-[120px] text-white">PAN Nepal Reach</h1>
                    <p class="text-3xl text-white">with regional workforce available 24 x 7</p>
                </div>
                =
            </div>
            <div class=" w-full space-y-12 self-end ms-24 col-span-2 ">
                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                         alt="">
                    <p class="text-red-700  text-2xl">12 QFX network offices</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                         alt="">
                    <p class="text-green-500  text-2xl">12 QFX network offices</p>
                </div>

                <div class="flex space-x-6 mx-4">
                    <img src="{{ asset('eventAsset/image17.png') }}" class="w-[25px] h-[28px] text-center self-center"
                         alt="">
                    <p class="text-yellow-400  text-2xl">12 QFX network offices</p>
                </div>
            </div>
            <div class="w-full self-end col-span-6">
                <img src="{{ asset('eventAsset/nepal-map.png') }}" alt="Logo" class="w-full">
            </div>
        </div>


        <div class="grid grid-cols-8 py-4  pt-20git">
            <div class="col-span-2 py-16 px-4 bg-white relative">
                <h2 class="text-4xl text-start">Why</h2>
                <img src="{{ asset('eventAsset/image19.png') }}" alt="Logo" class="w-[65%]">
                <div class="absolute left-[15%] top-1/3 space-y-12">
                    <div class="flex items-center justify-end space-x-3">
                        <p class="text-6xl font-bold text-blue-600">21+Years</p>
                        <p class="text-2xl text-gray-800 !leading-[1.2rem] pt-3">Collective experience</p>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <p class="text-6xl font-bold text-blue-600">991+</p>
                        <p class="text-2xl text-gray-800 !leading-[1.2rem] pt-3">Projects</p>
                    </div>
                    <div class="flex items-center justify-end space-x-3">
                        <p class="text-6xl font-bold text-blue-600">31+</p>
                        <p class="text-2xl text-gray-800 !leading-[1.2rem] pt-3">Clients</p>
                    </div>

                    <div class="flex items-center justify-end space-x-3">
                        <p class="text-6xl font-bold text-blue-600">11+</p>
                        <p class="text-2xl text-gray-800 !leading-[1.2rem] pt-3 w-1/5">Seasoned
                            professionals
                            from
                            difference
                            industries</p>
                    </div>

                </div>
            </div>
            <div class="col-span-6">
                <img src="{{ asset('eventAsset/image18.png') }}" alt="Logo" class="w-full">
            </div>
        </div>

        <div class="grid grid-cols-6 gap-8 pt-20">
            <div class="grid col-span-3 h-2/3 px-10">
                <img src="{{ asset('eventAsset/image19.jpg') }}" alt="Logo" class="h-full w-full ">
                <p class="text-3xl">We are proud to have worked with trusted
                    international and home-grown companies.</p>
            </div>

            <div class="grid grid-cols-4 col-span-3 gap-5">
                @for ($i =1 ; $i <= 35; $i++)
                    <div class="flex items-center justify-center w-32 h-32 "> <!-- Fixed width and height -->
                        <img src="{{ asset('eventAsset/client-logos/' . $i . '.png') }}" alt="{{$i}}" class="h-full w-full mix-blend-multiply object-contain"> <!-- Ensure images fit within the container -->
                    </div>
                @endfor




            </div>

        </div>

    </div>
</x-guest-layout>
