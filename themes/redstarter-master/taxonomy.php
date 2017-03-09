<!-- <h1> this is taxonomy.php </h1> -->

<?php

get_header();

$terms = get_terms(array("ProductType"));

$taxonomies = $wp_query->get_queried_object(); ?>
	<h2 class="archive-title uppercase"><?php echo $taxonomies->name; ?></h2>
	<p class="product-type-description"><?php echo $taxonomies->description; ?></p>

<div class="product-type-container">
<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header product-felx-container">	
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php echo get_permalink()?>">
					<div class="product-image">
						<?php the_post_thumbnail( 'large' ); ?>
					</div>
					</a>
				<?php endif; ?>
			
				<!-- <div class="product-info"> -->
					<?php "<h3 class='product-title'>".the_title()."</h3>" ?>
					<?php echo "<p class='product-price'>$".get_field("Price")."</p>"; ?>
				<!-- </div> -->
		</header>	
	</article>
<?php endwhile; ?>
</div>

<?php get_footer();

?>

	