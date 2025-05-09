<?php get_header(); ?>

<main>
  <h1>
    <?php
    if ( is_category() ) {
      single_cat_title();
    } elseif ( is_tag() ) {
      single_tag_title();
    } elseif ( is_author() ) {
      the_post();
      echo 'Articoli di ' . get_the_author();
      rewind_posts();
    } elseif ( is_day() ) {
      echo 'Archivio per giorno: ' . get_the_date();
    } elseif ( is_month() ) {
      echo 'Archivio per mese: ' . get_the_date('F Y');
    } elseif ( is_year() ) {
      echo 'Archivio per anno: ' . get_the_date('Y');
    } else {
      echo 'Archivio';
    }
    ?>
  </h1>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Nessun contenuto trovato.</p>
  <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
