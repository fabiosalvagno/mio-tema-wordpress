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

function mio_tema_register_sidebars() {
  register_sidebar( array(
      'name'          => 'Barra Laterale Principale',
      'id'            => 'barra-laterale-principale',
      'description'   => 'Appare sul lato del sito, se attivata.',
      'before_widget' => '<div class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3 class="widget-title">',
      'after_title'   => '</h3>',
  ));
}
add_action( 'widgets_init', 'mio_tema_register_sidebars' );
