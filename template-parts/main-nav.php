<header>
  <div class="navigation">
    <p class="navigation__logo">Renato Fekete</p>
    <nav class="navigation__nav">
      <?php wp_nav_menu(array(
        'theme-location' => 'main-menu',
        'container' => false
      )) ?>
      <div class="search__icon"><i class="fas fa-search"></i></div>
    </nav>
  </div>
</header>