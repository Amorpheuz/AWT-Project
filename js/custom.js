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
});