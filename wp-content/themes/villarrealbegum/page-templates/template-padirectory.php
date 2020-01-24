<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main">

<div class="single_col_container">
	
		<h1 class="deluxe_reg_header"><?php the_title();?></h1><!-- deluxe_reg_header -->
	
		<div class="pa_directory_wrapper">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
		</div><!-- pa_directory_wrapper -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
