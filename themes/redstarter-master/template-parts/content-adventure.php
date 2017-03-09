<?php if ( is_archive() ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php echo "<h3 class='adventure-title uppercase'>".get_the_title()."</h3>" ?>
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php echo get_permalink()?>">
				<div class="journal-image">
				<?php the_post_thumbnail( 'large' ); ?>
				</div>
				</a>
			<?php endif; ?>
		</header>
	</article>
	

<?php } elseif ( is_single() ) { ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="journal-image">
				<?php the_post_thumbnail( 'full' ); ?>
				</div>
			<?php endif; ?>
		</header>

		<div class="post-content">
			<?php echo "<h2 class='adventure-title uppercase'>".get_the_title()."</h2>" ?>
			<?php echo "<p class='author light-grey-text uppercase'>".get_the_author()."</p>" ?>
			<?php echo get_the_content() ?>
		</div>
	</article>
<?php }?>
