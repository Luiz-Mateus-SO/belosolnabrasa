<?php 
function my_scripts() {
    wp_register_script('closed', get_template_directory_uri() . '/js/closed.js', [], false, true);
    wp_enqueue_script('closed'); // Enqueue the script

    // Registra o script menu-functions.js
    wp_register_script('menu-functions', get_template_directory_uri() . '/js/menu-functions.js', [], false, true);
    wp_enqueue_script('menu-functions'); // Enqueue o script menu-functions.js
}
add_action('wp_enqueue_scripts', 'my_scripts');

function belosol_css() {
    wp_register_style('belosol-style', get_template_directory_uri() . '/style.css', array(), false, false);
    wp_enqueue_style('belosol-style'); // Enqueue the style
}
add_action('wp_enqueue_scripts', 'belosol_css');

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');
?>
