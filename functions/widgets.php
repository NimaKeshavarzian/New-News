<?php
// Main Widgets
    register_sidebar( array(
        'name' => 'First list widget',
        'id' => 'list-widget-1',
        'description' => 'A widget for show categories, tags, archives or something like them',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ) );
    register_sidebar( array(
        'name' => 'Second list widget',
        'id' => 'list-widget-2',
        'description' => 'A widget for show lists like categories, tags, archives or ...',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ) );
// Footer widget
add_action('widgets_init', 'register_footer_widget');

function register_footer_widget() {
    register_sidebar( array(
        'name' => 'Footer widget',
        'id' => 'footer-widget',
        'description' => 'A widget for show footerWidget media icons, lists or ... in footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));
}