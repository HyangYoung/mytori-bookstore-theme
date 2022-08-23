<?php
//change
add_filter('the_content', function ($content){
    return str_replace('0', 'a', $content);
});

//add
add_filter('the_content', function ($content){
    return $content . '-b';
});

//remove
add_filter('the_content', function ($content){
    return mb_substr($content, 0, 5);
});