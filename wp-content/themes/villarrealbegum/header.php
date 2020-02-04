<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<link rel="stylesheet" href="https://use.typekit.net/hhs0ycw.css">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&display=swap" rel="stylesheet">


<style>

<?php the_field( 'review_css','option'); ?>

/*
 @import url("https://use.typekit.net/hhs0ycw.css");
 
 @import url('https://fonts.googleapis.com/css?family=Nunito+Sans:400,800&display=swap');
*/

</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	<header>
		
		<div class="header_inner">
			
			<div class="header_left">
				
				<a class="logo" href="<?php bloginfo('url');?>">
					
					<span class="logo_title">Villarreal <span>&</span> Begum</span>
					
				</a><!-- logo -->
				
			</div><!-- header_left -->
			
			<div class="header_middle">
				
				<nav class="nav_wrapper nav_desktop">
					
					<div class="mobile_back">Back</div><!-- mobile_back -->
					
					<div class="mobile_close"></div><!-- mobile_close -->
					
					<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
					
				</nav><!-- nav_wrapper -->
				
				</div><!-- header_middle -->
				
					<div class="header_right">
				
				<div class="consult_wrapper">
					
					<span class="consult_title">Free Consultation</span><!-- consult_title -->
					
					<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_main_phone', 'option')); ?>
					
					<a class="phone phone_one" href="tel:	<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_law_phone', 'option')); ?>"><span><?php the_field( 'firm_law_phone','option'); ?></span></a>
					
					<a class="phone phone_two" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field('firm_law_phone', 'option')); ?>"><?php the_field( 'firm_phone','option'); ?></a>
					
					<div class="mobile_es_wrapper">
						
						<a class="mobile_espanol_button" href="
<?php the_field( 'mobile_espanol_page_link','option'); ?>"><?php the_field( 'mobile_espanol_button_verbaige','option'); ?></a><!-- mobile_espanol_button -->
						
					</div><!-- mobile_es_wrapper -->
					
				</div><!-- consult_wrapper -->
				
				<div class="menu_wrapper">
					
					<span class="menu_bar"></span>
					<span class="menu_bar"></span>
					<span class="menu_bar"></span>
					
					<span class="menu_title">Menu</span>
					
				</div><!-- menu_wrapper -->
				
			</div><!-- header_right -->
			
		</div><!-- header_inner -->
		
		
		
	</header>
				


			