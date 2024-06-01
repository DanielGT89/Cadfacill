let slideIndex = 0;

function showSlides() {
    const slides = document.querySelectorAll('.slide');
    slideIndex++;
    if (slideIndex >= slides.length) {
        slideIndex = 0;
    }
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(-${slideIndex * 100}%)`;
    });
    setTimeout(showSlides, 3000); 
}

showSlides();
