<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Patrick+Hand' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div id="infobar">
		
	</div>
	<div class="header-inner clearfix" >
		<div class="left">
			<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/images/new/kidsdentalcare-v2.png"/></a>
		</div>
		<div class="right">
			<h1>We make smiles last a lifetime.</h1>
			<div class="menu">
				<!--
<ul>
					<li><a href="<?php bloginfo('url') ?>">Home</a></li>
					<li><a href="<?php bloginfo('url') ?>">Our<br> Services</a></li>
					<li><a href="<?php bloginfo('url') ?>">Our<br> Team</a></li>
					<li><a href="<?php bloginfo('url') ?>">Dr. Bruce<br> Baker</a></li>
					<li><a href="<?php bloginfo('url') ?>">New<br> Patience</a></li>
					<li><a href="<?php bloginfo('url') ?>">Rewards<br>Club</a></li>
					<li><a href="<?php bloginfo('url') ?>">Photo<br>Gallery</a></li>
					<li><a href="<?php bloginfo('url') ?>">Contact<br>Us</a></li>
				</ul>
-->
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</div>
			<div id="mobile-menu">
			<a class="nav-toggle" href="#"><span></span></a>
			
		</div>
		</div>
		
	</div> <!-- .header-inner -->
</div><!-- #header -->

<div class="header-stopgap"></div>
<?php if(is_front_page() ) { ?>

	<div id="hero-banner">
		<div class="hero-logo">
			<img src="<?php bloginfo('template_url') ?>/images/new/hero-logo-v2.png" style="max-width:241px">
		</div>
	</div>
<?php } ?>
<div id="wrapper" class="hfeed">
	

	<div id="main">
