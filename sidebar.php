<aside class="sidebar" role="complementary">
  <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'primary-sidebar' ); ?>
  <?php else : ?>
    <section class="widget">
      <h2 class="widget-title"><?php esc_html_e( 'About this site', 'my-custom-theme' ); ?></h2>
      <p><?php esc_html_e( 'Add widgets to the Primary Sidebar in Appearance → Widgets.', 'my-custom-theme' ); ?></p>
    </section>
  <?php endif; ?>
</aside>