<?php
/**
 * @package ushipnetwork
 *
 * template name: Tabbed Page
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>

  <?php

  $thepages = array ('tabbed_page_1','tabbed_page_2');

  echo '<div class="tabbedPageMenu"><ul>';

  foreach ($thepages as $thepage) {

    if (have_rows($thepage)) : while (have_rows($thepage)) : the_row(); ?>

    <?php if (get_row_layout() == 'tab_info'): ?>

      <li><a href=""><?php the_sub_field('tab_title'); ?></a></li>

    <?php endif; ?>

    <?php endwhile; endif;?>
  <?php }

  echo '</ul></div>';


  foreach ($thepages as $thepage) {

    if (have_rows($thepage)) : while (have_rows($thepage)) : the_row(); ?>

      <?php if (get_row_layout() == 'tab_info'): ?>

        <div class="<?php the_sub_field('tab_title'); ?>">

      <?php endif; ?>

      <?php include("template-parts/acf-modules/tabbed-page-content.php");?>

    <?php endwhile; endif; echo '</div>';?>
  <?php }

  ?>

<?php get_footer(); ?>