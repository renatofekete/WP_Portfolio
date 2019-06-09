<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <?php
  get_template_part('template-parts/main-nav');
  ?>
  <main>
    <div class="header__bottom">
      <?php
      if (is_front_page()) :
        get_template_part('template-parts/titles/front-page-title');
      elseif (is_home()) :
        get_template_part('template-parts/titles/blog-title');
      else :
        get_template_part('template-parts/titles/page-title');
      endif;
      ?>
    </div>