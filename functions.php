<?php

function mbs_register_post_type() {
    register_post_type('book', [
            'public' => true,
            'label'  => '책',
        ]
    );
}

add_action( 'init', 'mbs_register_post_type' );
?>