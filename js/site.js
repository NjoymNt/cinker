// MOBILE MENU //

(function($) {
    $(document).ready(function() {
        $.slidebars();
    });
}) (jQuery);


// FANCYBOX //

$(function() {
    $('.fancybox').fancybox({
        padding : 0
    });
});

// MOBILE SCREEN EVENT & GALLERY BOX SWIPE //

$(document).ready(function () {

    var viewport = $(window).width();

    var galleryBox = $(".gallery-box-holder");
    var eventBox = $(".events-box-holder");

    // console.log(viewport);

    if (window.matchMedia('(max-width: 767px)').matches) {
        galleryBox.addClass("item");
        eventBox.addClass("item");
        galleryBox.css("width", viewport);
        eventBox.css("width", viewport);
    } else {
        galleryBox.removeClass("item");
        eventBox.removeClass("item");
    }
});

$(document).ready(initGallery);
    function initGallery() {
        $('.gallery').touchSlider();
}

// STEP SLIDER //

$(document).ready(function () {

    var stepLeft = $('.step-left');
    var stepRight = $('.step-right');
    var sliderHolder = $('.step-slider');
    var animSpeed = 500;

    //box counter//
    var stepBox = $('.step-slider-item-box');
    var boxCount = stepBox.length;
    var visibleBox = 3;

    // console.log(boxCount);

    //step width//
    if (window.matchMedia('(min-width: 1200px)').matches) {
        var stepping = '390px';
    }

    if (window.matchMedia('(max-width: 1200px)').matches) {
        var stepping = '323px';
    }

    if (window.matchMedia('(max-width: 992px)').matches) {
        var stepping = '375px';
    }

    //click counter//
    var clickCounter = 0;

    //right steps//
    stepRight.click(function() {
        if (clickCounter >= boxCount - visibleBox ) {
            sliderHolder.animate({'margin-left': '-=0' }, animSpeed);
        } else {
            sliderHolder.animate({'margin-left': '-=' +stepping}, animSpeed);
            clickCounter += 1;
        }
    });

    //left steps//
    stepLeft.click(function() {
        if (clickCounter == 0) {
            sliderHolder.animate({'margin-left': '+=0'}, animSpeed);
        } else {
            sliderHolder.animate({'margin-left': '+=' +stepping}, animSpeed);
            clickCounter -= 1;
        }
    });
});


