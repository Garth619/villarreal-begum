<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">

<div class="single_col_container">
	
		<h1 class="deluxe_reg_header"><?php the_title();?></h1><!-- deluxe_reg_header -->
	
		<div class="video_center_wrapper">
			
			<?php if(get_field('video_category')): ?>
			 
				<?php while(has_sub_field('video_category')): ?>
			 
					<span class="video_cat_title"><span><?php the_sub_field( 'video_category_title' ); ?></span></span><!-- video_cat_title -->
					
					<?php if(get_sub_field('video')): ?>
					
						<div class="video_wrapper">
					 
						<?php while(has_sub_field('video')): ?>
						
							
					 
							<div class="single_video">
								
								<a href="https://www.youtube.com/embed/<?php the_sub_field( 'wistia_id' ); ?>" data-lity>
									
										<?php $img_thumb = get_sub_field( 'img_thumb' ); ?>
										
										<?php if ( $img_thumb ) { ?>
											
											<img class="video_thumb" src="<?php echo $img_thumb['url']; ?>" alt="<?php echo $img_thumb['alt']; ?>" />
										
										<?php } ?>
					
<!-- 								<div class="mywistia"></div> --><!-- mywistia -->
				
									<div class="play_wrapper">
						
										<div class="play_button"></div><!-- play_button -->
						
									</div><!-- play_wrapper -->
									
								</a>
				
							</div><!-- single_video -->
					    
						<?php endwhile; ?>
						
						</div><!-- video_wrapper -->
					 
					<?php endif; ?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</div><!-- video_center_wrapper -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->

<script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>

<?php get_footer(); ?>
