<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ushipnetwork
 */

?>
  </main>

  <footer role="contentinfo">
      <div class="footerDisplay">
          <div class="footerNew">
              <svg style="display: none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <symbol id="svgicon-facebook_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm2.4 11h-1.5v5.5h-2.2V12H9.5v-1.9h1.2V8.6c0-1.4.7-2.1 2.4-2.1h1.5v1.9h-1.2c-.4 0-.5.2-.5.6v1.1h1.7l-.2 1.9z"></path></symbol>
                  <symbol id="svgicon-linkedin_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zM9.5 16.6H7.6v-6.1h1.9v6.1zm-1-6.9c-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1.6 0 1.1.5 1.1 1.1.1.6-.4 1.1-1.1 1.1zm8.1 6.9h-1.9v-3.2c0-.9-.3-1.4-1-1.4-.8 0-1.2.5-1.2 1.4v3.2h-1.8v-6.1h1.8v.8s.5-1 1.8-1 2.2.8 2.2 2.4.1 3.9.1 3.9z"></path></symbol>
                  <symbol id="svgicon-twitter_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm4.8 8.7c.1 3.3-2.3 6.9-6.6 6.9-1.3 0-2.5-.4-3.5-1 1.2.1 2.5-.2 3.4-1-1 0-1.9-.7-2.2-1.6.4.1.7 0 1 0-1.1-.2-1.9-1.2-1.9-2.3.3.2.7.3 1 .3-1-.7-1.3-2-.7-3.1 1.1 1.4 2.8 2.3 4.8 2.4-.3-1.4.8-2.8 2.3-2.8.7 0 1.3.3 1.7.7.5-.1 1-.3 1.5-.6-.2.5-.5 1-1 1.3.5-.1.9-.2 1.3-.4-.2.5-.6.9-1.1 1.2z"></path></symbol>
                  <symbol id="svgicon-youtube_icon" viewBox="1 1 22 22"><path d="M10.9 13.5l2.9-1.5-2.9-1.5z"></path><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm5.4 13c-.2 1.5-.8 1.7-1.9 1.8-1.6.1-5.3.1-7 0-1.2-.1-1.7-.3-1.9-1.8-.1-1.1-.1-3 0-4 .2-1.5.8-1.7 1.9-1.8 1.6-.1 5.3-.1 7 0 1.2.1 1.7.3 1.9 1.8.1 1.1.1 2.9 0 4z"></path></symbol>
              </svg>
              <div class="topRow">
                  <div class="footer-companyInfo">
                      <a class="footer-companyInfo-link" href="<?php the_field('company_link_url', 'option'); ?>"><?php the_field('company_link_text', 'option'); ?></a>
                      <a class="footer-companyInfo-link" href="<?php the_field('careers_link_url', 'option'); ?>"><?php the_field('careers_link_text', 'option'); ?></a>
                      <a class="footer-companyInfo-link" href="<?php the_field('press_link_url', 'option'); ?>"><?php the_field('press_link_text', 'option'); ?></a>
                      <a class="footer-companyInfo-link" href="<?php the_field('blog_link_url', 'option'); ?>"><?php the_field('blog_link_text', 'option'); ?></a>
                      <a class="footer-companyInfo-link" href="<?php the_field('categories_link_url', 'option'); ?>"><?php the_field('categories_link_text', 'option'); ?></a>
                  </div>
                  <div class="footer-socialMediaIcons">
                      <a class="footer-socialMediaIcons-link" href="<?php the_field('facebook_link_url', 'option'); ?>" target="_blank">
                          <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-facebook_icon"></use></svg>
                      </a>
                      <a class="footer-socialMediaIcons-link" href="<?php the_field('twitter_link_url', 'option'); ?>" target="_blank">
                          <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-twitter_icon"></use></svg>
                      </a>
                      <a class="footer-socialMediaIcons-link" href="<?php the_field('youtube_link_url', 'option'); ?>" target="_blank">
                          <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-youtube_icon"></use></svg>
                      </a>
                      <a class="footer-socialMediaIcons-link" href="<?php the_field('linkedin_link_url', 'option'); ?>" target="_blank">
                          <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-linkedin_icon"></use></svg>
                      </a>
                  </div>
              </div>
              <div class="bottomRow">
                  <div class="footer-copyrightTerms">
                      <div class="footer-copyright">
                          <?php the_field('copyright_text', 'option'); ?>
                      </div>
                      <div class="footer-terms">
                          <a class="footer-terms-link" href="<?php the_field('user_agreement_link_url', 'option'); ?>"><?php the_field('user_agreement_link_text', 'option'); ?></a>
                          <a class="footer-terms-link" href="<?php the_field('privacy_policy_link_url', 'option'); ?>"><?php the_field('privacy_policy_link_text', 'option'); ?></a>
                          <a class="footer-terms-link" href="<?php the_field('site_map_link_url', 'option'); ?>"><?php the_field('site_map_link_text', 'option'); ?></a>
                      </div>
                  </div>
                  <div class="footer-mobileAppBadges">
                      <a class="footer-mobileAppBadges-badge" href="<?php the_field('app_store_link_url', 'option'); ?>" target="_blank">
                          <img class="mobileAppBadge-image" src="<?php the_field('app_store_image_url', 'option'); ?>" alt=" uship on the app store">
                      </a>
                      <a class="footer-mobileAppBadges-badge" href="<?php the_field('google_play_link_url', 'option'); ?>" target="_blank">
                          <img class="mobileAppBadge-image" src="<?php the_field('google_play_image_url', 'option'); ?>" alt="uShip on the Google Play Store">
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </footer>
<!-- .pageWrapper -->
</div>

<?php wp_footer(); ?>

</body>
</html>
