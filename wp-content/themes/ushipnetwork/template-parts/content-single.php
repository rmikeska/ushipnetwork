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

	<a class="blog-return" href="<?php echo get_site_url(); ?>">
		<?php include( get_template_directory() . '/images/circled_arrow.svg'); ?>
		<span>All Posts</span>
	</a>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-feature' ); ?>
	  <img class="post-featureImage" src="<?php echo $image[0]; ?>">
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

		<?php if (have_rows('blog_post_content')): ?>
		  <?php while (have_rows('blog_post_content')) : the_row(); ?>
		    <?php if (get_row_layout() == 'blog_post_entry_footer'): ?>
	    		<div class="postCallout-container">
		    		<?php while(have_rows('blog_post_entry_footer_cta')): the_row(); ?>
		    			<a class="button buttonPrimary buttonLarge" type="button" aria-label="<?php the_sub_field('blog_post_entry_footer_cta_text'); ?>" href="<?php the_sub_field('blog_post_entry_footer_cta_url'); ?>" onclick="<?php the_sub_field('blog_post_entry_footer_onclick'); ?>">
		    				<div class="button-content"><?php the_sub_field('blog_post_entry_footer_cta_text'); ?></div>
		    			</a>
		    		<?php endwhile; ?>
	    		</div>
		    <?php endif; ?>
		  <?php endwhile; ?>
		<?php endif; ?>
	</div>

	<div class="entry-footer">
		<?php ushipnetwork_entry_footer(); ?>
	</div>

	<?php
	  // If comments are open or we have at least one comment, load up the comment template.
	  if ( comments_open() || get_comments_number() ) :
	  	// Display comments only for Shipping Code post category
	  	if (in_category('shippingcode')) comments_template();
	  endif;
	?>

</article>

<section class="relatedPosts">
	<div class="relatedPosts-container">
		<h3 class="relatedPosts-intro">You May Also Like</h3>
		<?php
		  $orig_post = $post;
		  global $post;
		  $categories = get_the_category($post->ID);
		  if ($categories) {
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		      'category__in' => $category_ids,
		      'post__not_in' => array($post->ID),
		      'posts_per_page'=> 3, // Number of related posts that will be displayed.
		      'ignore_sticky_posts'=>1,
		      'orderby'=>'date' // Show most recent posts
		    );
		    $my_query = new wp_query( $args );
		    if( $my_query->have_posts() ) {
		    	echo '<div class="relatedPosts-strip">';
		      while( $my_query->have_posts() ) {
		        $my_query->the_post();
		        include("post-thumb.php");
		      }
		      echo '</div>';
		    }
		  }
		  $post = $orig_post;
		  wp_reset_query();
		?>
	</div>
</section>

<section class="postBookend">
	<div class="postBookend-container">
		<a class="button buttonSecondary buttonSmall" type="button" aria-label="View All Articles" href="<?php echo get_site_url(); ?>">
			<div class="button-content">View All Articles</div>
		</a>
	</div>
</section>