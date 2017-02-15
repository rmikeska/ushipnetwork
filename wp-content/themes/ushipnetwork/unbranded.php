<?php
/**
 * @package ushipnetwork
 *
 * template name: Unbranded
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php include("template-parts/favicons.php");?>

<?php wp_head(); ?>
</head>
<body role="application" <?php body_class(); ?>>
<div class="pageWrapper">
  <main role="main" class="content-newHeader content-newFooter">
    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>
  </main>
<!-- .pageWrapper -->
</div>

<?php wp_footer(); ?>

</body>
</html>