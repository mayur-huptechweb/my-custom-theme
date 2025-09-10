</div>
<footer class="site-footer">
  <div class="container">
    <div class="site-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <?php if (has_custom_logo()) {
          the_custom_logo();
        } else { ?>
          <h1><?php bloginfo('name'); ?></h1>
        <?php } ?>
      </a>
    </div>

    <div class="social">
      <a href="https://instagram.com" target="_blank" rel="noopener">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://facebook.com" target="_blank" rel="noopener">
        <i class="fa-brands fa-facebook"></i>
      </a>
      <a href="https://twitter.com" target="_blank" rel="noopener">
        <i class="fab fa-x-twitter"></i> 
      </a>
      <a href="https://linkedin.com/in/" target="_blank" rel="noopener">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>

    <?php
    wp_nav_menu(array(
      'theme_location' => 'footer',
      'container'      => false
    ));
    ?>
  </div>
    <p class="copyright">
      &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. 
      <?php esc_html_e('All rights reserved.', 'my-custom-theme'); ?>
    </p>
  <?php wp_footer(); ?>
</footer>
</body>
</html>
