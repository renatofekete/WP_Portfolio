</main>
<?php
if (!is_front_page()) :
  get_template_part('template-parts/footers/footer-main');
endif;

wp_footer();
?>
</body>

</html>