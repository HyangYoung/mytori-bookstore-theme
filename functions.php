<?php

function mbs_register_post_type() {
    register_post_type('book', [
        'labels' => [
             'name'                  => _x( '책', 'Post type general name', 'recipe' ),
            'singular_name'         => _x( '책', 'Post type singular name', 'recipe' ),
            'menu_name'             => _x( '책', 'Admin Menu text', 'recipe' ),
            'name_admin_bar'        => _x( '책', 'Add New on Toolbar', 'recipe' ),
            'add_new'               => __( '새 책 추가', 'recipe' ),
            'add_new_item'          => __( '새 책을 추가합니다', 'recipe' ),
            'new_item'              => __( '새 책', 'recipe' ),
            'edit_item'             => __( '책 수정', 'recipe' ),
            'view_item'             => __( '책 보기', 'recipe' ),
            'all_items'             => __( '책 목록', 'recipe' ),
            'search_items'          => __( '책 검색', 'recipe' ),
            'parent_item_colon'     => __( '상위 책:', 'recipe' ),
            'not_found'             => __( '현재 입력한 책이 없습니다.', 'recipe' ),
            'not_found_in_trash'    => __( '휴지통에 책이 없습니다.', 'recipe' ),
        ],
            'public' => true,
            ]);
    );
}

add_action( 'init', 'mbs_register_post_type' );
?>