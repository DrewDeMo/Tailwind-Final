document.addEventListener('DOMContentLoaded', () => {
    const carouselItems = document.querySelectorAll('[data-carousel-item]');
    const indicators = document.querySelectorAll('[data-carousel-slide-to]');
    let currentIndex = 0;

    function updateCarousel() {
        carouselItems.forEach((item, index) => {
            item.classList.toggle('hidden', index !== currentIndex);
        });

        indicators.forEach((indicator, index) => {
            indicator.setAttribute('aria-current', index === currentIndex);
        });
    }

    document.querySelector('[data-carousel-prev]').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
        updateCarousel();
    });

    document.querySelector('[data-carousel-next]').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % carouselItems.length;
        updateCarousel();
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel();
        });
    });

    // Initialize
    updateCarousel();
});
