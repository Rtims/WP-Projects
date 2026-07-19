<?php $uid = esc_attr(uniqid('sf-')); ?>
<form role="search" method="get" class="razh-search-form position-relative" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="search" id="<?php echo $uid; ?>"
         class="form-control"
         placeholder="<?php esc_attr_e('Search kakanin…','razh-foodies'); ?>"
         value="<?php echo get_search_query(); ?>"
         name="s"
         aria-label="<?php esc_attr_e('Search','razh-foodies'); ?>" />
  <?php if(class_exists('WooCommerce')) echo '<input type="hidden" name="post_type" value="product">'; ?>
  <button type="submit" class="razh-search-btn" aria-label="<?php esc_attr_e('Search','razh-foodies'); ?>">
    <i class="bi bi-search"></i>
  </button>
</form>
