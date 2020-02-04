<section id="section_three">
	
	<div class="sec_three_inner">
		
		<h1 class="sec_three_title"><?php the_field( 'section_three_title' ); ?></h1>
		
		<div class="sec_three_intro_wrapper">
			
			<?php the_field( 'section_three_intro' ); ?>
			
		</div><!-- sec_three_intro_wrapper -->
		
		<div class="sec_three_content">
			
			<div class="sec_three_left">
				
				<span class="sec_three_left_title"><?php the_field( 'section_three_sidebar_title' ); ?></span><!-- sec_three_left_title -->
				
				<?php if(get_field('section_three_sidebar_items')): ?>
				
					<ul>
					
					<?php while(has_sub_field('section_three_sidebar_items')): ?>
					 
						<li><a href="<?php the_sub_field( 'pa_link' ); ?>"><?php the_sub_field( 'title' ); ?></a></li>
					
						<?php endwhile; ?>
						
							<?php if(get_field('section_three_sidebar_view_all')) { ?>
					 
								<li class="view_all_pa"><a href="<?php the_field( 'section_three_sidebar_view_all' ); ?>">view all</a></li>
							
							<?php } ?>
					
					</ul>
				
				<?php endif; ?>
				
			</div><!-- sec_three_left -->
			
			<div class="sec_three_right content">
				
				
				<?php the_field( 'section_three_content' ); ?>
	
				
			</div><!-- sec_three_right -->
			
		</div><!-- sec_three_content -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->