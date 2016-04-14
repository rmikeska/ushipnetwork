<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ushipnetwork
 */

get_header(); ?>

	<section class="error404">
		<div class="error404-container">
			<h1 class="error404-headline"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ushipnetwork' ); ?></h1>
		</div>
	</section>

<?php get_footer(); ?>
