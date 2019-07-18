<header>
  <div class="navigation">
    <p class="navigation__logo"><a href="<?php echo home_url(); ?>">Renato Fekete</a></p>
    <nav class="navigation__nav">
      <div class="navigation__menu">
        <?php wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false
        )) ?>
        <div class="navigation__menu-close"><i class="fas fa-times"></i></div>
      </div>
      <div class="search__icon"><i class="fas fa-search"></i></div>
      <div class="hamburger__menu"><i class="fas fa-bars"></i></div>
    </nav>
  </div>
</header>