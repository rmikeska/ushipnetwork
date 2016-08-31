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

<body role="application" <?php body_class(); ?>>
<div class="pageWrapper">
	<svg xmlns="http://www.w3.org/2000/svg" style="position:absolute; width: 0; height: 0"><symbol viewBox="0 0 24.01 24.05" id="back_icon"><path fill="none" d="M.01.05h24v24h-24z"></path><path d="M12.01 0a12 12 0 1 0 12 12 12 12 0 0 0-12-12zm0 22.43A10.43 10.43 0 1 1 22.44 12a10.43 10.43 0 0 1-10.43 10.43z"></path><path d="M10.11 12l4.13-4.13a1.1 1.1 0 1 0-1.42-1.68l-.13.13-4.9 4.9a1.1 1.1 0 0 0 0 1.55l4.9 4.9a1.1 1.1 0 0 0 1.55-1.55z"></path></symbol><symbol viewBox="0 0 155 46" id="d4s_logo"><path class="st0" fill="#B6BFD6" d="M30.9 26.8h14.5v14.5H30.9z"></path><path class="st1" fill="#192857" d="M11.3 26.9h16.6v16.6H11.3z"></path><path class="st2" fill="#6881AB" d="M30.9 11.4h12.6V24H30.9z"></path><path class="st3" fill="#8E9FC1" d="M0 26.8h8.2V35H0z"></path><path class="st4" fill="#2F5C8E" d="M5 1h22.9v22.9H5z"></path><path class="st5" fill="#8195BA" d="M57.8 6.8h3c2.2 0 3.4 1 3.4 2.9 0 .8-.2 1.9-.5 2.7-.7 1.7-2 2.6-4.2 2.6h-3.2l1.5-8.2zm1.7 6.7c.9 0 1.5-.3 1.9-.9.4-.6.7-1.9.7-2.8 0-1-.5-1.5-1.6-1.5h-1l-1 5.2h1zm4.8.3h.7l.7-3.4H65l.2-1.3h.5c.8 0 1.2-.1 1.5-.3l.5.1-.3 1.3c.7-.8 1.4-1.3 2.1-1.3l-.3 1.6c-.7.1-1.4.2-1.9.5l-.6 2.8h1l-.2 1.1H64l.3-1.1zm6.4-3.5H70l.2-1.3h.5c.8 0 1.2-.1 1.5-.3l.5.1-1.2 6h-1.8l1-4.5zm2.5-3c0 .6-.4 1-1 1-.5 0-.9-.4-.9-.9s.4-1 1-1c.5 0 .9.4.9.9zm2.9 7.6h-1.3l-1.1-6h1.8l.5 3.6L78 9h1.6l-3.5 5.9zm8-.2c-.8.3-1.3.4-2 .4-1.7 0-2.5-.8-2.5-2.3 0-1.2.4-2.3 1-3 .6-.7 1.5-1 2.5-1 1.3 0 2.1.6 2.1 1.7 0 .9-.6 1.5-1.6 1.8-.6.2-1 .2-2.2.3v.2c0 .7.3.9 1.2.9.6 0 .9-.1 1.8-.4l-.3 1.4zm-.7-4c0-.4-.2-.7-.7-.7-.7 0-1 .4-1.3 1.5 1.6 0 2-.2 2-.8zm5.4 2.7h-3.6l.2-1 4.4-5.8h1.7l-4.2 5.6h1.8l.4-1.9 1.8-.3-.4 2.2h.8l-.2 1.2h-.8l-.3 1.5h-1.8l.2-1.5z"></path><path class="st1" fill="#192857" d="M56.6 29.9c1.4.7 2.3.9 3.6.9 1.5 0 2.3-.5 2.3-1.4 0-.8-.4-1.1-2.7-2.1-2.2-.9-3.1-2-3.1-3.9 0-2.5 1.7-3.9 4.7-3.9 1.1 0 2.1.2 3.3.6v2.5c-1.3-.6-2.1-.7-3.2-.7-1.3 0-2 .4-2 1.2 0 .5.2.8.7 1.1.4.3.4.3 2 1 2.4 1 3.2 2 3.2 4 0 2.6-1.8 4-5.1 4-1.4 0-2.5-.2-3.8-.8v-2.5zm20.1-7.4c-1.1-.4-2.1-.6-3.1-.6-2.4 0-3.3 1.3-3.3 4.5 0 3.1.9 4.4 3.2 4.4 1.1 0 2-.2 3.2-.6v2.3c-1 .5-2.2.7-3.4.7-2.2 0-3.9-.7-5-2-.9-1.1-1.4-2.6-1.4-4.8 0-2.5.6-4.2 2-5.4 1.1-1 2.6-1.5 4.5-1.5 1.2 0 2.2.2 3.2.5v2.5zm2.3-2.7h3.2V25h5v-5.2h3.2v13.1h-3.2v-5.5h-5v5.5H79V19.8zm14.2 0h9v2.4h-5.8V25h4.6v2.3h-4.6v3.1h6.3l-.2 2.4h-9.3v-13zm11.6 0h2.7l5.8 7.6v-7.6h2.6v13.1h-2.1l-6.4-8.4v8.4h-2.6V19.8zm14 0h3.2v6l4.6-6h3.2l-4.9 6.2 5.4 6.9h-3.7l-4.5-5.9v5.9h-3.2V19.8zm13.1 0h9v2.4h-5.8V25h4.6v2.3h-4.6v3.1h6.3l-.2 2.4h-9.3v-13zm11.6 0h5c3.3 0 4.9 1.2 4.9 3.8 0 1.8-.8 2.8-2.7 3.3.5.2.9.7 1.4 1.4l2.8 4.6h-3.4l-2.4-4c-.6-1.1-1-1.3-1.8-1.3h-.6v5.3h-3.2V19.8zm4.9 5.8c1.4 0 1.9-.5 1.9-1.7 0-1.3-.5-1.7-1.9-1.7h-1.7v3.4h1.7z"></path><path class="st5" fill="#8195BA" d="M58.6 43.6c0 .6-.4 1-1 1s-1-.4-1-1 .4-1 1-1 1 .4 1 1zm6 .6c-.6.3-1.1.4-1.8.4-2 0-3.1-1-3.1-3.2 0-2.1 1-3.1 3.1-3.1.6 0 1 .1 1.7.3v1.5c-.8-.3-1.1-.4-1.6-.4-1 0-1.3.4-1.3 1.8s.3 1.8 1.4 1.8c.5 0 .8-.1 1.6-.4v1.3zm6.9-2.7c0 2-1.1 3.1-3 3.1-2 0-3-1.1-3-3.2 0-2 1.1-3.1 3-3.1 1.9.1 3 1.2 3 3.2zm-4-1.3c-.1.3-.2.7-.2 1.3 0 .8.1 1.2.2 1.5.2.3.5.5.9.5.5 0 .8-.2.9-.6.1-.3.2-.7.2-1.3 0-.8-.1-1.2-.2-1.4-.2-.3-.5-.5-.9-.5-.4-.1-.7.1-.9.5zm5.2-1.5c.7 0 1.2-.1 1.4-.4h.4v1.1c.6-.7 1.3-1 1.9-1 .7 0 1.1.3 1.4 1.1.7-.7 1.4-1.1 2.1-1.1 1 0 1.6.7 1.6 1.9v4.2h-1.8v-3.9c0-.5-.2-.8-.6-.8-.4 0-.6.1-1.1.3v4.3h-1.8v-3.8c0-.5-.2-.8-.6-.8-.4 0-.6.1-1.1.3v4.3h-1.8v-5.7z"></path></symbol><symbol viewBox="0 0 24 24" id="dropdown_icon"><path fill="none" d="M0 0h24v24H0z"></path><path d="M23.36 5.54a2.19 2.19 0 0 0-3.1 0l-8.27 8.26-8.25-8.26a2.192 2.192 0 0 0-3.1 3.1l9.81 9.81a2.19 2.19 0 0 0 3.1 0l9.81-9.81a2.19 2.19 0 0 0 0-3.1z"></path></symbol><symbol viewBox="0 0 24 24" id="forward_icon"><path d="M12.01 24a12 12 0 1 0-12-12 12 12 0 0 0 12 12zm0-22.43A10.43 10.43 0 1 1 1.57 12 10.43 10.43 0 0 1 12.01 1.57z"></path><path d="M13.91 12l-4.13 4.13a1.1 1.1 0 0 0 1.55 1.55l4.9-4.9a1.1 1.1 0 0 0 0-1.55l-4.9-4.9a1.1 1.1 0 1 0-1.55 1.54z"></path></symbol><symbol viewBox="0 0 24 24" id="hamburger_icon"><path class="st0" d="M22 4H2C.9 4 0 3.1 0 2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zm0 20H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zm0-10H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2z"></path></symbol><symbol viewBox="0 0 24 24" id="listview_icon"><path class="st0" d="M22 4.1H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zm0 6.6H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zm0 13.2H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2zm0-6.6H2c-1.1 0-2-.9-2-2s.9-2 2-2h20c1.1 0 2 .9 2 2s-.9 2-2 2z"></path></symbol><symbol viewBox="0 0 24 24" id="marketplace_icon"><path d="M12 0a9.2 9.2 0 0 0-9.2 9.2c0 4.18 6.12 11.86 8.29 14.44a1 1 0 0 0 1.52 0c2.23-2.56 8.59-10.26 8.59-14.44A9.2 9.2 0 0 0 12 0zm2.62 13.88a3.05 3.05 0 0 1-2 .93v1.36h-1.18v-1.35a3 3 0 0 1-2.76-2.59l1.76-.46A1.53 1.53 0 0 0 12 13.25a1.25 1.25 0 0 0 1-.31 1.07 1.07 0 0 0 .3-.77.85.85 0 0 0-.3-.71 5.47 5.47 0 0 0-1.35-.61 7.92 7.92 0 0 1-1.46-.64 2.42 2.42 0 0 1-.86-.89A2.63 2.63 0 0 1 9 8a3 3 0 0 1 .59-1.8 2.63 2.63 0 0 1 1.85-1v-1h1.14v1A2.75 2.75 0 0 1 15 7.38L13.47 8a1.58 1.58 0 0 0-1.41-1.3 1 1 0 0 0-.77.3 1 1 0 0 0-.29.72.8.8 0 0 0 .28.66 4.82 4.82 0 0 0 1.2.57 10.69 10.69 0 0 1 1.59.7 2.5 2.5 0 0 1 .92.91 2.61 2.61 0 0 1 .34 1.35 2.86 2.86 0 0 1-.71 1.97z" fill-rule="evenodd"></path><path fill="none" d="M0 0h24v24H0z"></path></symbol><symbol viewBox="0 0 24 24" id="ship_icon"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm6 12.35a.91.91 0 0 1-.2.3l-4.09 4.09a.91.91 0 0 1-1.29-1.29L15 12.91H6.84a.91.91 0 0 1 0-1.83H15l-2.58-2.52a.91.91 0 0 1 1.29-1.29l4.09 4.09a.91.91 0 0 1 .19.29.92.92 0 0 1 .01.7z"></path></symbol><symbol viewBox="0 0 24 24" id="shipments_icon"><path fill="none" d="M0 0h24v24H0z"></path><rect width="24" height="2.44" rx="1.14" ry="1.14"></rect><path d="M19.71 19.75L2.54 6.92a1.7 1.7 0 0 1-.37-2.27 1.46 1.46 0 0 1 2.12-.4l17.17 12.83a1.7 1.7 0 0 1 .37 2.27 1.46 1.46 0 0 1-2.12.4z"></path><rect y="21.56" width="24" height="2.44" rx="1.14" ry="1.14"></rect><path d="M5 11.25v8.58a.49.49 0 0 1-.48.51h-2.9a.49.49 0 0 1-.48-.51V9.11a.48.48 0 0 1 .75-.41l2.86 2.14a.52.52 0 0 1 .25.41zm6 4.01v4.58a.49.49 0 0 1-.48.51H7.71a.49.49 0 0 1-.48-.51v-6.72A.48.48 0 0 1 8 12.7l2.86 2.14a.52.52 0 0 1 .14.42zm2-6.72V4.17a.49.49 0 0 1 .48-.51h2.86a.49.49 0 0 1 .48.51v6.51a.48.48 0 0 1-.75.42L13.16 9a.52.52 0 0 1-.16-.46zm3.76 11.19v.1a.49.49 0 0 1-.48.51h-2.85a.49.49 0 0 1-.43-.51v-2.24a.48.48 0 0 1 .75-.42l2.86 2.14a.52.52 0 0 1 .15.42zM19 12.61V4.19a.5.5 0 0 1 .48-.53h2.86a.5.5 0 0 1 .48.53v10.63a.48.48 0 0 1-.75.43L19.25 13a.54.54 0 0 1-.25-.39zM7.24 4.27v-.1a.49.49 0 0 1 .48-.51h2.86a.49.49 0 0 1 .48.51v2.24a.48.48 0 0 1-.75.42L7.44 4.69a.52.52 0 0 1-.2-.42z"></path></symbol><symbol viewBox="0 0 46 46" id="user_icon"><g fill="none" fill-rule="evenodd"><path d="M46 23c0 12.703-10.297 23-23 23S0 35.703 0 23 10.297 0 23 0s23 10.297 23 23" fill="#DDD"></path><path d="M30.848 30.082a3.389 3.389 0 0 0-1.142-.938c-1.412-.703-.868-.165-2.602-.884-1.732-.718-2.143-.952-2.143-.952l-.015-1.646s.65-.492.851-2.049c.406.117.543-.475.565-.853.024-.366.24-1.505-.256-1.404.101-.76.18-1.448.144-1.812-.123-1.278-1.007-2.613-3.237-2.71-1.897.097-3.128 1.433-3.252 2.711-.036.364.037 1.051.138 1.813-.495-.103-.282 1.04-.26 1.404.024.378.158.973.564.855.202 1.557.851 2.053.851 2.053l-.016 1.654s-.41.251-2.144.968c-1.733.72-1.189.15-2.6.851-.48.24-.848.57-1.143.94A10.539 10.539 0 0 1 12.411 23c0-5.838 4.75-10.588 10.59-10.588 5.837 0 10.587 4.75 10.587 10.588 0 2.724-1.043 5.204-2.74 7.082M23 11c-6.617 0-12 5.383-12 12s5.383 12 12 12c6.616 0 12-5.383 12-12s-5.384-12-12-12" fill="#FFF"></path></g></symbol><symbol viewBox="0 0 24 23.91" id="uship_icon"><path d="M23.86 15.43L18.1 1.2A1.92 1.92 0 0 0 16.31 0a1.89 1.89 0 0 0-.74.14L1.22 5.95A1.94 1.94 0 0 0 .14 8.47L5.9 22.71a1.92 1.92 0 0 0 1.8 1.2 1.77 1.77 0 0 0 .74-.15L22.78 18a1.94 1.94 0 0 0 1.08-2.57zM16.47 6a7.14 7.14 0 0 1-1.37 2.09 3.65 3.65 0 0 1-2.19 1.06c-.67.1-1.13.14-1.44.17l-.47.06a.68.68 0 0 0-.5.53 1.12 1.12 0 0 0 .67 1 20.75 20.75 0 0 1 2.59 1.84 3.62 3.62 0 0 1 1 3.1A3.88 3.88 0 0 1 13 19a9.82 9.82 0 0 1-1.74.65l-.34.11a1.09 1.09 0 0 0-.63.38 5.77 5.77 0 0 0-.58 1.75l-.06.24-2.73-.78.05-.22c.71-3.15 1-3.56 1.77-4.1a6.31 6.31 0 0 1 1.74-.68 3.54 3.54 0 0 0 .86-.3.34.34 0 0 0 .15-.23.87.87 0 0 0-.17-.6 4.5 4.5 0 0 0-1.32-1A6.35 6.35 0 0 1 7.57 12a3.63 3.63 0 0 1-.39-2.59 3.89 3.89 0 0 1 1.35-2.3 4.21 4.21 0 0 1 2.27-1 6.46 6.46 0 0 1 .95-.11h.66a1 1 0 0 0 .82-.26 5.91 5.91 0 0 0 .36-.8l-2.17-.78 5-2.37 2.36 5z"></path></symbol><symbol viewBox="0 0 533.4 269.7" id="uship_logo"><path class="st0" d="M315.4 149.3h-39.9v-34.7h-35.6v115.5h35.6v-45.2h39.9v45.2H351V114.4h-35.6z"></path><path class="st0" d="M253.7 54.4l30.9 11.2L253.8 0l-65.5 30.7 28.2 10.2-.2.5c-2.2 5.6-4.1 9.8-4.9 10.7-1.1 1.3-2.6 3.1-11.2 3.7-2.1.1-3.8.2-5.5.2h-3.8c-2.9 0-6.2.2-12.5 1.1-12.2 1.8-21.5 5.9-29.9 13.2-7.1 6.1-14.1 14-17.8 30.4-2.6 11.6-.9 23.1 5.1 34.2 3.8 6.9 12.3 17.7 31.8 29.6 8.8 5.3 14.8 9.5 17.7 13.6 1.9 2.8 2.7 5.9 2.2 8.4-.2 1.1-.8 2.5-2.2 3.5-2.2 1.5-6.6 2.7-11.3 3.9l-.3.1c-7.1 2-15.9 4.4-23 9-10.8 7-14 12.5-23.4 54.2l-.6 2.5 35.4 10.1.7-2.7c3.3-13.5 6-21.4 7.9-23.5 2.1-2.4 3.3-3.4 8.7-5.1 1.1-.4 2.2-.7 3.3-1l1.4-.4c6.8-2 13.3-3.9 22.9-8.7 13.4-6.5 22.9-22.7 24.7-42.1 2-20.6-5.5-31.8-13.8-40.9-5.7-6.2-30.7-22.3-34.3-24.4-4.4-2.6-9.6-7-9.2-13.4.3-5 5.7-7.2 7.1-7.5 1.1-.2 2.9-.4 5.9-.7h.3c4.1-.4 10.2-1 18.9-2.2 16.7-2.5 25.7-10.5 28.8-13.9 10.6-11.5 15.9-22.7 18.1-28.4l.2-.5zm108.6 60.1h35.6v115.7h-35.6zm17.9-46.8c-11.7 0-20.8 9.1-20.8 20.8 0 11.5 9.3 20.8 20.8 20.8S401 100 401 88.5s-9.3-20.8-20.8-20.8zm87.6 50.1c-7.8 0-15.2 1.5-22.1 4.6l-.7.3v-8.1h-36.4v140.1H445v-29l.7.3c6.8 3 14.3 4.6 22.1 4.6 31.2 0 56.5-25.3 56.5-56.5 0-31.1-25.4-56.3-56.5-56.3zm0 79.1c-12.4 0-22.8-10.4-22.8-22.8 0-12.1 10.7-22.8 22.8-22.8 12.1 0 22.8 10.6 22.8 22.8 0 12.1-10.7 22.8-22.8 22.8zM84.5 171c0 13.1-11.2 24.1-24.4 24.1-13.3 0-24.5-11-24.5-24.1v-56.3H0V171c0 32.7 26.9 59.2 60 59.2s60-26.6 60-59.2v-56.3H84.5V171zm443.1-40.3l-.5-.5.7-.3c.3-.1.5-.3.7-.5.4-.4.5-.9.5-1.4 0-.4-.1-.8-.3-1.2-.2-.4-.5-.6-.9-.8-.4-.1-.9-.2-1.6-.2h-3.5v7.9h1.1v-3.5h1.8c.2 0 .3.1.5.2s.3.3.5.5.4.6.7 1.1l1.1 1.6h1.3l-1.4-2.2c-.3-.1-.5-.4-.7-.7zm-1.6-1.3h-2.2v-2.6h2.5c.6 0 1 .1 1.3.4.3.2.4.5.4.9 0 .2-.1.5-.2.7-.1.2-.3.4-.6.5-.4 0-.8.1-1.2.1z"></path><path class="st0" d="M525.9 122.4c-4.1 0-7.5 3.3-7.5 7.5 0 4.1 3.3 7.5 7.5 7.5 4.1 0 7.5-3.3 7.5-7.5s-3.4-7.5-7.5-7.5zm0 13.8c-3.5 0-6.4-2.9-6.4-6.4 0-3.5 2.9-6.4 6.4-6.4 3.5 0 6.4 2.9 6.4 6.4 0 3.6-2.8 6.4-6.4 6.4z"></path></symbol><symbol viewBox="0 0 24 24" id="x-out_icon"><path d="M15.5 12l7.8-7.8c.9-.9.9-2.2 0-3.1-.9-.9-2.2-.9-3.1 0L12 9.3 3.7 1.1C2.8.2 1.5.2.6 1.1c-.9.9-.9 2.2 0 3.1L8.5 12 .7 19.8c-.9.9-.9 2.2 0 3.1.9.9 2.2.9 3.1 0l8.3-8.3 8.3 8.3c.9.9 2.2.9 3.1 0 .9-.9.9-2.2 0-3.1l-8-7.8z"></path></symbol></svg>
	<header role="banner" id="uship-header">
	  <div class="siteNav-container">
	    <nav role="navigation" class="siteNav">
	      <a class="siteNav-logoBox js-siteNav-logoBox" href="<?php the_field('uship_logo_url', 'option'); ?>">
	        <svg class="siteNav-logoBox-logo">
	          <use class="sel-header-logo" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#uship_logo"></use>
	        </svg>
	      </a>
	      <div class="mobileNav-menu-container showMobileOnly">
	        <a class="mobileNav-menu mobileNavLink js-mobileNav-menu">
	          <svg class="mobileNav-menu-icon">
	            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#hamburger_icon"></use>
	          </svg>
	        </a>
	      </div>
	      <a class="siteNav-content-closeLink mobileNavLink is-hidden js-siteNav-content-closeLink">
	        <svg class="siteNav-content-closeLink-icon">
	          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#x-out_icon"></use>
	        </svg>
	      </a>
	      <div class="siteNav-content is-hidden js-siteNav-content">
	        <div class="siteNav-linksContainer is-open">
	          <div class="siteNav-splitLinks showMobileOnly">
		          <a class="siteNav-link" href="<?php the_field('sign_in_link_url', 'option'); ?>">
		            <span class="siteNav-linkText"><?php the_field('sign_in_link_text', 'option'); ?></span>
		          </a>
		          <a class="siteNav-link" href="<?php the_field('join_link_url', 'option'); ?>">
		            <span class="siteNav-linkText"><?php the_field('join_link_text', 'option'); ?></span>
		          </a>
	          </div>
	          <div class="siteNav-links">
	            <a class="siteNav-link" href="<?php the_field('how_it_works_link_url', 'option'); ?>">
	              <svg class="siteNav-linkIcon">
	                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#uship_icon"></use>
	              </svg>
	              <span class="siteNav-linkText"><?php the_field('how_it_works_link_text', 'option'); ?></span>
	            </a>
	            <a class="siteNav-link" href="<?php the_field('find_shipments_link_url', 'option'); ?>">
	              <svg class="siteNav-linkIcon">
	                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#marketplace_icon"></use>
	              </svg>
	              <span class="siteNav-linkText"><?php the_field('find_shipments_link_text', 'option'); ?></span>
	            </a>
	            <a class="siteNav-link" href="<?php the_field('ship_link_url', 'option'); ?>">
	              <svg class="siteNav-linkIcon">
	                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ship_icon"></use>
	              </svg>
	              <span class="siteNav-linkText"><?php the_field('ship_link_text', 'option'); ?></span>
	            </a>
	          </div>
	          <div class="siteNav-splitLinks hideMobile">
	            <a class="siteNav-link" href="<?php the_field('sign_in_link_url', 'option'); ?>">
	              <span class="siteNav-linkText"><?php the_field('sign_in_link_text', 'option'); ?></span>
	            </a>
	            <a class="siteNav-link" href="<?php the_field('join_link_url', 'option'); ?>">
	              <span class="siteNav-linkText"><?php the_field('join_link_text', 'option'); ?></span>
	            </a>
	          </div>
	          <div class="siteNav-helpLinks">
	            <a class="siteNav-link" target="_blank" href="<?php the_field('help_link_url', 'option'); ?>">
	              <span class="subNav-linkText"><?php the_field('help_link_text', 'option'); ?></span>
	            </a>
	          </div>
	          <div class="siteNav-footerLinks showMobileOnly">
	            <svg xmlns="http://www.w3.org/2000/svg" style="position:absolute; width: 0; height: 0"><symbol viewBox="0 0 133.14 38.21" id="apple_badge"><path d="M133.11 34.38a3.83 3.83 0 0 1-3.83 3.83H3.84A3.83 3.83 0 0 1 0 34.38V3.84A3.84 3.84 0 0 1 3.84 0h125.47a3.83 3.83 0 0 1 3.8 3.84v30.54z"></path><path class="cls-1" d="M29.24 18.89A5.8 5.8 0 0 1 32 14.03a5.93 5.93 0 0 0-4.68-2.53c-2-.21-3.87 1.18-4.88 1.18s-2.57-1.16-4.23-1.12a6.23 6.23 0 0 0-5.24 3.2c-2.27 3.92-.58 9.69 1.59 12.86 1.09 1.55 2.35 3.29 4 3.23s2.23-1 4.19-1 2.51 1 4.21 1 2.84-1.56 3.89-3.13a12.84 12.84 0 0 0 1.78-3.62 5.6 5.6 0 0 1-3.39-5.21zm-3.2-9.47a5.71 5.71 0 0 0 1.31-4.09 5.81 5.81 0 0 0-3.76 1.94 5.43 5.43 0 0 0-1.34 3.94 4.8 4.8 0 0 0 3.79-1.79zm26.72 21.19h-2.28l-1.24-3.91h-4.32l-1.19 3.91h-2.21l4.28-13.3h2.65zm-3.89-5.5l-1.13-3.47q-.18-.58-.63-2.53-.2.85-.63 2.51l-1.19 3.49h3.57zm14.9.59a5.45 5.45 0 0 1-1.32 3.87 3.87 3.87 0 0 1-2.94 1.26 2.94 2.94 0 0 1-2.72-1.36v5.05h-2.18V24.18q0-1.54-.08-3.16h1.88l.12 1.52a3.79 3.79 0 0 1 6.07-.38 5.29 5.29 0 0 1 1.17 3.54zm-2.17.08a4 4 0 0 0-.63-2.31 2.18 2.18 0 0 0-1.86-.95 2.21 2.21 0 0 0-1.43.52 2.43 2.43 0 0 0-.84 1.37 2.79 2.79 0 0 0-.1.65v1.6a2.56 2.56 0 0 0 .64 1.77 2.13 2.13 0 0 0 1.67.72 2.18 2.18 0 0 0 1.88-.93 4.09 4.09 0 0 0 .67-2.44zm13.21-.08a5.45 5.45 0 0 1-1.32 3.87 3.86 3.86 0 0 1-2.94 1.26 2.94 2.94 0 0 1-2.72-1.36v5.05h-2.18V24.18q0-1.54-.08-3.16h1.88l.12 1.52a3.79 3.79 0 0 1 6.07-.38 5.3 5.3 0 0 1 1.17 3.54zm-2.17.08a4 4 0 0 0-.63-2.31 2.18 2.18 0 0 0-1.9-.95 2.21 2.21 0 0 0-1.43.52 2.43 2.43 0 0 0-.84 1.37 2.82 2.82 0 0 0-.1.65v1.6a2.57 2.57 0 0 0 .64 1.77 2.13 2.13 0 0 0 1.73.68 2.18 2.18 0 0 0 1.87-.93 4.09 4.09 0 0 0 .66-2.4zm14.47 1.1a3.55 3.55 0 0 1-1.18 2.76 5.24 5.24 0 0 1-3.62 1.17 6.35 6.35 0 0 1-3.45-.83l.49-1.78a5.84 5.84 0 0 0 3.08.85 2.91 2.91 0 0 0 1.88-.54 1.78 1.78 0 0 0 .67-1.45 1.85 1.85 0 0 0-.55-1.36 5.15 5.15 0 0 0-1.84-1q-3.48-1.34-3.48-3.85a3.38 3.38 0 0 1 1.25-2.74 4.83 4.83 0 0 1 3.26-1 6.46 6.46 0 0 1 3 .63l-.51 1.74a5.24 5.24 0 0 0-2.55-.61 2.57 2.57 0 0 0-1.76.55 1.58 1.58 0 0 0-.53 1.2 1.62 1.62 0 0 0 .61 1.3 6.91 6.91 0 0 0 1.94 1 6.57 6.57 0 0 1 2.53 1.62 3.39 3.39 0 0 1 .76 2.34zm7.09-4.26h-2.35v4.66q0 1.78 1.24 1.78a3.83 3.83 0 0 0 .95-.1l.07 1.61a4.82 4.82 0 0 1-1.66.24 2.56 2.56 0 0 1-2-.77 3.78 3.78 0 0 1-.71-2.59v-4.83h-1.4v-1.6h1.4v-1.76l2.09-.63v2.39h2.35v1.6zm10.6 3.12a5.27 5.27 0 0 1-1.26 3.63 4.51 4.51 0 0 1-3.52 1.46 4.29 4.29 0 0 1-3.37-1.4 5.1 5.1 0 0 1-1.25-3.53 5.21 5.21 0 0 1 1.29-3.65 4.48 4.48 0 0 1 3.48-1.42 4.38 4.38 0 0 1 3.4 1.4 5.06 5.06 0 0 1 1.23 3.51zm-2.21.07a4.32 4.32 0 0 0-.57-2.28 2.11 2.11 0 0 0-1.91-1.15 2.14 2.14 0 0 0-2 1.15 4.4 4.4 0 0 0-.57 2.32 4.32 4.32 0 0 0 .57 2.26 2.18 2.18 0 0 0 3.85 0 4.32 4.32 0 0 0 .63-2.3zm9.14-2.92a3.69 3.69 0 0 0-.67-.06 2 2 0 0 0-1.74.85 3.19 3.19 0 0 0-.53 1.89v5h-2.13V24q0-1.66-.08-3h1.86l.08 1.84h.06a3.28 3.28 0 0 1 1.07-1.52 2.58 2.58 0 0 1 1.54-.51 3.38 3.38 0 0 1 .53 0v2zm9.54 2.47a5 5 0 0 1-.08 1h-6.4a2.79 2.79 0 0 0 .93 2.17 3.17 3.17 0 0 0 2.09.67 7.08 7.08 0 0 0 2.59-.45l.33 1.48a8 8 0 0 1-3.22.59 4.66 4.66 0 0 1-3.51-1.31 4.85 4.85 0 0 1-1.27-3.52 5.5 5.5 0 0 1 1.19-3.61 4.09 4.09 0 0 1 3.36-1.54 3.57 3.57 0 0 1 3.14 1.54 5.19 5.19 0 0 1 .85 2.98zm-2-.55a2.9 2.9 0 0 0-.41-1.64 1.86 1.86 0 0 0-1.7-.89 2 2 0 0 0-1.7.87 3.17 3.17 0 0 0-.63 1.66h4.44zM48.16 9.11a3.28 3.28 0 0 1-1.05 2.67 4.21 4.21 0 0 1-2.78.82 13 13 0 0 1-1.53-.08V6.11a11.28 11.28 0 0 1 1.8-.14 3.89 3.89 0 0 1 2.59.75 3 3 0 0 1 .97 2.39zm-1.11 0a2.39 2.39 0 0 0-.61-1.76 2.39 2.39 0 0 0-1.77-.61 4.47 4.47 0 0 0-.84.07v4.89a5.6 5.6 0 0 0 .71 0 2.48 2.48 0 0 0 1.86-.59 2.68 2.68 0 0 0 .65-2zm6.97 1a2.58 2.58 0 0 1-.62 1.78 2.22 2.22 0 0 1-1.73.72 2.11 2.11 0 0 1-1.65-.69 2.51 2.51 0 0 1-.62-1.74 2.56 2.56 0 0 1 .63-1.79 2.2 2.2 0 0 1 1.71-.7 2.16 2.16 0 0 1 1.67.69 2.49 2.49 0 0 1 .61 1.73zm-1.09 0a2.13 2.13 0 0 0-.28-1 1 1 0 0 0-.94-.56 1.05 1.05 0 0 0-1 .56 2.17 2.17 0 0 0-.28 1.14 2.13 2.13 0 0 0 .28 1.12 1.07 1.07 0 0 0 1.89 0 2.12 2.12 0 0 0 .33-1.19zm8.95-2.28l-1.47 4.71h-1l-.61-2a15.14 15.14 0 0 1-.38-1.52 11.1 11.1 0 0 1-.38 1.52l-.65 2h-1l-1.34-4.71h1.06l.55 2.28q.19.8.32 1.51.12-.59.39-1.5l.67-2.25h.87l.64 2.2q.23.8.38 1.55a14.75 14.75 0 0 1 .32-1.55l.57-2.2h1zm5.43 4.71h-1v-2.7q0-1.25-1-1.25a1 1 0 0 0-.76.34 1.21 1.21 0 0 0-.29.81v2.8h-1V7.83h.85v.74a1.51 1.51 0 0 1 .54-.57 1.77 1.77 0 0 1 1-.26 1.5 1.5 0 0 1 1.1.43 2.07 2.07 0 0 1 .54 1.56v2.82zm2.89 0h-1.09V5.67h1v6.88zm6.17-2.43a2.58 2.58 0 0 1-.62 1.78 2.22 2.22 0 0 1-1.73.72 2.11 2.11 0 0 1-1.65-.69 2.51 2.51 0 0 1-.62-1.74 2.56 2.56 0 0 1 .63-1.79 2.2 2.2 0 0 1 1.73-.66 2.16 2.16 0 0 1 1.67.69 2.49 2.49 0 0 1 .59 1.69zm-1.09 0a2.13 2.13 0 0 0-.28-1 1 1 0 0 0-.94-.56 1 1 0 0 0-.95.56 2.17 2.17 0 0 0-.28 1.14 2.13 2.13 0 0 0 .28 1.07 1.06 1.06 0 0 0 1 .56 1 1 0 0 0 .94-.57 2.11 2.11 0 0 0 .23-1.13zm6.16 2.43h-.94l-.08-.54a1.61 1.61 0 0 1-1.38.65 1.42 1.42 0 0 1-1.08-.43 1.34 1.34 0 0 1-.37-1 1.47 1.47 0 0 1 .72-1.32 3.76 3.76 0 0 1 2-.45v-.04a.84.84 0 0 0-1-.93 2.19 2.19 0 0 0-1.2.35l-.21-.72a3 3 0 0 1 1.62-.41 1.68 1.68 0 0 1 1.85 1.95v1.74a7.37 7.37 0 0 0 .07 1.15zm-1.09-1.62v-.72q-1.73 0-1.73 1a.71.71 0 0 0 .2.55.73.73 0 0 0 .51.18 1.05 1.05 0 0 0 .64-.22.89.89 0 0 0 .36-.6.85.85 0 0 0 .02-.19zm7.05 1.62h-.93v-.76a1.57 1.57 0 0 1-1.51.86 1.77 1.77 0 0 1-1.42-.67 2.61 2.61 0 0 1-.56-1.74 2.73 2.73 0 0 1 .61-1.85 1.88 1.88 0 0 1 1.46-.66 1.41 1.41 0 0 1 1.33.64V5.67h1v5.61q-.02.68.02 1.26zm-1.09-2v-.77a1.5 1.5 0 0 0 0-.33 1.19 1.19 0 0 0-.38-.64 1 1 0 0 0-.7-.26 1.08 1.08 0 0 0-.92.47 2 2 0 0 0-.34 1.19 1.86 1.86 0 0 0 .32 1.14 1.08 1.08 0 0 0 .92.47 1 1 0 0 0 .83-.39 1.3 1.3 0 0 0 .27-.87zm10.05-.43a2.58 2.58 0 0 1-.62 1.78 2.21 2.21 0 0 1-1.73.72 2.11 2.11 0 0 1-1.65-.69 2.51 2.51 0 0 1-.62-1.74 2.56 2.56 0 0 1 .63-1.79 2.2 2.2 0 0 1 1.74-.66 2.15 2.15 0 0 1 1.67.69 2.49 2.49 0 0 1 .58 1.69zm-1.09 0a2.13 2.13 0 0 0-.28-1 1 1 0 0 0-.94-.56 1.05 1.05 0 0 0-.94.56 2.17 2.17 0 0 0-.28 1.14 2.13 2.13 0 0 0 .28 1.07 1.07 1.07 0 0 0 1.89 0 2.13 2.13 0 0 0 .27-1.14zm6.72 2.43h-1v-2.7q0-1.25-1-1.25a.94.94 0 0 0-.76.34 1.21 1.21 0 0 0-.29.81v2.8h-1V7.83h.92v.74A1.53 1.53 0 0 1 99.4 8a1.77 1.77 0 0 1 1-.26 1.5 1.5 0 0 1 1.1.43 2.07 2.07 0 0 1 .54 1.56v2.82zm7.06-3.93h-1.15v2.29c0 .58.2.87.61.87a1.86 1.86 0 0 0 .47 0v.8a2.36 2.36 0 0 1-.81.12 1.25 1.25 0 0 1-1-.38 1.85 1.85 0 0 1-.35-1.27V8.61h-.69v-.78h.69v-.86l1-.31v1.17h1.15v.78zm5.54 3.93h-1V9.86q0-1.27-.95-1.27a1 1 0 0 0-1 .74 1.31 1.31 0 0 0 0 .38v2.83h-1V5.67h1v2.84a1.58 1.58 0 0 1 1.42-.77 1.46 1.46 0 0 1 1.05.37 2.15 2.15 0 0 1 .53 1.58v2.8zm5.73-2.58a2.51 2.51 0 0 1 0 .48h-3.21a1.37 1.37 0 0 0 .46 1.07 1.56 1.56 0 0 0 1 .33 3.48 3.48 0 0 0 1.27-.22l.16.73a4 4 0 0 1-1.58.29 2.28 2.28 0 0 1-1.72-.64 2.38 2.38 0 0 1-.62-1.73 2.7 2.7 0 0 1 .58-1.78 2 2 0 0 1 1.65-.76 1.75 1.75 0 0 1 1.54.76 2.53 2.53 0 0 1 .47 1.47zm-1-.27a1.41 1.41 0 0 0-.2-.81.91.91 0 0 0-.83-.44 1 1 0 0 0-.83.43 1.58 1.58 0 0 0-.31.81h2.18z"></path></symbol><symbol viewBox="0 0 24 24" id="facebook_icon"><path class="st0" d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm2.4 11h-1.5v5.5h-2.2V12H9.5v-1.9h1.2V8.6c0-1.4.7-2.1 2.4-2.1h1.5v1.9h-1.2c-.4 0-.5.2-.5.6v1.1h1.7l-.2 1.9z"></path></symbol><symbol viewBox="0 0 140 48" id="google_badge"><path class="st0" d="M104.1 23.7c-1.1-.1-2.2 0-3.3 0v4.4c1.2.1 2.3.1 3.5 0 1-.2 1.7-1.2 1.7-2.2-.1-1.1-.9-2-1.9-2.2zm-15.9 4.5c-1 .4-1.7 1.4-1.5 2.5l4.2-1.7c-.6-.9-1.8-1.2-2.7-.8zm-13.3-.1c-1.6 0-2.9 1.3-2.9 3 0 1.5 1.2 2.8 2.7 2.9 1.5 0 2.7-1.2 2.7-2.6v-.2c.2-1.6-.9-3-2.5-3.1zm-21.6 0c-1.6-.1-3 1.1-3.2 2.7-.1 1.6 1.1 3 2.7 3.2 1.6.1 3-1.1 3.2-2.7v-.2c.1-1.6-1.1-2.9-2.7-3zm10.6 0c-1.6.1-2.9 1.5-2.8 3.1.1 1.5 1.3 2.7 2.8 2.8 1.6-.1 2.9-1.5 2.8-3.1-.1-1.5-1.3-2.7-2.8-2.8zm10.2-17.9c.1-1.3-.9-2.4-2.2-2.5-1.3-.1-2.4.9-2.5 2.2v.3c-.1 1.3.9 2.4 2.2 2.5 1.3.1 2.4-.9 2.5-2.2v-.3zM118.4 31c-.6.1-1.1.3-1.6.5-.3.3-.5.7-.6 1.1v.2c.1.4.4.7.8.9.9.4 2.2.4 2.8-.3.3-.3.4-.3.5-.8.1-.5-.3-1.1-.6-1.2l-.9-.3c0-.1-.2-.1-.4-.1z"></path><path class="st0" d="M132.6 0H7.7C3.4 0 0 3.4 0 7.7v32.6C0 44.5 3.5 48 7.7 48h124.9c4.2 0 7.4-2.7 7.4-6.9V7.7c.2-4.1-3-7.6-7.1-7.7h-.3zM76.8 6.8H78l3.6 4.8V6.8h1.2v7h-1.2l-3.6-5v5h-1.2v-7zm-20.4 0h1.2v7h-1.2v-7zm-9.7 0h5.4v1.1H50v5.9h-1.2v-6h-2.1v-1zm-6 0h4.8v1.1h-3.6v1.8h3.5v1.1h-3.5v1.9h3.5v1.1h-4.8l.1-7zm-4.4-.1c1.1 0 2.2.5 2.8 1.4l-1 .6c-.4-.6-1.1-.9-1.8-.9-1.3 0-2.4 1-2.4 2.4v.2c-.1 1.3.9 2.4 2.3 2.5h.1c.6 0 1.2-.2 1.7-.6v-1.1h-2.1V10h3.3v2.6c-.7.8-1.8 1.3-2.9 1.3-1.9.1-3.6-1.4-3.6-3.4v-.2c0-1.9 1.5-3.5 3.4-3.6 0-.1.1-.1.2 0zM24.9 31.2L8 40.5c-.4.2-.9.1-1.2-.3-.1-.1-.1-.3-.1-.4V21.2c0-.5.4-.9.9-.9.1 0 .3 0 .4.1l16.9 9.2c.4.2.6.8.3 1.2-.1.2-.2.4-.3.4zm17.8 4.4c-4.1 1.3-8.5-.9-9.8-5 0-.1-.1-.2-.1-.3-1-4.1 1.4-8.2 5.5-9.3.2 0 .3-.1.5-.1 2.4-.5 4.8.2 6.5 1.9l-1.5 1.4c-3-1.8-5.3-1.7-7.3.2-1.8 1.8-2.2 4.5-.9 6.7 1.2 2.1 3.6 3.2 6 2.6 1.9-.4 3.4-2 3.5-4h-4.8v-2h6.8c.8 3.4-1.1 6.8-4.4 7.9zm10.6.4c-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9 4.9 2.2 4.9 4.9S56 36 53.3 36zm5.6-29.2h5.4v1.1h-2.1v5.9H61v-6h-2.1v-1zm5 29.2c-2.7 0-4.9-2.2-4.9-4.9s2.2-4.9 4.9-4.9 4.9 2.2 4.9 4.8c.1 2.7-2 4.9-4.7 5h-.2zm4.3-25.7c0-2 1.6-3.6 3.6-3.6s3.6 1.6 3.6 3.6-1.6 3.5-3.6 3.5-3.6-1.6-3.6-3.5zm11.1 25.4c.1 2.2-1.4 4.2-3.7 4.6-2.2.5-4.5-.7-5.3-2.8l1.8-.8c1.4 1.7 2.4 2.1 3.8 1.5 1-.5 1.5-1.5 1.3-3.1-1.9 1.4-4.5 1.1-6-.7a5.02 5.02 0 0 1-.1-6.6c1.4-1.8 4-2.1 5.9-.8.6-.9 1.5-.4 2.3-.5v3.8c0 1.7.1 3.6 0 5.4zm3.8 0H81V21.5h2.1v14.2zm8.6-3.1l1.6 1.1c-1 1.7-3 2.6-5 2.2-2-.4-3.6-2.1-3.8-4.1-.4-3.2 1.7-5.7 4.7-5.6 2 0 3.6 1.4 4.2 3.7L87 32.5c.8 1.9 2.9 2 4.7.1zm16.5-6.3c-.2 2.1-1.9 3.7-4 3.9-1.1.1-2.2 0-3.5 0v5.4h-2.1V21.4c2.1 0 4.3.1 6.4.4 2.1.4 3.5 2.4 3.2 4.5zm4 9.3H110V21.5h2.2v14.1zm10.8 0h-2.2l-.2-1c-1.1 1.3-3 1.7-4.6 1-1.7-.6-2.6-2.4-2.1-4 .3-.9.9-1.6 1.8-2 1.5-.7 3.3-.8 4.8-.1-.1-1.3-1.3-2.1-2.5-2-.4 0-.8.2-1.1.4-.9.8-1.5.5-2.3.1l-.5-.2v-.2c1-1.7 3.1-2.5 5-2.1 1.9.2 3.4 1.6 3.7 3.4.1.4.1.8.1 1.2.1 1.9.1 3.7.1 5.5zm10.8-8.6c-1.8 4.1-3.6 8.1-5.3 12.2-.2.7-.9 1.2-1.6 1h-1.3c.7-1.4 1.2-2.7 1.9-4 .3-.5.3-1.2 0-1.7l-3.3-7.5-.3-.9c.1 0 .1-.1.2-.1 2.2-.1 2.2-.1 3.1 1.9l1.9 4.7c.2-.5.4-.8.5-1.2.6-1.6 1.2-3.1 1.8-4.7.1-.5.6-.9 1.1-.8h1.9c-.4.5-.5.8-.6 1.1z"></path></symbol><symbol viewBox="0 0 24 24" id="linkedin_icon"><path class="st0" d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zM9.5 16.6H7.6v-6.1h1.9v6.1zm-1-6.9c-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1.6 0 1.1.5 1.1 1.1.1.6-.4 1.1-1.1 1.1zm8.1 6.9h-1.9v-3.2c0-.9-.3-1.4-1-1.4-.8 0-1.2.5-1.2 1.4v3.2h-1.8v-6.1h1.8v.8s.5-1 1.8-1 2.2.8 2.2 2.4.1 3.9.1 3.9z"></path></symbol><symbol viewBox="0 0 24 24" id="twitter_icon"><path class="st0" d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm4.8 8.7c.1 3.3-2.3 6.9-6.6 6.9-1.3 0-2.5-.4-3.5-1 1.2.1 2.5-.2 3.4-1-1 0-1.9-.7-2.2-1.6.4.1.7 0 1 0-1.1-.2-1.9-1.2-1.9-2.3.3.2.7.3 1 .3-1-.7-1.3-2-.7-3.1 1.1 1.4 2.8 2.3 4.8 2.4-.3-1.4.8-2.8 2.3-2.8.7 0 1.3.3 1.7.7.5-.1 1-.3 1.5-.6-.2.5-.5 1-1 1.3.5-.1.9-.2 1.3-.4-.2.5-.6.9-1.1 1.2z"></path></symbol><symbol viewBox="0 0 24 24" id="youtube_icon"><path class="st0" d="M10.9 13.5l2.9-1.5-2.9-1.5z"></path><path class="st0" d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm5.4 13c-.2 1.5-.8 1.7-1.9 1.8-1.6.1-5.3.1-7 0-1.2-.1-1.7-.3-1.9-1.8-.1-1.1-.1-3 0-4 .2-1.5.8-1.7 1.9-1.8 1.6-.1 5.3-.1 7 0 1.2.1 1.7.3 1.9 1.8.1 1.1.1 2.9 0 4z"></path></symbol></svg>
	            <div class="siteNav-footerLinks-container">
	              <a class="siteNav-link js-siteNav-backLink">
	                <svg class="siteNav-linkIcon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#back_icon"></use></svg>
	                <span class="siteNav-linkText">Back</span>
	              </a>
	              <div class="topRow">
	                <div class="footer-companyInfo">
	                  <a class="footer-companyInfo-link" href="<?php the_field('company_link_url', 'option'); ?>"><?php the_field('company_link_text', 'option'); ?></a>
	                  <a class="footer-companyInfo-link" href="<?php the_field('careers_link_url', 'option'); ?>"><?php the_field('careers_link_text', 'option'); ?></a>
	                  <a class="footer-companyInfo-link" href="<?php the_field('press_link_url', 'option'); ?>"><?php the_field('press_link_text', 'option'); ?></a>
	                  <a class="footer-companyInfo-link" href="<?php the_field('blog_link_url', 'option'); ?>"><?php the_field('blog_link_text', 'option'); ?></a>
	                  <a class="footer-companyInfo-link" href="<?php the_field('categories_link_url', 'option'); ?>"><?php the_field('categories_link_text', 'option'); ?></a>
	                </div>
	                <div class="footer-socialMediaIcons">
	                  <a class="footer-socialMediaIcons-link" href="<?php the_field('facebook_link_url', 'option'); ?>" target="_blank">
	                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook_icon"></use></svg>
	                  </a>
	                  <a class="footer-socialMediaIcons-link" href="<?php the_field('twitter_link_url', 'option'); ?>" target="_blank">
	                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter_icon"></use></svg>
	                  </a>
	                  <a class="footer-socialMediaIcons-link" href="<?php the_field('youtube_link_url', 'option'); ?>" target="_blank">
	                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#youtube_icon"></use></svg>
	                  </a>
	                  <a class="footer-socialMediaIcons-link" href="<?php the_field('linkedin_link_url', 'option'); ?>" target="_blank">
	                    <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin_icon"></use></svg>
	                  </a>
	                </div>
	                <div class="footer-countryChanger">
	                  <select id="siteDropdownSelect" class="siteDropdownSelect js-siteDropdownSelect">
	                    <option value="https://www.uship.com/?siteId=1">United States</option>
	                    <option value="https://www.uship.com/ca/">Canada</option>
	                    <option value="https://www.uship.com/uk/">United Kingdom</option>
	                    <option value="https://www.uship.com/eu/">European Union</option>
	                    <option value="https://www.uship.com/au/">Australia</option>
	                    <option value="https://www.uship.com/in/">India</option>
	                    <option value="https://www.uship.com/?siteId=7">Global</option>
	                    <option value="https://www.uship.com/de/">Deutschland</option>
	                    <option value="https://www.uship.com/fr/">France</option>
	                    <option value="https://www.uship.com/nl/">Nederland</option>
	                    <option value="https://www.uship.com/es/">España</option>
	                    <option value="https://www.uship.com/mx/">México</option>
	                    <option value="https://www.uship.com/za/">South Africa</option>
	                    <option value="https://www.uship.com/at/">Österreich</option>
	                    <option value="https://www.uship.com/br/">Brasil</option>
	                    <option value="https://www.uship.com/ar/">Argentina</option>
	                    <option value="https://www.uship.com/cl/">Chile</option>
	                    <option value="https://www.uship.com/pe/">Perú</option>
	                    <option value="https://www.uship.com/co/">Colombia</option>
	                    <option value="https://www.uship.com/ve/">Venezuela</option>
	                  </select>
	                  <script type="text/javascript">
	                      var siteDropdowns = [].slice.call(document.querySelectorAll('.js-siteDropdownSelect'));
	                      siteDropdowns.forEach(function (siteDropdown) {
	                          siteDropdown.onchange = function () {
	                              window.location = this.options[this.selectedIndex].value;
	                          };
	                      });
	                  </script>
	                </div>
	              </div>
	              <div class="bottomRow">
	                <div class="footer-copyrightTerms">
	                  <div class="footer-copyright">
	                    <?php the_field('copyright_text', 'option'); ?>
	                  </div>
	                  <div class="footer-terms">
	                    <a class="footer-terms-link" href="<?php the_field('user_agreement_link_url', 'option'); ?>"><?php the_field('user_agreement_link_text', 'option'); ?></a>
	                    <a class="footer-terms-link" href="<?php the_field('privacy_policy_link_url', 'option'); ?>"><?php the_field('privacy_policy_link_text', 'option'); ?></a>
	                    <a class="footer-terms-link" href="<?php the_field('site_map_link_url', 'option'); ?>"><?php the_field('site_map_link_text', 'option'); ?></a>
	                  </div>
	                </div>
	                <div class="footer-mobileAppBadges">
	                  <a class="footer-mobileAppBadges-badge" href="<?php the_field('app_store_link_url', 'option'); ?>" target="_blank">
	                    <img class="mobileAppBadge-image" src="<?php the_field('app_store_image_url', 'option'); ?>" alt=" uship on the app store">
	                  </a>
	                  <a class="footer-mobileAppBadges-badge" href="<?php the_field('google_play_link_url', 'option'); ?>" target="_blank">
	                    <img class="mobileAppBadge-image" src="<?php the_field('google_play_image_url', 'option'); ?>" alt="uShip on the Google Play Store">
	                  </a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </nav>
	  </div>
	  <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'container_class' => 'secondary-menu', 'fallback_cb' => 'false' ) ); ?>
	</header>
	<main role="main" class="content-newHeader content-newFooter">
