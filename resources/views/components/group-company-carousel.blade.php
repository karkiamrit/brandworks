{{-- <div id="controls-carousel" class="min-w-full" data-carousel="static">
    <div class="relative overflow-hidden rounded-lg h-screen mb-44 w-screen flex">
        @foreach ($carousels['images'] as $index => $image)
            <div class="carousel-slide mr-12 flex-none w-1/4 duration-700 ease-in-out" data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                <img src="{{ $image['url'] }}" class="block w-full h-full object-cover" alt="{{ $image['alt'] }}">
            </div>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('[data-carousel="static"]').forEach((carousel) => {
            let currentSlide = 0;
            const slides = carousel.querySelectorAll('.carousel-slide');
            const totalSlides = slides.length;
            const slidesToShow = 4;
            const carouselWrapper = carousel.querySelector('.relative');
            const carouselWidth = carouselWrapper.offsetWidth;
            let startX, scrollLeft, isDown = false;

            function updateCarousel() {
                carouselWrapper.scrollLeft = currentSlide * (carouselWidth / slidesToShow);
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }

            // Swipe functionality
            carouselWrapper.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - carouselWrapper.offsetLeft;
                scrollLeft = carouselWrapper.scrollLeft;
                carouselWrapper.classList.add('active');
            });

            carouselWrapper.addEventListener('mouseleave', () => {
                isDown = false;
                carouselWrapper.classList.remove('active');
            });

            carouselWrapper.addEventListener('mouseup', () => {
                isDown = false;
                carouselWrapper.classList.remove('active');
            });

            carouselWrapper.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - carouselWrapper.offsetLeft;
                const walk = (x - startX) * 3; // scroll-fast
                carouselWrapper.scrollLeft = scrollLeft - walk;
            });

            const interval = Math.floor(Math.random() * 5 + 2) * 1000;
            setInterval(() => {
                nextSlide();
            }, interval);
        });
    });
</script>

<style>
    .relative.active {
        cursor: grabbing;
    }
</style> --}}
<div id="controls-carousel" class="min-w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden rounded-lg mb-16 flex">
        @foreach ($carousels['images'] as $index => $image)
            <div class="carousel-slide mr-12 flex-none w-44 duration-700 ease-in-out"
                data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                <img src="{{ $image['url'] }}" class="mx-auto  items-center aspect-video border-none mix-blend-multiply object-contain grayscale hover:grayscale-0" alt="{{ $image['alt'] }}">
            </div>
        @endforeach
    </div>
    <div class="flex-row justify-center w-full">
        <div class="flex-col">
            <!-- Pagination indicators -->
            <div class="relative bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center space-x-2 mt-4">
                @foreach ($carousels['images'] as $index => $image)
                    <div class="pagination-dot w-3 h-3 rounded-full bg-gray-700 {{ $index === 0 ? 'bg-white' : '' }}"
                        data-index="{{ $index }}"></div>
                @endforeach
            </div>
            <!-- Navigation controls -->
            <div class="flex justify-center gap-4 ">
                <button id="prev-slide"
                    class="relative  left-0  top-1/2 transform -translate-y-1/2 rounded-lg bg-gray-700 text-white px-4 py-2">Prev</button>
                <button id="next-slide"
                    class="relative right-0 top-1/2 transform -translate-y-1/2 rounded-lg bg-gray-700 text-white px-4 py-2">Next</button>
            </div>
        </div>
    </div>
</div>
<style>
    .relative.active {
        cursor: grabbing;
    }

    .pagination-dot {
        cursor: pointer;
    }

    .pagination-dot.active {
        background-color: white;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('[data-carousel="static"]').forEach((carousel) => {
            let currentSlide = 0;
            const slides = carousel.querySelectorAll('.carousel-slide');
            const totalSlides = slides.length;
            const slidesToShow = 4;
            const carouselWrapper = carousel.querySelector('.relative');
            const carouselWidth = carouselWrapper.offsetWidth;
            const prevButton = document.getElementById('prev-slide');
            const nextButton = document.getElementById('next-slide');
            const paginationDots = carousel.querySelectorAll('.pagination-dot');
            let startX, scrollLeft, isDown = false;

            function updateCarousel() {
                carouselWrapper.scrollLeft = currentSlide * (carouselWidth / slidesToShow);
                updatePagination();
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                updateCarousel();
            }

            function updatePagination() {
                paginationDots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentSlide);
                });
            }

            // Navigation controls
            prevButton.addEventListener('click', prevSlide);
            nextButton.addEventListener('click', nextSlide);

            // Swipe functionality
            carouselWrapper.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - carouselWrapper.offsetLeft;
                scrollLeft = carouselWrapper.scrollLeft;
                carouselWrapper.classList.add('active');
            });

            carouselWrapper.addEventListener('mouseleave', () => {
                isDown = false;
                carouselWrapper.classList.remove('active');
            });

            carouselWrapper.addEventListener('mouseup', () => {
                isDown = false;
                carouselWrapper.classList.remove('active');
            });

            carouselWrapper.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - carouselWrapper.offsetLeft;
                const walk = (x - startX) * 3; // scroll-fast
                carouselWrapper.scrollLeft = scrollLeft - walk;
            });

            // Pagination controls
            paginationDots.forEach(dot => {
                dot.addEventListener('click', () => {
                    currentSlide = parseInt(dot.dataset.index, 10);
                    updateCarousel();
                });
            });

            // Autoplay functionality
            const interval = Math.floor(Math.random() * 5 + 2) * 1000;
            setInterval(() => {
                nextSlide();
            }, interval);
        });
    });
</script>
