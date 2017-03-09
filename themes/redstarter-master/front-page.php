<?php

/**
@package Inhabitent
**/

get_header(); ?>

<!-- ********************* SHOP STUFF ************************************** -->

<h2 class="shop-stuff uppercase section-title">Shop Stuff</h2>

<?php 
// $tax = get_terms(array("Product Type"));
// 	echo "<pre>"; print_r($tax); echo"</pre>";

$terms = get_terms(array("ProductType")); ?>

	<div class="shop-container">
		<?php foreach ($terms as $term) { ?>
		<div class="shop-category">
			<img class="shop-image" alt="<?php echo $term -> name ?> Logo" src="<?php echo get_bloginfo("stylesheet_directory")?>/images/product-type-icons/<?php echo $term -> name?>.svg">
			<p><?php echo $term -> description ?> </p>
			<a href="<?php echo get_term_link($term);?>">
				<button type="button" class="shop-button white-text uppercase"><?php echo $term -> name ?></button>
			</a>
		</div>
		<?php } ?>
	</div>

<!-- ********************* JOURNAL ************************************** -->

<h2 class="shop-stuff uppercase section-title">Inhabitent Journal</h2>

<?php $query_journal = new WP_Query(array(
	"posts_per_page" => 3,
	"post_type" => "Post",
	));
?>

<div class="journal-contianer">
<?php while ( $query_journal->have_posts() ) : $query_journal->the_post(); ?>

	<article class="journal-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( 'post' === get_post_type() ) : ?>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="journal-pic">
						<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>

				<div class="journal-entry">
					<span class="post-date light-grey-text"><?php echo get_the_date() ?> / </span>
					<span class="comments light-grey-text"><?php echo get_comments_number();?> Comments</span>
					<?php the_title( sprintf( '<h3 class="green-text uppercase entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<button class= "read-more uppercase light-grey-text">Read Entry</button>
				</div>

			<?php endif; ?>
					
		</header>		
	</article>
	
<?php endwhile; ?>

</div>


<!-- ********************* ADVENTURES ************************************** -->

<h2 class="shop-stuff uppercase section-title">Latest Adventures</h2>


<?php $query_adventure = new WP_Query(array(
	"posts_per_page" => 4,
	"post_type" => "Adventure",
	));
?>

<div class="adventure-container">
	<?php $i = 0; ?>
	<?php while ( $query_adventure->have_posts() ) : $query_adventure->the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">	

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="adventure-pic">
			<?php the_post_thumbnail(); ?>
				</div>
			<?php endif; ?>

			<h2 class="green-text uppercase"><?php echo the_title()?></h2>
			<a href="<?php echo get_permalink()?> ">
			<button class= "read-more uppercase light-grey-text">Read More</button>
			</a>
		</header><!-- .entry-header -->	
	</article>
	<?php endwhile; ?>
</div>
<a href="http://localhost:8888/stephanie_site/Adventure"><button class="adventure-read-more">More Adventures</button></a>

<?php get_footer(); ?>