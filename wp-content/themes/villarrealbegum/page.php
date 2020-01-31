<?php get_header(); ?>

<div id="internal_main">
	
	<div class="internal_banner">
		
		<div class="internal_banner_inner">
	
	<div class="internal_banner_content">
		
		<div id="para_four" class="internal_banner_left">
			
			<span class="internal_banner_largeheader"><span>if we don’t win,</span> we don’t get paid.</span><!-- sec_one_largeheader -->
			
			<a class="internal_banner_consult_button desktop" href="#consultation">Free Consultation</a><!-- consult_button -->
			
		</div><!-- internal_banner_left -->
		
		<div class="internal_banner_right">
			
			<div class="internal_banner_atts_wrapper">
				
				<div id="para_three" class="internal_banner_attorneys">
					
					<picture class="internal_banner_att_one">
					
						<img src="<?php bloginfo('template_directory');?>/images/header_javier_desk.png"/>
					
					</picture>
					
					<picture class="internal_banner_att_two">
					
						<img src="<?php bloginfo('template_directory');?>/images/header_alex_desk.png"/>
					
					</picture>
					
				</div><!-- internal_banner_attorneys -->
				
				<div id="para_two" class="internal_banner_attorney_names">
					
					<div class="internal_banner_attorney_names_inner">
					
						<a class="internal_banner_attorney_name internal_banner_attorney_name_one" href="<?php the_permalink(724);?>">Javier Villarreal</a><!-- attorney_name -->
					
						<a class="internal_banner_attorney_name internal_banner_attorney_name_two" href="<?php the_permalink(60);?>">Alex Begum</a><!-- attorney_name -->
					
					</div><!-- internal_banner_attorney_names_inner -->
					
				</div><!-- internal_banner_attorney_names -->
				
			</div><!-- internal_banner_atts_wrapper -->
			
		</div><!--  internal_banner_right -->
		
	</div><!-- internal_banner_content -->
	
	<a class="internal_banner_consult_button mobile" href="#consultation">Free Consultation</a><!-- consult_button -->
	
	<img class="internal_hero" src="<?php bloginfo('template_directory');?>/images/header_bg_desk.jpg"/>
	
	</div><!-- internal_banner_inner -->
	
	<div class="internal_banner_badge_wrapper">
		
		<div class="internal_banner_badge_spacer"></div><!-- internal_banner_badge_spacer -->
		
		<div id="para_one" class="internal_banner_attorney_badge">
					
			<img src="<?php bloginfo('template_directory');?>/images/header_law_guns.png"/>
					
		</div><!-- internal_banner_attorney_badge -->
		
	</div><!-- internal_banner__badge_wrapper -->
		
</div><!-- internal_banner -->


<div class="outer_container">
	
	<div class="container two_col">
		
			<?php get_sidebar(); ?>
			
			<div class="inner_content content">
				
				<h1 class="page_header"><?php the_title();?></h1>
				
				<?php get_template_part( 'loop', 'page' ); ?>
				
<!--
				<blockquote>
					<p><span>we believe in treating all of our clients like family</span></p>
				</blockquote>
-->
				
			</div><!-- inner_content -->
		
	</div><!-- container -->
	
</div><!-- outer_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
