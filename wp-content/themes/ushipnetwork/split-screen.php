<?php
/**
 * @package ushipnetwork
 *
 * template name: Split Screen
 */

get_header(); ?>

<section class="splitScreen">
  <div class="splitScreen-panel panelLeft" style="background-image: url('/wp-content/uploads/Shipper_SpiltScreen_v2_1x.jpg');">
    <div class="splitScreen-panel-container">
      <h1 class="splitScreen-panel-headline">I'm a Shipper</h1>
      <div class="splitScreen-panel-arrow"></div>
      <h3 class="splitScreen-panel-subheadline">I have stuff I need to get from A to B</h3>
    </div>
  </div>
  <div class="splitScreen-panel panelRight" style="background-image: url('/wp-content/uploads/Carrier_SpiltScreen_1x.jpg');">
    <div class="splitScreen-panel-container">
      <h1 class="splitScreen-panel-headline">I'm a Carrier</h1>
      <div class="splitScreen-panel-arrow"></div>
      <h3 class="splitScreen-panel-subheadline">I have stuff I need to get from A to B</h3>
    </div>
  </div>
</section>

<?php get_footer(); ?>