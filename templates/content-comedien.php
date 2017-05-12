<article <?php post_class(); ?>>
  <header>eeee
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php // get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_post_thumbnail();  ?>
    <?php the_content(); //the_excerpt(); ?>
  </div>
</article>
