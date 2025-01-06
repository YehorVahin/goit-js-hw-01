$(function(){

    $('.slider__inner').slick({
        prevArrow:'<button type="button" class="slick-btn slick-prev"></button>',
        nextArrow:'<button type="button" class="slick-btn slick-next"></button>',
        infinite: false,
    });
    $('select').styler();
    $('.news__slider-inner').slick({
        prevArrow:'<button type="button" class="slick-btn slick-prev"></button>',
        nextArrow:'<button type="button" class="slick-btn slick-next"></button>',
        infinite: false,
    });

    $('.header__btn-menu').on('click', function(){
        $('.menu ul').slideToggle();
    });
});