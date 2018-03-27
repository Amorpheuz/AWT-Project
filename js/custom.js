$(function () {
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true
    });
});
$(function () {
    $('.rater').barrating({
        theme: 'fontawesome-stars',
        readonly: true
    });
});
$(document).ready(function () {
    $(document).scroll(function () {
        var height = $(window).scrollTop();
        if (height > 100) {
            $('#mainnav').addClass("fixed-top");
        }
        if (height < 100) {
            $('#mainnav').removeClass("fixed-top");
        }
        if (height > 400) {
            $('#topBtn').css("display", "block");
        }
        if (height < 400) {
            $('#topBtn').css("display", "none");
        }
    });
    $("#topBtn").click(function () {
        $(document).scrollTop(0);
    });
    var $carousel = $('.imgcarousel').flickity({
        imagesLoaded: true,
        percentPosition: false,
    });

    var $imgs = $carousel.find('.imgcarousel-cell img');
    // get transform property
    var docStyle = document.documentElement.style;
    var transformProp = typeof docStyle.transform == 'string' ?
        'transform' : 'WebkitTransform';
    // get Flickity instance
    var flkty = $carousel.data('flickity');

    $carousel.on('scroll.flickity', function () {
        flkty.slides.forEach(function (slide, i) {
            var img = $imgs[i];
            var x = (slide.target + flkty.x) * -1 / 3;
            img.style[transformProp] = 'translateX(' + x + 'px)';
        });
    });
});
$(function () {
    var $carousel = $('.imgcarousel').flickity({
        imagesLoaded: true,
        percentPosition: false,
    });
    var $imgs = $carousel.find('.imgcarousel-cell img');
    // get transform property
    var docStyle = document.documentElement.style;
    var transformProp = typeof docStyle.transform == 'string' ?
        'transform' : 'WebkitTransform';
    // get Flickity instance
    var flkty = $carousel.data('flickity');

    $carousel.on('scroll.flickity', function () {
        flkty.slides.forEach(function (slide, i) {
            var img = $imgs[i];
            var x = (slide.target + flkty.x) * -1 / 3;
            img.style[transformProp] = 'translateX(' + x + 'px)';
        });
    });
});