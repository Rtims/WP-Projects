# Razh Foodies — WordPress WooCommerce Theme (Bootstrap 5)

**Version:** 1.0.0 | **WordPress:** 6.0+ | **PHP:** 8.0+ | **WooCommerce:** 7.0+
**Stack:** Bootstrap 5.3 + Bootstrap Icons 1.11 + Lilita One + Nunito

---

## ── INSTALLATION ──────────────────────────────────────────

1. Upload `razh-foodies/` folder → `/wp-content/themes/`
2. WP Admin → **Appearance → Themes** → Activate **Razh Foodies**
3. Install & activate **WooCommerce** plugin
4. WP Admin → **Settings → Reading** → Set Front Page to a static page

---

## ── REQUIRED PLUGINS ──────────────────────────────────────

| Plugin | Purpose |
|--------|---------|
| WooCommerce | Products, cart, checkout |
| Yoast SEO / Rank Math | Local SEO for Tagum City |
| Contact Form 7 | Contact / order form |

---

## ── SETUP STEPS ───────────────────────────────────────────

### 1 — Logo
Appearance → Customize → Site Identity → Upload your logo

### 2 — Navigation Menus
Appearance → Menus → Create & assign to:
- **Primary Navigation** — main header links
- **Footer — Kakanin Products** — product footer links
- **Footer — Quick Links** — cart/account/shop
- **Footer — Info** — delivery/faq/privacy

### 3 — WooCommerce Product Categories
Create under Products → Categories:
`Steamed` · `Baked` · `Sticky Rice` · `Pudding` · `Ube Flavored` · `Pandan` · `Bilao Sets`

### 4 — Pages to Create
| Page | Slug |
|------|------|
| Home | (set as static front page) |
| Bilao Orders | /bilao-orders/ |
| Occasions | /occasions/ |
| Contact | /contact/ |
| Delivery Info | /delivery/ |
| FAQ | /faq/ |
| Track My Order | /track-order/ |

### 5 — Customizer
Appearance → Customize → **Razh Foodies Settings**
- Phone number, Facebook URL, address
- Hero title/subtitle/description
- Announcement bar text
- Brand colors (red, yellow, dark)

---

## ── FILE STRUCTURE ────────────────────────────────────────

```
razh-foodies/
├── style.css                  ← WP theme header
├── functions.php              ← Bootstrap 5 enqueue, WC hooks, helpers
├── header.php                 ← <head> + Bootstrap navbar via template-parts
├── footer.php                 ← Bootstrap footer + floating buttons
├── front-page.php             ← Homepage (hero, products, bilao, occasions…)
├── index.php / page.php / single.php / 404.php / search.php
├── woocommerce.php            ← WC wrapper
├── searchform.php             ← Bootstrap search form
├── inc/
│   ├── nav-walker.php         ← Bootstrap 5 dropdown nav walker
│   ├── footer-walker.php      ← Footer menu + fallback links
│   └── customizer.php         ← Customizer panel
├── template-parts/
│   ├── header-announce.php    ← Marquee announcement bar
│   └── header-nav.php         ← Bootstrap 5 navbar + offcanvas mobile menu
├── assets/
│   ├── css/main.css           ← Bootstrap overrides + Razh brand styles
│   ├── js/main.js             ← Scroll reveal, cart sync, wishlist toggle
│   └── images/logo.jpg        ← Default logo
└── woocommerce/
    ├── loop/loop-start.php    ← Bootstrap row grid wrapper
    ├── loop/loop-end.php
    ├── global/wrapper-start.php
    ├── global/wrapper-end.php
    ├── notices/wrapper.php    ← Bootstrap alert notices
    └── cart/cart.php          ← Bootstrap 5 cart table
```

---

## ── BOOTSTRAP 5 CDN RESOURCES ────────────────────────────

| Resource | Version |
|----------|---------|
| Bootstrap CSS | 5.3.3 |
| Bootstrap JS Bundle | 5.3.3 |
| Bootstrap Icons | 1.11.3 |
| Google Fonts (Lilita One, Nunito, Dancing Script) | Latest |

All loaded via `functions.php` `wp_enqueue_style/script`.

---

## ── BRAND COLORS ─────────────────────────────────────────

| Variable | Value | Usage |
|----------|-------|-------|
| `--razh-red` / `--bs-primary` | #C41230 | Buttons, badges, nav hover |
| `--razh-red-dark` | #8B0E22 | Footer, hero gradient |
| `--razh-yellow` / `--bs-warning` | #F7E840 | Trust bar, CTA, logo ring |
| `--razh-cream` | #FBF8EE | Page background |

Change in: Appearance → Customize → Razh Foodies Settings → Brand Colors

---

## ── LOCAL SEO ────────────────────────────────────────────

Auto-injected on homepage & shop:
- JSON-LD `FoodEstablishment` schema with Tagum City address
- Meta description with kakanin + Tagum City keywords
- SEO keyword cloud section on homepage
- Install Yoast SEO or Rank Math for full on-page control

---

📞 09852335090  |  📘 facebook.com/razh.foodies  |  📍 Tagum City, Davao del Norte
