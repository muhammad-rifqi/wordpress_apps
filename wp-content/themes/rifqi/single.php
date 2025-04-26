<?php get_header(); ?>

<main class="container">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <h1><?php the_title(); ?></h1>
      <p>Diposting pada: <?php the_time('F j, Y'); ?> oleh <?php the_author(); ?></p>
      <?php the_content(); ?>
    </article>
  <?php endwhile; else : ?>
    <p>Post tidak ditemukan.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
