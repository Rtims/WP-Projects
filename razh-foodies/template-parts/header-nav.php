<?php /* Bootstrap 5 Navbar */ require_once get_template_directory() . '/inc/nav-walker.php'; ?>
<nav class="navbar navbar-expand-lg razh-navbar sticky-top" id="razh-navbar" role="banner">
  <div class="container">

    <!-- Brand / Logo -->
    <a class="navbar-brand d-flex align-items-center gap-2 text-decoration-none" href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo esc_url(razh_get_logo_url()); ?>"
           alt="<?php esc_attr_e('Razh Foodies','razh-foodies'); ?>"
           width="52" height="52" />
      <div class="razh-brand-text">
        <div class="razh-brand-name">Razh Foodies</div>
        <div class="razh-brand-sub"><?php esc_html_e('Native Kakanin · Tagum City','razh-foodies'); ?></div>
      </div>
    </a>

    <!-- Mobile toggler opens offcanvas -->
    <div class="d-flex align-items-center gap-2 d-lg-none">
      <a href="<?php echo esc_url(razh_get_cart_url()); ?>" class="razh-navbar-btn position-relative" aria-label="Cart">
        <i class="bi bi-cart3"></i>
        <span class="razh-cart-count"><?php echo razh_get_cart_count(); ?></span>
      </a>
      <button class="navbar-toggler" type="button"
              data-bs-toggle="offcanvas" data-bs-target="#razh-offcanvas"
              aria-controls="razh-offcanvas" aria-label="<?php esc_attr_e('Toggle menu','razh-foodies'); ?>">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>

    <!-- Desktop Nav -->
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <?php
        wp_nav_menu([
          'theme_location' => 'primary',
          'container'      => false,
          'items_wrap'     => '%3$s',
          'fallback_cb'    => 'razh_default_nav_bs',
          'walker'         => new Razh_BS5_Nav_Walker(),
        ]);
        ?>
      </ul>

      <!-- Search -->
      <div class="razh-search-form position-relative me-2 d-none d-lg-block">
        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
          <input type="search" class="form-control" name="s"
                 placeholder="<?php esc_attr_e('Search kakanin…','razh-foodies'); ?>"
                 value="<?php echo get_search_query(); ?>"
                 <?php if(class_exists('WooCommerce')) echo 'data-posttype="product"'; ?> />
          <?php if(class_exists('WooCommerce')) echo '<input type="hidden" name="post_type" value="product">'; ?>
          <button type="submit" class="razh-search-btn"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <!-- Actions -->
      <div class="d-flex align-items-center gap-2">
        <a href="<?php echo esc_url(razh_get_cart_url()); ?>"
           class="razh-navbar-btn position-relative"
           aria-label="<?php esc_attr_e('Cart','razh-foodies'); ?>">
          <i class="bi bi-cart3"></i>
          <span class="razh-cart-count"><?php echo razh_get_cart_count(); ?></span>
        </a>
        <a href="<?php echo esc_url(razh_get_shop_url()); ?>" class="razh-btn-order ms-1">
          <?php esc_html_e('Order Now','razh-foodies'); ?> <i class="bi bi-scooter"></i>
        </a>
      </div>
    </div><!-- /collapse -->
  </div>
</nav>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-end razh-offcanvas" tabindex="-1" id="razh-offcanvas"
     aria-labelledby="razh-offcanvas-label">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="razh-offcanvas-label">
      <img src="<?php echo esc_url(razh_get_logo_url()); ?>" alt="Logo" width="32" height="32"
           style="border-radius:50%;border:2px solid var(--razh-yellow);margin-right:8px;object-fit:contain;" />
      Razh Foodies
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <!-- Mobile Search -->
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="mb-3">
      <div class="input-group">
        <input type="search" class="form-control" name="s"
               placeholder="<?php esc_attr_e('Search kakanin…','razh-foodies'); ?>"
               value="<?php echo get_search_query(); ?>" />
        <?php if(class_exists('WooCommerce')) echo '<input type="hidden" name="post_type" value="product">'; ?>
        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
      </div>
    </form>
    <!-- Mobile Nav Links -->
    <nav class="nav flex-column mb-3">
      <a href="<?php echo esc_url(razh_get_shop_url()); ?>" class="nav-link"><i class="bi bi-shop me-2"></i><?php esc_html_e('Shop All Kakanin','razh-foodies'); ?></a>
      <a href="<?php echo esc_url(home_url('/bilao/')); ?>" class="nav-link"><i class="bi bi-grid me-2"></i><?php esc_html_e('Bilao Orders','razh-foodies'); ?></a>
      <a href="<?php echo esc_url(home_url('/product-category/')); ?>" class="nav-link"><i class="bi bi-tags me-2"></i><?php esc_html_e('Categories','razh-foodies'); ?></a>
      <a href="<?php echo esc_url(home_url('/occasions/')); ?>" class="nav-link"><i class="bi bi-star me-2"></i><?php esc_html_e('For Occasions','razh-foodies'); ?></a>
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link"><i class="bi bi-envelope me-2"></i><?php esc_html_e('Contact Us','razh-foodies'); ?></a>
    </nav>
    <div class="d-grid gap-2">
      <a href="<?php echo esc_url(razh_get_shop_url()); ?>" class="btn btn-primary fw-bold">
        <i class="bi bi-bag-check me-1"></i> <?php esc_html_e('Order Now','razh-foodies'); ?>
      </a>
      <a href="tel:09852335090" class="razh-offcanvas-phone">
        <i class="bi bi-telephone-fill me-2"></i> 09852335090
      </a>
    </div>
  </div>
</div>
