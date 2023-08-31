/*============================
 paste this code in functions.php
 ==============================*/

 // redirect on specific product to homepage
add_action('template_redirect', 'redirect_specific_product_to_homepage');

function redirect_specific_product_to_homepage() {
    // Check if we are on a single product page
    if (is_product()) {
        // Get the current product's ID
        $product_id = get_the_ID();
        
        // Specify the ID of the product you want to redirect
        $target_product_id = 190; // Replace with the actual product ID
        
        if ($product_id == $target_product_id) {
            // Redirect to the homepage
            wp_redirect(home_url());
            exit();
        }
    }
}