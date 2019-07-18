<?php
/*
Template Name: Archives
*/
get_header();
?>
<div class="blog-news">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      get_template_part('template-parts/blog/card');
    endwhile;
    ?>
    <div class="pagination">
      <?php echo paginate_links(array(
        'prev_text' =>  __('Previous'),
        'next_text' => __('Next')
      )); ?>
    </div>
  <?php else : ?>
    <p>Nothing is here</p>
  <?php
endif;
?>
</div>
<?php
get_footer();
?>