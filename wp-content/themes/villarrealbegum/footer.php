<footer id="footer_trigger">
	
	<div class="footer_inner">
		
		<span class="footer_title"><span>Request<br/> Your</span> Free Consultation</span><!-- footer_title -->
		
		<div class="footer_left">
			
			<div class="footer_locations">
				
				<?php if(get_field('locations','option')): ?>
				 
					<?php while(has_sub_field('locations','option')): ?>
				 
						<div class="single_location">
							
							<?php $footer_svg = get_sub_field('svg');?>
					
							<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/".$footer_svg.""); ?>
					
							<span class="office_title"><?php the_sub_field( 'location_title','option'); ?></span><!-- office_title -->
					
							<span class="address"><?php the_sub_field( 'address','option'); ?></span><!-- address -->
							
							<a class="footer_phone" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('phone', 'option')); ?>"><?php the_sub_field( 'phone','option'); ?></a><!-- footer_phone -->
							
							<?php if(get_sub_field('map_or_appointment') == 'Map Button') { ?>
					
							<a class="map_button" href="<?php the_sub_field( 'map_link' ); ?>" target="_blank" rel="noopener">Map</a><!-- map_button -->
							
							<?php } ?>
							
							<?php if(get_sub_field('map_or_appointment') == 'Appointment Only Verbiage') { ?>
							
								<span class="appointment"><?php the_sub_field( 'appointment_verbiage','option'); ?></span><!-- appointment -->
							
							<?php } ?>
					
						</div><!-- single_location -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
				
			</div><!-- footer_locations -->
			
		</div><!-- footer_left -->
		
		<div id="consultation" class="footer_right">
			
			<div class="form_wrapper">
				
				<span class="required">*Field Required</span><!-- required -->
				
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
				
			</div><!-- form_wrapper -->
			
			
		</div><!-- footer_right -->
		
	</div><!-- footer_inner -->
	
	<a class="mobile_locations" href="<?php the_permalink(56);?>">View All Locations</a><!-- mobile_locations -->
	
	<div class="copyright">
		
		<div class="copyright_inner">
			
			<ul>
				<li>Copyright &copy; <?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></li>
				
				<?php if(get_field('disclaimer','option')) { ?>
					
					<li><a href="<?php the_field('disclaimer','option');?>">disclaimer</a></li>
				
				<?php } ?>
				
				<?php if(get_field('privacy_policy','option')) { ?>
					
					<li><a href="<?php the_field('privacy_policy','option');?>">Privacy Policy</a></li>
				
				<?php } ?>
				
			</ul>
			
			<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
				
				<img src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/>
				
			</a>
			
		</div><!-- copyright_inner -->
		
	</div><!-- footer_copyright -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
