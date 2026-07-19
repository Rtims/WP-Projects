<?php get_header(); ?>
<main id="main" class="py-5">
  <div class="container">
    <?php while(have_posts()): the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 class="fw-bold mb-4" style="font-family:var(--razh-font-display);color:var(--razh-red-dark);"><?php the_title(); ?></h1>
      <div class="razh-page-content" style="color:var(--razh-text-muted);line-height:1.8;font-weight:600;">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
