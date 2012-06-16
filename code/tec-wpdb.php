global $db;
$db = new wpdb(
    IMPORT_USER,
    IMPORT_PASS,
    IMPORT_DB,
    IMPORT_SERVER);
