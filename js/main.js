$(function () {

    $(function () {
        $('.top-btn').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

    $('.header__burger').on('click', function () {
        $('.header__burger, .header__menu').toggleClass('active');
        $('body').toggleClass('lock');
    });

    

});