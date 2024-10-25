<?php 
function my_scripts() {
  // Registra o script
  wp_register_script('closed', get_template_directory_uri() . '/js/closed.js', [], false, true);
  
  // Localiza os dados do PHP para o JavaScript
  wp_localize_script('closed', 'meusDados', [
      'horaFechamento' => get_field('hora_de_fechamento'),
      'minutosFechamento' => get_field('minutos_de_fechamento'),
      'horaAbertura' => get_field('hora_de_abertura'),
      'minutosAbertura' => get_field('minutos_de_abertura'),
  ]);

  // Enfileira o script
  wp_enqueue_script('closed');
}
add_action('wp_enqueue_scripts', 'my_scripts');

function belosol_css() {
    wp_register_style('belosol-style', get_template_directory_uri() . '/style.css', [], false);
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
