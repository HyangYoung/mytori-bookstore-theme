<?php
add_action( 'save_post_book', function ($post_id) {
    if ( ! empty( $_POST['meta'] ) ) {
        foreach ( $_POST['meta'] as $k => $v ) {
            update_post_meta( $post_id, $k, $v );
        }
    }
} );