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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="pageWrapper">
	<header class="pageHeader">
		<a class="pageHeader-homeLink" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="pageHeader-logo"></div>
		</a>
		<nav class="pageHeader-primaryNav">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ushipnetwork' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
		<nav class="pageHeader-subNav">
			<?php wp_nav_menu( array('menu' => 'About Sub Nav', 'items_wrap' => '<ul><li class="pageHeader-subNav-title">About</li>%3$s</ul>' ) ); ?>
		</nav>
	</header>

	<main class="pageContent">
