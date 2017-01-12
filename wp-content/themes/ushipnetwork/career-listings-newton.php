<?php
/**
 * @package ushipnetwork
 *
 * template name: Careers Listings - Newton
 */

get_header(); ?>

  <?php include("template-parts/acf-modules/top-content.php");?>

  <section class="careers">
    <div class="careers-container">
      <?php

      $i = 0;
      $url = "http://newton.newtonsoftware.com/career/CareerAtomFeed.action?clientId=8a788267569c34d80156b3030a450425";
      $feed = simplexml_load_file($url);
      $detailsLinkText = "View Details";
      $arrowIcon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68 45.56"><defs></defs><path fill-rule:evenodd; d="M49.43,44h0A5.95,5.95,0,0,1,41,35.62h0l6.67-6.67H6A6,6,0,0,1,6,17H47.68L41,10.38h0A5.95,5.95,0,1,1,49.43,2h0L66.26,18.79h0a6,6,0,0,1,0,8.42h0Z" transform="translate(0 -0.22)"/></svg>';
      $locationText = 'Location';

      foreach ( $feed->entry as $entry ) {
        if ($i < 20) {

          // Get Newton namespaces
          $namespaces = $entry->getNameSpaces( true );
          $newton = $entry->children( $namespaces['newton'] );

          echo '<div class="careers-entry">';
            echo '<div class="careers-entry-text">';
              echo '<h4 class="careers-entry-title">'.$entry->title.'</h4>';
              echo '<span class="careers-entry-info"><span class="careers-entry-info-title">'.$locationText.': '.'</span>'.$newton->location.', '.$newton->state.'</span>';
            echo '</div>';
            echo '<div class="careers-entry-link">';
              echo '<a class="tertiaryLink tertiaryLinkDark" type="button" href="'.$entry->link->attributes()->href.'">'.$detailsLinkText.''.$arrowIcon.'</a>';
            echo '</div>';
          echo '</div>';
        }
        $i++;
      }

      ?>
    </div>
  </section>

<?php get_footer(); ?>