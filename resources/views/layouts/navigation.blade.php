<nav class="flex items-center space-x-10  p-6 bg-white shadow sticky top-0">
    <div>
        <a class="text-2xl font-bold" href={{route('home')}}>
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 " />
        </a>
    </div>
    <div>
        <ul class="flex space-x-4">
            <x-nav-link :active="true"  class="nav-item">
                <a class=" text-gray-500 hover:text-red-500" href="#">Home</a>
            </x-nav-link>
            <x-nav-link class="nav-item">
                <a class="nav-link text-gray-500 hover:text-red-500" href="#">About</a>
            </x-nav-link>
            <x-nav-link class="nav-item">
                <a class="nav-link text-gray-500 hover:text-red-500" href="#">Services</a>
            </x-nav-link>
        </ul>
    </div>
</nav>
