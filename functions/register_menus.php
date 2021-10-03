<?php
function register_menus() {
    register_nav_menus(array(
        "main-menu" => __("Main Menu")
    ));
}

add_action("init", "register_menus");

// Add css class to selected page
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'selectedItem';
    }
    return $classes;
}