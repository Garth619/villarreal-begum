<section id="section_eight">
	
	<div class="sec_eight_inner">
		
		<div class="sec_eight_left">
			
			<span class="cr_title"><?php the_field( 'section_eight_title' ); ?></span>
			
			<a class="view_all_results desktop" href="<?php the_field( 'section_eight_page_link' ); ?>"><?php the_field( 'section_eight_title' ); ?></a><!-- view_all_results -->
			
		</div><!-- sec_eight_left -->
		
			<div class="sec_eight_right">
				
				<div class="sec_eight_slider">
					
					<?php if(get_field('section_eight_case_results_slider')): ?>
					
						<?php $counter = 0;?>
					 
						<?php while(has_sub_field('section_eight_case_results_slider')): ?>
						
							<?php $counter++; // add one per row ?>
					 
							<div class="sec_eight_slide <?php the_sub_field( 'class' ); ?> results-<?php echo $counter;?>">
						
								<div class="sec_eight_slide_inner">
						
									<span class="sec_eight_title"><?php the_sub_field( 'amount' ); ?></span><!-- sec_eight_title -->
						
									<span class="sec_eight_subtitle"><?php the_sub_field( 'type' ); ?></span><!-- sec_eight_subtitle -->
						
									<?php $image = get_sub_field( 'image' ); ?>
									
									<?php if ( $image ) { ?>
										
										<img data-src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									
									<?php } ?>
						
								</div><!-- sec_eight_slide_inner -->
						
							</div><!-- sec_eight_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</div><!-- sec_eight_slider -->
				
				<div class="sec_eight_results_list">
					
					<ul>
						
						<?php if(get_field('section_eight_case_results_slider')): ?>
							
							<?php $counter = 0;?>
						 
							<?php while(has_sub_field('section_eight_case_results_slider')): ?>
							
								<?php $counter++; // add one per row ?>
						 
								<li class="<?php the_sub_field( 'class' ); ?>" data-results="results-<?php echo $counter;?>">
									<a>
										<span class="result_list_amount"><?php the_sub_field( 'amount' ); ?></span><!-- result_list_amount -->
										<span class="result_list_description"><?php the_sub_field( 'type' ); ?></span><!-- result_list_description -->
									</a>
								</li>
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						
						<div id="line"></div>  
						
					</ul>
					
				</div><!-- sec_eight_results_list -->
				
			</div><!-- sec_eight_right -->
		
	</div><!-- sec_eight_inner -->
	
	<a class="view_all_results mobile" href="<?php the_field( 'section_eight_page_link' ); ?>"><?php the_field( 'section_eight_button_verbiage' ); ?></a><!-- view_all_results -->
	
	<?php $section_eight_background_image = get_field( 'section_eight_background_image' ); ?>
	
	<?php if ( $section_eight_background_image ) { ?>
	
		<img class="sec_eight_hero" data-src="<?php echo $section_eight_background_image['url']; ?>" alt="<?php echo $section_eight_background_image['alt']; ?>" />

	<?php } ?>
	
</section><!-- section_eight -->