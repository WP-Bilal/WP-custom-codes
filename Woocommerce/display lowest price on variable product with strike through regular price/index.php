<?php
add_filter('woocommerce_get_price_html', 'custom_variable_price_format_shop', 10, 2);

function custom_variable_price_format_shop($price, $product) {
    if ($product->is_type('variable')) {
        // Get the minimum regular price
        $min_regular_price = $product->get_variation_regular_price('min', true);
        // Get the minimum sale price
        $min_sale_price = $product->get_variation_price('min', true);

        // Display both regular and sale prices if they are different
        if ($min_regular_price !== $min_sale_price) {
            $price = sprintf(
                __('From: <span class="regular-price">%s</span> %s', 'woocommerce'),
                wc_price($min_regular_price),
                wc_price($min_sale_price)
            );
        } else {
            // Display only the minimum price if regular and sale prices are the same
            $price = sprintf(
                __('Price: %s', 'woocommerce'),
                wc_price($min_regular_price)
            );
        }
    }

    return $price;
}
