<h1> this is content-posts.php</h1>

<?php if ( is_archive() ) { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
				
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="product-image">

					<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>


<?php the_post_navigation(); ?>

<?php
// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
?>