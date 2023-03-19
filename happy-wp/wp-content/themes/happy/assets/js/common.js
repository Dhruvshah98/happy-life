


$(".menu-btn").click/*================================= Sticky Header Starts =================================*/
AOS.init({
    easing: "ease-out-back",
    mirror: true,
    duration: 800,
});

var didScroll;
var lastScrollTop = 0;
var delta = 150;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);



function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
        return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

$('#header').load('header.html');
$('#footer').load('footer.html');


/* Form Feild Functionality */
$(document).on('input', '.form-field', function () {
    if ($(this).val().length > 0) {
        $(this).addClass('field--not-empty');
    } else {
        $(this).removeClass('field--not-empty');
    }
});
/* Form Feild Functionality ends */



$(document).on('click', '.menu-btn', function () {
    $('.mobile-menu').addClass('in');
    $('.menuOverlay').addClass('in');
});

$(document).on('click', '.cancel-btn', function () {
    $('.mobile-menu').removeClass('in');
    $('.menuOverlay').removeClass('in');
});


