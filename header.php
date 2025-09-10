<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style>
    .site-header {
      background: #fff;
      border-bottom: 1px solid #eee;
    }
    .site-header .container.inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .primary-nav ul {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
    }
    .primary-nav ul li a {
      text-decoration: none;
      color: #333;
    }

    .menu-toggle {
      display: none;
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
      color: #000;
    }

    @media (max-width: 768px) {
      .site-header .container.inner {
        padding: 10px 20px;
      }

      .primary-nav ul {
        display: none; 
        flex-direction: column;
        gap: 15px;
        background: #fff;
        position: absolute;
        top: 100px;
        right: 25px;
        width: 200px;
        padding: 15px;
        border: 1px solid #ddd;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      }
      .primary-nav ul.show {
        display: flex;
        padding: 15px;
      }
      .menu-toggle {
        display: block;
      }
    }
  </style>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="container inner">
    <div class="site-branding">
      <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
      <?php endif; ?>
    </div>
    <nav class="primary-nav" id="site-navigation" aria-label="<?php esc_attr_e('Primary','my-custom-theme'); ?>">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <i class="fa-solid fa-bars"></i>
      </button>
      <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_id'        => 'primary-menu',
          'container'      => false
        ) );
      ?>
    </nav>
  </div>
</header>
<div class="container site-content">

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggleBtn = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".primary-nav ul");

    if (toggleBtn && menu) {
      toggleBtn.addEventListener("click", function () {
        menu.classList.toggle("show");
      });
    }
  });
</script>
