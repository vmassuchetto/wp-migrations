$external_db = new wpdb( .. );
$sql = "
    SELECT ...
    FROM ...
";
foreach ( $external_db->get_results( $sql ) as $p ) {

    /* formatacao de $post_attrs com base em $p */

    wp_insert_post( $post_attrs );

}
