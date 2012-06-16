preg_match_all('/<img[^>]*src *= *["\']?([^"\']*)/i',
    $post_content, $media);
foreach ($media[1] as $img_url) {

    /* (2) */

}

