$(".about-section").click(function() {
    $('html, body').animate({
        scrollTop: $("#navsection02").offset().top-46
    }, 750);
});

// if not at a top, then
$(window).scroll(function() {
    if ($(window).scrollTop() == 0) {
        $(".menu").css('top', '0px');
    } else {
        $(".menu").css('top', '-15px');
    }
});

