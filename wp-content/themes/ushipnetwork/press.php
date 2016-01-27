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
 * template name: Press
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>
  <?php include("template-parts/acf-modules/body-content.php");?>
  <?php include("template-parts/acf-modules/bottom-content.php");?>

<?php get_footer(); ?>