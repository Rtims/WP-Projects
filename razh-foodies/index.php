<?php get_header(); ?>
<main id="main" class="py-5">
  <div class="container">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-4 p-4 bg-white rounded-3 border'); ?>>
      <h2 class="fw-bold" style="font-family:var(--razh-font-display);color:var(--razh-red-dark);">
        <a href="<?php the_permalink(); ?>" style="color:inherit;text-decoration:none;"><?php the_title(); ?></a>
      </h2>
      <div class="text-muted small mb-2"><?php the_date(); ?></div>
      <div><?php the_excerpt(); ?></div>
    </article>
    <?php endwhile;
    the_posts_pagination(['mid_size'=>2,'prev_text'=>'&laquo;','next_text'=>'&raquo;']);
    else: ?>
    <p class="text-muted"><?php esc_html_e('No posts found.','razh-foodies'); ?></p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
