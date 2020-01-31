<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">
	
	<div class="about_wrapper">
		
		<div class="about_top content">
			
			<?php $about_firm_image = get_field( 'about_firm_image' ); ?>
			
			<?php if ( $about_firm_image ) { ?>
				
				<img class="about_badge" src="<?php bloginfo('template_directory');?>/images/header_law_guns.png"/>
			
			<?php } ?>
			
			<h1 class="about_title"><span><?php the_title();?></span></h1><!-- about_title -->
			
			<div class="about_intro">
				
				<?php the_field( 'about_firm_intro' ); ?>
				
			</div><!-- about_intro -->
			
			<?php the_field( 'about_content' ); ?>
			
		</div><!-- about_top -->
		
	</div><!-- about_wrapper -->

	<section id="about_bottom">
	
	<div class="about_bottom_inner">
		
		<span class="about_bottom_subheader">Villarreal & Begum</span><!-- about_bottom_subheader -->
		
		<span class="about_bottom_largeheader"><span>we believe in treating all</span> <span>of our clients like family</span></span><!-- about_bottom_largehader -->
		
		<a class="meet_button" href="<?php the_permalink();?>/meet-the-team">Meet the Attorneys</a>
		
	</div><!-- about_bottom_inner -->
	
</section><!-- about_bottom -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
