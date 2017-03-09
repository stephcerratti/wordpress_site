<?php
/*
Template Name: Find Us
*/
?>
<!-- <h1>this is contact.php</h1> -->

<?php get_header() ?>

<div class="contact-parent">
	<div class="contact-page">
		<?php while ( have_posts() ) : the_post(); 
			echo "<h1 class='page-title uppercase'>".get_field("title")."</h1>";
			echo "<div class='location'>".get_field("location")."</div>";
			echo "<h2 class='contact-section-title uppercase'>".get_field("sub-title_top")."</h2>";
			echo "<p class='light-grey-text'>".get_field("text")."</p>";
			echo "<h2 class='contact-section-title uppercase'>".get_field("sub-title_bottom")."</h2>"; ?>

		<div class="email-form">
			<?php echo do_shortcode("[contact-form-7 id='".get_field("email_form")."']"); ?>
		</div>

		<?php endwhile; ?>
	</div>

	<div class="sidebar">
		<?php dynamic_sidebar("contact-us"); ?>
	</div>

</div>



<?php get_footer(); ?>


