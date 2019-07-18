<article class="blog-item">
  <div class="title">
    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  </div>
  <div class="meta">
    <p><?php echo get_the_date(); ?> | <?php echo the_category(' '); ?>
  </div>
</article>