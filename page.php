<?php get_header(); ?>

<main>
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <div>
            <?php the_content(); ?>
          </div>
          <?php get_sidebar(); ?>

        </article>
      <?php endwhile;
    else :
      echo '<p>Pagina non trovata.</p>';
    endif;
  ?>
</main>

<?php get_footer(); ?>
