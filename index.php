
<?php get_header(); ?>
<main id="primary" class="site-main">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="entry-meta"><?php echo get_the_date(); ?> <?php esc_html_e('by','my-custom-theme'); ?> <?php the_author_posts_link(); ?></p>
        </header>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
          </div>
        <?php endif; ?>
        <div class="entry-summary">
          <?php the_excerpt(); ?>
        </div>
        <footer class="entry-footer">
          <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read more →','my-custom-theme'); ?></a>
        </footer>
      </article>
    <?php endwhile; ?>

    <nav class="posts-navigation">
      <div class="nav-previous"><?php next_posts_link( '&larr; ' . __( 'Older posts', 'my-custom-theme' ) ); ?></div>
      <div class="nav-next"><?php previous_posts_link( __( 'Newer posts', 'my-custom-theme' ) . ' &rarr;' ); ?></div>
    </nav>
  <?php else : ?>
    <p><?php esc_html_e( 'No posts found.', 'my-custom-theme' ); ?></p>
  <?php endif; ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
