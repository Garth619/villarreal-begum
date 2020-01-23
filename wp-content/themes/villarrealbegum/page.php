<?php get_header(); ?>

<div id="internal_main">
	
	<div class="internal_banner">
		
		<img class="internal_hero" src="<?php bloginfo('template_directory');?>/images/header_bg_desk.jpg"/>
		
	</div><!-- internal_banner -->
	
</div><!-- internal_main -->


		
	<?php get_template_part( 'loop', 'page' ); ?>
		
	
	
	<?php get_sidebar(); ?>
	



<?php get_footer(); ?>
