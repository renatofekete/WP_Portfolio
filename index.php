<?php
get_header();
if (have_posts()) :
  while (have_posts()) : the_post();
    get_template_part('template-parts/test');
  endwhile;
else : ?>
  <p>Nema nicega</p>
<?php
endif;
get_footer();
?>