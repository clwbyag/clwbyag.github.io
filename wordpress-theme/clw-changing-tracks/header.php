<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main"><?php esc_html_e('Skip to content', 'clw-changing-tracks'); ?></a>
<header class="site-header">
  <div class="header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <span class="brand-kicker"><?php esc_html_e('Multimedia Journalism Project', 'clw-changing-tracks'); ?></span>
      <span class="brand-title">CLW: <span><?php esc_html_e('The Changing Tracks', 'clw-changing-tracks'); ?></span></span>
    </a>
    <button class="nav-toggle" type="button" aria-label="<?php esc_attr_e('Open menu', 'clw-changing-tracks'); ?>" aria-expanded="false" aria-controls="site-nav">
      <span></span><span></span><span></span>
    </button>
    <nav class="site-nav" id="site-nav" aria-label="<?php esc_attr_e('Primary', 'clw-changing-tracks'); ?>">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container'      => false,
        'fallback_cb'    => false,
      ));
      ?>
    </nav>
  </div>
</header>
<main id="main">
