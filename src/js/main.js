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

    $("#mobile-menu-open").click(function (e) {
        e.preventDefault();
        $("#mobile-menu-open").toggleClass("active");
        $("#mobile-menu-list").toggleClass("active");
    });
});