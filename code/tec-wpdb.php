ini set( 'memory limit', -1);
set_time_limit( 0 );

include('wp-load.php');

// !!!

global $wpdb;
$external_db = new wpdb( IMPORT_USER, IMPORT_PASS,
    IMPORT_DB, IMPORT_SERVER);
