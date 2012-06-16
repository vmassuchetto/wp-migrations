$attach_id = wp_insert_attachment($attachment, $path, $post_id);
$attach_data = wp_generate_attachment_metadata($attach_id, $path);
wp_update_attachment_metadata($attach_id, $attach_data);

