<?php 
if ( is_archive('product')) { ?>
    <h1 class="archive-title green-text uppercase">Shop Stuff</h1>
	<?php $terms = get_terms(array("Product Type")); ?>
	<?php foreach ($terms as $term) { ?>
		<div class="product-type-links">		
			<?php echo  $term -> name ?>
		</div>
		
<!-- "<h3 class='green-text uppercase entry-title'><a href='%s' rel='bookmark'>".esc_url( get_permalink() ); ."</a></h3>" -->


	<?php } ?>    	
      
    <?php 


} elseif ( is_archive('adventure')  ) {
        
} elseif ( is_archive('journal') ) {
           
};
    


