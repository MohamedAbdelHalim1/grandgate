
$(document).ready(function(){
    var currentSlide = 0;
    var totalSlides = $('.slide-mob').length;

    function showSlide(index) {
        if (index >= totalSlides) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = totalSlides - 1;
        } else {
            currentSlide = index;
        }

        var translateValue = -currentSlide * 100 + '%';
        $('.slider-mob').css('transform', 'translateX(' + translateValue + ')');
    }

    $('.next-mob').on('click', function() {
        showSlide(currentSlide + 1);
    });

    $('.prev-mob').on('click', function() {
        showSlide(currentSlide - 1);
    });
});
