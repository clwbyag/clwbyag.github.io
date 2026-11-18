</main>
<footer class="site-footer">
  <div class="footer-grid">
    <div>
      <div class="footer-brand">CLW: The Changing Tracks</div>
      <p><?php esc_html_e('An academic multimedia journalism project documenting concerns around production change and privatisation debates at Chittaranjan Locomotive Works.', 'clw-changing-tracks'); ?></p>
    </div>
    <div>
      <h4><?php esc_html_e('Explore', 'clw-changing-tracks'); ?></h4>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer',
        'container'      => false,
        'fallback_cb'    => false,
      ));
      ?>
    </div>
    <div>
      <h4><?php esc_html_e('Project', 'clw-changing-tracks'); ?></h4>
      <ul>
        <li><a href="<?php echo esc_url(home_url('/about-the-project/')); ?>"><?php esc_html_e('About the Project', 'clw-changing-tracks'); ?></a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>&copy; <?php echo esc_html(date('Y')); ?> CLW: The Changing Tracks</span>
    <span><?php esc_html_e('Facts · Allegations · Official statements · Open questions', 'clw-changing-tracks'); ?></span>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
