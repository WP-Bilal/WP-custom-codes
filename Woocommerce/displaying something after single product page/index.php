<?php
function my_fun3(){
	echo do_shortcode('[block id="gallery"]');
}
add_action( 'woocommerce_after_single_product_summary', 'my_fun3', 15);