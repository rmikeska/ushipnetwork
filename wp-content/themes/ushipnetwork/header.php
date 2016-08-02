<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ushipnetwork
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php include("template-parts/favicons.php");?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="pageWrapper">
	<header role="banner" class="dls">
	    <div class="dls-header">
	        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
	            <symbol id="uship_logo_white" viewBox="0 0 533.4 269.7"><path d="M315.4 149.3h-39.9v-34.7h-35.6v115.5h35.6v-45.2h39.9v45.2H351V114.4h-35.6z"></path><path d="M253.7 54.4l30.9 11.2L253.8 0l-65.5 30.7 28.2 10.2-.2.5c-2.2 5.6-4.1 9.8-4.9 10.7-1.1 1.3-2.6 3.1-11.2 3.7-2.1.1-3.8.2-5.5.2h-3.8c-2.9 0-6.2.2-12.5 1.1-12.2 1.8-21.5 5.9-29.9 13.2-7.1 6.1-14.1 14-17.8 30.4-2.6 11.6-.9 23.1 5.1 34.2 3.8 6.9 12.3 17.7 31.8 29.6 8.8 5.3 14.8 9.5 17.7 13.6 1.9 2.8 2.7 5.9 2.2 8.4-.2 1.1-.8 2.5-2.2 3.5-2.2 1.5-6.6 2.7-11.3 3.9l-.3.1c-7.1 2-15.9 4.4-23 9-10.8 7-14 12.5-23.4 54.2l-.6 2.5 35.4 10.1.7-2.7c3.3-13.5 6-21.4 7.9-23.5 2.1-2.4 3.3-3.4 8.7-5.1 1.1-.4 2.2-.7 3.3-1l1.4-.4c6.8-2 13.3-3.9 22.9-8.7 13.4-6.5 22.9-22.7 24.7-42.1 2-20.6-5.5-31.8-13.8-40.9-5.7-6.2-30.7-22.3-34.3-24.4-4.4-2.6-9.6-7-9.2-13.4.3-5 5.7-7.2 7.1-7.5 1.1-.2 2.9-.4 5.9-.7h.3c4.1-.4 10.2-1 18.9-2.2 16.7-2.5 25.7-10.5 28.8-13.9 10.6-11.5 15.9-22.7 18.1-28.4l.2-.5zM362.3 114.5h35.6v115.7h-35.6zM380.2 67.7c-11.7 0-20.8 9.1-20.8 20.8 0 11.5 9.3 20.8 20.8 20.8S401 100 401 88.5s-9.3-20.8-20.8-20.8zM467.8 117.8c-7.8 0-15.2 1.5-22.1 4.6l-.7.3v-8.1h-36.4v140.1H445v-29l.7.3c6.8 3 14.3 4.6 22.1 4.6 31.2 0 56.5-25.3 56.5-56.5 0-31.1-25.4-56.3-56.5-56.3zm0 79.1c-12.4 0-22.8-10.4-22.8-22.8 0-12.1 10.7-22.8 22.8-22.8 12.1 0 22.8 10.6 22.8 22.8 0 12.1-10.7 22.8-22.8 22.8zM84.5 171c0 13.1-11.2 24.1-24.4 24.1-13.3 0-24.5-11-24.5-24.1v-56.3H0V171c0 32.7 26.9 59.2 60 59.2s60-26.6 60-59.2v-56.3H84.5V171zM527.6 130.7l-.5-.5.7-.3c.3-.1.5-.3.7-.5.4-.4.5-.9.5-1.4 0-.4-.1-.8-.3-1.2-.2-.4-.5-.6-.9-.8-.4-.1-.9-.2-1.6-.2h-3.5v7.9h1.1v-3.5H525.6c.2 0 .3.1.5.2s.3.3.5.5.4.6.7 1.1l1.1 1.6h1.3l-1.4-2.2c-.3-.1-.5-.4-.7-.7zm-1.6-1.3h-2.2v-2.6h2.5c.6 0 1 .1 1.3.4.3.2.4.5.4.9 0 .2-.1.5-.2.7-.1.2-.3.4-.6.5-.4 0-.8.1-1.2.1z"></path><path d="M525.9 122.4c-4.1 0-7.5 3.3-7.5 7.5 0 4.1 3.3 7.5 7.5 7.5 4.1 0 7.5-3.3 7.5-7.5s-3.4-7.5-7.5-7.5zm0 13.8c-3.5 0-6.4-2.9-6.4-6.4 0-3.5 2.9-6.4 6.4-6.4 3.5 0 6.4 2.9 6.4 6.4 0 3.6-2.8 6.4-6.4 6.4z"></path></symbol>
	            <symbol id="hamburger_icon" viewBox="0 0 24 24"><path d="M22 4H2C.9 4 0 3.1 0 2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zM22 24H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zM22 14H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2z"></path></symbol>
	            <symbol id="listview_icon" viewBox="0 0 24 24"><path d="M22 4.1H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zM22 10.7H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zM22 23.9H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zM22 17.3H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2z"></path></symbol>
	            <symbol id="x-out_icon" viewBox="0 0 24 24"><path d="M15.5 12l7.8-7.8c.9-.9.9-2.2 0-3.1-.9-.9-2.2-.9-3.1 0L12 9.3 3.7 1.1C2.8.2 1.5.2.6 1.1c-.9.9-.9 2.2 0 3.1L8.5 12 .7 19.8c-.9.9-.9 2.2 0 3.1.9.9 2.2.9 3.1 0l8.3-8.3 8.3 8.3c.9.9 2.2.9 3.1 0 .9-.9.9-2.2 0-3.1l-8-7.8z"></path></symbol>
	            <symbol id="marketplace_icon" viewBox="0 0 15.33 19.95"><path d="M7.65,0A7.67,7.67,0,0,0,0,7.66c0,3.48,5.1,9.88,6.91,12a0.83,0.83,0,0,0,1.17.09l0.09-.09c1.86-2.15,7.16-8.56,7.16-12A7.67,7.67,0,0,0,7.65,0h0Zm2.2,11.56a2.54,2.54,0,0,1-1.71.78v1.13H7.2V12.35a2.48,2.48,0,0,1-2.3-2.16l1.46-.38A1.27,1.27,0,0,0,7.7,11h0a1,1,0,0,0,.79-0.26,0.89,0.89,0,0,0,.25-0.64A0.71,0.71,0,0,0,8.5,9.51,4.56,4.56,0,0,0,7.38,9a6.6,6.6,0,0,1-1.22-.54,2,2,0,0,1-.71-0.74,2.2,2.2,0,0,1-.27-1.11,2.46,2.46,0,0,1,.47-1.45,2.19,2.19,0,0,1,1.54-.81V3.48h1V4.35a2.29,2.29,0,0,1,2.06,1.8l-1.3.54a1.31,1.31,0,0,0-1.18-1.1,0.86,0.86,0,0,0-.64.25,0.82,0.82,0,0,0-.24.6A0.67,0.67,0,0,0,7.08,7a4,4,0,0,0,1,.47A8.9,8.9,0,0,1,9.39,8a2.08,2.08,0,0,1,.77.76,2.18,2.18,0,0,1,.29,1.13A2.39,2.39,0,0,1,9.85,11.56Z" transform="translate(0 0)"></path></symbol>
	            <symbol id="ship_icon" viewBox="0 0 20 20"><path d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm5,10.29a0.76,0.76,0,0,1-.16.25l-3.41,3.41a0.76,0.76,0,0,1-1.08-1.08l2.11-2.11H5.7a0.76,0.76,0,0,1,0-1.52h6.75l-2.1-2.11a0.76,0.76,0,0,1,1.08-1.08l3.41,3.41h0A0.76,0.76,0,0,1,15,9.7h0A0.76,0.76,0,0,1,15,10.29Z"></path></symbol>
	        </svg>
	        <nav role="navigation" class="siteNavNew is-public">
	            <a class="siteNav-logoBox js-siteNav-logoBox" href="http://www.uship.com/">
	                <svg class="siteNav-logoBox-logo">
	                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#uship_logo_white"></use>
	                </svg>
	            </a>
	            <a class="siteNav-content-simpleHelpLink" target="_blank" href="https://help.uship.com/hc/en-us">
	                <span class="siteNav-content-simpleHelpLink-text">Help</span>
	            </a>
	            <div class="mobileNav-menu-container">
	                <a class="mobileNav-menu mobileNavLink js-mobileNav-menu">
	                    <svg class="mobileNav-menu-icon">
	                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#hamburger_icon"></use>
	                    </svg>
	                </a>
	            </div>
	            <a class="siteNav-content-closeLink mobileNavLink js-siteNav-content-closeLink is-hidden">
	                <svg class="siteNav-content-closeLink-icon">
	                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#x-out_icon"></use>
	                </svg>
	            </a>
	            <div class="siteNav-content js-siteNav-content is-hidden">
	                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
	                    <symbol id="uship_icon" viewBox="2 2 20 20"><path d="M21.9 14.9L17.1 3c-.2-.6-.8-1-1.5-1-.2 0-.4 0-.6.1L3 7c-.9.3-1.3 1.3-.9 2.1L6.9 21c.2.6.8 1 1.5 1 .2 0 .4 0 .6-.1L21 17c.9-.3 1.3-1.3.9-2.1zM15.7 7c-.1.4-.5 1.1-1.1 1.8-.2.2-.8.7-1.8.9-.6.1-.9.1-1.2.1h-.4c-.1 0-.4.2-.4.4 0 .4.3.7.6.8.2.1 1.8 1.1 2.2 1.5.5.6 1 1.3.9 2.6-.1 1.2-.7 2.3-1.6 2.7-.6.3-1 .4-1.5.5-.1 0-.2.1-.3.1-.3.1-.4.2-.5.3-.1.1-.2.4-.5 1.5l-.1.3-2.3-.7v-.2c.6-2.6.8-3 1.5-3.4.5-.3 1-.4 1.5-.6.3-.1.6-.2.7-.3.1-.1.1-.1.1-.2 0-.2 0-.3-.1-.5-.2-.3-.6-.5-1.1-.8-1.2-.7-1.8-1.4-2-1.9-.4-.6-.5-1.3-.3-2.1.2-1 .7-1.5 1.1-1.9.5-.5 1.1-.7 1.9-.8.4-.1.6-.1.8-.1h.5c.5 0 .6-.1.7-.2 0-.1.2-.3.3-.7l-1.8-.7 4.2-2 2 4.2-2-.6z"></path></symbol>
	                </svg>
	                <div class="siteNav-content-mainLinks">
	                    <a class="siteNav-content-mainLinks-link" href="https://learn.uship.com/">
	                        <svg class="siteNav-content-mainLinks-link-icon">
	                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#uship_icon"></use>
	                        </svg>
	                        <span class="siteNav-content-mainLinks-link-text">How It Works</span>
	                    </a>
	                    <a class="siteNav-content-mainLinks-link" href="https://www.uship.com/find">
	                        <svg class="siteNav-content-mainLinks-link-icon">
	                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#marketplace_icon"></use>
	                        </svg>
	                        <span class="siteNav-content-mainLinks-link-text">Find Shipments</span>
	                    </a>
	                    <a class="siteNav-content-mainLinks-link" href="https://www.uship.com/ship">
	                        <svg class="siteNav-content-mainLinks-link-icon">
	                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ship_icon"></use>
	                        </svg>
	                        <span class="siteNav-content-mainLinks-link-text">Ship</span>
	                    </a>
	                </div>
	                <div class="siteNav-content-utilityLinks">
	                    <a class="siteNav-content-utilityLinks-link" href="https://www.uship.com/signin.aspx">
	                        <span class="siteNav-content-utilityLinks-link-text">Sign In</span>
	                    </a>
	                    <a class="siteNav-content-utilityLinks-link" href="https://www.uship.com/register">
	                        <span class="siteNav-content-utilityLinks-link-text">Join</span>
	                    </a>
	                </div>
	                <div class="siteNav-content-helpLinks">
	                    <a class="siteNav-content-helpLinks-link" target="_blank" href="https://help.uship.com/hc/en-us">
	                        <span class="siteNav-content-helpLinks-link-text">Help</span>
	                    </a>
	                </div>
	                <div class="siteNav-content-footerLinks">
	                    <div class="footerNew">
	                        <svg style="display: none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	                            <symbol id="svgicon-facebook_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm2.4 11h-1.5v5.5h-2.2V12H9.5v-1.9h1.2V8.6c0-1.4.7-2.1 2.4-2.1h1.5v1.9h-1.2c-.4 0-.5.2-.5.6v1.1h1.7l-.2 1.9z"></path></symbol>
	                            <symbol id="svgicon-linkedin_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zM9.5 16.6H7.6v-6.1h1.9v6.1zm-1-6.9c-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1.6 0 1.1.5 1.1 1.1.1.6-.4 1.1-1.1 1.1zm8.1 6.9h-1.9v-3.2c0-.9-.3-1.4-1-1.4-.8 0-1.2.5-1.2 1.4v3.2h-1.8v-6.1h1.8v.8s.5-1 1.8-1 2.2.8 2.2 2.4.1 3.9.1 3.9z"></path></symbol>
	                            <symbol id="svgicon-twitter_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm4.8 8.7c.1 3.3-2.3 6.9-6.6 6.9-1.3 0-2.5-.4-3.5-1 1.2.1 2.5-.2 3.4-1-1 0-1.9-.7-2.2-1.6.4.1.7 0 1 0-1.1-.2-1.9-1.2-1.9-2.3.3.2.7.3 1 .3-1-.7-1.3-2-.7-3.1 1.1 1.4 2.8 2.3 4.8 2.4-.3-1.4.8-2.8 2.3-2.8.7 0 1.3.3 1.7.7.5-.1 1-.3 1.5-.6-.2.5-.5 1-1 1.3.5-.1.9-.2 1.3-.4-.2.5-.6.9-1.1 1.2z"></path></symbol>
	                            <symbol id="svgicon-youtube_icon" viewBox="1 1 22 22"><path d="M10.9 13.5l2.9-1.5-2.9-1.5z"></path><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm5.4 13c-.2 1.5-.8 1.7-1.9 1.8-1.6.1-5.3.1-7 0-1.2-.1-1.7-.3-1.9-1.8-.1-1.1-.1-3 0-4 .2-1.5.8-1.7 1.9-1.8 1.6-.1 5.3-.1 7 0 1.2.1 1.7.3 1.9 1.8.1 1.1.1 2.9 0 4z"></path></symbol>
	                        </svg>
	                        <div class="topRow">
	                            <div class="footer-companyInfo">
	                                <a class="footer-companyInfo-link" href="https://about.uship.com/">Company</a>
	                                <a class="footer-companyInfo-link" href="https://about.uship.com/careers/">Careers </a>
	                                <a class="footer-companyInfo-link" href="https://about.uship.com/press/">Press</a>
	                                <a class="footer-companyInfo-link" href="https://blog.uship.com/">Blog</a>
	                                <a class="footer-companyInfo-link" href="https://www.uship.com/categories">Categories</a>
	                            </div>
	                            <div class="footer-socialMediaIcons">
	                                <a class="footer-socialMediaIcons-link" href="https://www.facebook.com/uShip/" target="_blank">
	                                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-facebook_icon"></use></svg>
	                                </a>
	                                <a class="footer-socialMediaIcons-link" href="https://twitter.com/uShip" target="_blank">
	                                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-twitter_icon"></use></svg>
	                                </a>
	                                <a class="footer-socialMediaIcons-link" href="https://www.youtube.com/user/uShipVideo" target="_blank">
	                                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-youtube_icon"></use></svg>
	                                </a>
	                                <a class="footer-socialMediaIcons-link" href="https://www.linkedin.com/groups/2349367/profile" target="_blank">
	                                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-linkedin_icon"></use></svg>
	                                </a>
	                            </div>
	                        </div>
	                        <div class="bottomRow">
	                            <div class="footer-copyrightTerms">
	                                <div class="footer-copyright">
	                                    Copyright © 2016, uShip Inc. and its licensors. All rights reserved.
	                                </div>
	                                <div class="footer-terms">
	                                    <a class="footer-terms-link" href="https://www.uship.com/user_agreement.aspx">uShip User Agreement</a>
	                                    <a class="footer-terms-link" href="https://www.uship.com/privacy.aspx">Privacy Policy</a>
	                                    <a class="footer-terms-link" href="https://www.uship.com/sitemap.aspx">Site Map</a>
	                                </div>
	                            </div>
	                            <div class="footer-mobileAppBadges">
	                                <a class="footer-mobileAppBadges-badge" href="https://itunes.apple.com/us/app/uship-for-iphone/id457045275" target="_blank">
	                                    <img class="mobileAppBadge-image" src="//t.ushipcdn.com/images/logos/apple-badge.en.svg?t=5.636027927110000000 " alt=" uship on the app store">
	                                </a>
	                                <a class="footer-mobileAppBadges-badge" href="https://play.google.com/store/apps/details?id=com.unwirednation.notifications.android.ushipnew" target="_blank">
	                                    <img class="mobileAppBadge-image" src="//t.ushipcdn.com/images/logos/google-play-badge.en.svg?t=5.636027927110000000" alt="uShip on the Google Play Store">
	                                </a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </nav>
	    </div>
	    <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'container_class' => 'secondary-menu', 'fallback_cb' => 'false' ) ); ?>
	</header>

	<main role="main" class="pageContent">
