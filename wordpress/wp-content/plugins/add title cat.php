<?php
/*
Plugin Name: Підпис додає категорію до заголовка поста
Description: Плагін додає підпис під кожним опублікованим постом
Version: 1.0
Author: Anatoly Skidkin
Author URI:
*/

add_filter( 'the_title', 'wfm_title_cat' );

function wfm_title_cat($title){
    if( !is_single() ) return $title;
    $wfm_title = get_the_category();
    return $title . ' - '.$wfm_title[0]->cat_name;
}