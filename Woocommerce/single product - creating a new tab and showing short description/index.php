<?php

// Add a new tab to the product page
add_filter('woocommerce_product_tabs', 'add_product_details_tab');

function add_product_details_tab($tabs) {
    // Adds the new tab
    $tabs['product_details'] = array(
        'title'    => __('Product Details', 'woocommerce'),
        'priority' => 30,  // Adjust the priority to place it after the Reviews tab
        'callback' => 'product_details_tab_content'
    );

    return $tabs;
}

// Display the content of the new tab
function product_details_tab_content() {
    global $product;

    // Output the product short description
    echo '<p>' . $product->get_short_description() . '</p>';
}
