<header class="banner">
  <!--<div class="container">-->
 
  	<a class="brand" href="<?php echo home_url(); ?>">							
  		<img src="<?= get_template_directory_uri() . '/dist/images/logo.png'; ?>" alt="Maison Jean Vilar" class="logo-img">
  	</a>
  
	
    <nav class="nav-primary">
	   <div id="mobile-menu" class="navbar-toggle"> 
      <div class="bar"></div> <div class="bar"></div> <div class="bar"></div>
     </div>	
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
	<div class="clear"></div>
  <!--</div>-->
</header>
