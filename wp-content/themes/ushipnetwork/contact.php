<?php
/**
 * @package ushipnetwork
 *
 * template name: Contact
 */

get_header(); ?>

  <section class="contactForm">
    <div class="contactForm-container">
      <h3 class="contactForm-intro">Get Answers</h3>
      <h6 class="contactForm-subintro">We're here to help. Feel free to send us an email below.</h6>
      <div class="contactForm-row">
        <div class="contactForm-box">
          <?php include("template-parts/forms/form-contact.php");?>
        </div>
        <div class="contactForm-box">
          <h3 class="form-intro">Call Us</h3>
          <div class="form-divider"></div>
          <div class="contactForm-box-section">
            <span class="contactForm-box-section-title">Phone</span>
            <p class="contactForm-box-section-body">800-698-7447 Ext. 2</p>
          </div>
          <div class="contactForm-box-section">
            <span class="contactForm-box-section-title">Hours</span>
            <p class="contactForm-box-section-body">
              Monday: 7:00 AM - 7:00 PM CST<br>
              Tuesday: 7:00 AM - 7:00 PM CST<br>
              Wednesday: 7:00 AM - 7:00 PM CST<br>
              Thursday: 7:00 AM - 7:00 PM CST<br>
              Friday: 7:00 AM - 5:00 PM CST<br>
              Saturday: 10:00 AM - 4:00 PM CST<br>
            </p>
          </div>
        </div>
      </div>
      </div>
  </section>

<?php get_footer(); ?>