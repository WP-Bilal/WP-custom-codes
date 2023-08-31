/*============================
 paste this code in functions.php
 ==============================*/

add_filter('woocommerce_coupon_is_valid', 'custom_coupon_validation', 10, 3);

function custom_coupon_validation($valid, $coupon, $discount) {
    // Check if the cart has more than one item
    $cart = WC()->cart;
    if ($cart->get_cart_contents_count() <= 1) {
        // Only one item in the cart, so don't apply the coupon
        return false;
    }

    return $valid; // Coupon is valid for orders with more than one product
}

add_filter('woocommerce_coupon_error', 'custom_coupon_error_message', 10, 3);

function custom_coupon_error_message($err, $err_code, $coupon) {
    // Check if the error is related to the "oz10" coupon
    if ($coupon->get_code() === 'oz10') {
        // Customize the error message here
        $err = 'You need at least TWO products to avail this coupon.';
    }

    return $err;
}