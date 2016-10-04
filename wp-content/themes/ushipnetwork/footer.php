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
  <?php echo MvcComponents::footer_content()->htmlBody
	  . '<script type="text/javascript" src="' . MvcComponents::footer_content()->bodyScripts[0] . '"></script>';
  ?>
<!-- .pageWrapper -->
</div>

<?php wp_footer(); ?>

</body>
</html>
