<?php
$filter_list =[];

function add_filter($tag, $function)
{
    global $filter_list;

    $filter_list[$tag][] = $function;
}

function apply_filters($tag, $content){
    global $filter_list;

    if (!empty($filter_list[$tag])){
        foreach ($filter_list[$tag] as $func) {
            $content = $func($content);
        }
    }

    return $content;
}