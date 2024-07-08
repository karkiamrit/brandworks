<section class="py-12 bg-gray-50 sm:py-16 lg:py-20 bg-cover bg-no-repeat bg-center backdrop-blur-xl" >
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center text-xl lg:text-5xl font-black  my-10 text-gray-700 " >
                {{-- <img src="{{ asset('home/avani-logo.png') }}" alt="Logo" class="mx-auto w-full"> --}}
                Frequently Asked Questions
            </div>
            <div class="grid gap-12 lg:grid-cols-12 lg:gap-16">
                
                <!-- FAQ Content in Two Columns -->
                <div class="lg:col-span-6">
                    <div class="flow-root">
                        <div x-data="{ active: null }" class="-my-4 divide-y divide-gray-900 ">
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
                                class="py-6"
                            >
                                <h3>
                                    <button @click="expanded = !expanded" :aria-expanded="expanded.toString()" class="flex items-center justify-between w-full space-x-6 text-base font-bold text-left text-gray-900">
                                        <span class="flex-1"><?= $item['question']; ?></span>
                                        <span x-show="expanded" aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </span>
                                        <span x-show="!expanded" aria-hidden="true">
                                            <svg class="w-5 h-5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>

                                <div x-show="expanded" x-collapse>
                                    <div class="py-4 text-base font-medium text-gray-900"><?= $item['answer']; ?></div>
                                </div>
                            </div>
                            <?php $id++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6">
                    <div class="flow-root">
                        <div x-data="{ active: null }" class="-my-4 divide-y divide-gray-900">
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
                                class="py-6"
                            >
                                <h3>
                                    <button @click="expanded = !expanded" :aria-expanded="expanded.toString()" class="flex items-center justify-between w-full space-x-6 text-base font-bold text-left text-gray-900">
                                        <span class="flex-1"><?= $item['question']; ?></span>
                                        <span x-show="expanded" aria-hidden="true">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </span>
                                        <span x-show="!expanded" aria-hidden="true">
                                            <svg class="w-5 h-5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>

                                <div x-show="expanded" x-collapse>
                                    <div class="py-4 text-base font-medium text-gray-900"><?= $item['answer']; ?></div>
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