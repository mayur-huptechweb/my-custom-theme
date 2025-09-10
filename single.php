<?php get_header(); ?>
<main id="primary" class="site-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <p class="entry-meta"><?php echo get_the_date(); ?> <?php esc_html_e('by', 'my-custom-theme'); ?> <?php the_author_posts_link(); ?></p>
        </header>
        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
        <?php endif; ?>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer class="entry-footer">
          <?php the_tags('<span class="tags">', ', ', '</span>'); ?>
        </footer>
        <?php comments_template(); ?>
      </article>
  <?php endwhile;
  endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>