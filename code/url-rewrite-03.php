/* Configura o flush de URLs */

add_action('wp_loaded', 'flush_rules');
function flush_rules() {
    if (!isset($rules['old_id/(.+?)/?$'])) {
        global $wp_rewrite;
        $wp_rewrite->flush_rules();
    }
}

