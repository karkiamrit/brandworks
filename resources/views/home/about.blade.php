<div class="flex flex-col lg:flex-row w-full justify-center lg:h-screen px-4 lg:px-24 gap-10 my-24 lg:my-0">
    <div class="text-part flex-col gap-y-4 w-full lg:w-1/2">
        <div class="about flex text-lg lg:text-2xl items-center">About Us<span class="text-blue-600 pl-2 text-2xl font-black mb-4 scale-150 ">.</span> </div>
        <div class="flex items-center text-xl lg:text-4xl font-black text-gray-700 before:flex-1 before:border-t before:border-gray-500 after:flex-1 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600 lg:mt-2 mb-4">
            {{ $about['title'] }}
        </div>
        <div class="content text-sm lg:text-xl ">
            {{ $about['description'] }}
        </div>
    </div>
    <div class="image  lg:h-full w-full lg:w-1/2">
        <img src="{{ asset($about['image']) }}" alt="about" class="w-full h-full object-cover">
    </div>
</div>
