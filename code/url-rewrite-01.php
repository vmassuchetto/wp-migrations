/* URL a ser migrada */

http://example.com/old_id/123

/* Escolher uma variavel para identificar este padrao */

add_action('query_vars', 'add_query_vars');
function add_query_vars($vars) {
    array_push($vars, 'old_id');
    return $vars;
}
