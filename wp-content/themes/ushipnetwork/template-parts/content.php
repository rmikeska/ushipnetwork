<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ushipnetwork
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-feature' ); ?>
	  <img class="post-featureImage" src="<?php echo $image[0]; ?>">
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php ushipnetwork_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_excerpt( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'ushipnetwork' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ushipnetwork' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
