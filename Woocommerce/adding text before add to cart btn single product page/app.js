jQuery(document).ready(function($) {
    // Check if the button is present on the page
    if ($('.single_add_to_cart_button.button.alt').length) {
        // Add your paragraph before the button
        $('<p style="color:black">Your Text Here</p>').insertBefore('.single_add_to_cart_button.button.alt');
    }
});
