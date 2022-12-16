<?php

add_theme_support('post-thumbnails');
add_theme_support('menus');

function wpcollabils_register_menu()
{
    register_nav_menus([
        "menu_light" => "Menu Light"
    ]);
}
add_action('init', 'wpcollabils_register_menu');


function wpcollabils_enqueue_scripts()
{
    wp_enqueue_style('wpcollabils', get_template_directory_uri() .'/assets/css/index.css');
    //on charge du CSS et JS
}

add_action('wp_enqueue_scripts', 'wpcollabils_enqueue_scripts');