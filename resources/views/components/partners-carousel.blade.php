<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body class="flex items-center justify-center min-h-screen bg-gradient-to-l from-blue-900 to-purple-500 p-8">
    <div class="max-w-7xl w-full relative">
        <i id="left"
            class="fa-solid fa-angle-left z-50 absolute top-1/2 transform -translate-y-1/2 left-0 cursor-pointer text-xl bg-white rounded-full shadow-lg p-2 -mx-4"></i>
        <ul
            class="carousel grid grid-flow-col gap-4 overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-hide w-full">
            @foreach ($carousels['images'] as $index => $image)
                <li class="card snap-start rounded-lg  p-4 flex flex-col items-center">
                    <div class="img w-48 h-60 flex items-center justify-center">
                        <img src="{{ $image['url'] }}"
                            class="mx-auto items-center mix-blend-multiply object-contain "
                            alt="{{ $image['alt'] }}">
                    </div>
                </li>
            @endforeach
        </ul>
        <i id="right"
            class="fa-solid fa-angle-right z-50 absolute top-1/2 transform -translate-y-1/2 right-0 cursor-pointer text-xl bg-white rounded-full shadow-lg p-2 -mx-10"></i>
    </div>
</body>

</html>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const wrapper = document.querySelector(".max-w-7xl");
        const carousel = document.querySelector(".carousel");
        const arrowBtns = document.querySelectorAll(".max-w-7xl i");
        const carouselChildrens = [...carousel.children];

        let isDragging = false,
            isAutoPlay = true,
            startX, startScrollLeft, timeoutId;
        let cardPerView = 3; // Default number of cards per view

        const updateCardPerView = () => {
            // Update the number of cards per view based on the window width
            cardPerView = window.innerWidth < 1024 ? 3 : 7;
        };

        // Recalculate cardPerView on window resize
        window.addEventListener('resize', updateCardPerView);

        const initCarousel = () => {
            // Insert copies of the last few cards to beginning of carousel for infinite scrolling
            carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
                carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
            });

            // Insert copies of the first few cards to end of carousel for infinite scrolling
            carouselChildrens.slice(0, cardPerView).forEach(card => {
                carousel.insertAdjacentHTML("beforeend", card.outerHTML);
            });

            // Scroll the carousel at appropriate position to hide first few duplicate cards on Firefox
            carousel.classList.add("no-transition");
            carousel.scrollLeft = carousel.offsetWidth;
            carousel.classList.remove("no-transition");

            // Add event listeners for the arrow buttons to scroll the carousel left and right
            arrowBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    console.log('hey')
                    const scrollAmount = carousel.offsetWidth / cardPerView;
                    carousel.scrollLeft += btn.id == "left" ? -scrollAmount : scrollAmount;
                });
            });
        };

        updateCardPerView(); // Initial calculation
        initCarousel(); // Initialize the carousel

        const dragStart = (e) => {
            isDragging = true;
            carousel.classList.add("dragging");
            startX = e.pageX;
            startScrollLeft = carousel.scrollLeft;
        }

        const dragging = (e) => {
            if (!isDragging) return;
            carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
        }

        const dragStop = () => {
            isDragging = false;
            carousel.classList.remove("dragging");
        }

        const infiniteScroll = () => {
            if (carousel.scrollLeft === 0) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
                carousel.classList.remove("no-transition");
            } else if (Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
                carousel.classList.add("no-transition");
                carousel.scrollLeft = carousel.offsetWidth;
                carousel.classList.remove("no-transition");
            }
            clearTimeout(timeoutId);
            if (!wrapper.matches(":hover")) autoPlay();
        }

        const autoPlay = () => {
            if (!isAutoPlay) return;
            timeoutId = setTimeout(() => {
                const scrollWidth = carousel.scrollWidth;
                const offsetWidth = carousel.offsetWidth;
                const cardWidth = carouselChildrens[0].offsetWidth * cardPerView;

                // Check if the carousel is close to the end
                if (Math.ceil(carousel.scrollLeft) >= scrollWidth - offsetWidth - cardWidth) {
                    // If close to the end, scroll back to the beginning
                    carousel.scrollLeft = 0;
                } else {
                    // Otherwise, continue scrolling
                    carousel.scrollLeft += cardWidth;
                }
            }, 2500);
        }
        autoPlay();



        carousel.addEventListener("mousedown", dragStart);
        carousel.addEventListener("mousemove", dragging);
        document.addEventListener("mouseup", dragStop);
        carousel.addEventListener("scroll", infiniteScroll);
        wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
        wrapper.addEventListener("mouseleave", autoPlay);

    });
</script>
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>
