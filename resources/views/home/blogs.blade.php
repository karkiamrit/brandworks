<x-guest-layout class="bg-black">
    <div class="bg-[#1f1f1f]">
        {{-- <div class="text-center text-xl lg:text-5xl font-black  py-4 text-gray-200 mb-10"> 
            Blogs
        </div> --}}
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 pt-10">
            @foreach (trans('texts.blogs') as $post)
                @include('components.blog-card', ['post' => $post])
            @endforeach
        </div>
    </div>
</x-guest-layout>
