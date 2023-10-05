// HERO SLIDER
var interleaveOffset = 0.5;
var swiperOptions = {
    // slidesPerView: 1,
    // freeMode: true,
    // loop: true,
    // freeModeSticky: true,
    // centeredSlides: true,
    // autoplay: {
    //     delay: 6500,
    //     disableOnInteraction: false,
    // },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },


    loop: true,
    speed: 1000,
    parallax: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    // autoplay: false,
    watchSlidesProgress: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    on: {
        progress: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                var slideProgress = swiper.slides[i].progress;
                var innerOffset = swiper.width * interleaveOffset;
                var innerTranslate = slideProgress * innerOffset;
                swiper.slides[i].querySelector(".slide-inner").style.transform =
                    "translate3d(" + innerTranslate + "px, 0, 0)";
            }
        },

        touchStart: function() {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = "";
            }
        },

        setTransition: function(speed) {
            var swiper = this;
            for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = speed + "ms";
                swiper.slides[i].querySelector(".slide-inner").style.transition =
                    speed + "ms";
            }
        }
    }
};

var swiper = new Swiper(".swiper-container", swiperOptions);

// DATA BACKGROUND IMAGE
var sliderBgSetting = $(".slide-bg-image");
sliderBgSetting.each(function(indx) {
    if ($(this).attr("data-background")) {
        $(this).css("background-image", "url(" + $(this).data("background") + ")");
    }
});


// JavaScript to dynamically adjust the color of .dynamic-color-link based on image tones
var playButtons = document.querySelectorAll('.play-btn .dynamic-color-link');

playButtons.forEach(function(button) {
    var slideInner = button.closest('.slide-inner');
    var image = new Image();
    image.src = slideInner.dataset.background;
    
    image.onload = function() {
        var vibrantColor = getDominantColor(image);
        var contrastingColor = getContrastingColor(vibrantColor);
        button.style.color = contrastingColor;
    };
});

// Function to calculate the dominant color from an image using ColorThief
function getDominantColor(image) {
    var colorThief = new ColorThief();
    var color = colorThief.getColor(image);
    var dominantColor = 'rgb(' + color[0] + ',' + color[1] + ',' + color[2] + ')';
    return dominantColor;
}


// Function to calculate a contrasting color using TinyColor
function getContrastingColor(color) {
    var tinyColor = tinycolor(color);
    var contrastingColor = tinyColor.isLight() ? '#000000' : '#FFFFFF';
    return contrastingColor;
}


/********************************/

var recent_viceos = new Swiper('.recent-viceos-swiper', {

    freeMode: true,
    freeModeSticky: true,
    centeredSlides: false,
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
    // grabCursor: true,
    navigation: {
        nextEl: '.recent-button-next',
        prevEl: '.recent-button-prev',
    },
});

/**************************/
if ($('.social-card').length > 0) {
    var a = 0;
    $(window).scroll(function() {

        var oTop = $('.social-card').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.js-count-up').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            a = 1;
        }

    });
}
/***************************/


var artistes_swiper_r = new Swiper(".artistes-swiper-right", {
    slidesPerView: 2,
    spaceBetween: 20,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    speed: 3000,
    breakpoints: {
        600: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});

var artistes_swiper_l = new Swiper(".artistes-swiper-left", {
    slidesPerView: 2,
    spaceBetween: 20,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    speed: 3000,
    breakpoints: {
        400: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});


/*********************************/

var categories_swiper = new Swiper(".categories-swiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    speed: 3000,
    breakpoints: {
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    },
});

$(".categories-swiper").mouseenter(function() {
    categories_swiper.autoplay.stop();
});

$(".categories-swiper").mouseleave(function() {
    categories_swiper.autoplay.start();
});