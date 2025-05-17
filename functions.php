<?php

// 🔁 Carica le traduzioni (opzionale)
function mio_tema_carica_traduzioni() {
  load_theme_textdomain('il-mio-tema', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'mio_tema_carica_traduzioni');

// 🎨 Carica lo stile compilato da Tailwind
function mio_tema_carica_stili() {
  wp_enqueue_style(
    'tailwind',
    get_template_directory_uri() . '/dist/style.css',
    [],
    filemtime(get_template_directory() . '/dist/style.css')
  );
}
add_action('wp_enqueue_scripts', 'mio_tema_carica_stili');

// 📋 Registra il menu
function mio_tema_registra_menu() {
  register_nav_menu('menu-principale', __('Menu Principale'));
}
add_action('after_setup_theme', 'mio_tema_registra_menu');

// 🎯 Aggiungi classi Tailwind ai <li>
function mio_tema_menu_li_class($classes, $item, $args) {
  if ($args->theme_location === 'menu-principale') {
    $classes[] = 'hover:opacity-70 transition-opacity duration-300';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'mio_tema_menu_li_class', 10, 3);

// 💡 Aggiungi classi ai link <a>
function mio_tema_menu_link_attributes($atts, $item, $args, $depth) {
  if ($args->theme_location === 'menu-principale') {
    $atts['class'] = 'block px-2 py-1';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'mio_tema_menu_link_attributes', 10, 4);
