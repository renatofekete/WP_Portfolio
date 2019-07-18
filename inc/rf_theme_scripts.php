<?php
function rf_theme_scripts()
{
  wp_enqueue_style('rf-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0');

  wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i|Nunito:400,400i,700,700i&display=swap", array(), '1.0.0');

  wp_enqueue_style('fa-script', get_stylesheet_directory_uri() . '/assets/fontAwesome/css/all.min.css');

  wp_enqueue_style('gist-monokai', get_stylesheet_directory_uri() . '/assets/gist/gist-monokai.css');

  wp_enqueue_script('rf-script', get_template_directory_uri() . '/js/app.min.js', array(), ' ', true);
}
add_action('wp_enqueue_scripts', 'rf_theme_scripts');
