$(document).ready(function () {
    $('.slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7500,
    });

    $('[data-fancybox="images"]').fancybox({
        // Options will go here
    });
});

