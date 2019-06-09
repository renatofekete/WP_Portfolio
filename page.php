<?php
get_header();
?>
<?php
while (have_posts()) {
  the_post(); ?>
  <article class="single">
    <?php the_content(); ?>
  </article>
<?php }
get_footer();
?>