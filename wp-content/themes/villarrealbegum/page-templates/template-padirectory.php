<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main">

<div class="single_col_container">
	
		<div class="pa_directory_wrapper">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
		</div><!-- pa_directory_wrapper -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
