<section id="section_one">
	
	<div class="sec_one_inner">
	
	<div class="sec_one_content">
		
		<div id="para_four" class="sec_one_left">
			
			<span class="sec_one_subheader"><?php the_field( 'section_one_subtitle' ); ?></span><!-- sec_one_subheader -->
			
			<span class="sec_one_largeheader"><?php the_field( 'section_one_large_header' ); ?></span><!-- sec_one_largeheader -->
			
			<a class="consult_button desktop" href="#consultation">Free Consultation</a><!-- consult_button -->
			
		</div><!-- sec_one_left -->
		
		<div class="sec_one_right">
			
			<div class="atts_wrapper">
				
				<div id="para_three" class="attorneys">
					
					<picture class="att_one">
					
						<?php $attorney_image_one = get_field( 'attorney_image_one' ); ?>
						
						<?php $attorney_image_one_webp = get_field( 'attorney_image_one_webp' ); ?>

						<source srcset="<?php echo $attorney_image_one_webp['url']; ?>" type="image/webp">
						
						<img src="<?php echo $attorney_image_one['url']; ?>" alt="<?php echo $attorney_image_one['alt']; ?>" />
						
					</picture>
					
					<picture class="att_two">
					
						<?php $attorney_image_two = get_field( 'attorney_image_two' ); ?>
						
						<?php $attorney_image_two_webp = get_field( 'attorney_image_two_webp' ); ?>

						<source srcset="<?php echo $attorney_image_two_webp['url']; ?>" type="image/webp">
						
						<img src="<?php echo $attorney_image_two['url']; ?>" alt="<?php echo $attorney_image_two['alt']; ?>" />
						
					</picture>
					
				</div><!-- attorneys -->
				
				<div id="para_two" class="attorney_names">
					
					<div class="attorney_names_inner">
					
						<a class="attorney_name attorney_name_one" href="<?php the_field( 'attorney_one_page_link' ); ?>"><?php the_field( 'attorney_one_title' ); ?></a><!-- attorney_name -->
					
						<a class="attorney_name attorney_name_two" href="<?php the_field( 'attorney_two_page_link' ); ?>">
<?php the_field( 'attorney_two_title' ); ?></a><!-- attorney_name -->
					
					</div><!-- attorney_names_inner -->
					
				</div><!-- attorney_names -->
				
			</div><!-- atts_wrapper -->
			
		</div><!--  sec_one_right -->
		
	</div><!-- sec_one_content -->
	
	<a class="consult_button mobile" href="#consultation">Free Consultation</a><!-- consult_button -->
	
	<picture>
		
		<?php $section_one_background_image = get_field( 'section_one_background_image' ); ?>
		
		<?php $section_one_background_image_webp = get_field( 'section_one_background_image_webp' ); ?>

		<source srcset="<?php echo $section_one_background_image_webp['url']; ?>" type="image/webp">
	
		<img class="hero_img" src="<?php echo $section_one_background_image['url']; ?>" alt="<?php echo $section_one_background_image['alt']; ?>" />
	
	</picture>
	
	</div><!-- sec_one_inner -->
	
	<div class="sec_one_badge_wrapper">
		
		<div class="sec_one_badge_spacer"></div><!-- sec_one_badge_spacer -->
		
		<div id="para_one" class="attorney_badge">
					
			<picture>
				
				<?php $section_one_badge = get_field( 'section_one_badge' ); ?>
				
				<?php $section_one_badge_webp = get_field( 'section_one_badge_webp' ); ?>

				<source srcset="<?php echo $section_one_badge_webp['url']; ?>" type="image/webp">
			
				<img src="<?php echo $section_one_badge['url']; ?>" alt="<?php echo $section_one_badge['alt']; ?>" />
			
			</picture>
					
		</div><!-- attorney_badge -->
		
	</div><!-- sec_one_badge_wrapper -->
	
</section><!-- section_one -->

