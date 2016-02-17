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
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="pageWrapper">
	<header class="pageHeader">
		<div class="pageHeader-primaryRow">
			<a class="pageHeader-homeLink" href="//www.uship.com/">
				<div class="pageHeader-logo"></div>
			</a>
			<nav class="pageHeader-primaryNav">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ushipnetwork' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu', 'container_class' => 'secondary-menu', 'fallback_cb' => 'false' ) ); ?>
	</header>

	<main class="pageContent">
