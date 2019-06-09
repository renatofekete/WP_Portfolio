<article class="frontpage-news__card">
  <div class="frontpage-news__image">
    <?php the_post_thumbnail('custom'); ?>
  </div>
  <div class="frontpage-news__body">
    <div class="meta">
      <p><?php echo get_the_date(); ?> | <?php echo the_category(' '); ?></p>
    </div>
    <div class="title">
      <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    </div>
    <!--     <div class="excerpt">
      <p><?php the_excerpt(); ?></p>
    </div> -->
  </div>
  <div class="card-footer">
    <p><a href="<?php the_permalink(); ?>">Read more</a></p>
  </div>
</article>