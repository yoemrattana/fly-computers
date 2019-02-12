<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap_to_wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/icon.png" />
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/icon.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/icon.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('stylesheet_directory');?>/assets/images/favicon/icon.png" />

	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome.min.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- Flat Icons -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/flaticons/flaticons-link.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- Slicknav -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/slicknav.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.carousel.min.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/owl.theme.default.min.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- Css3 Transitions Styles  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/animate.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- FancyBox -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/jquery.fancybox.min.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/slick-theme.css<?php echo '?'.mt_rand(); ?>"/>

	<!-- Main CSS   -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/style.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
	<!-- Responsive CSS  -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/responsive.css<?php echo '?'.mt_rand(); ?>" type="text/css" />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/bootstrap.min.js"></script>
	    <script src="<?php bloginfo('stylesheet_directory');?>/assets/contact-script/validator.js"></script>
	    <script src="<?php bloginfo('stylesheet_directory');?>/assets/contact-script/contact.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/owl.carousel.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.slicknav.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.mobile.custom.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.fancybox.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/isotope.pkgd.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.counterup.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/waypoints.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/jquery.lineProgressbar.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/slick.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/particles.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/particles-config.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD92XF6BndfvP0ysXAlyvdhvaKmdqvXI5E" async defer></script>
		<script src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js"></script>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrap-to-wordpress' ); ?></a>

<!-- <div id="loader">
		<div class="spinner">
			<div class="dot1"></div>
			<div class="dot2"></div>
		</div>
	</div>
 -->
	<!-- Full Body Container -->
	<div id="all-area" class="all-section">

		<!-- Header Area START -->
		<header class="clearfix header" data-spy="affix" data-offset-top="60">

			<!-- Start  Logo & Menu  -->
			<div class="navbar navbar-default navbar-top">
				<div class="container">
					<div class="navbar-header">
						<!-- Stat Toggle Nav Link For Mobiles -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
						<!-- End Toggle Nav Link For Mobiles -->
						<div class="logo">
							<a class="navbar-brand" href="index.html">

								<img alt="Logo" src="<?php the_field('main-logo');?>">
							</a>
						</div> <!-- /.logo -->
					</div>
					
					<div class="navbar-collapse collapse">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'      => 'ul',
								//'container_class'=> 'navbar-collapse collapse',
								'menu_class'     => 'nav navbar-nav navbar-right',
							)); 
						?> 
					</div>
					<!-- /.navbar-collapse -->
				</div> <!-- /.container -->

				<!-- Mobile Menu Start -->
				<ul class="wpb-mobile-menu">
				<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
							)); 
						?> 
				</ul> <!-- /.wpb-mobile-menu -->
			</div> <!-- /.navbar -->
				<!--If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 --> 
			    
			<!-- End Header Logo & Naviagtion -->
		</header> <!-- /.header -->
