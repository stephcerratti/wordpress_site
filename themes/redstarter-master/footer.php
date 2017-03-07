<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

	<footer class="footer-background">
	<div class="footer-flex-container">
    <div class="footer-child contact footer-info">
      <h3 class="orange-text uppercase">Contact Info</h3>
        <p class="white-text font-merriweather"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@inhabitent.com</p>
        <p class="white-text font-merriweather"><i class="fa fa-phone" aria-hidden="true"></i> 778-456-7891</p>
        <div class="social-icons white-text">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
          <i class="fa fa-twitter-square" aria-hidden="true"></i>
          <i class="fa fa-google-plus-square" aria-hidden="true"></i>
        </div>
    </div>

    <div class="footer-child hours footer-info">
      <h3 class="orange-text uppercase">Business Hours</h3>
        <p class="footer-text white-text font-merriweather"><span class="bold">Monday-Friday:</span> 9am to 5pm</p>
        <p class="white-text font-merriweather"><span class="bold">Saturday:</span> 10am to 2pm</p>
        <p class="white-text font-merriweather"><span class="bold">Sunday:</span> Closed</p>
    </div>

    <div class="footer-child footer-logo">
    <img class="footer-logo" alt="Footer Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/logos/inhabitent-logo-text.svg"> 
    </div>

  </div>
 <p class="copyright white-text uppercase">Copyright &copy; 2016 Inhabitent</p>
		


	</footer><!-- #colophon -->
</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
