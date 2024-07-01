<div class="bg-[#1f1f1f] p-4 sm:p-6 lg:p-10 h-full">
    <div class="text-center text-lg sm:text-xl lg:text-5xl font-black text-white pb-16">
        {{-- <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full"> --}}
        Our Services
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-4 sm:p-6 lg:p-10">
        <?php foreach (trans('texts.services') as $service): ?>
            <div class="block rounded-xl p-4 sm:p-6 lg:p-10 shadow-md border-2 border-[#171717] shadow-black hover:bg-blue-800">
                <span class="inline-block rounded-lg p-3">
                    <?= $service['icon'] ?>
                </span>
                <h2 class="text-white text-lg font-semibold mt-3"><?= $service['title'] ?></h2>
                <p class="text-gray-400 mt-2"><?= $service['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>