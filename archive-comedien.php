<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>
<?php while (have_posts()) : the_post(); ?>
	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	<div class="contenu-etroit">
	  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
	 </div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
