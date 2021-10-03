<?php
if (file_exists (ABSPATH.'/wp-admin/includes/taxonomy.php')) {
    require_once (ABSPATH.'/wp-admin/includes/taxonomy.php'); 
}

// Slider category
$sliderCatArgs = array(
    'cat_name' => "slider post",
    'category_description' => "Posts with this category show in the slider. This is a system category.", 
    'category_nicename' => 'Slider', 
    'category_parent' => ''
);
$slider_category = wp_insert_category($sliderCatArgs);

// Suggestion posts category
$suggestionCatArgs = array(
    'cat_name' => "suggestions",
    'category_description' => "Posts with this category show in the suggestion part. This is a system category.", 
    'category_nicename' => 'Suggestions', 
    'category_parent' => ''
);
$suggestion_category = wp_insert_category($suggestionCatArgs);
