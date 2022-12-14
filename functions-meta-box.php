<?php

add_action('add_meta_boxes_book', function() {
   add_meta_box('book-detail', '책 상세 정보', function(){
       include 'meta-box/book-detail.php';
   },'book' );

    add_meta_box('book-cover', '책 표지', function(){
        include 'meta-box/book-cover.php';
    },'book' );

//   add_meta_box('book-toc', '목차', function(){
//       include 'meta-box/book-toc.php';
//   },'book' );
});

add_action('edit_form_advanced', function () {

    if (get_current_screen()->post_type === 'book') {
        include 'meta-box/book-toc.php';
        include 'meta-box/book-author-intro.php';
        include 'meta-box/book-translator-intro.php';
    }

});
