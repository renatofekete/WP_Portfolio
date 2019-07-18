<?php
$query = new WP_Query(array(
  'posts_per_page' => 5
));
if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
    get_template_part('template-parts/aside-list');
  endwhile;
endif;
wp_reset_query();
