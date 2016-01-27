<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ushipnetwork
 *
 * template name: Blog
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>

  <?php $cats = get_categories('include=3,4,5,6,7');

    echo '<div class="categoryMenu">'.'<ul class="categoryMenu-list">';

    echo '<li><a class="catall">All Posts</a></li>';

    foreach ($cats as $cat) {
      $cat_id= $cat->term_id;
      echo '<li><a class="cat'.$cat_id.'">'.$cat->name.'</a></li>';
    }

    echo '</ul>'.'</div>';

    echo '<div class="postsGroup">';

    echo '<div class="postsGroup-container catall">';
    query_posts("posts_per_page=12");

    if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php include("template-parts/post-thumb.php");?>

    <?php endwhile; endif;

    echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="12" offset="12" pause="true" scroll="false" transition="none" button_label="Load More Articles"]');
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