<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header-no-title'); ?>
  <?php get_template_part('templates/content', 'home'); ?>
<?php endwhile; ?>
