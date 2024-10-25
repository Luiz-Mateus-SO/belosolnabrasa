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

  // Função para carregar o arquivo fechado.js
  function carregar_fechado_js() {
      wp_enqueue_script(
          'fechado-script', // Nome do script
          get_template_directory_uri() . '/rest/js/fechado.js', // Caminho para o arquivo JS
          array(), // Dependências (se houver)
          null, // Versão do script (null para usar a versão do tema)
          true // Colocar o script no footer
      );
  }
  add_action('wp_enqueue_scripts', 'carregar_fechado_js');
?>
