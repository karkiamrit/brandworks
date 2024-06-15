@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

<div class="px-10 flex flex-row top-6 z-40 bg-black  py-4 w-full">
    <div class="flex flex-row items-center justify-start">
        <a class="text-2xl font-bold flex justify-start grayscale opacity-45" href={{ route('home') }}>
            <x-application-logo class="block h-9 w-auto fill-current text-gray-600 text-start mt-2 filter grayscale" />
        </a>
    </div>
    <div class="title flex items-center justify-center w-full">
        <h1 class=" text-xl lg:text-3xl font-light tracking-widest uppercase text-gray-300 opacity-85">INAUGURATIONS AND CELEBRATIONS
        </h1>
    </div>
</div>

<div class="bg-black w-full overflow-hidden mt-10">
    <div class="flex flex-col justify-between mx-16 gap-6 lg:gap-10">
        @php
            $index = 0;
        @endphp
        @foreach (trans('texts.inaugurations') as $event)
            <div class="flex flex-row justify-between">
                <div class="flex flex-col items-center justify-center sm:w-[30%] w-[50%]">
                    <div
                        class="title-text text-yellow-500 mt-2 w-full sm:w-80 text-start justify-start font-century sm:text-2xl text-xs">
                        {{ $event['company'] }}
                        <div class="mt-3 mb-3">
                            {{ $event['project'] }}
                        </div>
                        <p class="text-xs sm:text-xl">
                            {{ $event['description'] }}
                        </p>
                    </div>
                </div>
                @include('components.carousel', [
                    'images' => $event['images'],
                ])
            </div>
            @if ($index == 1)
                <div class="bg-black border border-gray-800">
                    <div
                        class="lg:flex lg:items-center lg:justify-between w-full mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                        <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                            <span class="block">
                                Do you want to host
                            </span>
                            <span class="block text-indigo-500">
                                your event with us?
                            </span>
                        </h2>
                        <div class="lg:mt-0 lg:flex-shrink-0 sm:mt-0 mt-5">
                            <div class=" sm:inline-flex rounded-md shadow flex justify-center">
                                <a href="/contact">
                                    <button type="button"
                                        class="py-4 px-6  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 text-white w-full transition ease-in duration-200 text-center text-base font-semibold shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2  rounded-lg ">
                                        Inquire Now
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @php
                $index++;
            @endphp
        @endforeach
    </div>

</div>
