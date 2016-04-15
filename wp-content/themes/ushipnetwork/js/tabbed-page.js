jQuery(document).ready(function ($) {

    // Hide all but first tab on page ready
    $('.tabbedPageWrapper .tabbedPage:not(:first-child)').hide();



    // Add active class to first menu item on ready
    $('.tabbedPageMenu-list li:first-child').addClass('tabbedPage-active');



    // Add classes to larger tab menus for specific wide breakpoints
    $('.tabbedPageMenu-list').each(function () {
        if ($(this).children().length == 5) {
            $(this).addClass('tabs5');
        } else if ($(this).children().length == 6) {
            $(this).addClass('tabs6');
        } else if ($(this).children().length == 7) {
            $(this).addClass('tabs7');
        }
    });



    // Hashchange
    $(window).on('hashchange', function (e) {

        e.preventDefault();

        var x = window.pageXOffset,
            y = window.pageYOffset;

        $(window).one('scroll', function () {
            window.scrollTo(x, y);
        })

        var hashValue = window.location.hash.replace('#', '');

        var hashActual = window.location.hash;

        $('div.tabbedPage').each(function () {
            if ($(this).hasClass(hashValue)) {
                $(this).show().siblings('div.tabbedPage').hide();
                $(this).children().hide().each(function (i) {
                    $(this).delay((i++) * 100).fadeTo(300, 1);
                });
            }
        });

        $('.tabbedPageMenu-list li a').each(function () {
            if ($(this).attr('href') == hashActual) {
                $(this).parent().addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
            }
        });

        var firstHash = $('.tabbedPageMenu-list li:first-child a').attr('class');

        if (window.location.hash == '') {
            window.location.hash = firstHash;
        }

        $('.tabbedPageWrapper .bookend-link').click(function () {
            $(window).scrollTop(0);
        });

    }).trigger('hashchange');
})