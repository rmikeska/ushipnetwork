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

  <?php if (have_rows('top_content')): ?>
    <?php while (have_rows('top_content')) : the_row(); ?>
      <?php if (get_row_layout() == 'hero'): ?>

        <?php include("template-parts/acf-modules/hero.php");?>

      <?php endif; ?>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php $cats = get_categories('include=3,4,5,6,7');

    echo '<div class="catmenu">';

    echo '<li class="catall"><a>All Posts</a></li>';

    foreach ($cats as $cat) {
      $cat_id= $cat->term_id;
      echo '<li class="cat'.$cat_id.'">';
      echo '<a>'.$cat->name.'</a>';
      echo '</li>';
    }

    echo '</div>';

    echo '<div class="posts">';

    echo '<div class="posts-container catall">';
    query_posts("posts_per_page=12");

    if (have_posts()) : while (have_posts()) : the_post(); ?>

      <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

    <?php endwhile; endif;

    echo '</div>';

    foreach ($cats as $cat) {
      $cat_id= $cat->term_id;
      echo '<div class="posts-container cat'.$cat_id.'">';
      query_posts("cat=$cat_id&posts_per_page=12");

      if (have_posts()) : while (have_posts()) : the_post(); ?>

        <a href="<?php the_permalink();?>"><?php the_title(); ?></a>

      <?php endwhile; endif; echo '</div>';?>

    <?php }
    echo '</div>';
  ?>

<?php get_footer(); ?>