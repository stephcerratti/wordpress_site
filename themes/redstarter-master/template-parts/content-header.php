
<?php 
if ( is_post_type_archive('product') ) { ?>
	<div class="shop-header">
    	<h1 class="archive-title shop-title uppercase">Shop Stuff</h1>
		<?php $terms = get_terms(array("ProductType")); ?>
		<div class="product-type-links uppercase green-text">
			<?php foreach ($terms as $term) { ?>
			<a href="<?php echo get_term_link($term);?>">	
			<?php echo  $term -> name ?>
			 <?php } ?>
			 </a>
		</div>
	</div>

<?php } elseif ( is_post_type_archive('adventure') ) { ?>
	<h1 class="archive-title uppercase">Latest Adventures</h1>
        
<?php } elseif ( is_post_type_archive('journal') ) {
           
};
 ?>
    


