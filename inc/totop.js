window.addEventListener('scroll', function() {
    var backToTopButton = document.querySelector('.back-to-top');
    var contentHeight = document.documentElement.scrollHeight;
    var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

    if (currentScroll > 0.15 * contentHeight) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});
function scrollTop () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
}