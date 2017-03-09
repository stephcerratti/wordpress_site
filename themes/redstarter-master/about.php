<?php
/*
Template Name: About
*/
?>
<!-- <h1>this is about.php</h1> -->

<?php get_header() ?>

<div class="about-section">

<?php while ( have_posts() ) : the_post(); 

echo "<h2 class='section-title uppercase'>".get_field("title_top")."</h2>";

echo "<p class='light-grey-text'>".get_field("content_top")."</p>";



echo "<h2 class='section-title uppercase'>".get_field("title_bottom")."</h2>";

echo "<p class='light-grey-text'>".get_field("content_bottom")."</p>";

endwhile; ?>

</div>

<?php get_footer(); ?>