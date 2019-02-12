<?php  
/**
* Template Name: about
**/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * @subpackage Twenty_Thirteen
 */
get_header();

?>
		<!-- Page Header AREA START -->
		<section class="page-head page-bg" style="background-image: url('<?php the_field('image-about');?>")>
			<div class="container">    
				<h3 class="page-heading">About Us</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<span>About Us</span>
				</div>
			</div> <!-- /.container -->
		</section> <!-- /.page-head -->
		<!-- /Page Header AREA END -->


		<!-- Overview AREA START -->
		<section class="about-content-area section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span><?php the_field('history-title');?></span> <?php the_field('history-title2')?></h2>
							<p><?php the_field('history-text');?></p>
						</div>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
			<div class="about-overview">
				<div class="container">    
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="about-text">
								<h4>MEeee We are building elegent website for companies around the world.</h4>
								<p><?php the_field('detail-history');?></p>
							</div>
						</div> <!-- /.col- -->
						<div class="about-overview-img">
							<div class="col-sm-12 col-md-6 visible-xs visible-sm">
								<img class="img-responsive" src="<?php the_field('history-image');?>" alt="Img">
							</div>
						</div> <!-- /.about-overview-img -->
					</div> <!-- /.row -->  
				</div> <!-- /.container -->
			</div> <!-- /.about-overview -->
		</section> <!-- /.about-content-area -->



		<!-- Skill AREA START -->

		<!-- Customer Review AREA START -->
		<section class="customer-review cbiz-bg section">
			<div class="container">
				<div class="review-slider owl-carousel owl-theme">
					<div class="review-item">
						<div class="review-title">
							Customer’s Review
						</div> <!-- /.review-title -->
						<div class="review-img">
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/100x100.jpg" alt="Customer">
						</div> <!-- /.review-title -->
						<div class="review-text">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
							<div class="reviewer">
								<h5>Keyali Mira</h5>
								<h6>Chairman, Detarpox</h6>
							</div>
						</div> <!-- /.review-title -->
					</div> <!-- /.review-item -->
					<div class="review-item">
						<div class="review-title">
							Customer’s Review
						</div> <!-- /.review-title -->
						<div class="review-img">
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/kl.JPEG" alt="Customer">
						</div> <!-- /.review-title -->
						<div class="review-text">
							<p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
							<div class="reviewer">
								<h5>Mostakim Billah</h5>
								<h6>CEO, Safe Syntax</h6>
							</div>
						</div> <!-- /.review-title -->
					</div> <!-- /.review-item -->
					
					<div class="review-item">
						<div class="review-title">
							Customer’s Review
						</div> <!-- /.review-title -->
						<div class="review-img">
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/400.jpg" alt="Customer">
						</div> <!-- /.review-title -->
						<div class="review-text">
							<p>Ut enim ad minim veniam, Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. quis nostrud exercitation ullamco.</p>
							<div class="reviewer">
								<h5>Muzhidul Islam</h5>
								<h6>Founder, Demo Firm</h6>
							</div>
						</div> <!-- /.review-title -->
					</div> <!-- /.review-item -->

				</div> <!-- /.review-slider -->
			</div><!-- container -->
		</section> <!-- /.customer-review -->
		<!-- / CustomerReview AREA END -->

		<!-- Our Team AREA START -->
		<section class="our-team section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Great Team</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-each">
							<div class="team-member">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/team/1.jpg" alt="Team Member">
								<div class="member-hover">
									<div class="member-info">
										<div class="member-social">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.member-hover -->
							</div> <!-- /.team-members -->
							<div class="member-name">
								<h4>Kobalt Pian</h4>
								<p>Designer</p>
							</div><!-- /.member-name -->
						</div> <!-- /.team-each -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-each">
							<div class="team-member">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/team/2.jpg" alt="Team Member">
								<div class="member-hover">
									<div class="member-info">
										<div class="member-social">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.member-hover -->
							</div> <!-- /.team-members -->
							<div class="member-name">
								<h4>Lary Pagef</h4>
								<p>Designer</p>
							</div><!-- /.member-name -->
						</div> <!-- /.team-each -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-each">
							<div class="team-member">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/team/3.jpg" alt="Team Member">
								<div class="member-hover">
									<div class="member-info">
										<div class="member-social">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.member-hover -->
							</div> <!-- /.team-members -->
							<div class="member-name">
								<h4>Victoria Moore</h4>
								<p>Designer</p>
							</div><!-- /.member-name -->
						</div> <!-- /.team-each -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-each">
							<div class="team-member">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/images/team/4.jpg" alt="Team Member">
								<div class="member-hover">
									<div class="member-info">
										<div class="member-social">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- /.member-hover -->
							</div> <!-- /.team-members -->
							<div class="member-name">
								<h4>Rutoot Kar</h4>
								<p>Designer</p>
							</div><!-- /.member-name -->
						</div> <!-- /.team-each -->
					</div> <!-- /.col -->

				</div><!-- row -->
			</div><!-- container -->
		</section> <!-- /.our-team -->
		<!-- /Our Team AREA END -->
<?php 
get_footer();
?>