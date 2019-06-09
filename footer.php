</main>
<footer>
  <div class="footer">
    <?php wp_nav_menu(array(
      'theme-location' => 'footer-menu',
      'container' => false
    )) ?>
  </div>
</footer>
<div class="search-overlay">
  <div class="search-overlay__inner">
    <div class="search-bar">
      <input type="text" placeholder="Search" id="search-bar">
      <div class="search-bar__loader--show"><i class="fas fa-spinner search-bar__loader"></i></div>
      <div class="search-bar__close--wrapper">
        <i class="fas fa-times search-bar__close"></i>
      </div>
    </div>
    <div class="search-results"></div>
  </div>
</div>
<?php wp_footer(); ?>
</body>

</html>