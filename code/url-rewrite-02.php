/* Adiciona a regra no set de regras */

add_action('rewrite_rules_array', 'rewrite_rules');
function rewrite_rules($rules) {
    $new_rules = array(
        'old_id/(.+?)/?$'
    );
    return $rules + $new_rules;
}
