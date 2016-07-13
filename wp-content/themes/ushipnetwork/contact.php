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
            <p>800-698-7447 Ext. 2</p>
          </div>
          <div class="contactForm-box-section">
            <span class="contactForm-box-section-title">Hours</span>
            <ul>
              <li>Monday: 7:00 AM - 7:00 PM CST</li>
              <li>Tuesday: 7:00 AM - 7:00 PM CST</li>
              <li>Wednesday: 7:00 AM - 7:00 PM CST</li>
              <li>Thursday: 7:00 AM - 7:00 PM CST</li>
              <li>Friday: 7:00 AM - 5:00 PM CST</li>
              <li>Saturday: 10:00 AM - 4:00 PM CST</li>
            </ul>
          </div>
        </div>
      </div>
      </div>
  </section>

<?php get_footer(); ?>