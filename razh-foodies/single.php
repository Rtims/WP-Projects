<?php get_header(); ?>
<main id="main" class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <?php while(have_posts()): the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-4 rounded-3 border'); ?>>
          <h1 class="fw-bold mb-3" style="font-family:var(--razh-font-display);color:var(--razh-red-dark);"><?php the_title(); ?></h1>
          <?php if(has_post_thumbnail()): ?>
          <div class="mb-4 rounded-3 overflow-hidden"><?php the_post_thumbnail('razh-hero',['class'=>'img-fluid w-100']); ?></div>
          <?php endif; ?>
          <div style="color:var(--razh-text-muted);line-height:1.8;font-weight:600;"><?php the_content(); ?></div>
        </article>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
