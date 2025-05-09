<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav>
<?php if ( get_header_image() ) : ?>
  <div class="hero-image">
    <img src="<?php header_image(); ?>" alt="Header">
  </div>
<?php endif; ?>

<h1 class="text-3xl text-yellow-300 font-bold">Funziona Tailwind!</h1>


  <?php
    wp_nav_menu(array(
      'theme_location' => 'menu-principale',
      'container' => false,
      'menu_class' => 'menu'
    ));
  ?>
</nav>


  <h1><?php bloginfo( 'name' ); ?></h1>
  <p><?php bloginfo( 'description' ); ?></p>
