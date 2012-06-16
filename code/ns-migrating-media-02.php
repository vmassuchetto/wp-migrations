if (!$filename = valid_file($img_url))
    continue;

$upload = wp_upload_dir(/* 'yyyy/mm' */);
download($m, $path = $upload['path'] . '/' .  $filename);
$wp_filetype = wp_check_filetype($file);
$attachment = array(
    'guid'           => $img_url,
    'post_mime_type' => $wp_filetype['type'],
    'post_title'     => $filename,
    'post_status'    => 'inherit',
);
