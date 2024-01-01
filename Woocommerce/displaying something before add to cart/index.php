<?php

function my_fun1(){
	echo do_shortcode('[button text="<span>Measurements Chart</span>" size="small" class="size_guidee" radius="99" link="#size-guide"][lightbox id="size-guide" width="600px" padding="20px"][block id="size-guide"][/lightbox]');
}
add_action( 'woocommerce_before_add_to_cart_form', 'my_fun1', 15);