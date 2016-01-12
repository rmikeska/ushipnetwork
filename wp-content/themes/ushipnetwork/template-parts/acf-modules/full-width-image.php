<?php $full_width_image_image = get_sub_field('full_width_image_image'); ?>
<?php $size = 'full'; ?>


<section class="fullWidthImage">
  <?php echo wp_get_attachment_image( $full_width_image_image, $size, false, array( 'class' => 'fullWidthImage-image' ) ); ?>
</section>