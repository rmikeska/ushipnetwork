<div class="post">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <a class="post-featureImage-link" href="<?php the_permalink();?>">
      <img class="post-featureImage" src="<?php echo $image[0]; ?>">
    </a>
  <?php elseif (!has_post_thumbnail( $post->ID ) ): ?>
    <a class="post-featureImage-link" href="<?php the_permalink();?>">
      <img class="post-featureImage emptyImage" src="/wp-content/themes/ushipnetwork/images/empty_image_thumbnail.jpg">
    </a>
  <?php endif; ?>
  <div class="post-tag-group">
    <?php
    $categories = get_the_category();
    $separator = ', ';
    $output = '';
    if ( ! empty( $categories ) ) {
        foreach( $categories as $category ) {
            $output .= '<a class="post-tag" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
        }
        echo trim( $output, $separator );
    }
    ?>
  </div>
  <a class="post-title" href="<?php the_permalink();?>"><?php the_title(); ?></a>
  <a class="emphasisLink" href="<?php the_permalink();?>">Read Article</a>
</div>