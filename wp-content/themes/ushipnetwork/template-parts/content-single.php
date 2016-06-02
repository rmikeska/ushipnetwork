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

	<a class="blog-return" href="<?php echo get_site_url(); ?>">All Posts</a>

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
	  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-feature' ); ?>
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
		      'caller_get_posts'=>1,
		      'orderby'=>'rand' // Randomize the posts
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
		<a class="button buttonPrimary buttonLarge" role="button" href="<?php echo get_site_url(); ?>">View All Articles</a>
	</div>
</section>



