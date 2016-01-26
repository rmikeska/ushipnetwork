jQuery(document).ready(function ($) {

    $('div.postsGroup .postsGroup-container:not(:first-child)').hide();
    $('.categoryMenu-list li a').click(function () {
        var elementClassName = $(this).attr('class');
        $('div.' + elementClassName).show().siblings('div.postsGroup-container').hide();
        $(this).parent().addClass('categoryMenu-active').siblings().removeClass('categoryMenu-active');
    });
})