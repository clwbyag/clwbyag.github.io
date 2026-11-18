<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <section class="page-hero">
    <?php if (has_post_thumbnail()) : ?>
      <div class="hero-media"><?php the_post_thumbnail('full'); ?></div>
    <?php else : ?>
      <div class="hero-media" aria-hidden="true"><div class="placeholder-photo hero-ph"><?php the_title(); ?></div></div>
    <?php endif; ?>
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a> / <?php the_title(); ?></p>
      <h1><?php the_title(); ?></h1>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <article class="prose article-wide">
        <?php the_content(); ?>
      </article>
    </div>
  </section>
<?php endwhile; ?>
<?php get_footer(); ?>
