<?php
/**
 * @package ushipnetwork
 *
 * template name: Tabbed Page
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>

  <?php

  $thepages = array ('tabbed_page_1','tabbed_page_2','tabbed_page_3','tabbed_page_4','tabbed_page_5');

  echo '<div class="tabbedPageMenu"><ul class="tabbedPageMenu-list">';

  foreach ($thepages as $thepage) {

    if (have_rows($thepage)) : while (have_rows($thepage)) : the_row(); ?>

    <?php if (get_row_layout() == 'tab_info'): ?>

      <?php $tab_title = get_sub_field('tab_title'); ?>

      <li><a class="tab-<?php print (str_replace(' ', '-', strtolower($tab_title))); ?>" title="<?php print (str_replace(' ', '-', strtolower($tab_title))); ?>"><?php echo $tab_title; ?></a></li>

    <?php endif; ?>

    <?php endwhile; endif;?>
  <?php }

  echo '</ul></div>';

  echo '<section class="tabbedPageWrapper">';

  foreach ($thepages as $thepage) {

    if (have_rows($thepage)) : while (have_rows($thepage)) : the_row(); ?>

      <?php if (get_row_layout() == 'tab_info'): ?>

        <?php $tab_title = get_sub_field('tab_title'); ?>

        <div class="tabbedPage tab-<?php print (str_replace(' ', '-', strtolower($tab_title))); ?>" title="<?php print (str_replace(' ', '-', strtolower($tab_title))); ?>">

      <?php endif; ?>

      <?php include("template-parts/acf-modules/tabbed-page-content.php");?>

    <?php endwhile; endif; echo '</div>';?>
  <?php }

  echo '</section>';

  ?>

<?php get_footer(); ?>