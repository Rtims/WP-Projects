<?php
/**
 * Front Page — Bootstrap 5 Layout
 */
get_header();
?>

<!-- ══ HERO ══ -->
<section class="razh-hero py-5" aria-label="Welcome">
  <div class="razh-hero-dots" aria-hidden="true"></div>
  <div class="razh-hero-glow"  aria-hidden="true"></div>
  <div class="container py-3 position-relative">
    <div class="row align-items-center g-5">

      <!-- Left: Text -->
      <div class="col-lg-6">
        <span class="razh-hero-eyebrow razh-fade-up razh-d1">🌿 <?php esc_html_e("Tagum City's #1 Native Kakanin",'razh-foodies'); ?></span>
        <h1 class="mt-3 mb-2 razh-fade-up razh-d2">
          <?php esc_html_e('Traditional','razh-foodies'); ?><br>
          <em><?php esc_html_e('Native Kakanin','razh-foodies'); ?></em><br>
          <?php esc_html_e('Fresh Daily','razh-foodies'); ?>
        </h1>
        <p class="razh-hero-subtitle mb-3 razh-fade-up razh-d2"><?php esc_html_e('Lutong-bahay, pang-okasyon!','razh-foodies'); ?></p>
        <p class="razh-hero-desc mb-4 razh-fade-up razh-d3">
          <?php esc_html_e('Authentic homemade Filipino kakanin — sapin-sapin, puto, bibingka, biko, maja blanca & more. Made fresh every day in Tagum City, Davao del Norte.','razh-foodies'); ?>
        </p>
        <div class="d-flex flex-wrap gap-3 mb-3 razh-fade-up razh-d4">
          <a href="<?php echo esc_url(razh_get_shop_url()); ?>" class="btn btn-warning btn-lg px-4 fw-bold">
            <i class="bi bi-cart3 me-2"></i><?php esc_html_e('Shop Kakanin','razh-foodies'); ?>
          </a>
          <a href="<?php echo esc_url(home_url('/bilao-orders/')); ?>" class="btn btn-outline-light btn-lg px-4 fw-bold">
            <i class="bi bi-grid me-2"></i><?php esc_html_e('Order a Bilao','razh-foodies'); ?>
          </a>
        </div>
        <div class="razh-hero-phone razh-fade-up razh-d4">
          <i class="bi bi-telephone-fill"></i> 09852335090
        </div>
        <div class="d-flex gap-4 mt-4 pt-3 razh-hero-divider border-top razh-fade-up razh-d4">
          <div><div class="razh-hero-stat-num">20+</div><div class="razh-hero-stat-label"><?php esc_html_e('Varieties','razh-foodies'); ?></div></div>
          <div><div class="razh-hero-stat-num">500+</div><div class="razh-hero-stat-label"><?php esc_html_e('Happy Customers','razh-foodies'); ?></div></div>
          <div><div class="razh-hero-stat-num"><?php esc_html_e('Daily','razh-foodies'); ?></div><div class="razh-hero-stat-label"><?php esc_html_e('Fresh Made','razh-foodies'); ?></div></div>
        </div>
      </div>

      <!-- Right: Logo ring + product chips -->
      <div class="col-lg-6 d-none d-lg-flex flex-column align-items-center gap-4" aria-hidden="true">
        <div class="razh-logo-ring">
          <img src="<?php echo esc_url(razh_get_logo_url()); ?>" alt="Razh Foodies" />
        </div>
        <div class="row g-2 w-100">
          <?php
          $chips=[['emoji'=>'🟣🟡🟢','name'=>'Sapin-Sapin','price'=>'from ₱80','slug'=>'sapin-sapin'],['emoji'=>'🍚','name'=>'Puto','price'=>'₱15/pc','slug'=>'puto'],['emoji'=>'🍯','name'=>'Biko','price'=>'₱80','slug'=>'biko'],['emoji'=>'🍮','name'=>'Maja Blanca','price'=>'₱70','slug'=>'maja-blanca']];
          foreach($chips as $c):
          ?>
          <div class="col-3">
            <a href="<?php echo esc_url(home_url('/product/'.$c['slug'].'/')); ?>" class="razh-hero-chip">
              <span class="razh-chip-emoji"><?php echo $c['emoji']; ?></span>
              <span class="razh-chip-name"><?php echo esc_html($c['name']); ?></span>
              <span class="razh-chip-price"><?php echo esc_html($c['price']); ?></span>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ══ TRUST BAR ══ -->
<div class="razh-trust py-2">
  <div class="container">
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-2 py-1">
      <span class="razh-trust-item"><i class="bi bi-leaf me-1"></i><?php esc_html_e('Fresh Made Daily','razh-foodies'); ?></span>
      <span class="razh-trust-dot d-none d-sm-inline-block"></span>
      <span class="razh-trust-item"><i class="bi bi-bicycle me-1"></i><?php esc_html_e('Tagum City Delivery','razh-foodies'); ?></span>
      <span class="razh-trust-dot d-none d-sm-inline-block"></span>
      <span class="razh-trust-item"><i class="bi bi-phone me-1"></i><?php esc_html_e('GCash & Maya','razh-foodies'); ?></span>
      <span class="razh-trust-dot d-none d-sm-inline-block"></span>
      <span class="razh-trust-item"><i class="bi bi-basket me-1"></i><?php esc_html_e('Bilao for Events','razh-foodies'); ?></span>
      <span class="razh-trust-dot d-none d-sm-inline-block"></span>
      <span class="razh-trust-item"><i class="bi bi-house-heart me-1"></i><?php esc_html_e('Authentic & Homemade','razh-foodies'); ?></span>
      <span class="razh-trust-dot d-none d-sm-inline-block"></span>
      <span class="razh-trust-item"><i class="bi bi-telephone-fill me-1"></i>09852335090</span>
    </div>
  </div>
</div>

<!-- ══ CATEGORY PILLS ══ -->
<section class="py-5" style="background:var(--razh-cream-dark);">
  <div class="container">
    <div class="mb-4">
      <div class="razh-section-eyebrow mb-2"><?php esc_html_e('Browse by Type','razh-foodies'); ?></div>
      <h2 class="razh-section-title"><?php esc_html_e('All','razh-foodies'); ?> <em><?php esc_html_e('Kakanin','razh-foodies'); ?></em> <?php esc_html_e('Categories','razh-foodies'); ?></h2>
    </div>
    <div class="row g-3 row-cols-3 row-cols-sm-3 row-cols-md-6">
      <?php
      $cats=[
	['emoji'=>'🍽️','name'=>__('All Items','razh-foodies'),'url'=>razh_get_shop_url(),'count'=>'20+','active'=>true],
	['emoji'=>'🍚','name'=>__('Steamed','razh-foodies'),'url'=>home_url('/product-category/steamed/'),'count'=>'6'],
	['emoji'=>'🫓','name'=>__('Baked','razh-foodies'),'url'=>home_url('/product-category/baked/'),'count'=>'4'],
	['emoji'=>'🍯','name'=>__('Sticky Rice','razh-foodies'),'url'=>home_url('/product-category/sticky-rice/'),'count'=>'5'],
	['emoji'=>'🟣','name'=>__('Ube Flavored','razh-foodies'),'url'=>home_url('/product-category/ube-flavored/'),'count'=>'4'],
	['emoji'=>'🎉','name'=>__('Bilao Sets','razh-foodies'),'url'=>home_url('/product-category/bilao/'),'count'=>'5']];
      foreach($cats as $c):
      ?>
      <div class="col">
        <a href="<?php echo esc_url($c['url']); ?>" class="razh-cat-pill<?php echo !empty($c['active'])?' active':''; ?>">
          <span class="razh-cat-emoji"><?php echo $c['emoji']; ?></span>
          <span class="razh-cat-name"><?php echo esc_html($c['name']); ?></span>
          <span class="razh-cat-count"><?php echo esc_html($c['count']); ?> <?php esc_html_e('items','razh-foodies'); ?></span>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ FEATURED PRODUCTS ══ -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="d-flex align-items-end justify-content-between flex-wrap gap-3 mb-4">
      <div>
        <div class="razh-section-eyebrow mb-2"><?php esc_html_e('Our Products','razh-foodies'); ?></div>
        <h2 class="razh-section-title"><?php esc_html_e('Best-Selling','razh-foodies'); ?> <em><?php esc_html_e('Kakanin','razh-foodies'); ?></em></h2>
      </div>
      <a href="<?php echo esc_url(razh_get_shop_url()); ?>" class="btn btn-outline-primary rounded-pill px-4 fw-bold">
        <?php esc_html_e('View All Products','razh-foodies'); ?> <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

    <?php if(class_exists('WooCommerce')): ?>
    <div class="row g-4 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
    <?php
    $q = new WP_Query(['post_type'=>'product','posts_per_page'=>8,'post_status'=>'publish','orderby'=>'meta_value_num','meta_key'=>'total_sales','order'=>'DESC','meta_query'=>[['key'=>'_stock_status','value'=>'instock']]]);
    if($q->have_posts()): while($q->have_posts()): $q->the_post();
      global $product; $product = wc_get_product(get_the_ID()); if(!$product) continue;
    ?>
      <div class="col">
        <div class="razh-product-card card h-100">
          <div class="razh-card-img-wrap position-relative">
            <?php if($product->is_on_sale()) echo '<span class="razh-product-badge razh-badge-sale">SALE</span>'; elseif($product->is_featured()) echo '<span class="razh-product-badge razh-badge-bs"><i class="bi bi-star-fill me-1"></i>Best Seller</span>'; elseif((new DateTime($product->get_date_created()))->diff(new DateTime())->days <= 30) echo '<span class="razh-product-badge razh-badge-new">✨ New</span>'; ?>
            <a href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()): the_post_thumbnail('razh-product',['class'=>'img-fluid']); else: ?>
              <div class="razh-img-placeholder">🍚</div>
              <?php endif; ?>
            </a>
            <button class="razh-quick-add add_to_cart_button ajax_add_to_cart fw-bold"
                    data-product_id="<?php echo esc_attr($product->get_id()); ?>" data-quantity="1">
              <i class="bi bi-cart-plus me-1"></i><?php esc_html_e('Add to Cart','razh-foodies'); ?>
            </button>
          </div>
          <div class="razh-card-body flex-grow-1 d-flex flex-column">
            <?php razh_product_category_label(); ?>
            <h3 class="razh-product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="d-flex align-items-center gap-1 mb-2">
              <?php if($product->get_rating_count()>0): echo wc_get_rating_html($product->get_average_rating()); else: echo '<span class="razh-product-stars">★★★★★</span>'; endif; ?>
            </div>
            <p class="razh-product-desc"><?php echo wp_trim_words(get_the_excerpt(),14); ?></p>
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
    <?php endwhile; wp_reset_postdata(); else: echo '<div class="col-12"><div class="alert alert-info">' . esc_html__('Add products in WooCommerce to display here.','razh-foodies') . '</div></div>'; endif; ?>
    </div>
    <?php else: echo '<div class="alert alert-warning">' . esc_html__('WooCommerce plugin is required.','razh-foodies') . '</div>'; endif; ?>
  </div>
</section>

<!-- ══ PROMO BANNER ══ -->
<section class="py-4" style="background:var(--razh-cream);">
  <div class="container">
    <div class="razh-promo-card p-4 p-md-5">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <div class="razh-promo-label mb-2"><?php esc_html_e('Limited Offer • Tagum City','razh-foodies'); ?></div>
          <h2 class="razh-promo-title mb-2">
            <?php esc_html_e('Order a Bilao NOW!','razh-foodies'); ?><br>
          </h2>
          <p class="razh-promo-sub mb-0"><?php esc_html_e('Para sa birthday, kasal, krismas, fiesta & lahat ng okasyon!','razh-foodies'); ?></p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="<?php echo esc_url(home_url('/product-category/bilao')); ?>" class="btn btn-primary btn-lg fw-bold px-5 py-3 w-100 w-lg-auto">
            <?php esc_html_e('Order a Bilao','razh-foodies'); ?> <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ BILAO ORDERS ══ -->
<section class="razh-bilao-section py-5">
  <div class="container position-relative">
    <div class="d-flex align-items-end justify-content-between flex-wrap gap-3 mb-4">
      <div>
        <div class="mb-2" style="font-size:0.72rem;font-weight:900;letter-spacing:2px;text-transform:uppercase;color:rgba(255,255,255,0.55);">
          🎉 <?php esc_html_e('Para sa Selebrasyon','razh-foodies'); ?>
        </div>
        <h2 class="text-white mb-1" style="font-family:var(--razh-font-display);font-size:clamp(1.7rem,3.5vw,2.5rem);">
          <?php esc_html_e('Kakanin','razh-foodies'); ?> <em style="color:var(--razh-yellow);font-style:normal;"><?php esc_html_e('sa Bilao','razh-foodies'); ?></em>
        </h2>
        <p class="mb-0" style="color:rgba(255,255,255,0.72);font-weight:600;font-size:0.9rem;"><?php esc_html_e('Perfect for birthdays, fiestas, weddings & christenings in Tagum City.','razh-foodies'); ?></p>
      </div>
      <a href="<?php echo esc_url(home_url('/product-category/bilao')); ?>" class="razh-view-all-light">
        <?php esc_html_e('View All Bilao Sets','razh-foodies'); ?> <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-4">

      <div class="col">
        <div class="razh-bilao-card">
          <div class="razh-bilao-card-img"><img src="<?php echo esc_url(home_url('wp-content/themes/razh-foodies/assets/images/bilao-assorted.jpg')); ?>" alt="Razh Foodies Bilao Assorted" /></div>
          <div class="razh-bilao-card-body">
            <h3 class="razh-bilao-name">Assorted Kakanin Bilao</h3>
            <p class="razh-bilao-desc-text mb-3">Sapin-sapin, puto, kutsinta, and biko in one bilao.</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="razh-bilao-price">₱750</div>
                <div class="razh-bilao-serves">Large, Medium, Small Size</div>
              </div>
              <a href="<?php echo esc_url(home_url('/product-category/bilao')); ?>" class="razh-btn-bilao">Order Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="razh-bilao-card">
          <div class="razh-bilao-card-img"><img src="<?php echo esc_url(home_url('wp-content/themes/razh-foodies/assets/images/bake-cassava.png')); ?>" alt="Razh Foodies Cassava Cake" /></div>
          <div class="razh-bilao-card-body">
            <h3 class="razh-bilao-name">Bake Cassava</h3>
            <p class="razh-bilao-desc-text mb-3">Full bilao of moist cassava cake</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="razh-bilao-price">₱750</div>
                <div class="razh-bilao-serves">Large, Medium, Small Size</div>
              </div>
              <a href="<?php echo esc_url(home_url('/product-category/bilao')); ?>" class="razh-btn-bilao">Order Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="razh-bilao-card">
          <div class="razh-bilao-card-img"><img src="<?php echo esc_url(home_url('wp-content/themes/razh-foodies/assets/images/biko-latik.png')); ?>" alt="Razh Foodies Biko Latik" /></div>
          <div class="razh-bilao-card-body">
            <h3 class="razh-bilao-name">Biko Latik</h3>
            <p class="razh-bilao-desc-text mb-3">Extra-thick biko with generous latik topping.</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="razh-bilao-price">₱750</div>
                <div class="razh-bilao-serves">Large, Medium, Small Size</div>
              </div>
              <a href="<?php echo esc_url(home_url('/product-category/bilao')); ?>" class="razh-btn-bilao">Order Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="razh-bilao-card">
          <div class="razh-bilao-card-img"><img src="<?php echo esc_url(home_url('wp-content/themes/razh-foodies/assets/images/maja-blanca.png')); ?>" alt="Razh Foodies Maja Blanca" /></div>
          <div class="razh-bilao-card-body">
            <h3 class="razh-bilao-name">Maja Blanca</h3>
            <p class="razh-bilao-desc-text mb-3">Creamy maja blanca with latik. Gatas-gatas sa bawat subo!</p>
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <div class="razh-bilao-price">₱700</div>
                <div class="razh-bilao-serves">Large, Medium, Small Size</div>
              </div>
              <a href="<?php echo esc_url(home_url('/product-category/bilao')); ?>" class="razh-btn-bilao">Order Now</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══ OCCASIONS ══ -->
<section class="py-5" style="background:var(--razh-cream-dark);">
  <div class="container">
    <div class="text-center mb-4">
      <div class="razh-section-eyebrow justify-content-center mb-2"><?php esc_html_e('Shop by Occasion','razh-foodies'); ?></div>
      <h2 class="razh-section-title"><?php esc_html_e('Kakanin for','razh-foodies'); ?> <em><?php esc_html_e('Every Event','razh-foodies'); ?></em></h2>
    </div>
    <div class="row g-3 row-cols-3 row-cols-sm-3 row-cols-md-6">
      <?php
      $occ=[['emoji'=>'🎂','name'=>__('Birthday','razh-foodies'),'hint'=>__('Party bilao sets','razh-foodies')],['emoji'=>'💍','name'=>__('Wedding','razh-foodies'),'hint'=>__('Bulk orders welcome','razh-foodies')],['emoji'=>'🍼','name'=>__('Christening','razh-foodies'),'hint'=>__('Custom bilao sets','razh-foodies')],['emoji'=>'🎄','name'=>__('Christmas','razh-foodies'),'hint'=>__('Holiday specials','razh-foodies')],['emoji'=>'🎊','name'=>__('Fiesta','razh-foodies'),'hint'=>__('Barrio fiesta sets','razh-foodies')],['emoji'=>'🏫','name'=>__('Graduation','razh-foodies'),'hint'=>__('Celebratory sets','razh-foodies')]];
      foreach($occ as $o):
      ?>
      <div class="col">
        <a href="<?php echo esc_url(razh_get_shop_url()); ?>" class="razh-occasion-card">
          <span class="razh-occasion-emoji"><?php echo $o['emoji']; ?></span>
          <div class="razh-occasion-name"><?php echo esc_html($o['name']); ?></div>
          <div class="razh-occasion-hint"><?php echo esc_html($o['hint']); ?></div>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ HOW TO ORDER ══ -->
<section class="py-5" style="background:var(--razh-red-pale);">
  <div class="container">
    <div class="text-center mb-5">
      <div class="razh-section-eyebrow justify-content-center mb-2"><?php esc_html_e('Quick & Easy','razh-foodies'); ?></div>
      <h2 class="razh-section-title"><?php esc_html_e('How to','razh-foodies'); ?> <em><?php esc_html_e('Order','razh-foodies'); ?></em></h2>
    </div>
    <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-4">
      <?php
      $steps=[['emoji'=>'📱','title'=>__('Browse & Choose','razh-foodies'),'desc'=>__('Browse our kakanin products and pick your favorites.','razh-foodies')],['emoji'=>'💬','title'=>__('Message Us','razh-foodies'),'desc'=>__('Message via Facebook or call/text 09852335090.','razh-foodies')],['emoji'=>'💳','title'=>__('Pay via GCash','razh-foodies'),'desc'=>__('Pay via GCash, Maya, or cash on delivery in Tagum City.','razh-foodies')],['emoji'=>'🛵','title'=>__('Receive & Enjoy!','razh-foodies'),'desc'=>__('Fresh kakanin delivered to your door. Kain na!','razh-foodies')]];
      foreach($steps as $i=>$s):
      ?>
      <div class="col">
        <div class="razh-step-card">
          <div class="razh-step-num"><?php echo $i+1; ?></div>
          <span class="razh-step-emoji"><?php echo $s['emoji']; ?></span>
          <div class="razh-step-title"><?php echo esc_html($s['title']); ?></div>
          <p class="razh-step-desc mb-0"><?php echo esc_html($s['desc']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══ SEO CONTENT ══ -->
<section class="razh-seo-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 razh-seo-inner">
        <h2><?php esc_html_e('Native Kakanin in Tagum City — Razh Foodies','razh-foodies'); ?></h2>
        <p><?php esc_html_e('Looking for native kakanin in Tagum City? Razh Foodies is your go-to source for freshly made, traditional Filipino kakanin in Tagum, Davao del Norte. From classic sapin-sapin and puto to creamy maja blanca, biko with latik, and more — all made fresh daily.','razh-foodies'); ?></p>
        <h2><?php esc_html_e('Kakanin sa Bilao para sa Lahat ng Okasyon sa Tagum City','razh-foodies'); ?></h2>
        <p><?php esc_html_e('Celebrating a birthday, christening, wedding, or graduation? Our bilao kakanin in Tagum City serves 10 to 50+ guests, delivered fresh across Tagum City and nearby areas in Davao del Norte.','razh-foodies'); ?></p>
        <h2><?php esc_html_e('Order Now — Call or Text 09852335090','razh-foodies'); ?></h2>
        <p><?php esc_html_e('Call or text 09852335090, message us on Facebook: razh.foodies, or order on our website. All kakanin are freshly prepared — no preservatives, luto araw-araw!','razh-foodies'); ?></p>
        <div class="d-flex flex-wrap gap-2 mt-3">
          <?php foreach(['Kakanin Tagum City','Native Kakanin Tagum','Traditional Kakanin Tagum','Sapin-sapin Tagum City','Puto Tagum','Biko Tagum City','Bibingka Tagum','Maja Blanca Tagum','Bilao Kakanin Tagum City','Filipino Delicacies Davao del Norte','Razh Foodies 09852335090','Kakanin Delivery Tagum City'] as $t): ?>
          <span class="razh-seo-tag"><?php echo esc_html($t); ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
