<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">

<div class="single_col_container">
	
		<h1 class="deluxe_reg_header"><?php the_title();?></h1><!-- deluxe_reg_header -->
	
		<div class="contact_locations">
			
			<?php if(get_field('locations','option')): ?>
			 
				<?php while(has_sub_field('locations','option')): ?>
			 
					<div class="contact_single_location">
					
						<div class="contact_svg_wrapper">
							
							<?php $contact_svg = get_sub_field('svg');?>
					
							<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/".$contact_svg.""); ?>
					
						</div><!-- contact_svg_wrapper -->
					
						<span class="contact_office_title"><?php the_sub_field( 'location_title','option'); ?></span><!-- office_title -->
					
						<span class="contact_address"><?php the_sub_field( 'address','option'); ?></span><!-- address -->
					
						<a class="contact_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone', 'option')); ?>"><?php the_sub_field( 'phone','option'); ?></a><!-- footer_phone -->
						
						<?php if(get_sub_field('map_or_appointment') == 'Map Button') { ?>
						
							<a class="contact_map_button" href="<?php the_sub_field( 'map_link' ); ?>" target="_blank" rel="noopener">Map</a><!-- map_button -->
						
						<?php } ?>
						
						<?php if(get_sub_field('map_or_appointment') == 'Appointment Only Verbiage') { ?>
					
							<span class="contact_appointment">*By Appointment Only</span><!-- appointment -->
						
						<?php } ?>
					
					</div><!-- single_location -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
				
				
				
			</div><!-- footer_locations -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->

			
<?php get_footer(); ?>