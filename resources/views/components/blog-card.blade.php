<div class="max-w-lg mx-auto">
    <div class="bg-gray-700 shadow-md border border-gray-800 rounded-lg max-w-sm mb-5">
        <a href="{{ $post['src'] }}">
            <img class="rounded-t-lg" src="{{ $post['image_url'] }}" alt="">
        </a>
        <div class="p-5">
            <a href="{{ $post['src'] }}">
                <h5 class="text-white font-bold text-2xl tracking-tight mb-2">{{ $post['title'] }}</h5>
            </a>
            <p class="font-normal text-gray-400 mb-3">{{ $post['excerpt'] }}</p>
            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center" href="#">
                Read more
            </a>
        </div>
    </div>
</div>