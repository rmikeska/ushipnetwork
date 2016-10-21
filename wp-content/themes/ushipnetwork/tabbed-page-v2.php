<?php
/**
 * @package ushipnetwork
 *
 * template name: Tabbed Page v2
 */

get_header(); ?>

<?php global $post; ?>
<?php $parentTitle = get_the_title($post); ?>
<?php $parentURL = get_permalink($post); ?>

<script type="text/javascript">
  var parentPageTitle = '<?php echo $parentTitle; ?>';
  var parentPageURL = '<?php echo $parentURL; ?>';
</script>

<?php include("template-parts/acf-modules/top-content.php");?>

<div class="tabbedPageMenu">
  <ul class="tabbedPageMenu-list">
  <?php if (have_rows('tabbed_page_content')): ?>
    <?php while (have_rows('tabbed_page_content')) : the_row(); ?>

      <li><a href="<?php the_sub_field('tabbed_page_page'); ?>" rel="tab"><?php the_sub_field('tabbed_page_page_menu_title'); ?></a></li>

    <?php endwhile; ?>
  <?php endif; ?>
  </ul>
</div>

<div class="tabContent"></div>

<?php get_footer(); ?>