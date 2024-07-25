
  document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.carousel');
    const items = carousel.querySelectorAll('.carousel-item');
    const totalItems = items.length;
    let currentIndex = 0;

    function updateCarousel() {
      const offset = -currentIndex * 100;
      items.forEach(item => {
        item.style.transform = `translateX(${offset}%)`;
      });
    }

    // Add event listeners to navigation buttons
    const prevButton = document.querySelector('.carousel-nav .prev');
    const nextButton = document.querySelector('.carousel-nav .next');

    if (prevButton && nextButton) {
      prevButton.addEventListener('click', function() {
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalItems - 1;
        updateCarousel();
      });

      nextButton.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateCarousel();
      });
    }
  });
