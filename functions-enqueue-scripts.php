<?php

add_action('admin_enqueue_scripts', function () {
    wp_enqueue_scripts('mbs_media', get_template_directory_uri(), '/js/media.js', [],
        '2022-08-14', true);
});