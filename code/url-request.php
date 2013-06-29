add_action( 'wp', 'check_migrated' );
function check_migrated() {

    if ( !isset( $_REQUEST['old_website_id'] ) )
        return false;

    if ( $new_post = get_post_from_old_id( $_REQUEST['old_website_id'] ) )
        wp_redirect( get_permalink( $new_post->ID ) );

    return false;

}
