<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">

<div class="single_col_container">
	
		<h1 class="deluxe_reg_header"><?php the_title();?></h1><!-- deluxe_reg_header -->
	
		<div class="contact_locations">
				
				<div class="contact_single_location">
					
					<div class="contact_svg_wrapper">
					
						<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/footer_icon_2.svg"); ?>
					
					</div><!-- contact_svg_wrapper -->
					
					<span class="contact_office_title">laredo Office <span>*</span></span><!-- office_title -->
					
					<span class="contact_address">104 E Calton Rd, Suite 109<br/> Laredo, TX 78041</span><!-- address -->
					
					<a class="contact_phone" href="">(956) 568-5954</a><!-- footer_phone -->
					
					<span class="contact_appointment">*By Appointment Only</span><!-- appointment -->
					
				</div><!-- single_location -->
				
				<div class="contact_single_location">
					
					<div class="contact_svg_wrapper">
					
						<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/footer_icon_1.svg"); ?>
					
					</div><!-- contact_svg_wrapper -->
					
					<span class="contact_office_title">San Antonio Office</span><!-- office_title -->
					
					<span class="contact_address">5826 Frontage Rd #101<br/> San Antonio, TX 78201</span><!-- address -->
					
					<a class="contact_phone" href="">(844) 529-4867</a><!-- footer_phone -->
					
					<a class="contact_map_button" href="">Map</a><!-- map_button -->
					
				</div><!-- contact_single_location -->
				
				<div class="contact_single_location">
					
					<div class="contact_svg_wrapper">
					
						<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/footer_icon_3.svg"); ?>
					
					</div><!-- contact_svg_wrapper -->
					
					<span class="contact_office_title">McAllen Office <span>*</span></span><!-- office_title -->
					
					<span class="contact_address">4425 N. McColl Rd<br/> McAllen, TX 78504</span><!-- address -->
					
					<a class="contact_phone" href="">(956) 222-2222</a><!-- footer_phone -->
					
					<span class="contact_appointment">*By Appointment Only</span><!-- appointment -->
					
				</div><!-- single_location -->
				
			</div><!-- footer_locations -->
		
</div><!-- single_col_container -->
	
</div><!-- internal_main -->

			
<?php get_footer(); ?>