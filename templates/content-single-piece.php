
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
	<header>
	  <h1 class="entry-title"><?php the_title(); ?></h1>	  
	  <?php // get_template_part('templates/entry-meta'); ?>
	  <?php the_post_thumbnail(); ?>
	</header>
	<div class="contenu-etroit">
		<div class="entry-content">
		  <?php the_content(); ?>
		</div>

		<h3> Cómédiens</h3>
        <?php 
        $posts = get_field('comediens');

        if( $posts ): ?>
            <ul>
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                <li>
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                   
                </li>
            <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

        <h3> Galerie de photos</h3>
        <?php
        $images = get_field('photos');

        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo $image['url']; ?>">
                             <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3> Costumes </h3>
        <?php
        $images = get_field('costumes');

        if( $images ): ?>
            <ul>
                <?php foreach( $images as $image ): ?>
                    <li>
                        <a href="<?php echo $image['url']; ?>">
                             <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>


		<footer>
		  <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
		</footer>
	</div>
  </article>
<?php endwhile; ?>
