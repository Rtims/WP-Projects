<?php get_header(); ?>
<main id="main" class="py-5">
  <div class="container">
    <h1 class="mb-4 fw-bold" style="font-family:var(--razh-font-display);color:var(--razh-red-dark);">
      <?php printf(esc_html__('Search Results: %s','razh-foodies'),'<em>'.get_search_query().'</em>'); ?>
    </h1>
    <?php if(class_exists('WooCommerce') && have_posts()): ?>
    <div class="row g-4 row-cols-2 row-cols-md-3 row-cols-lg-4">
      <?php while(have_posts()): the_post();
        global $product; $product = wc_get_product(get_the_ID());
        if(!$product) continue; ?>
      <div class="col">
        <div class="razh-product-card card h-100">
          <div class="razh-card-img-wrap position-relative">
            <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): the_post_thumbnail('razh-product',['class'=>'img-fluid']);
              else: echo '<div class="razh-img-placeholder">🍚</div>'; endif; ?>
            </a>
          </div>
          <div class="razh-card-body flex-grow-1 d-flex flex-column">
            <h3 class="razh-product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="razh-product-desc"><?php echo wp_trim_words(get_the_excerpt(),12); ?></p>
          </div>
          <div class="razh-card-footer">
            <div class="razh-price"><?php echo wp_kses_post($product->get_price_html()); ?></div>
            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>"
               class="razh-btn-add-cart add_to_cart_button ajax_add_to_cart"
               data-product_id="<?php echo esc_attr($product->get_id()); ?>" data-quantity="1">
              <i class="bi bi-cart-plus"></i>
            </a>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php the_posts_pagination(['mid_size'=>2]);
    elseif(have_posts()): ?>
    <div class="row g-4">
      <?php while(have_posts()): the_post(); ?>
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm h-100 rounded-3">
          <div class="card-body">
            <h2 class="h5 fw-bold"><a href="<?php the_permalink(); ?>" class="text-decoration-none" style="color:var(--razh-red-dark);"><?php the_title(); ?></a></h2>
            <?php the_excerpt(); ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php else: ?>
    <div class="alert border-0 rounded-3 p-4" style="background:var(--razh-red-pale);color:var(--razh-red-dark);">
      <i class="bi bi-search me-2"></i>
      <?php esc_html_e('No results found. Try searching for sapin-sapin, puto, biko, or any kakanin!','razh-foodies'); ?>
    </div>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
