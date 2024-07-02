<section class="py-12 bg-gray-50 sm:py-16 lg:py-20 bg-cover bg-no-repeat bg-center backdrop-blur-xl"
         >
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center text-xl lg:text-5xl font-black  my-10 text-gray-700 ">
                {{-- <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full"> --}}
                Frequently Asked Questions
            </div>
            <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">

                <!-- FAQ Content in Two Columns -->
                <div class="lg:col-span-6 ">
                    <div class="flow-root">
                        <div x-data="{ active: null }" class="-my-4  space-y-3 ">
                            <?php $id = 1; ?>
                            <?php foreach (array_slice(trans('texts.faq'), 0, ceil(count(trans('texts.faq')) / 2)) as $item): ?>
                            <div
                                x-data="{
                                    id: <?php echo $id; ?>,
                                    get expanded() {
                                        return this.active === this.id
                                    },
                                    set expanded(value) {
                                        this.active = value ? this.id : null
                                    },
                                }"
                                role="region"
                                class="text-white"
                            >
                                <h3 class="p-4 bg-[#252525] border-b-[#c42227] border-b-4 text-sm">
                                    <button @click="expanded = !expanded" :aria-expanded="expanded.toString()" class=" flex outline-none hover:outline-none focus:outline-none  items-center justify-between w-full space-x-6 text-sm font-bold text-left ">
                                        <span class="flex-1"><?= $item['question']; ?></span>
                                        <span x-show="expanded" aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </span>
                                        <span x-show="!expanded" aria-hidden="true">
                                            <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>

                                <div x-show="expanded" x-collapse class="bg-white text-gray-900 px-4 border-2">
                                    <div class="py-4  "><?= $item['answer']; ?></div>
                                </div>
                            </div>
                            <?php $id++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6">
                    <div class="flow-root">
                        <div x-data="{ active: null text px-4-gray-900}" class="-my-4  space-y-3">
                            <?php foreach (array_slice(trans('texts.faq'), ceil(count(trans('texts.faq')) / 2)) as $item): ?>
                            <div
                                x-data="{
                                    id: <?php echo $id; ?>,
                                    get expanded() {
                                        return this.active === this.id
                                    },
                                    set expanded(value) {
                                        this.active = value ? this.id : null
                                    },
                                }"
                                role="region"
                                class=" text-white"
                            >
                                <h3 class="p-4 bg-[#252525] border-b-[#c42227] border-b-4">
                                    <button @click="expanded = !expanded" :aria-expanded="expanded.toString()" class="flex items-center justify-between w-full space-x-6 text-sm font-bold text-left outline-none hover:outline-none focus:outline-none ">
                                        <span class="flex-1"><?= $item['question']; ?></span>
                                        <span x-show="expanded" aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </span>
                                        <span x-show="!expanded" aria-hidden="true">
                                            <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>

                                <div x-show="expanded" x-collapse>
                                    <div class="py-4 text-sm text-gray-900">{!! nl2br(e($item['answer'])) !!}</div>
                                </div>
                            </div>
                            <?php $id++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
