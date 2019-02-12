<?php
/**
* Template Name: Contact Us
**/
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrap_to_wordpress
 */

?>
<?php get_header();?>
    		<!-- Page Header AREA START -->
		<section class="page-head page-bg" style="background-image: url('<?php the_field('img-back-contact');?>')">
			<div class="container">    
				<h3 class="page-heading">Contact</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<a href="#"><span>Contact</span></a>
				</div>
			</div> <!-- /.container -->
		</section> <!-- /.page-head -->
		<!-- /Page Header AREA END -->

		<!-- Contact Page -->
		<section class="contact page-ct">
			<diV class="row">
				<div class="col-md-4">
					<div class="text-ct">
						<h3>Contact Us</h3>
						<ul class="wi-list">
							<li><a href="#"><i class="fa fa-phone-square"></i>  (+855) 887107298</a></li>
							<li><a href="#"><i class="fa fa-facebook"></i> facebook.com/flycompter</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> flycompter@gmail.com</a></li>
							<li><a href="#"><i class="fa fa-map-marker"></i> 22 Street, Wat Bo village, Sakat Slorkram</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-ct">
						<h3>Service</h3>
						<ul class="wi-list">
							<li><a href="#"></a>Repairations</li>
							<li><a href="#"></a>Upgrade Hardware</li>
							<li><a href="#"></a>POS Restuarent</li>
							<li><a href="#"></a>POS System</li>
							<li><a href="#"></a>Web Development</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="text-ct">
						<h3>Our Lastest Job</h3>
					</div>
				</div>
			</diV>
		</section>
		<!-- /Contact Page -->

		<!-- Map AREA START -->
		<div class="map-area">
			<div class="gmap-container">
				<div class="gmap">
					<?php the_field('map');?>
				</div>
			</div>
		</div> <!-- /.map-area -->
		<!-- /Map AREA END -->
<?php get_footer();?>
