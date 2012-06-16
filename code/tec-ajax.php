add_action('wp', 'import');
function import() {
    import_post_id($_REQUEST['post_id']);
    $post_id = $db->get_var($sql);
    ?>
    <script type="text/javascript">
        jQuery.ajax({ /* .. */
            data: {
                'ajax': 1,
                'post_id': <?php echo $post_id; ?>
            }
        });
    </script>
    <?php
}
