jQuery(document).ready(function ($) {

    $('div.posts .posts-container:not(:first-child)').hide();
    $('div.catmenu li').click(function () {
        var elementClassName = $(this).attr('class');
        $('div.' + elementClassName).show().siblings('div.posts-container').hide();
    });
})