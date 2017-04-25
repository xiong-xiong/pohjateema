<?php


//Muutetaan pääqueryn post järjestystä jos category
add_action('pre_get_posts', 'filter_category_order');

function filter_category_order( $query ){
    if( $query->is_category()||is_archive() ){
        $query->set('order', 'asc');
        
    } 
}



?>