<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php // get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_post_thumbnail('post-thumbnail');  ?>
    <?php the_content(); //the_excerpt(); ?>
    <ul>
        <?php echo wp_list_pages( array(
           
            'post_type'  => 'comedien',
            'title_li' => '<h2>Comédiens</h2>'
        ));?>
    </ul>

    <ul>
        <?php echo wp_list_pages( array(
            
            'post_type'  => 'piece',
            'title_li' => '<h2>Pièces</h2>'
        )) ?>
    </ul>
[searchandfilter fields="search,post_types" post_types="post,page" headings=",Post Types"]
  </div>
</article>
