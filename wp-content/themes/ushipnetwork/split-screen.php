<?php
/**
 * @package ushipnetwork
 *
 * template name: Split Screen
 */

get_header(); ?>

<section class="splitScreen">
  <div class="splitScreen-row">
    <a href="#" class="splitScreen-panel panelLeft" style="background-image: url('/wp-content/uploads/Shipper_SpiltScreen_v2_1x.jpg');">
      <div class="splitScreen-panel-container">
        <h1 class="splitScreen-panel-headline">I'm a Shipper</h1>
        <?php include("images/circled_arrow.svg");?>
        <h3 class="splitScreen-panel-subheadline">I have stuff I need to get from A to B.</h3>
      </div>
    </a>
    <a href="#" class="splitScreen-panel panelRight" style="background-image: url('/wp-content/uploads/Carrier_SpiltScreen_1x.jpg');">
      <div class="splitScreen-panel-container">
        <h1 class="splitScreen-panel-headline">I'm a Carrier</h1>
        <?php include("images/circled_arrow.svg");?>
        <h3 class="splitScreen-panel-subheadline">I have empty space in my truck I want to fill.</h3>
      </div>
    </a>
  </div>
  <div class="splitScreen-row">
    <a href="#" class="splitScreen-strip">
      <div class="splitScreen-strip-container">
        <h2 class="splitScreen-strip-headline">Business Shippers
          <span>
            <?php include("images/circled_arrow.svg");?>
          </span>
        </h2>
        <h4 class="splitScreen-strip-subheadline">Lorem ipsum dolor sit amet.</h4>
      </div>
    </a>
    <a href="#" class="splitScreen-strip">
      <div class="splitScreen-strip-container">
        <h2 class="splitScreen-strip-headline">Partnerships
          <span>
            <?php include("images/circled_arrow.svg");?>
          </span>
        </h2>
        <h4 class="splitScreen-strip-subheadline">Lorem ipsum dolor sit amet.</h4>
      </div>
    </a>
  </div>
</section>

<?php get_footer(); ?>