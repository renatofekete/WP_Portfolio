<h1 class="title <?php echo is_page() ? "page--title" : "" ?>"><?php echo get_the_title(); ?></h1>
<?php if (is_single()) : ?>
  <div class="meta">
    <p><?php echo get_the_date(); ?> | <?php echo the_category(' '); ?></p>
  </div>
<?php endif; ?>