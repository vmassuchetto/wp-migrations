$file = $_GET['file']

header( 'Content-Type: ' . $mimetype );
header( 'Content-Length: ' . filesize( $file ) );
header( 'X-Accel-Redirect: '
    . str_replace( WP_CONTENT_DIR, '', $file ) );
header( 'X-Sendfile: ' . $file );
readfile( $file );
