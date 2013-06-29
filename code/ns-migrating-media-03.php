$wp_filetype = wp_check_filetype($file);
$attachment = array(
    'guid'           => $img_url,
    'post_mime_type' => $wp_filetype['type'],
    'post_title'     => $filename,
    'post_status'    => 'inherit',
);
$attach_id = wp_insert_attachment($attachment, $path, $post_id);
$attach_data = wp_generate_attachment_metadata($attach_id, $path);
wp_update_attachment_metadata($attach_id, $attach_data);

