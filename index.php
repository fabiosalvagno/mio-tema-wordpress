<?php get_header(); ?>

<div id="content">
  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_title( '<h2>', '</h2>' );
        the_content();
      }
    } else {
      echo '<p>Nessun contenuto trovato.</p>';
    }
  ?>
</div>

<?php get_footer(); ?>
