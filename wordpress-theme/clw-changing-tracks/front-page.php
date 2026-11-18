<?php
/**
 * Front page — for best results, paste homepage Gutenberg blocks
 * or mirror content from the static index.html in the site root.
 */
get_header();
?>
<section class="hero" aria-label="Hero">
  <div class="hero-media" aria-hidden="true">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('full'); ?>
    <?php else : ?>
      <div class="placeholder-photo hero-ph">FULL-WIDTH HERO PHOTO<br />CLW locomotive / factory floor<br /><small>Set a Featured Image on the Homepage</small></div>
    <?php endif; ?>
  </div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <p class="hero-label">Chittaranjan · West Bengal · India</p>
    <h1>CLW: A Legacy on the Line</h1>
    <p class="hero-sub">Exploring the changing landscape of Chittaranjan Locomotive Works and the growing concerns over privatisation, production and workers' futures.</p>
    <a class="btn" href="#intro">Explore the Story</a>
  </div>
</section>

<section class="section" id="intro">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <article class="prose">
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>
