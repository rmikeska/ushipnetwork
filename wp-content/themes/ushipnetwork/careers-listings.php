<?php
/**
 * @package ushipnetwork
 *
 * template name: Careers Listings
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>

  <section>
    <!-- <script id="gnewtonjs" type="text/javascript" src="//newton.newtonsoftware.com/career/iframe.action?clientId=8a788267569c34d80156b3030a450425"></script> -->
    <?php

    $i = 0;
    $url = "http://newton.newtonsoftware.com/career/CareerAtomFeed.action?clientId=8a788267569c34d80156b3030a450425";
    $feed = simplexml_load_file($url);

    foreach($feed->entry as $entry) {
      if ($i < 10) { // parse only 10 items
        print '<a href="'.$entry->link.'">'.$entry->title.'</a><br />';
      }
      $i++;
    }

    ?>
  </section>

<?php get_footer(); ?>