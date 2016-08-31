jQuery(document).ready(function ($) {

    'use strict';

    (function ($) {
        var cssClasses = {
            isHidden: 'is-hidden',
            overlay: 'containerOverlay',
            isOpen: 'is-open'
        };

        var animationDuration = 510;

        var body = $(document.body);
        var menuLink = $('.js-mobileNav-menu');
        var closeLink = $('.js-siteNav-content-closeLink');
        var navContent = $('.js-siteNav-content');
        var contentContainer = $('main');
        var logoBox = $('.js-siteNav-logoBox');
        var moreLink = $('.js-siteNav-moreLink');
        var backLink = $('.js-siteNav-backLink');
        var banners = $('#banners');
        var footerLinks = $('.js-siteNav-footerLinks');
        var clickEvent = isMobileBrowser() ? 'touchstart' : 'click';
        var mainLinksContainer = $('.js-siteNav-linksContainer');
        var footerLinksContainer = $('.js-siteNav-footerLinks');
        var profileContainer = $('.siteNav-profileContainer');

        // Mobile dropdown link iniitialization
        profileContainer.on('touchstart', function (event) {
            setDropdownHover(event);
        });

        body.on('touchstart', function () {
            profileContainer.removeClass('hover');
        });

        menuLink.on(clickEvent, function (event) {
            event.stopPropagation();
            event.preventDefault();
            openMobileDrawer();
        });

        closeLink.on(clickEvent, function (event) {
            event.stopPropagation();
            event.preventDefault();
            closeMobileDrawer();
        });

        moreLink.on('click', toggleMoreBackDisplay);
        backLink.on('click', toggleMoreBackDisplay);

        function toggleMoreBackDisplay() {
            if (footerLinks.hasClass(cssClasses.isOpen)) {
                mainLinksContainer.addClass(cssClasses.isOpen);
                footerLinks.removeClass(cssClasses.isOpen);
                scrollMainDrawerToTop();
            } else {
                scrollBackDrawerToTop();
                setTimeout(function () {
                    mainLinksContainer.removeClass(cssClasses.isOpen);
                }, 400);
                footerLinks.addClass(cssClasses.isOpen);
            }
        }

        function setDropdownHover(event) {
            if (!profileContainer.hasClass('hover')) {
                profileContainer.addClass('hover');
                if (event.target.href === undefined) {
                    event.preventDefault();
                    event.stopPropagation();
                }
            } else {
                profileContainer.removeClass('hover');
                if (event.target.href === undefined) {
                    event.preventDefault();
                    event.stopPropagation();
                }
            }
        }

        var windowWidth = window.innerWidth;

        $(window).resize(function () {
            if (window.matchMedia('(min-width: 991px)').matches && window.innerWidth != windowWidth) {
                windowWidth = window.innerWidth;
                closeMobileDrawer();
            }
        });

        contentContainer.on('touchend', interceptClicks);
        logoBox.on('touchend', interceptClicks);

        function interceptClicks(event) {
            if (!navContent.hasClass(cssClasses.isHidden)) {
                event.stopPropagation();
                event.preventDefault();
                closeMobileDrawer();
            }
        }

        function isMobileBrowser() {
            var MOBILE_UA_STRINGS = /(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i;
            var MOBILE_UA_PATTERNS = /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i;
            var ua = navigator.userAgent || navigator.vendor || window.opera;
            return MOBILE_UA_STRINGS.test(ua) || MOBILE_UA_PATTERNS.test(ua.substr(0, 4));
        }

        function scrollMainDrawerToTop() {
            mainLinksContainer.scrollTop(0);
        }

        function scrollBackDrawerToTop() {
            footerLinksContainer.scrollTop(0);
        }

        function openMobileDrawer() {
            scrollMainDrawerToTop();
            navContent.removeClass(cssClasses.isHidden);
            closeLink.removeClass(cssClasses.isHidden);
            contentContainer.addClass(cssClasses.overlay);
            banners.addClass(cssClasses.overlay);
            body.addClass(cssClasses.isOpen);
            logoBox.addClass(cssClasses.isHidden);
        }

        function closeMobileDrawer() {
            navContent.addClass(cssClasses.isHidden);
            closeLink.addClass(cssClasses.isHidden);
            contentContainer.removeClass(cssClasses.overlay);
            banners.removeClass(cssClasses.overlay);
            logoBox.removeClass(cssClasses.isHidden);
            body.removeClass(cssClasses.isOpen);
            setTimeout(function () {
                footerLinks.removeClass(cssClasses.isOpen);
                mainLinksContainer.addClass(cssClasses.isOpen);
                scrollMainDrawerToTop();
            }, animationDuration); // wait for drawer to close fully before defaulting the view back to More
        }

        var modeToggle = $('.js-siteNav-modeToggle');
        var toggle = $('.js-siteNav-modeToggle-toggle');

        toggle.click(function (event) {
            event.preventDefault();
            modeToggle.click();
        });

        modeToggle.click(function () {
            toggle.prop('checked', !toggle.prop('checked'));
            toggleMode();
        });

        function toggleMode() {
            modeToggle.toggleClass('is-active');

            var name = 'mode';
            var carrier = 'Carrier';
            var shipper = 'Shipper';

            var value = carrier;
            if (!toggle.prop('checked')) {
                value = shipper;
            }

            var daysUntilExpiration = 365;
            var toMilliseconds = 24 * 60 * 60 * 1000;
            var expires = new Date(new Date().getTime() + daysUntilExpiration * toMilliseconds);
            var cookie = name + '=' + value + ';expires=' + expires + ';path=/';
            document.cookie = cookie;

            var redirect = value === carrier ? '/drivers.aspx?f=loads' : '/myshipments';
            setTimeout(function () {
                window.location.href = redirect;
            }, 250);
        }
    })(jQuery);

})