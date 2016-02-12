<section class="careersListings">

  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $('style').remove();

      $('.resumator-job-view-details').remove();

      $('.resumator-job-link').remove();

      $('.resumator-job').each( function() {
        $(this).prepend('<a class="resumator-view-details">View Details</a>');
      });

      $('.resumator-view-details').click(function () {
        $(this).siblings('.resumator-job-description').slideToggle('fast');
        $(this).toggleClass('arrow-closed');
        $(this).text(function (i, v) {
           return v === 'View Details' ? 'Hide Details' : 'View Details'
        })
      });
    })
  </script>

  <script type="text/javascript" src="//app.jazz.co/widgets/basic/create/uShip" charset="utf-8"></script>

</section>