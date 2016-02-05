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
		'<span>' . esc_html( get_the_author() ) . '</span>'
	);

	echo '<div class="posted-on">' . $posted_on . '<div class="share">' . 'Share';

	include("share.php");

	echo '</div>' . '</div>';

	echo '<div class="byline">' . $byline . '<span class="cat-list">tags: ';

	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	if ( ! empty( $categories ) ) {
	    foreach( $categories as $category ) {
	        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
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
			'<span>' . esc_html( get_the_author() ) . '</span>'
		);

		echo '<div class="footer-byline">' . $byline . '<div class="share">' . 'Share';

		include("share.php");

		echo '</div>' . '</div>';

		echo '<span class="cat-list">tags: ';

		$categories = get_the_category();
		$separator = ', ';
		$output = '';
		if ( ! empty( $categories ) ) {
		    foreach( $categories as $category ) {
		        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
		    }
		    echo trim( $output, $separator );
		}

		echo '</span>';
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'ushipnetwork' ), esc_html__( '1 Comment', 'ushipnetwork' ), esc_html__( '% Comments', 'ushipnetwork' ) );
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
