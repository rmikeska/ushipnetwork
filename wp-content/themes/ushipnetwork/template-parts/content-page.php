<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ushipnetwork
 */

?>

<?php if ($query_string = get_field('add_query_string')): ?>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      var acfQueryString = '<?php echo $query_string; ?>';

      $("a[href*='uship.com']").each(function () {
          var ushipHref = $(this).attr('href');

          if (ushipHref) {
              ushipHref += (ushipHref.match(/\?/) ? '&' : '?') + acfQueryString;
              $(this).attr('href', ushipHref);
          }
      });
    })
  </script>
<?php endif; ?>

<?php include("acf-modules/top-content.php");?>
<div class="bodyContent">
<?php include("acf-modules/body-content.php");?>
</div>
<?php include("acf-modules/bottom-content.php");?>