<?php if ( is_archive() ) { ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
				
				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php echo get_permalink()?>">
					<div class="product-image">
					 <?php the_post_thumbnail( 'small' ); ?>
					</div>
					</a>

				<?php endif; ?>
			
			<div class="product-info-box">
				<?php echo get_the_title() ?>
				<?php echo "<p class='product-price'>$".get_field("Price")."</p>"; ?>
			</div>
		</header>
	</article>

<?php } elseif ( is_single() ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- <div class="product-felx-container"> -->
		<header class="entry-header product-felx-container">
				
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="product-image">
					<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>
			
				<div class="product-info">
					<?php "<h3 class='product-title uppercase orange-text'>".the_title()."</h3>" ?>
					<?php echo "<p class='product-price'>$".get_field("Price")."</p>"; ?>
					<?php the_content(); ?>
				</div>
		</header>
		
		<!-- </div> -->
		
	</article>

<?php }  ?>


