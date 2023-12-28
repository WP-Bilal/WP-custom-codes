<?
add_action('woocommerce_review_order_before_submit', 'apply_product_on_coupon_checkout');

function apply_product_on_coupon_checkout() {
	
    global $woocommerce;
	
    // Use a flag to check if the coupon information has been displayed
    static $coupon_displayed = false;

    // Display coupon information only once
    if (!$coupon_displayed && !empty($woocommerce->cart->applied_coupons)) {
        $my_coupons = $woocommerce->cart->get_coupons();

        foreach ($my_coupons as $coupon) {
            $coupon_post = get_post($coupon->id);
            if (!empty($coupon_post->post_excerpt)) {
                echo "<span class='coupon-name'><b>" . $coupon->code . "</b></span>";
                echo "<p class='coupon-description'>" . wpautop($coupon_post->post_excerpt) . "</p>";
            }
        }

        // Set the flag to true after displaying the coupon information
        $coupon_displayed = true;
    }
}

