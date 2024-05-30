@php
    $sizes = ['w-1/2', 'w-1/3', 'w-2/3', 'w-full'];
    $positions = ['ml-auto', 'mr-auto', 'mx-auto'];
@endphp

<x-guest-layout>
    <!-- Logo and Center Content -->
    <div class="px-10 bg-black w-full">

        <div class="flex flex-col">
            <div class="flex flex-row items-center justify-start">
                <a class="text-2xl font-bold flex justify-start" href={{ route('home') }}>
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-600 text-start  mt-2" />
                </a>
            </div>
            <div class="title flex items-center justify-center">
                <h1 class=" text-xl font-light tracking-widest uppercase text-gray-300">Inauguration and Celebrations
                </h1>
            </div>
        </div>

        {{--  image section start from here --}}
        <div class="image-title-section">

            <div class="title-text absolute z-10 text-yellow-300/70 mt-2 w-40 text-start justify-start font-extralight  text-lg">
                Butwal Power Company Inauguration of Nyadi Hydropower Project
            </div>

            <div class="image-section">
                <section>
                    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                  
                      <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
                        <li>
                          <a href="#" class="group relative block">
                            <img
                              src="https://images.unsplash.com/photo-1618898909019-010e4e234c55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                              alt=""
                              class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
                            />
                  
                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                              <h3 class="text-xl font-medium text-white">Casual Trainers</h3>
                  
                              <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                              >
                                Shop Now
                              </span>
                            </div>
                          </a>
                        </li>
                  
                        <li>
                          <a href="#" class="group relative block">
                            <img
                              src="https://images.unsplash.com/photo-1624623278313-a930126a11c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                              alt=""
                              class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
                            />
                  
                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                              <h3 class="text-xl font-medium text-white">Winter Jumpers</h3>
                  
                              <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                              >
                                Shop Now
                              </span>
                            </div>
                          </a>
                        </li>
                  
                        <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                          <a href="#" class="group relative block">
                            <img
                              src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                              alt=""
                              class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
                            />
                  
                            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                              <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>
                  
                              <span
                                class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white"
                              >
                                Shop Now
                              </span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </section>
            </div>
        </div>
    </div>
</x-guest-layout>