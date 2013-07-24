<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package TellyPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Rum+Raisin|Open+Sans|Open+Sans+Condensed:700|Roboto:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/superfish.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/superfish.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
    	<div id="head_container">	
            <div class="site-branding">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            </div>
        
        	<div id="search_header"><?php get_search_form(); ?></div>
        
        </div>
	</header><!-- #masthead -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'tellypress' ); ?></h1>
			<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'tellypress' ); ?>"><?php _e( 'Skip to content', 'tellypress' ); ?></a></div>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
        
	<div id="main" class="site-main">
