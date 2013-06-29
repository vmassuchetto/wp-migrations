preg_match_all( '/< *a [^>]*href *= *["\']?([^"\']*)/i',
    $content, $links);
foreach ( $links[1] as $link ) {

    $page_content = file_get_contents( $link );
    $page_title = preg_match( '/<title>(.*?)<\/title>/',
        $page_content, $title );

    /* ... verificacoes ... */

    $linkdata = array(
	    'link_name' => $title[1],
	    'link_url' => $link
    );
    wp_insert_link( $linkdata );

}
