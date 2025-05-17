<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header -->
<header class="bg-[#1a1a1a] text-white shadow-md sticky top-0 z-50">
  <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
    <div class="text-xl font-bold">
      <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </div>
    
    <!-- Menu -->
    <?php
      wp_nav_menu(array(
        'theme_location' => 'menu-principale',
        'container' => false,
        'menu_class' => 'flex space-x-6 text-base font-medium',
      ));
    ?>
  </div>
</header>
