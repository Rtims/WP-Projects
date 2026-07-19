<?php
/**
 * Footer — Bootstrap 5
 */
$logo_url = razh_get_logo_url();
require_once get_template_directory() . '/inc/footer-walker.php';
?>

<footer class="razh-footer pt-5" role="contentinfo" itemscope itemtype="https://schema.org/LocalBusiness">
  <div class="container">
    <div class="row g-5 pb-5">

      <!-- Brand -->
      <div class="col-lg-4">
        <div class="razh-footer-logo d-flex align-items-center gap-3 mb-3">
          <img src="<?php echo esc_url($logo_url); ?>" alt="Razh Foodies" width="64" height="64" itemprop="image" />
          <div>
            <div class="razh-footer-brand-name" itemprop="name">Razh Foodies</div>
            <div class="razh-footer-brand-sub"><?php esc_html_e('Traditional Native Kakanin','razh-foodies'); ?></div>
          </div>
        </div>
        <div class="razh-footer-tagline mb-3"><?php esc_html_e('Lutong-bahay, pang-okasyon!','razh-foodies'); ?></div>
        <p class="razh-footer-desc" itemprop="description">
          <?php esc_html_e('Freshly made, authentic traditional native kakanin in Tagum City, Davao del Norte. We deliver across Tagum City daily — perfect for all occasions!','razh-foodies'); ?>
        </p>
        <ul class="list-unstyled razh-footer-contact mb-3">
          <li class="d-flex gap-2 mb-2">
            <i class="bi bi-geo-alt-fill mt-1 flex-shrink-0" style="color:var(--razh-yellow);"></i>
            <span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
              <span itemprop="addressLocality">Tagum City</span>,
              <span itemprop="addressRegion">Davao del Norte</span>
              <span itemprop="postalCode">8100</span>
            </span>
          </li>
          <li class="d-flex gap-2 mb-2">
            <i class="bi bi-telephone-fill mt-1 flex-shrink-0" style="color:var(--razh-yellow);"></i>
            <a href="tel:09852335090" itemprop="telephone">09852335090</a>
          </li>
          <li class="d-flex gap-2 mb-2">
            <i class="bi bi-clock-fill mt-1 flex-shrink-0" style="color:var(--razh-yellow);"></i>
            <span itemprop="openingHours" content="Mo-Su 07:00-20:00">
              <?php esc_html_e('Open Daily: 7:00 AM – 8:00 PM','razh-foodies'); ?>
            </span>
          </li>
          <li class="d-flex gap-2 mb-2">
            <i class="bi bi-facebook mt-1 flex-shrink-0" style="color:var(--razh-yellow);"></i>
            <a href="https://www.facebook.com/razh.foodies" target="_blank" rel="noopener noreferrer" itemprop="sameAs">
              facebook.com/razh.foodies
            </a>
          </li>
        </ul>
        <div class="d-flex gap-2 mb-3">
          <a href="https://www.facebook.com/razh.foodies" class="razh-social-btn" aria-label="Facebook" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://m.me/razh.foodies" class="razh-social-btn" aria-label="Messenger" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-messenger"></i>
          </a>
          <a href="tel:09852335090" class="razh-social-btn" aria-label="<?php esc_attr_e('Call us','razh-foodies'); ?>">
            <i class="bi bi-telephone-fill"></i>
          </a>
        </div>
        <div class="d-flex flex-wrap gap-2">
          Pay with:
          <span class="razh-payment-badge"><i class="bi bi-phone me-1"></i>GCash</span>
        </div>
      </div>

      <!-- Our Kakanin -->
      <div class="col-6 col-lg-2">
        <div class="razh-footer-col-title mb-3"><?php esc_html_e('Our Kakanin','razh-foodies'); ?></div>
        <?php razh_footer_kakanin_links(); ?>
      </div>

      <!-- Quick Links -->
      <div class="col-6 col-lg-2">
        <div class="razh-footer-col-title mb-3"><?php esc_html_e('Quick Links','razh-foodies'); ?></div>
        <?php razh_footer_quick_links(); ?>
      </div>

      <!-- Delivery Info -->
      <div class="col-12 col-lg-4">
        <div class="razh-footer-col-title mb-3"><?php esc_html_e('Delivery Areas','razh-foodies'); ?></div>
        <?php razh_footer_info_links(); ?>
        <div class="mt-4">
          <div class="razh-footer-col-title mb-2"><?php esc_html_e('Coverage','razh-foodies'); ?></div>
          <div class="razh-coverage">
            <i class="bi bi-check-circle-fill me-1" style="color:var(--razh-yellow);"></i><?php esc_html_e('Tagum City (All Barangays)','razh-foodies'); ?><br>
            <i class="bi bi-check-circle-fill me-1" style="color:var(--razh-yellow);"></i>Magugpo, Visayan Village<br>
            <i class="bi bi-check-circle-fill me-1" style="color:var(--razh-yellow);"></i>Apokon, Canocotan<br>
            <i class="bi bi-check-circle-fill me-1" style="color:var(--razh-yellow);"></i>Liboganon, Mankilam<br>
            <small style="color:rgba(255,255,255,0.35);">*<?php esc_html_e('Outside Tagum: add-on fee applies','razh-foodies'); ?></small>
          </div>
        </div>
      </div>

    </div><!-- /row -->
  </div><!-- /container -->

  <!-- Footer Bottom -->
  <div class="border-top" style="border-color:rgba(255,255,255,0.10)!important;">
    <div class="container py-3">
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-center gap-3">
        <p class="razh-footer-copy mb-0">
          &copy; <?php echo date('Y'); ?>
          <strong>Razh Foodies</strong>. <?php esc_html_e('All rights reserved.','razh-foodies'); ?> &middot;
          <strong><?php esc_html_e('Traditional Native Kakanin in Tagum City','razh-foodies'); ?></strong>,
          <?php esc_html_e('Davao del Norte, Philippines.','razh-foodies'); ?>
          Website Develop by <a style="color:var(--razh-yellow);" target="_blank" href="https://creativeboxdm.com">CreativeBox Digital Marketing</a>
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- Floating Cart Button -->
<a href="<?php echo esc_url(razh_get_cart_url()); ?>"
   class="razh-float-cart"
   aria-label="<?php esc_attr_e('View cart','razh-foodies'); ?>">
  <i class="bi bi-cart3"></i>
  <span class="razh-float-cart-count"><?php echo razh_get_cart_count(); ?></span>
</a>

<!-- Floating Messenger Button -->
<a href="https://m.me/razh.foodies"
   class="razh-float-fb"
   aria-label="<?php esc_attr_e('Chat on Messenger','razh-foodies'); ?>"
   target="_blank" rel="noopener noreferrer">
  <i class="bi bi-messenger"></i>
</a>

<?php wp_footer(); ?>
</body>
</html>
