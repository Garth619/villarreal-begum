<?php 

/* Template Name: Attorney Directory */

get_header(); ?>

<div id="internal_main">

<div class="single_col_container">
	
		<h1 class="deluxe_reg_header"><?php the_title();?></h1><!-- deluxe_reg_header -->
	
		<div class="meet_the_team_wrapper">
			
		<?php $meet_the_team = get_field( 'meet_the_team' ); ?>
		
		<?php if ( $meet_the_team ): ?>
			
			<?php foreach ( $meet_the_team as $post ):  ?>
				
				<?php setup_postdata ( $post ); ?>
					
					<div class="single_att">
				
						<a href="<?php the_permalink();?>">
					
							<div class="att_img_wrapper">
						
								<?php $attorney_image = get_field( 'attorney_image' ); ?>
								
								<?php if ( $attorney_image ) : ?>
					
									<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
									<?php else: ?>
					
									<img src="<?php bloginfo('template_directory');?>/images/placeholder.jpg" alt="placeholder"/>
				
								<?php endif; ?>

						
							<div class="att_overlay"></div><!-- att_overlay -->
						
						</div><!-- att_img_wrapper -->
					
						<span class="single_att_title yellowline"><span><?php the_title();?></span></span><!-- single_att_title -->
					
						<span class="single_position"><?php the_field( 'attorney_position' ); ?></span><!-- single_position -->
					
					</a>
				
					</div><!-- single_att -->
				
				<?php endforeach; ?>
			
			<?php wp_reset_postdata(); ?>
		
		<?php endif; ?>
			
		</div><!-- meet_the_team_wrapper -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
