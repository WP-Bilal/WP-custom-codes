add_action('template_redirect', 'redirect_404_to_homepage');

function redirect_404_to_homepage() {
    if (is_404()) {
        wp_redirect(home_url());
        exit();
    }
}