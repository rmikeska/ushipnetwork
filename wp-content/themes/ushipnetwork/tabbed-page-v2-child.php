<?php
/**
 * @package ushipnetwork
 *
 * template name: Tabbed Page v2 - Child
 */

get_header(); ?>

<?php global $post; ?>
<?php $parent = $post->post_parent; ?>
<?php $parentTitle = get_the_title($parent); ?>
<?php $parentURL = get_permalink($parent); ?>
<?php $siteTitle = get_bloginfo(); ?>

<script type="text/javascript">
  var parentPageTitle = '<?php echo $parentTitle; ?>';
  var parentPageURL = '<?php echo $parentURL; ?>';
  var siteTitle = '<?php echo $siteTitle; ?>';
</script>

<?php if (have_rows('top_content', $parent)): ?>
  <?php while (have_rows('top_content', $parent)) : the_row(); ?>
    <?php if (get_row_layout() == 'hero'): ?>

      <?php include("template-parts/acf-modules/hero.php");?>

    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>


<div class="tabbedPageMenu">
  <ul class="tabbedPageMenu-list">
  <?php if (have_rows('tabbed_page_content', $parent)): ?>
    <?php while (have_rows('tabbed_page_content', $parent)) : the_row(); ?>

      <li><a href="<?php the_sub_field('tabbed_page_page'); ?>"><?php the_sub_field('tabbed_page_page_menu_title'); ?></a></li>

    <?php endwhile; ?>
  <?php endif; ?>
  </ul>
</div>

<div class="tabContent">
  <div class="bodyContent">
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.introSlide-slideshow').each(function () {
            if ($(this).children().length == 4) {
                $(this).addClass('slides4');
            } else if ($(this).children().length == 3) {
                $(this).addClass('slides3');
            } else if ($(this).children().length == 2) {
                $(this).addClass('slides2');
            } else if ($(this).children().length == 1) {
                $(this).addClass('slides1');
            }
        });
    })
  </script>
  <?php include("template-parts/acf-modules/body-content.php");?>
  <?php include("template-parts/acf-modules/bottom-content.php");?>
  </div>
</div>

<?php get_footer(); ?>