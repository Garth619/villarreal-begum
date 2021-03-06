
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>

<div class="blog_feed">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="blog_post">
	
	<div class="date_meta">
		
		<span class="author"><?php echo get_the_author_meta( 'display_name' ); ?></span>
		
		<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span>
			
		<?php echo get_the_category_list();?>
		
	</div><!-- date_meta -->
		
	<h2 class="page_header post_title">
		
		<a href="<?php the_permalink();?>"><?php the_title();?></a>
		
	</h2>
	
	<div class="post_content">
	
		<?php echo wp_trim_words( get_the_content(), 35, '...' );?>
			
		<?php edit_post_link( __( 'Edit'), '', '' ); ?>
	
	</div><!-- post_content -->
	
	<a class="read_more_button" href="<?php the_permalink();?>">Read More</a><!-- read_more_button -->
	
	</div><!-- blog_post -->
			
<?php endwhile; // end of loop ?>

<?php endif; ?>

</div><!-- blog_feed -->


<?php wpbeginner_numeric_posts_nav(); ?>







