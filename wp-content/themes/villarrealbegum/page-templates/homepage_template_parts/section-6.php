<section id="section_six">
	
	<div class="sec_six_inner">
		
		<div class="sec_six_left">
			
			<span class="sec_six_title"><?php the_field( 'section_six_title' ); ?></span><!-- sec_six_title -->
			
			<div class="star_wrapper mobile">
				
				<img class="fivestar" data-src="<?php bloginfo('template_directory');?>/images/fivestar-3.svg" alt="stars rating"/>
				
				<span class="star_rating"><?php the_field( 'section_six_google_rating' ); ?></span><!-- star_rating -->
				
			</div><!-- star_wrapper -->
			
			<a class="reviews_button desktop" href="<?php the_field( 'section_six_button_link' ); ?>"><?php the_field( 'section_six_button_verbiage' ); ?></a><!-- reviews_button -->
			
		</div><!-- sec_six_left -->
		
		<div class="sec_six_right">
			
			<div class="sec_six_slider">
				
				<?php if(get_field('section_six_reviews')): ?>
				 
					<?php while(has_sub_field('section_six_reviews')): ?>
				 
						<div class="sec_six_slide">
					
							<div class="single_star_wrapper">
						
								<img data-src="<?php bloginfo('template_directory');?>/images/test_star.svg"/>
								<img data-src="<?php bloginfo('template_directory');?>/images/test_star.svg"/>
								<img data-src="<?php bloginfo('template_directory');?>/images/test_star.svg"/>
								<img data-src="<?php bloginfo('template_directory');?>/images/test_star.svg"/>
								<img data-src="<?php bloginfo('template_directory');?>/images/test_star.svg"/>
						
							</div><!-- single_star_wrapper -->
					
							<span class="sec_six_slide_title"><?php the_sub_field( 'quote' ); ?></span><!-- sec_six_slide_title -->
					
							<div class="black_bar"></div><!-- black_bar -->
					
								<span class="sec_six_description"><?php the_sub_field( 'description' ); ?></span><!-- sec_six_description -->
					
								<div class="profile_wrapper">
									
									<?php $profile_picture = get_sub_field( 'profile_picture' ); ?>
									
									<?php if ( $profile_picture ) { ?>
									
										<img class="profile_pic" data-src="<?php echo $profile_picture['url']; ?>" alt="<?php echo $profile_picture['alt']; ?>" />
									
									<?php } ?>
					
									<div class="sec_six_name_meta">
						
									<span class="name"><?php the_sub_field( 'name' ); ?></span><span class="type"><?php the_sub_field( 'client' ); ?></span>
						
								</div><!-- name_meta -->
					
							</div><!-- profile_wrapper -->
					
						</div><!-- sec_six_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>		
				
			</div><!-- sec_six_slider -->
			
		</div><!-- sec_six_right -->
		
	</div><!-- sec_six_inner -->
	
	<div class="sec_six_bottom">
		
		<div class="sec_six_bottom_inner">
			
			<div class="star_wrapper desktop">
				
				<img class="fivestar" data-src="<?php bloginfo('template_directory');?>/images/fivestar-3.svg"/>
				
				<span class="star_rating"><?php the_field( 'section_six_google_rating' ); ?></span><!-- star_rating -->
				
			</div><!-- star_wrapper -->
			
			<div class="sec_six_progress_wrapper">
				
				<div class="sec_six_progress_inner">
				
				<div class="sec_six_arrow_wrapper sec_six_left_arrow_wrapper">
					
					<div class="sec_six_arrow sec_six_left_arrow">
						
						<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/arrow_left.svg"); ?>
						
					</div><!-- sec_six_arrow_wrapper -->
					
					<span class="sec_six_slide_number sec_six_first_slide_number">01</span><!-- sec_six_first_slide_number -->
					
				</div><!-- sec_six_left_arrow_wrapper -->
				
				<div class="progress" aria-valuemin="0" aria-valuemax="100">
					
					<span class="progress_bar"></span>
  			
  			</div>
    		
    		<div class="sec_six_arrow_wrapper sec_six_right_arrow_wrapper">
	    		
	    			<span class="sec_six_slide_number sec_six_last_slide_number"></span><!-- sec_six_last_slide_number -->
					
					<div class="sec_six_arrow sec_six_right_arrow">
						
						<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/arrow_right.svg"); ?>
						
					</div><!-- sec_six_arrow_wrapper -->
					
				</div><!-- sec_six_right_arrow_wrapper -->
				
				</div><!-- sec_six_progress_inner -->
  		
  		</div><!-- sec_six_progress_wrapper -->
			
		</div><!-- sec_six_bottom_inner -->
		
	</div><!-- sec_six_bottom -->
	
	<a class="reviews_button mobile" href="<?php the_field( 'section_six_button_link' ); ?>"><?php the_field( 'section_six_button_verbiage' ); ?></a><!-- reviews_button -->
	
	<?php $section_six_background_image = get_field( 'section_six_background_image' ); ?>
	
	<?php if ( $section_six_background_image ) { ?>
	
	<img class="sec_six_bg" data-src="<?php echo $section_six_background_image['url']; ?>" alt="<?php echo $section_six_background_image['alt']; ?>" />
	
	<?php } ?>
	
</section><!-- section_six -->