<?php
add_action('woocommerce_before_single_product', 'add_custom_shortcode_before_single_product');

function add_custom_shortcode_before_single_product() {
    echo do_shortcode('[block id="hallowen"]');
}