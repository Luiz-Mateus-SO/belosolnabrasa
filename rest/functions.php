<?php 
function my_scripts() {
    wp_register_script('closed', get_template_directory_uri() . '/js/closed.js', [], false, true);
    wp_enqueue_script('closed'); 

    wp_register_script('menu-functions', get_template_directory_uri() . '/js/menu-functions.js', [], false, true);
    wp_enqueue_script('menu-functions'); 

    wp_register_script('copy-section', get_template_directory_uri() . '/js/copy-section.js', [], false, true);
    wp_enqueue_script('copy-section');

    wp_register_script('animations', get_template_directory_uri() . '/js/animations.js', [], false, true);
    wp_enqueue_script('animations');
}
add_action('wp_enqueue_scripts', 'my_scripts');

function theme_enqueue_font_awesome() {
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/a076d05399.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_font_awesome');

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
