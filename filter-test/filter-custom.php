<?php

add_filter('the_content', function ($content){
    return str_replace('0', 'a', $content);
});