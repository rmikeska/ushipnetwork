<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ushipnetwork
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
	  <img class="post-featureImage" src="<?php echo $image[0]; ?>">
	<?php elseif (!has_post_thumbnail( $post->ID ) ): ?>
	  <img class="post-featureImage emptyImage" src="/wp-content/themes/ushipnetwork/images/empty_image_thumbnail_2x.jpg">
	<?php endif; ?>

	<div class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php ushipnetwork_posted_on(); ?>
		</div>
	</div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ushipnetwork' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<div class="entry-footer">
		<?php ushipnetwork_entry_footer(); ?>
	</div>
</article>

