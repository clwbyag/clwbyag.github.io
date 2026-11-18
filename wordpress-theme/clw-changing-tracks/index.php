<?php get_header(); ?>
<section class="section">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article <?php post_class('prose article reveal'); ?>>
        <p class="section-kicker"><?php echo esc_html(get_the_date()); ?></p>
        <h2 class="section-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <hr class="divider" />
        <?php the_excerpt(); ?>
        <p><a class="btn btn-outline" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'clw-changing-tracks'); ?></a></p>
      </article>
    <?php endwhile; else : ?>
      <p><?php esc_html_e('No posts found. Create Pages for each section of the project.', 'clw-changing-tracks'); ?></p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
