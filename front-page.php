<?php
get_header();
?>
<h4 class="test">Najnovije</h4>
<section class="frontpage-news">
  <?php
  $query = new WP_Query(array(
    'posts_per_page' => 3
  ));
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
      get_template_part('template-parts/front/card');
    endwhile;
  endif;
  wp_reset_query();
  ?>
</section>
<h4 class="test">#100DaysOfCode</h4>
<section class="frontpage-news">
  <?php
  $query = new WP_Query(array(
    'posts_per_page' => 3,
    'category_name' => '100daysofcode'
  ));
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
      get_template_part('template-parts/front/card');
    endwhile;
  endif;
  ?>
</section>
<?php
get_footer();
