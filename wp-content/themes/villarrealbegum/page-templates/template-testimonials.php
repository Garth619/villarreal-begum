<?php 

/* Template Name: Testimonials */

get_header(); ?>


<div id="internal_main">

<div class="single_col_container">
	
		<h1 class="deluxe_reg_header"><?php the_title();?></h1><!-- deluxe_reg_header -->
	
		<div class="testi_wrapper">
			
			<?php if(get_field('reviews')): ?>
			 
				<?php while(has_sub_field('reviews')): ?>
			 
						<div class="single_review">
				
							<div class="review_star_wrapper">
					
								<img src="<?php bloginfo('template_directory');?>/images/star.svg"/>
								<img src="<?php bloginfo('template_directory');?>/images/star.svg"/>
								<img src="<?php bloginfo('template_directory');?>/images/star.svg"/>
								<img src="<?php bloginfo('template_directory');?>/images/star.svg"/>
								<img src="<?php bloginfo('template_directory');?>/images/star.svg"/>
					
							</div><!-- review_star_wrapper -->
				
							<span class="review_title"><?php the_sub_field( 'review_quote' ); ?></span><!-- review_title -->
				
							<div class="review_content">
					
								<?php the_sub_field( 'review_description' ); ?>
					
								<div class="review_meta">
						
								<span class="review_name"><?php the_sub_field( 'review_name' ); ?></span>
						
								<span class="review_client"><?php the_sub_field( 'review_client' ); ?></span>
						
							</div><!-- review_meta -->
					
						</div><!-- review_content -->
				
					</div><!-- single_review -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- testi_wrapper -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
