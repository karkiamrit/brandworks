<!-- resources/views/components/hero-carousel.blade.php -->
<div class="relative flex justify-center min-w-full overflow-x-scroll space-x-4" data-carousel="static">
    @foreach ($carousels as $carousel)
    <div class="relative overflow-hidden rounded-lg h-96 w-96" data-carousel-item-container>
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg h-96">
            @foreach ($carousel['images'] as $index => $image)
                <div class="{{ $index === 0 ? '' : 'hidden' }} duration-700 ease-in-out" data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ $image['url'] }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $image['alt'] }}">
                </div>
            @endforeach
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('[data-carousel="static"]').forEach((carouselContainer) => {
            carouselContainer.querySelectorAll('[data-carousel-item-container]').forEach((carousel) => {
                let currentSlide = 0;
                const slides = carousel.querySelectorAll('[data-carousel-item]');
                const totalSlides = slides.length;

                function nextSlide() {
                    slides[currentSlide].classList.add('hidden');
                    currentSlide = (currentSlide + 1) % totalSlides;
                    slides[currentSlide].classList.remove('hidden');
                }

                function prevSlide() {
                    slides[currentSlide].classList.add('hidden');
                    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                    slides[currentSlide].classList.remove('hidden');
                }

                carousel.querySelector('[data-carousel-next]').addEventListener('click', nextSlide);
                carousel.querySelector('[data-carousel-prev]').addEventListener('click', prevSlide);

                const interval = Math.floor(Math.random() * 5 + 2) * 1000;
                setInterval(() => {
                    nextSlide();
                }, interval);
            });
        });
    });
</script>
