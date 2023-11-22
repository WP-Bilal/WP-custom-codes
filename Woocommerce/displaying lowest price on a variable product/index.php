<?php

// Displaying the smallest price in a variable product

add_filter('woocommerce_variable_price_html', 'custom_variable_price_format', 10, 2);

function custom_variable_price_format($price, $product) {
    // Get the minimum variation price
    $min_price = $product->get_variation_price('min', true);
    // Get the maximum variation price
    $max_price = $product->get_variation_price('max', true);

    // Display only the minimum price
    if ($min_price != $max_price) {
        $price = sprintf(__('From: %s', 'woocommerce'), wc_price($min_price));
    }

    return $price;
}
