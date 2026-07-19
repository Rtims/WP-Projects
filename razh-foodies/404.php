<?php get_header(); ?>
<main id="main" class="py-5">
  <div class="container text-center py-5">
    <div style="font-size:5rem;margin-bottom:16px;">🍚</div>
    <h1 style="font-family:var(--razh-font-display);font-size:4rem;color:var(--razh-red);">404</h1>
    <p class="lead text-muted mb-4"><?php esc_html_e("Oops! Page not found. Let's find some kakanin instead!",'razh-foodies'); ?></p>
    <a href="<?php echo esc_url(razh_get_shop_url()); ?>" class="btn btn-primary btn-lg px-5 fw-bold">
      <i class="bi bi-shop me-2"></i><?php esc_html_e('Shop Kakanin','razh-foodies'); ?>
    </a>
  </div>
</main>
<?php get_footer(); ?>
