<div class="postThumb">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumb' ); ?>
    <a class="post-featureImage-link" href="<?php the_permalink();?>">
      <img class="post-featureImage" src="<?php echo $image[0]; ?>">
    </a>
  <?php elseif (!has_post_thumbnail( $post->ID ) ): ?>
    <a class="post-featureImage-link" href="<?php the_permalink();?>">
      <img class="post-featureImage emptyImage" src="/wp-content/themes/ushipnetwork/images/empty_image_thumbnail_2x.jpg">
    </a>
  <?php endif; ?>
  <div class="post-tag-group">
    <?php
    $posttags = get_the_tags();
    $count = 0;
    $separator = ', ';
    $output = '';
    if ( ! empty( $posttags ) ) {
        foreach( $posttags as $posttag ) {
            $count++;
            if ($count <= 2 ) {
              $output .= '<a class="post-tag" href="' . esc_url( get_tag_link( $posttag->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $posttag->name ) ) . '">' . esc_html( $posttag->name ) . '</a>' . $separator;
            }
        }
        echo trim( $output, $separator );
    }
    ?>
  </div>
  <a class="post-title" href="<?php the_permalink();?>"><?php echo short_title('...', 70); ?></a>
  <a class="tertiaryLink tertiaryLinkDark" role="button" href="<?php the_permalink();?>">Read Article<?php include( get_template_directory() . '/images/arrow_link.svg'); ?></a>
</div>