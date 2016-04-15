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

  <div class="footerNew">
    <svg style="display: none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
      <symbol id="svgicon-facebook_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm2.4 11h-1.5v5.5h-2.2V12H9.5v-1.9h1.2V8.6c0-1.4.7-2.1 2.4-2.1h1.5v1.9h-1.2c-.4 0-.5.2-.5.6v1.1h1.7l-.2 1.9z"></path></symbol>
      <symbol id="svgicon-linkedin_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zM9.5 16.6H7.6v-6.1h1.9v6.1zm-1-6.9c-.6 0-1.1-.5-1.1-1.1 0-.6.5-1.1 1.1-1.1.6 0 1.1.5 1.1 1.1.1.6-.4 1.1-1.1 1.1zm8.1 6.9h-1.9v-3.2c0-.9-.3-1.4-1-1.4-.8 0-1.2.5-1.2 1.4v3.2h-1.8v-6.1h1.8v.8s.5-1 1.8-1 2.2.8 2.2 2.4.1 3.9.1 3.9z"></path></symbol>
      <symbol id="svgicon-twitter_icon" viewBox="1 1 22 22"><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm4.8 8.7c.1 3.3-2.3 6.9-6.6 6.9-1.3 0-2.5-.4-3.5-1 1.2.1 2.5-.2 3.4-1-1 0-1.9-.7-2.2-1.6.4.1.7 0 1 0-1.1-.2-1.9-1.2-1.9-2.3.3.2.7.3 1 .3-1-.7-1.3-2-.7-3.1 1.1 1.4 2.8 2.3 4.8 2.4-.3-1.4.8-2.8 2.3-2.8.7 0 1.3.3 1.7.7.5-.1 1-.3 1.5-.6-.2.5-.5 1-1 1.3.5-.1.9-.2 1.3-.4-.2.5-.6.9-1.1 1.2z"></path></symbol>
      <symbol id="svgicon-youtube_icon" viewBox="1 1 22 22"><path d="M10.9 13.5l2.9-1.5-2.9-1.5z"></path><path d="M12 1C5.9 1 1 5.9 1 12s4.9 11 11 11 11-4.9 11-11S18.1 1 12 1zm5.4 13c-.2 1.5-.8 1.7-1.9 1.8-1.6.1-5.3.1-7 0-1.2-.1-1.7-.3-1.9-1.8-.1-1.1-.1-3 0-4 .2-1.5.8-1.7 1.9-1.8 1.6-.1 5.3-.1 7 0 1.2.1 1.7.3 1.9 1.8.1 1.1.1 2.9 0 4z"></path></symbol>
    </svg>
    <div class="topRow">
      <div class="footer-companyInfo">
        <a class="footer-companyInfo-link" href="https://about.uship.com/"> Company</a>
        <a class="footer-companyInfo-link" href="https://about.uship.com/careers/"> Careers </a>
        <a class="footer-companyInfo-link" href="https://about.uship.com/press/">Press</a>
        <a class="footer-companyInfo-link" href="https://about.uship.com/blog/">Blog</a>
        <a class="footer-companyInfo-link" href="https://developer.uship.com/">Developers</a>
      </div>
      <div class="footer-socialMediaIcons">
        <a class="footer-socialMediaIcons-link" href="https://www.facebook.com/uShip/" target="_blank">
            <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-facebook_icon"></use></svg>
        </a>
        <a class="footer-socialMediaIcons-link" href="https://twitter.com/uShip" target="_blank">
            <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-twitter_icon"></use></svg>
        </a>
        <a class="footer-socialMediaIcons-link" href="https://www.youtube.com/user/uShipVideo" target="_blank">
            <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-youtube_icon"></use></svg>
        </a>
        <a class="footer-socialMediaIcons-link" href="https://www.linkedin.com/groups/2349367/profile" target="_blank">
            <svg class="footer-socialMediaIcons-icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svgicon-linkedin_icon"></use></svg>
        </a>
      </div>
      <div class="footer-countryChanger">
        <select id="siteDropdownSelect" class="js-siteDropdownSelect">
          <option value="https://www.uship.com/?siteId=UnitedStates" selected="">United States</option>
          <option value="https://www.uship.com/ca/">Canada</option>
          <option value="https://www.uship.com/uk/">United Kingdom</option>
          <option value="https://www.uship.com/eu/">European Union</option>
          <option value="https://www.uship.com/au/">Australia</option>
          <option value="https://www.uship.com/in/">India</option>
          <option value="https://www.uship.com/?siteId=GlobalSite">Global</option>
          <option value="https://www.uship.com/de/">Deutschland</option>
          <option value="https://www.uship.com/fr/">France</option>
          <option value="https://www.uship.com/nl/">Nederland</option>
          <option value="https://www.uship.com/es/">España</option>
          <option value="https://www.uship.com/mx/">México</option>
          <option value="https://www.uship.com/za/">South Africa</option>
          <option value="https://www.uship.com/at/">Österreich</option>
          <option value="https://www.uship.com/br/">Brasil</option>
          <option value="https://www.uship.com/ar/">Argentina</option>
          <option value="https://www.uship.com/cl/">Chile</option>
          <option value="https://www.uship.com/pe/">Perú</option>
          <option value="https://www.uship.com/co/">Colombia</option>
          <option value="https://www.uship.com/ve/">Venezuela</option>
        </select>

        <script type="text/javascript">
            var siteDropdowns = [].slice.call(document.querySelectorAll('.js-siteDropdownSelect'));
            siteDropdowns.forEach(function (siteDropdown) {
                siteDropdown.onchange = function () {
                    window.location = this.options[this.selectedIndex].value;
                }
            });
        </script>
      </div>
    </div>
    <div class="bottomRow">
      <div class="footer-copyrightTerms">
        <div class="footer-copyright">
            Copyright © 2016, uShip Inc. and its licensors. All rights reserved.
        </div>
        <div class="footer-terms">
          <a class="footer-terms-link" href="https://www.uship.com/user_agreement.aspx">uShip User Agreement</a>
          <a class="footer-terms-link" href="https://www.uship.com/privacy.aspx">Privacy Policy</a>
          <a class="footer-terms-link" href="https://www.uship.com/sitemap.aspx">Site Map</a>
        </div>
      </div>
      <div class="footer-mobileAppBadges">
        <a class="footer-mobileAppBadges-badge" href="https://itunes.apple.com/us/app/uship-for-iphone/id457045275?mt=8&amp;ign-mpt=uo%3D4" target="_blank">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIgAAAApCAMAAADZJJErAAAAM1BMVEX///+ZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZk2L/xDAAAAEHRSTlMAECAwQFBgcICQoLDA0ODwVOCoyAAAAxZJREFUeAHtl4tq7DgQREtyS2q96/+/dpEbxzsezHDZgGfhHoxRhMCnqxyHAHDyOA4AdPJxpgKJX0HC5FcwwS/h/yHSv0NEnfBCltRuTjf5vHOAPxKJQOIFIUv4byKp/aGIAujvImQcnFkLmciw7qWlOPfH9pwHWddtas4mUnX9nHPsu52Pg+ixkrPkwc8izgJ5FynKXNelrcfWMzUylCUyI+eeV+oslWUXGXHt081qUUoj0bsndTJ+FmmHx3simUK2xK55pNypyhaWSNX9RG2ijEc1uZCyXzhFSOkMqmF+FBkW27tI93OfeHWTmRJ3EVnXSKRw6Nop/UgkrUROkVhNpK2OyXuRWYLEuquISHrVEZE4yKGik0yFWU+RtYqdU3JSzqhduNAY+ynCunUTYddU7kWaw8IngaHPfEca3ihPiEyHK/GRRDKuCB8REVxpz4jgiuOVJMJPTHWAz78pIm/PgEP95LHBp+DSWo/5OyIbLxSUj+9vRjyX7XdEcB0ogN7RuAw8joWcT9ef5ei8MPq9yIYr+SoemKwbRasekKUCzAi4wp2ESOOn3nXSpf2oMLpmO77eiURcca+DVBR2RBMRn9TBTxIQyQKYyXCIFo8KohZSAS1uV4Iots4CacWj3YhUfDCJmKR3JoJOToGSNnaDs6a6x65yVDOAsR8tJLA1cjpPckJuROjwzuCJ2/bol5xaMBkbCRvtnLB4m8BEFGJjBtJiK9b5hjuRhDf8S2JeRDwSSYXSpiUBy8u2eAgeImL7DZ60wRTGrch4j6S+NLOJiMCfIv1GhILxJrIdRxVBd+5EqLgQXppztEQ7qQg2uZAwXYf2b+l2qaZYNcfSuBOh4AU3X5oJFjsSqfYGbvYGRivu/KBMYBzvwgD68X0xkekwPohMf/9HLx2/n/BLxCEmh40k4LzKUWPwQTeg7Dou6fJxuQgiDxEWrHKk3YtwCBDrZE8e/sWDHpM/3SikOCCuLaCG8/tUBEBoxzqRrBvgC08RtgDgVsSY/MxRvAG05/4J/yvyiMgDYPArGAj8CgIQBh9nBPwDi+Ygs0Pj03MAAAAASUVORK5CYII=">
        </a>
        <a class="footer-mobileAppBadges-badge" href="https://play.google.com/store/apps/details?id=com.unwirednation.notifications.android.ushipnew&amp;hl=en" target="_blank">
            <img src="data:image/png;base64,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">
        </a>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
