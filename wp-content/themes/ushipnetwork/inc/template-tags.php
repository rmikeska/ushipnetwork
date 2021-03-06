<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ushipnetwork
 */

if ( ! function_exists( 'ushipnetwork_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function ushipnetwork_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'ushipnetwork' ), $time_string
	);

	$byline = sprintf(
		esc_html_x( 'by %s', 'post author', 'ushipnetwork' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<div class="posted-on">' . $posted_on . '<div class="share">';

	include("share.php");

	echo '</div>' . '</div>';

	echo '<div class="byline">' . '<div class="authorship">' . $byline . '</div>';

	$posttags = get_the_tags();
	$count= 0;
	$separator = ', ';
	$output = '';
	if ( ! empty( $posttags ) ) {
			echo '<span class="tag-list">tags: ';
			foreach( $posttags as $posttag ) {
					$count++;
					if ($count <= 2 ) {
						$output .= '<a href="' . esc_url( get_tag_link( $posttag->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $posttag->name ) ) . '">' . esc_html( $posttag->name ) . '</a>' . $separator;
					}
			}
	    echo trim( $output, $separator );
	}

	echo '</span>' . '</div>';

}
endif;

if ( ! function_exists( 'ushipnetwork_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function ushipnetwork_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'ushipnetwork' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);

		echo '<div class="byline">' . '<div class="authorship">' . $byline . '</div>' . '<div class="share">';

		include("share.php");

		echo '</div>' . '</div>';

		$posttags = get_the_tags();
		$count= 0;
		$separator = ', ';
		$output = '';
		if ( ! empty( $posttags ) ) {
				echo '<span class="tag-list">tags: ';
		    foreach( $posttags as $posttag ) {
		    		$count++;
		    		if ($count <= 2 ) {
		    			$output .= '<a href="' . esc_url( get_tag_link( $posttag->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $posttag->name ) ) . '">' . esc_html( $posttag->name ) . '</a>' . $separator;
		    		}
		    }
		    echo trim( $output, $separator );
		}

		echo '</span>';
	}

	edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'ushipnetwork' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function ushipnetwork_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'ushipnetwork_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'ushipnetwork_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so ushipnetwork_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so ushipnetwork_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in ushipnetwork_categorized_blog.
 */
function ushipnetwork_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'ushipnetwork_categories' );
}
add_action( 'edit_category', 'ushipnetwork_category_transient_flusher' );
add_action( 'save_post',     'ushipnetwork_category_transient_flusher' );
