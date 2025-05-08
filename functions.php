<?php
function mio_tema_carica_stili() {
  wp_enqueue_style('stile-principale', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mio_tema_carica_stili');

// ✅ Registra il menu
function mio_tema_registra_menu() {
  register_nav_menu('menu-principale', __('Menu Principale'));
}
add_action('after_setup_theme', 'mio_tema_registra_menu');
