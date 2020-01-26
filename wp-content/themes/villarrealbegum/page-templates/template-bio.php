<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_main">

<div class="att_container">
	
	<div class="att_bio_wrapper">
		
		<div class="att_bio_left">
			
			<h1 class="att_bio_header"><span><?php the_title();?></span></h1><!-- att_bio_header -->
			
			<span class="att_bio_position"><?php the_field( 'attorney_position' ); ?></span><!-- att_bio_position -->
			
			<div class="att_bio_mobile">
			
			<div class="att_image">
				
				<?php $attorney_image = get_field( 'attorney_image' ); ?>
				
				<?php if ( $attorney_image ) { ?>
					
					<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
				
				<?php } ?>
				
				<div class="att_bio_badge">
					
					<?php $attorney_badge_bio = get_field( 'attorney_badge_bio' ); ?>
					
					<?php if ( $attorney_badge_bio ) { ?>
						
						<img class="att_badge" src="<?php echo $attorney_badge_bio['url']; ?>" alt="<?php echo $attorney_badge_bio['alt']; ?>" />
					
					<?php } ?>
				
				</div><!-- att_bio_badge -->
				
			</div><!-- att_image -->
			
		</div><!-- att_bio_mobile -->
			
			<div class="att_bio_intro">
				
				<?php the_field( 'attorney_intro' ); ?>
				
			</div><!-- att_bio_intro -->
			
			<div class="att_bio_content content">
				
				<?php the_field( 'attorney_content' ); ?>
				
			</div><!-- att_bio_content -->
			
		</div><!-- att_bio_left -->
		
		<div class="att_bio_right">
			
			<div class="att_image">
				
				<img src="<?php bloginfo('template_directory');?>/images/attorney_bio_img.jpg"/>
				
				<div class="att_bio_badge">
					
					<img class="att_badge" src="<?php bloginfo('template_directory');?>/images/header_law_guns.png"/>
				
				</div><!-- att_bio_badge -->
				
			</div><!-- att_image -->
			
		</div><!-- att_bio_right -->
		
	</div><!-- att_bio_wrapper -->
	
	<div class="att_bio_slider_wrapper">
	
	<div class="att_bio_slider">
		
		<?php if(get_field('attorney_slider')): ?>
		 
			<?php while(has_sub_field('attorney_slider')): ?>
		 
				<div class="att_bio_slide">
			
					<div class="att_bio_slide_inner">
				
						<div class="att_bio_slide_img_wrapper">
				
							<?php $logos = get_sub_field( 'logos' ); ?>
					
							<?php if ( $logos ) { ?>
					
								<img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
					
							<?php } ?>
				
						</div><!-- att_bio_slide_img_wrapper -->
				
					</div><!-- att_bio_slide_inner -->
			
				</div><!-- att_bio_slide -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	</div><!-- att_bio_slider -->
	
	</div><!-- att_bio_slider_wrapper -->
		
</div><!-- att_container -->

<div class="att_bio_bottom">
	
	<div class="att_bio_inner">
		
		<div class="att_bio_col">
			
				<?php if(get_field('accolades_list_column_one')): ?>
				 
					<?php while(has_sub_field('accolades_list_column_one')): ?>
					
					<div class="att_bio_list">
				 
						<span class="att_bio_title"><span><?php the_sub_field( 'title' ); ?></span></span><!-- att_bio_title -->
						
						<ul>
							
							<?php if(get_sub_field('list_items')): ?>
							 
								<?php while(has_sub_field('list_items')): ?>
							 
									<li><?php the_sub_field( 'list_item' ); ?></li>
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
							
						</ul>
						
						</div><!-- att_bio_list -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
		</div><!-- att_bio_col -->
		
		<div class="att_bio_col">
			
			<?php if(get_field('accolades_list_column_two')): ?>
				 
					<?php while(has_sub_field('accolades_list_column_two')): ?>
					
					<div class="att_bio_list">
				 
						<span class="att_bio_title"><span><?php the_sub_field( 'title' ); ?></span></span><!-- att_bio_title -->
						
						<ul>
							
							<?php if(get_sub_field('list_items')): ?>
							 
								<?php while(has_sub_field('list_items')): ?>
							 
									<li><?php the_sub_field( 'list_item' ); ?></li>
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
							
						</ul>
						
						</div><!-- att_bio_list -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
		</div><!-- att_bio_col -->
		
	</div><!-- att_bio_inner -->
	
</div><!-- att_bio_bottom -->
	
</div><!-- internal_main -->

					 
<?php get_footer(); ?>
