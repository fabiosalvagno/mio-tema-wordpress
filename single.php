<?php get_header(); ?>

<main>
  <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <article>
          <h2><?php the_title(); ?></h2>
          <p><small>Pubblicato il <?php the_date(); ?></small></p>
          <div>
            <?php the_content(); ?>
          </div>
        </article>
        <p><a href="<?php echo home_url(); ?>">← Torna alla Home</a></p>
      <?php endwhile;
    else :
      echo '<p>Post non trovato.</p>';
    endif;
  ?>
</main>

<?php get_footer(); ?>
