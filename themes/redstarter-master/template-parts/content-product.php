	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
				
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="product-image">
					<?php the_post_thumbnail( 'large' ); ?>
					</div>
				<?php endif; ?>
			
			<div class="product-info-box">
				<?php the_title( sprintf( '<h4 class="product-name"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php echo "<p class='product-price'>$".get_field("Price")."</p>"; ?>
			</div>
		</header>
	</article>
