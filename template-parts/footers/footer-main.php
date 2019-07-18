<footer>
  <div class="footer">
    <div class="footer__menu">
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container' => false
      )) ?>
      <?php wp_nav_menu(array(
        'theme_location' => 'footer-social-media',
        'menu_class' => 'footer__menu-social',
        'container' => false
      )) ?>
    </div>
  </div>
  <p class="footer__copy">&copy; Renato Fekete <?php echo date("Y"); ?></p>
</footer>
<div class="search-overlay">
  <div class="search-overlay__inner">
    <div class="search-bar">
      <div class="search-bar__close--wrapper">
        <i class="fas fa-chevron-left search-bar__close"></i>
      </div>
      <input type="text" placeholder="Search" id="search-bar" disabled="disabled">
      <div class="search-bar__loader--show"><i class="fas fa-spinner search-bar__loader"></i></div>
    </div>
    <div class="search-results"></div>
  </div>
</div>