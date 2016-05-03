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



    // Video Modal
    $('a[href="#video-modal"]').click(function(event) {
        event.preventDefault();
        $(this).modal({
            fadeDuration: 100
        });
        return false;
    });



    // Form Modal
    $('a[href="#form-modal"]').click(function (event) {
        event.preventDefault();
        $(this).modal({
            fadeDuration: 100
        });
        return false;
    });



    // Validate Pardot Forms
    $('#form-business-shippers').validate({
        onkeyup: false,
        rules: {
            firstname: 'required',
            lastname: 'required',
            company: 'required',
            email: 'required',
            phone: 'required',
            ltlshipmentfrequency: 'required'
        },
        messages: {
            firstname: 'Please enter your first name',
            lastname: 'Please enter your last name',
            company: 'Please enter your company name',
            email: 'Please enter your email address',
            phone: 'Please enter your phone number',
            ltlshipmentfrequency: 'Please select your LTL shipment frequency'
        },
        errorContainer: '.errorAlert',
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        invalidHandler: function (event, validator) {
            var errors = validator.numberOfInvalids();
            if (errors == 1) {
                $('.errorAlert').text('Please correct the error below.');
            } else {
                $('.errorAlert').text('Please correct the errors below.');
            }
        }
        // ,
        // submitHandler: function (form) {
        //     $('#form-business-shippers').hide();
        //     $('.formSuccess').text('Thank you').show().delay(3000);
        //     form.submit();
        //     return false;
        // }
    });


    // Ghetto Pardot Form Success Modal actions
    $('.formSuccess, .formSuccess-overlay').toggle(document.URL.indexOf('success=true') !== -1);

    $('.formSuccess-overlay').on('click', function (e) {

        var subject = $('.formSuccess');

        if(e.target.class != subject.attr('class')) {
            subject.fadeOut();
            $('.formSuccess-overlay').fadeOut();
        }
    });

    $('.formSuccess-cta, .formSuccess-close').on('click', function (e) {
        e.preventDefault();
        $('.formSuccess, .formSuccess-overlay').fadeOut();
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