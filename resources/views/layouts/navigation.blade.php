<nav class="flex items-center lg:space-x-10 py-2  lg:py-5  lg:p-5 bg-white shadow sticky top-0 z-50" x-data="{ open: false }">
    <div class="flex  lg:block lg:justify-start justify-between w-full lg:w-fit">
        <a class="text-2xl font-bold" href={{route('home')}}>
            <x-application-logo class="block h-3 md:h-9 w-auto fill-current text-gray-800 " />
        </a>
        <div class="lg:hidden w-fit my-auto">
            <button class="navbar-burger flex items-center text-blue-600 p-3" @click.capture="open = ! open">
                <svg class="block h-6 w-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>

    </div>
    <div class="flex items-center justify-between lg:w-full">
        <ul class=" space-x-4 lg:block hidden">
            {{-- <x-nav-link :active="true"  class="nav-item"> --}}
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'text-red-500' : 'text-gray-500' }} hover:text-red-500" href="{{ route('home')}} ">Home</a>
            {{-- </x-nav-link> --}}
            <x-nav-link class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'events' ? 'text-red-500' : 'text-gray-500' }}  hover:text-red-500"  href={{route('events')}}>Events</a>
            </x-nav-link>
            <x-nav-link class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'blogs' ? 'text-red-500' : 'text-gray-500' }} hover:text-red-500"  href={{route('blogs')}}>Blogs</a>
            </x-nav-link>
            @if(auth()->check())
                <x-nav-link class="nav-item">
                    <a class="nav-link text-gray-500 hover:text-red-500"  href={{route('contact.all')}}>Contact List</a>
                </x-nav-link>
                <x-nav-link class="nav-item">
                    <a class="nav-link text-gray-500 hover:text-red-500"  href={{route('dashboard')}}>Upload File</a>
                </x-nav-link>
            @endif
        </ul>
        @if(auth()->check())
            <div class="justify-self-end lg:block hidden">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <x-primary-button  type="submit">Logout</x-primary-button>
                </form>
            </div>
        @endif
    </div>

{{--    mobile view --}}
    <div class="fixed top-0 h-full p-4 lg:hidden  z-50  w-2/3  bg-white shadow-2xl transform transition-transform duration-300 ease-in-out"  @click.outside="open = false" @close.stop="open = false" x-show="open">
        <div class="flex justify-between items-center">
            <x-application-logo class="block h-1 w-auto fill-current text-gray-800 " />
            <div @click.capture="open =  false">
                <x-cross-icon></x-cross-icon>
            </div>
        </div>
        <div class="p-4">
            <ul class=" flex flex-col space-y-5 ">
                <x-nav-link  class="nav-item">
                    <a class=" text-gray-500 hover:text-red-500" href="{{ route('home')}} ">Home</a>
                </x-nav-link>
                <x-nav-link class="nav-item">
                    <a class="nav-link text-gray-500 hover:text-red-500"  href={{route('events')}}>Events</a>
                </x-nav-link>
                <x-nav-link class="nav-item">
                    <a class="nav-link text-gray-500 hover:text-red-500"  href={{route('contact.show')}}>Contact</a>
                </x-nav-link>
                @if(auth()->check())
                    <x-nav-link class="nav-item">
                        <a class="nav-link text-gray-500 hover:text-red-500"  href={{route('contact.all')}}>Contact List</a>
                    </x-nav-link>
                    <x-nav-link class="nav-item">
                        <a class="nav-link text-gray-500 hover:text-red-500"  href={{route('dashboard')}}>Upload File</a>
                    </x-nav-link>
                @endif

                @if(auth()->check())
                    <div class="justify-self-end lg:hidden ">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <x-primary-button  type="submit">Logout</x-primary-button>
                        </form>
                    </div>
                @endif
            </ul>

        </div>
    </div>
</nav>


