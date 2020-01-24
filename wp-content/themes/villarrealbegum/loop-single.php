<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="blog_post">
	
	<div class="date_meta">
		
		<span class="author"><?php echo get_the_author_meta( 'display_name' ); ?></span>
		
		<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
		<?php echo get_the_category_list();?>
		
	</div><!-- date_meta -->
		
	<h2 class="page_header post_title"><?php the_title();?></h2>
	
	<div class="post_content">
	
		<?php the_content();?>
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
	</div><!-- post_content -->
	
	</div><!-- blog_post -->
	
<?php endwhile; // end of loop ?>

<?php endif; ?>