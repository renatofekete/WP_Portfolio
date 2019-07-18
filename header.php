<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset=<?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116477365-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-116477365-2');
  </script>

</head>

<body>
  <?php
  if (!is_front_page()) :
    get_template_part('template-parts/main-nav');
  endif;
  ?>
  <main <?php echo is_front_page() ?  "class='frontpage'" : "" ?>>
    <div <?php echo is_front_page() ?  "class='frontpage__main'" : "class ='header__bottom'" ?>>
      <?php
      if (is_front_page()) :
        get_template_part('template-parts/titles/front-page-title');
      elseif (is_home()) :
        get_template_part('template-parts/titles/blog-title');
      elseif (is_archive()) :
        get_template_part('template-parts/titles/archive-title');
      else :
        get_template_part('template-parts/titles/page-title');
      endif;
      ?>
    </div>