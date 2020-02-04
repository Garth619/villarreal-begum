<section id="section_two">
	
	<div class="sec_two_inner">
		
		<div class="sec_two_slider_wrapper">
			
			<div class="sec_two_slider">
				
				<?php if(get_field('section_two_selling_points_villarreal')): ?>
				 
					<?php while(has_sub_field('section_two_selling_points_villarreal')): ?>
				 
						<div class="sec_two_slide <?php the_sub_field( 'class_name' ); ?>">
							
							<?php $svg = get_sub_field( 'svg' );?>
					
							<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/".$svg.""); ?>
					
							<div class="sec_two_slide_inner">
						
								<span class="sec_two_slide_title"><?php the_sub_field( 'title' ); ?></span><!-- sec_two_slide_title -->
						
								<span class="sec_two_description"><?php the_sub_field( 'description' ); ?></span><!-- sec_two_description -->
						
							</div><!-- sec_two_slide_inner -->
					
						</div><!-- sec_two_slide -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- sec_two_slider -->
			
		</div><!-- sec_two_slider_wrapper -->
		
	</div><!-- sec_two_inner -->
	
	<div class="sec_two_progress_wrapper">
						
		<div class="sec_two_progress_inner">
				
				<div class="sec_two_arrow_wrapper sec_two_left_arrow_wrapper">
					
					<div class="sec_two_arrow sec_two_left_arrow">
						
						<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/arrow_left.svg"); ?>
						
					</div><!-- sec_two_arrow_wrapper -->
					
					<span class="sec_two_slide_number sec_two_first_slide_number">01</span><!-- sec_two_first_slide_number -->
					
				</div><!-- sec_two_left_arrow_wrapper -->
				
				<div class="sec_two_progress" aria-valuemin="0" aria-valuemax="100" style="background-size: 50% 100%;">
					
					<span class="sec_two_progress_bar"></span>
  			
  			</div>
    		
    		<div class="sec_two_arrow_wrapper sec_two_right_arrow_wrapper">
	    		
	    			<span class="sec_two_slide_number sec_two_last_slide_number"></span><!-- sec_two_last_slide_number -->
					
					<div class="sec_two_arrow sec_two_right_arrow">
						
						<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/arrow_right.svg"); ?>
						
					</div><!-- sec_two_arrow_wrapper -->
					
				</div><!-- sec_two_right_arrow_wrapper -->
  		
  		</div><!-- sec_two_progress_wrapper -->
						
	</div><!-- sec_two_progress_inner -->
	
</section><!-- section_two -->