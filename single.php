<?php
get_header();
?>
<?php
while (have_posts()) {
  the_post(); ?>
  <article class="single">
    <div class="single__content">
      <?php the_content(); ?>
      <div class="tags-container">
        <div class="tags"><?php the_tags('', ' ', ''); ?></div>
      </div>
    </div>
    <div class="single__aside">
      <h4 class="single__aside-title">Latest</h4>
      <?php get_template_part('aside'); ?>
    </div>
  </article>

<?php }
get_footer();
?>