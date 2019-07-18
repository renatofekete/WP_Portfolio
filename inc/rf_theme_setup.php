<?php
if (!function_exists('rf_theme_setup')) :
  function rf_theme_setup()
  {
    //RSS
    add_theme_support('automatic-feed-links');

    // Automatic title tag
    add_theme_support('title-tag');

    // Post Thumbnails
    add_theme_support('post-thumbnails');
    add_image_size('custom', 1200, 600, true);

    // Menus
    register_nav_menus(array(
      'main-menu' => _('Main Menu'),
      'footer-menu' => _('Footer Menu'),
      'footer-social-media' => _('Footer Social Media')
    ));

    //HTML5 support
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    ));

    // custom background

    // wide image support
    add_theme_support('align-wide');

    // responsive embed
    add_theme_support('responsive-embeds');
  }

endif;
add_action('after_setup_theme', 'rf_theme_setup');
