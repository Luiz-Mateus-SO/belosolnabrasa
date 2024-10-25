<?php 
  // Funções para Limpar o Header
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0 );
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');

  // Habilitar Menus
  add_theme_support('menus');

  function adicionar_meu_script_js() {
    // wp_enqueue_script: nome do script, caminho do arquivo JS, dependências (vazio aqui), versão, se deve carregar no footer
    wp_enqueue_script('traducao-data', get_template_directory_uri() . '/js/traducao-data.js', array(), null, true);
  }
  add_action('wp_enqueue_scripts', 'adicionar_meu_script_js');

?>