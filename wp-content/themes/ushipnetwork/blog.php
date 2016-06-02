<?php
/**
 * @package ushipnetwork
 *
 * template name: Blog
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>

  <?php

    echo '<div class="categoryMenu">'.'<ul class="categoryMenu-list">';

    echo '<li class="categoryMenu-active"><a class="catall">All Posts</a></li>';

    $catIDs = get_cat_ID( $cat_name='Company News' );
    $catIDs .= ',' . get_cat_ID( $cat_name='Tips' );
    $catIDs .= ',' . get_cat_ID( $cat_name='Just For Fun' );
    $catIDs .= ',' . get_cat_ID( $cat_name='Shipping Code' );

    $cats = get_categories('include='.$catIDs);
    foreach($cats as $cat) {
      $cat_id= $cat->term_id;
      echo '<li><a class="cat'.$cat_id.'">'.$cat->name.'</a></li>';
    }

    echo '</ul>'.'</div>';

    echo '<div class="postsGroup">';

    echo '<div class="postsGroup-container catall">';


    $catIDs = '-' . get_cat_ID( $cat_name='Shipping Code' );
    query_posts("cat=$catIDs&posts_per_page=12");

    if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php include("template-parts/post-thumb.php");?>

    <?php endwhile; endif;

    echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="12" offset="12" pause="true" scroll="false" transition="fade" button_label="Load More Articles"]');
    echo '</div>';

    foreach ($cats as $cat) {
      $cat_id= $cat->term_id;
      echo '<div class="postsGroup-container cat'.$cat_id.'">';
      query_posts("cat=$cat_id&posts_per_page=12");

      if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php include("template-parts/post-thumb.php");?>

      <?php endwhile; endif; echo '</div>';?>

    <?php }
    echo '</div>';
  ?>

<?php get_footer(); ?>