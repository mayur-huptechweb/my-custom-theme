<?php get_header(); ?>
<main id="primary" class="site-main">
  <h1><?php esc_html_e('Page not found', 'my-custom-theme'); ?></h1>
  <p><?php esc_html_e('It looks like nothing was found at this location.', 'my-custom-theme'); ?></p>
  <?php get_search_form(); ?>
</main>
<?php get_footer(); ?>