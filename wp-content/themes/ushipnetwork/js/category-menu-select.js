jQuery(document).ready(function ($) {

    $('.post').hide().each(function (i) {
        $(this).delay((i++) * 100).fadeTo(300, 1);
    });

    $('div.postsGroup .postsGroup-container:not(:first-child)').hide();

    $('.categoryMenu-list li a').click(function () {

        var elementClassName = $(this).attr('class');

        $('div.' + elementClassName).show().siblings('div.postsGroup-container').hide();

        $('div.' + elementClassName).children('.post').hide().each(function (i) {
            $(this).delay((i++) * 100).fadeTo(300, 1);
        });

        $(this).parent().addClass('categoryMenu-active').siblings().removeClass('categoryMenu-active');
    });
})