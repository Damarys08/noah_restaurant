document.addEventListener('DOMContentLoaded', () => {
    const elementosCarousel = document.querySelectorAll('.carousel');
    M.Carousel.init(elementosCarousel, {
        duration: 150,
        dist: -80,
        shift: 5,
        paddin: 5,
        numVisible: 3, 
        indicators: true, 
        noWrap: false,

    });
});