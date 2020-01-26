<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_main">

<div class="att_container">
	
	<div class="att_bio_wrapper">
		
		<div class="att_bio_left">
			
			<h1 class="att_bio_header"><span><?php the_title();?></span></h1><!-- att_bio_header -->
			
			<span class="att_bio_position"><?php the_field( 'attorney_position' ); ?></span><!-- att_bio_position -->
			
			<div class="att_bio_mobile">
			
			<div class="att_image">
				
				<?php $attorney_image = get_field( 'attorney_image' ); ?>
				
				<?php if ( $attorney_image ) { ?>
					
					<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
				
				<?php } ?>
				
				<div class="att_bio_badge">
					
					<?php $attorney_badge_bio = get_field( 'attorney_badge_bio' ); ?>
					
					<?php if ( $attorney_badge_bio ) { ?>
						
						<img src="<?php echo $attorney_badge_bio['url']; ?>" alt="<?php echo $attorney_badge_bio['alt']; ?>" />
					
					<?php } ?>
				
				</div><!-- att_bio_badge -->
				
			</div><!-- att_image -->
			
		</div><!-- att_bio_mobile -->
			
			<div class="att_bio_intro">
				
				<?php the_field( 'attorney_intro' ); ?>
				
			</div><!-- att_bio_intro -->
			
			<div class="att_bio_content content">
				
				<?php the_field( 'attorney_content' ); ?>
				
			</div><!-- att_bio_content -->
			
		</div><!-- att_bio_left -->
		
		<div class="att_bio_right">
			
			<div class="att_image">
				
				<img src="<?php bloginfo('template_directory');?>/images/attorney_bio_img.jpg"/>
				
				<div class="att_bio_badge">
					
					<img class="att_badge" src="<?php bloginfo('template_directory');?>/images/header_law_guns.png"/>
				
				</div><!-- att_bio_badge -->
				
			</div><!-- att_image -->
			
		</div><!-- att_bio_right -->
		
	</div><!-- att_bio_wrapper -->
	
	<div class="att_bio_slider_wrapper">
	
	<div class="att_bio_slider">
		
		<?php if(get_field('attorney_slider')): ?>
		 
			<?php while(has_sub_field('attorney_slider')): ?>
		 
				<div class="att_bio_slide">
			
					<div class="att_bio_slide_inner">
				
						<div class="att_bio_slide_img_wrapper">
				
							<?php $logos = get_sub_field( 'logos' ); ?>
					
							<?php if ( $logos ) { ?>
					
								<img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
					
							<?php } ?>
				
						</div><!-- att_bio_slide_img_wrapper -->
				
					</div><!-- att_bio_slide_inner -->
			
				</div><!-- att_bio_slide -->
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	</div><!-- att_bio_slider -->
	
	</div><!-- att_bio_slider_wrapper -->
		
</div><!-- att_container -->

<div class="att_bio_bottom">
	
	<div class="att_bio_inner">
		
		<div class="att_bio_col">
			
			<div class="att_bio_list">
				
				<span class="att_bio_title"><span>Bar Admission</span></span><!-- att_bio_title -->
				
				<ul>
					<li>State of Texas, 2003</li>
					<li>United States District Courts for the Southern Districts of Texas, 2003</li>
				</ul>
				
			</div><!-- att_bio_list -->
			
			<div class="att_bio_list">
				
				<span class="att_bio_title"><span>Association</span></span><!-- att_bio_title -->
				
				<ul>
					<li>State Bar of Texas</li>
					<li>American Bar Association</li>
					<li>Cameron County Bar Association</li>
					<li>Cameron County Trial Lawyers Association</li>
					<li>Texas Trial Lawyers Association</li>
					<li>San Antonio Trial Lawyers Association</li>
					<li>The American Association of Justice</li>
					<li>Special Graduate Professor, University of Texas at Brownsville, Adjunct</li>
					<li>Professor of Undergraduate Studies in Business Law at the University of Texas at Brownsville, Adjunct</li>
					<li>Board Member of Several Charitable Organizations</li>
				</ul>
				
			</div><!-- att_bio_list -->
			
			<div class="att_bio_list">
				
				<span class="att_bio_title"><span>Areas of Special Interest</span></span><!-- att_bio_title -->
				
				<ul>
					<li>State Bar of Texas</li>
					<li>American Bar Association</li>
					<li>Cameron County Bar Association</li>
					<li>Cameron County Trial Lawyers Association</li>
					<li>Texas Trial Lawyers Association</li>
					<li>San Antonio Trial Lawyers Association</li>
					<li>The American Association of Justice</li>
					<li>Special Graduate Professor, University of Texas at Brownsville, Adjunct</li>
					<li>Professor of Undergraduate Studies in Business Law at the University of Texas at Brownsville, Adjunct</li>
					<li>Board Member of Several Charitable Organizations</li>
				</ul>
				
			</div><!-- att_bio_list -->
			
		</div><!-- att_bio_col -->
		
		<div class="att_bio_col">
			
			<div class="att_bio_list">
				
				<span class="att_bio_title"><span>Areas of Practice</span></span><!-- att_bio_title -->
				
				<ul>
					<li>Personal Injury Claims</li>
					<li>Corporate Litigation</li>
					<li>Mediation</li>
					<li>Arbitration</li>
					<li>Trial Law: Personal injury and Insurance Bad Faith</li>
					<li>Pro Bono Law</li>
				</ul>
				
			</div><!-- att_bio_list -->
			
			<div class="att_bio_list">
				
				<span class="att_bio_title"><span>Education</span></span><!-- att_bio_title -->
				
				<ul>
					<li>State Bar of Texas</li>
					<li>American Bar Association</li>
					<li>Cameron County Bar Association</li>
					<li>Cameron County Trial Lawyers Association</li>
					<li>Texas Trial Lawyers Association</li>
					<li>San Antonio Trial Lawyers Association</li>
					<li>The American Association of Justice</li>
					<li>Special Graduate Professor, University of Texas at Brownsville, Adjunct</li>
					<li>Professor of Undergraduate Studies in Business Law at the University of Texas at Brownsville, Adjunct</li>
					<li>Board Member of Several Charitable Organizations</li>
				</ul>
				
			</div><!-- att_bio_list -->
			
		</div><!-- att_bio_col -->
		
	</div><!-- att_bio_inner -->
	
</div><!-- att_bio_bottom -->
	
</div><!-- internal_main -->

					 
<?php get_footer(); ?>
