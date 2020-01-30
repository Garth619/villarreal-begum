<footer id="footer_trigger">
	
	<div class="footer_inner">
		
		<span class="footer_title"><span>Request<br/> Your</span> Free Consultation</span><!-- footer_title -->
		
		<div class="footer_left">
			
			<div class="footer_locations">
				
				<div class="single_location">
					
					<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/footer_icon_1.svg"); ?>
					
					<span class="office_title">San Antonio Office</span><!-- office_title -->
					
					<span class="address">5826 Frontage Rd #101<br/> San Antonio, TX 78201</span><!-- address -->
					
					<a class="footer_phone" href="tel:8445294867">(844) 529-4867</a><!-- footer_phone -->
					
					<a class="map_button" href="https://www.google.com/maps/place/5826+Frontage+Rd+%23101,+San+Antonio,+TX+78201/data=!4m2!3m1!1s0x865c5e4c30ba262b:0x2a9320db5d6d9fc4?sa=X&ved=2ahUKEwipyJ22uqrnAhVYnp4KHfAXDp8Q8gEwAHoECAsQAQ" target="_blank" rel="noopener">Map</a><!-- map_button -->
					
				</div><!-- single_location -->
				
				<div class="single_location">
					
					<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/footer_icon_2.svg"); ?>
					
					<span class="office_title">laredo Office *</span><!-- office_title -->
					
					<span class="address">104 E Calton Rd, Suite 109<br/> Laredo, TX 78041</span><!-- address -->
					
					<a class="footer_phone" href="9565685954">(956) 568-5954</a><!-- footer_phone -->
					
					<span class="appointment">*By Appointment Only</span><!-- appointment -->
					
				</div><!-- single_location -->
				
				<div class="single_location">
					
					<?php echo file_get_contents("wp-content/themes/villarrealbegum/images/footer_icon_3.svg"); ?>
					
					<span class="office_title">McAllen Office *</span><!-- office_title -->
					
					<span class="address">4425 N. McColl Rd<br/> McAllen, TX 78504</span><!-- address -->
					
					<a class="footer_phone" href="9562222222">(956) 222-2222</a><!-- footer_phone -->
					
					<span class="appointment">*By Appointment Only</span><!-- appointment -->
					
				</div><!-- single_location -->
				
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
				<li>Copyright &copy; <?php echo date("Y"); ?> - villarreal and begum law firm</li>
				<li><a href="<?php bloginfo('url');?>/disclaimer">disclaimer</a></li>
				<li><a href="<?php bloginfo('url');?>/sitemap">sitemap</a></li>
				<li><a href="<?php bloginfo('url');?>/google">google+</a></li>
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
