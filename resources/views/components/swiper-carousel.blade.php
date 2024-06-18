
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiper Carousel with Tailwind CSS</title>
    <!-- Include Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Include Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>

<div class="container mx-auto my-8">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            @foreach ($images as $image)
                <div class="swiper-slide">
                    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" class="aspect-video mix-blend-multiply">
                    {{-- <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}"
                    class="mx-auto w-1/2 lg:h-full lg:w-full mix-blend-multiply object-contain grayscale hover:grayscale-0"> --}}
                </div>
            @endforeach
        </div>
        
        <!-- Add navigation buttons -->
        {{-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> --}}
    </div>
</div>

<!-- Include Swiper's JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 640px
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            }
        });
    });
</script>

</body>
</html>