<div class="post">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="post-featureImage" style="background-image: url('<?php echo $image[0]; ?>')"></div>
  <?php elseif (!has_post_thumbnail( $post->ID ) ): ?>
    <div class="post-featureImage emptyImage"></div>
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
  <h4 class="post-title"><?php the_title(); ?></h4>
  <a class="emphasisLink" target="_blank" href="<?php the_permalink();?>">Read Article</a>
</div>