require_once(ABSPATH . 'wp-admin/includes/taxonomy.php');

function get_or_create_category($cat_name) {

    if ($cat_id = get_cat_ID($cat_name))
        return $cat_id;

    $cat_id = wp_create_category($cat_name);
    return $cat_id;
}

