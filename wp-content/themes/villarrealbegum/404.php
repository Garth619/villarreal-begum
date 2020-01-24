<?php get_header(); ?>

<div id="internal_main">
	
	<div class="single_col_container">
		
		<div class="not_found_wrapper">
			
			<?php $texas_badge = get_field( 'texas_badge','option'); ?>
			
			<?php if ( $texas_badge ) { ?>
			
				<img src="<?php echo $texas_badge['url']; ?>" alt="<?php echo $texas_badge['alt']; ?>" />
			
			<?php } ?>
			
			<h1 class="not_found"><span>404 Error</span></h1>
			
			<span class="page_not_found"><?php the_field( 'not_found_subtitle','option'); ?></span><!-- page_not_found -->
		
			<p><?php the_field( 'not_found_verbiage','option'); ?></p>
			
			<span class="go_back go_back_button">back</span><!-- go_back_button -->
			
		</div><!-- not_found_wrapper -->
		
	</div><!-- single_col_container -->
	
</div><!-- internal_main -->


		



<?php get_footer(); ?>