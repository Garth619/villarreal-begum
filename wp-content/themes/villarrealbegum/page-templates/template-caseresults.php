<?php 

/* Template Name: Case Results */

get_header(); ?>


<div id="internal_main">

<div class="single_col_container">
	
		<h1 class="deluxe_line_header yellowline"><span><?php the_title();?></span></h1><!-- deluxe_reg_header -->
	
		<div class="case_results_wrapper">
			
			
			<?php if(get_field('case_results_new')): ?>
			 
				<?php while(has_sub_field('case_results_new')): ?>
			 
					
					<div class="single_results">
				
						<img class="trophie" src="<?php bloginfo('template_directory');?>/images/results_icon.svg"/>
				
						<span class="amount"><?php the_sub_field( 'amount_new' ); ?></span><!-- amount -->
				
						<span class="type"><?php the_sub_field( 'type_new' ); ?></span><!-- type -->
				
					</div><!-- single_results -->
				
				
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- case_results_wrapper -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->	
			  


<?php get_footer(); ?>
