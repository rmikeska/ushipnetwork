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

<script type="text/javascript">
  var parentPageTitle = '<?php echo $parentTitle; ?>';
  var parentPageURL = '<?php echo $parentURL; ?>';
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

      <li><a href="<?php the_sub_field('tabbed_page_page'); ?>" rel="tab"><?php the_sub_field('tabbed_page_page_menu_title'); ?></a></li>

    <?php endwhile; ?>
  <?php endif; ?>
  </ul>
</div>

<div class="tabContent">
  <?php include("template-parts/acf-modules/body-content.php");?>
</div>

<?php get_footer(); ?>