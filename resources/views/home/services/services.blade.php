<div class="h-screen bg-black">
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 bg-black p-10 pt-28">
        <?php foreach (trans('texts.services') as $service): ?>
            <div class="block rounded-xl border border-gray-800 p-4 hover:bg-indigo-700">
                <span class="inline-block rounded-lg p-3">
                    <?= $service['icon'] ?>
                </span>
                <h2 class="text-white text-lg font-semibold mt-3"><?= $service['title'] ?></h2>
                <p class="text-gray-400 mt-2"><?= $service['description'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
