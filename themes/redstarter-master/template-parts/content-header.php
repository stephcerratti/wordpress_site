
<?php 
if ( is_post_type_archive('product') ) { ?>
    <h1 class="archive-title uppercase">Shop Stuff</h1>
	<?php $terms = get_terms(array("ProductType")); ?>
	<?php foreach ($terms as $term) { ?>
		<div class="product-type-links">		
			<?php echo  $term -> name ?>
		</div>
	<?php } ?>

<!-- "<h3 class='green-text uppercase entry-title'><a href='%s' rel='bookmark'>".esc_url( get_permalink() ); ."</a></h3>" -->

<?php } elseif ( is_post_type_archive('adventure') ) { ?>
	<h1 class="archive-title uppercase">Latest Adventures</h1>
        
<?php } elseif ( is_post_type_archive('journal') ) {
           
};
 ?>
    


