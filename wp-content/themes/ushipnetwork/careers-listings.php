<?php
/**
 * @package ushipnetwork
 *
 * template name: Careers Listings
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>

  <section>
    [feedzy-rss feeds="http://newton.newtonsoftware.com/career/CareerAtomFeed.action?clientId=8a788267569c34d80156b3030a450425"]
  </section>

<?php get_footer(); ?>