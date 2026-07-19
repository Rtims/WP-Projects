/* Razh Foodies — Main JS v1.0 (Bootstrap 5) */
(function () {
  'use strict';

  /* ── Navbar scroll shadow ── */
  const navbar = document.getElementById('razh-navbar');
  if (navbar) {
    const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 10);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── Scroll-reveal animation ── */
  if ('IntersectionObserver' in window) {
    const targets = document.querySelectorAll(
      '.razh-product-card, ul.products li.product, .razh-bilao-card, .razh-step-card, .razh-occasion-card'
    );
    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          entry.target.style.animationDelay = (i * 0.06) + 's';
          entry.target.style.animation = 'razh-fadeUp 0.55s ease forwards';
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    targets.forEach(el => { el.style.opacity = '0'; obs.observe(el); });
  }

  /* ── Update cart count badges via WC fragment ── */
  if (typeof jQuery !== 'undefined') {
    jQuery(document.body).on('wc_fragments_loaded wc_fragments_refreshed added_to_cart removed_from_cart', function () {
      const count = jQuery('.cart-contents-count').text()
                 || jQuery('.woocommerce-cart-count').text()
                 || '0';
      document.querySelectorAll('.razh-cart-count, .razh-float-cart-count').forEach(el => {
        el.textContent = count;
      });
    });
  }

  /* ── Wishlist button toggle ── */
  document.querySelectorAll('.razh-wishlist-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const icon = this.querySelector('i');
      if (!icon) return;
      if (icon.classList.contains('bi-heart')) {
        icon.classList.replace('bi-heart', 'bi-heart-fill');
        icon.style.color = 'var(--razh-red)';
        this.setAttribute('aria-label', 'Remove from wishlist');
      } else {
        icon.classList.replace('bi-heart-fill', 'bi-heart');
        icon.style.color = '';
        this.setAttribute('aria-label', 'Add to wishlist');
      }
    });
  });

  /* ── Bootstrap tooltip init (if used) ── */
  if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => {
      new bootstrap.Tooltip(el);
    });
  }

})();
