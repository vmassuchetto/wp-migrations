foreach ($posts as $p) {
    /* Post ja importado */
    if ($id = get_new_id($p->id))
        continue;

    /* Insere post sem nenhum conteudo */
    $post_attrs = get_new_post_attrs($p);
    $post_id = wp_insert_post($post_attrs);
    update_post_meta($post_id, '_old_id', $p->id);
}
