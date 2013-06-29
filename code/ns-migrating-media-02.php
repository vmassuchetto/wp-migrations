if ( !$filename = valid_file($img_url) )
    continue;

$upload_dir = wp_upload_dir( /* 'yyyy/mm' */ );

$file = wp_remote_get( $m, $path = $upload_dir['path'] . '/' .  $filename );
file_put_contents( $file['body'], $upload_dir['path'] . '/' . $filename );
