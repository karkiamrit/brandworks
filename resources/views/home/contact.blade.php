<x-guest-layout>

    <h1 class="text-center lg:text-5xl md:text-4xl pt-16">Contact Us</h1>

    @if (session('success'))
        <div class="text-center text-green-500">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}" class="lg:w-1/3 mx-auto py-12 bg-white px-7 space-y-4 rounded-md md:px-16 my-12 md:w-[90%]">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="message" :value="__('Message')" />
            <textarea id="message" name="message" rows="5" class="border-gray-300  focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm w-full">{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>

        <div class="text-center">
            <x-primary-button>
                {{ __('Send') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
