(function ($) {


    setInterval(function () {
        $('.introSlide-slideshow').each(function () {
            if ($(this).find('.introSlide-slideshow-slide').length > 1) {
                $(this).find('.introSlide-slideshow-slide:first')
                .fadeOut(500)
                .next()
                .fadeIn(500)
                .end()
                .appendTo($(this));
            }
        });
    },  3000);



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



    function animatePageContent () {
        $('.bodyContent').children().hide().each(function (i) {
            $(this).delay((i++) * 100).fadeTo(300, 1);
        });
    }



    function loadFirstPage () {
        var firstPage = $('.tabbedPageMenu-list:first-child a').attr('href');

        $.get(firstPage).done(function (data) {
            $('.tabContent').html($(data).find('.bodyContent'));
        })
    }



    $(window).load(function () {
        $('.tabbedPageMenu-list a').each(function () {

            var hrefMatch = $(this).attr('href');

            if (window.location.href == hrefMatch) {
                $(this).parent().addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
            } else if (window.location.href == parentPageURL) {
                $(this).parent(':first-child').addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
                loadFirstPage();
            }
        });
    });



    var loadContent = function (url) {
        $.get(url).done(function (data) {
            $('.tabContent').html($(data).find('.bodyContent'));
            animatePageContent();
        })

        $('.tabbedPageMenu-list li').removeClass('tabbedPage-active');
        $('.tabbedPageMenu-list li a[href="' + url + '"]').parent().addClass('tabbedPage-active');
    };



    $(document).on('click', '.tabbedPageMenu-list a', function (e) {
        e.preventDefault();

        url = $(this).attr('href');
        title = parentPageTitle + ' - ' + $(this).text();

        history.pushState({url: url,title: title}, title, url);

        document.title = title;

        loadContent(url);

        return false;
    });



    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        if (state !== null) {
            document.title = state.title;
            loadContent(state.url);
        } else {
            document.title = parentPageTitle;
            $('.tabbedPageMenu-list li:first-child').addClass('tabbedPage-active').siblings().removeClass('tabbedPage-active');
            loadFirstPage();
        }
    });

})(jQuery);