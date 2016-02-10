<section class="careersListings">

  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('style').remove();

      $('.resumator-job-view-details').remove();

      $('.resumator-job-link').remove();

      $('.resumator-job-info-details').each( function() {
        $(this).append('<a class="resumator-view-details">View Details</a>');
      });

      $('.resumator-view-details').click(function () {
        $(this).parent().next().slideToggle('fast');
        $('.resumator-job-description').not($(this).parent().next()).slideUp('fast');
      });
    })
  </script>

  <script type="text/javascript" src="//app.jazz.co/widgets/basic/create/uShip" charset="utf-8"></script>

</section>