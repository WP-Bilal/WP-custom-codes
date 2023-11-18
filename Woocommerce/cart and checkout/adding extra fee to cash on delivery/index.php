<?php
//Add Extra Fee for COD payment method
add_action( 'woocommerce_cart_calculate_fees','rp_woo_add_extra_cod_fee' );
function rp_woo_add_extra_cod_fee() {
    global $woocommerce;
    if ( is_admin() && ! defined('DOING_AJAX' )){
        return;
    }
    else{
        $chosen_gateway = WC()->session->chosen_payment_method;
        $fee = 10;
		$feeLabel = 'COD Fee';
        if ( $chosen_gateway == 'cod' && !empty($fee) && $fee !='0') { 
            WC()->cart->add_fee( $feeLabel, $fee, false, '' );
        }
    }
}


//Add another check if user changes payment mehtod during checkout
add_action( 'wp_footer', 'rp_woo_add_fee_update_checkout' );
function rp_woo_add_fee_update_checkout() {
    if ( is_checkout() && ! is_wc_endpoint_url() ) :
    ?>
    <script type="text/javascript">
    jQuery( function($){
        $('form.checkout').on('change', 'input[name="payment_method"]', function(){
            $(document.body).trigger('update_checkout');
        });
    });
    </script>
    <?php
    endif;
}


