<?php  
/**
* Template Name: Home
**/
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * @subpackage Twenty_Thirteen
 */
get_header();

?>
		<!-- Start Main Slider -->
		<section id="main-slider">
			<!-- Carousel -->
			<div id="main-slide" class="main-slider carousel slide" data-ride="carousel">
				<!-- Carousel inner -->
				<div class="carousel-inner">
					<div class="item active">
						<img class="img-responsive" src="<?php the_field('first-slide');?>" alt="slider">
						<div class="container">
							<div class="slider-content">
								<div class="container">
									<h2 class="animated4">
										<span><?php the_field('first-slide1-title');?><strong> <?php the_field('second-slide1-title');?></strong></span>
									</h2>
									<p class="animated6 slide-para">
										<span><?php the_field('first-content');?></span>
									</p>
									<p class="animated4">
										<a href="#" class="slider-btn cbiz-btn">More</a>
										<a href="#" class="slider-btn cbiz-btn cbiz-btn-border">Our Lastest</a>
									</p>
								</div>
							</div>
						</div> <!-- /.container -->
					</div> <!-- /.item -->
					<div class="item">
						<img class="img-responsive" src="<?php the_field('second-slide');?>" alt="slider">
						<div class="container">
							<div class="slider-content">
								<div class="container">
									<h2 class="animated2">
										<span><?php the_field('first-slide2-title');?><strong> <?php the_field('second-slide2-title');?></strong></span>
									</h2>
									<p class="animated3 slide-para"><?php the_field('second-content')?></p>
									<p class="animated4">
										<a href="#" class="slider-btn cbiz-btn">More</a>
										<a href="#" class="slider-btn cbiz-btn cbiz-btn-border">Our Lastest</a>
									</p>
								</div>
							</div>
						</div> <!-- /.container -->
					</div> <!-- /.item -->
					<div class="item">
						<img class="img-responsive" src="<?php the_field('third-slide');?>" alt="slider">
						<div class="container">
							<div class="slider-content">
								<div class="container">
									<h2 class="animated5">
									 <span><?php the_field('first-slide3-title')?> <strong><?php the_field('second-slide3-title')?></strong></span>
									</h2>
									<p class="animated7 slide-para">
										<span><?php the_field('third-content')?></span>
									</p>
									<p class="animated8">
										<a href="#" class="slider-btn cbiz-btn">More</a>
										<a href="#" class="slider-btn cbiz-btn cbiz-btn-border">Our Lastest</a>
									</p>
								</div>
							</div>
						</div> <!-- /.container -->
					</div> <!-- /.item -->

				</div>
				<!-- Carousel inner end-->

				<!-- Controls -->
				<a class="left carousel-control" href="#main-slide" data-slide="prev">
					<span><i class="fa fa-angle-left"></i></span>
				</a>
				<a class="right carousel-control" href="#main-slide" data-slide="next">
					<span><i class="fa fa-angle-right"></i></span>
				</a>
				<div class="click-to-next bottom-top-animation">
					<i></i>
				</div>

			</div>
			<!-- /carousel -->
		</section> <!-- /.main-slider -->
		<!-- End Main Slider -->



		<!-- Start Services Area -->
		<section class="service section">
			<div class="container">			
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span><?php the_field('service-title1');?></span> <?php the_field('service-title2');?></h2>
							<p><?php the_field('service-content');?></p>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
						<div class="service-icon">
							<!-- <i class="flaticon-responsive icon-large"></i> -->
							<img class="flaticon-img icon-large" src="<?php the_field('second-service-icon');?>" alt="Icon">
						</div>
						<div class="service-content">
							<a href="#"><h4><?php the_field('title-icon1');?></h4></a>
							<p><?php the_field('content-icon1');?></p>
						</div>
					</div> <!-- /.service-box -->
					<div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
						<div class="service-icon">
							<!-- <i class="flaticon-sofa-of-one-place-outline icon-large"></i> -->
							<img class="flaticon-img icon-large" src="<?php the_field('first-icon');?>" alt="Icon">
						</div>
						<div class="service-content">
							<a href="#"><h4><?php the_field('title-icon2');?></h4></a>
							<p><?php the_field('content-icon2');?></p>
						</div>
					</div> <!-- /.service-box -->
					<div class="col-md-4 col-sm-6 service-box" data-animation="fadeIn" data-animation-delay="01">
						<div class="service-icon">
							<!-- <i class="flaticon-command icon-large"></i> -->
							<img class="flaticon-img icon-large" src="<?php the_field('third-icon');?>" alt="Icon">
						</div>
						<div class="service-content">
							<a href="#"><h4><?php the_field('title-icon3');?></h4></a>
							<p><?php the_field('content-icon3');?></p>
						</div>
					</div> <!-- /.service-box -->
				</div> <!-- /.row -->
			</div> <!-- .container -->
		</section> <!-- /.service -->
		<!-- End Services Area -->

		
		
		<!-- We Do AREA START -->
		<section class="we-do section">
			<div class="container">    
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span><?php the_field('head-do1');?></span> <?php the_field('head-do2');?></h2>
							<p><?php the_field('content-do');?></p>
						</div>
					</div>
				</div> <!-- /.row -->
						<div class="row">
							<ul class="we-tab">
								<li class="active" data-toggle="tab" data-target="#creative1">
									<div class="col-sm-4 col-md-4">
										<div class="we-item">
											<img src="<?php the_field('icon-do1');?>" style="margin: 0 auto;display:table;width: 25%;">
											<a href="#"><h4 class="gen-title"><?php the_field('title-do1');?></h4></a>
											<p><?php the_field('content-do1');?></p>
										</div> <!-- /.we-item -->
									</div>
								</li>
								<li  data-toggle="tab" data-target="#creative2">
									<div class="col-sm-4 col-md-4">
										<div class="we-item">
											<img src="<?php the_field('icon-do2');?>" style="margin: 0 auto;display:table;width: 25%;">
											<a href="#"><h4 class="gen-title"><?php the_field('title-do2');?></h4></a>
											<p><?php the_field('content-do2');?></p>
										</div> <!-- /.we-item -->
									</div>
								</li>
								<li  data-toggle="tab" data-target="#creative3">
									<div class="col-sm-4 col-md-4">
										<div class="we-item">
											<img src="<?php the_field('icon-do3');?>" style="margin: 0 auto;display:table;width: 25%;">
											<a href="#"><h4 class="gen-title"><?php the_field('title-do3');?></h4></a>
											<p><?php the_field('content-do3');?></p>
										</div> <!-- /.we-item -->
									</div>
								</li>
								<li  data-toggle="tab" data-target="#creative4">
									<div class="col-sm-4 col-md-4">
										<div class="we-item">
											<img src="<?php the_field('icon-do4');?>" style="margin: 0 auto;display:table;width: 25%;">
											<a href="#"><h4 class="gen-title"><?php the_field('title-do4');?></h4></a>
											<p><?php the_field('content-do4');?></p>
										</div> <!-- /.we-item -->
									</div>
								</li>
								<li  data-toggle="tab" data-target="#creative5">
									<div class="col-sm-4 col-md-4">
										<div class="we-item">
											<img src="<?php the_field('icon-do5');?>" style="margin: 0 auto;display:table;width: 25%;">
											<a href="#"><h4 class="gen-title"><?php the_field('title-do5');?></h4></a>
											<p><?php the_field('content-do5');?></p>
										</div> <!-- /.we-item -->
									</div>
								</li>
								<li  data-toggle="tab" data-target="#creative6">
									<div class="col-sm-4 col-md-4">
										<div class="we-item">
											<img src="<?php the_field('icon-do6');?>" style="margin: 0 auto;display:table;width: 25%;">
											<a href="#"><h4 class="gen-title"><?php the_field('title-do6');?></h4></a>
											<p><?php the_field('content-do6');?></p>
										</div> <!-- /.we-item -->
									</div>
								</li>

							</ul>
						</div> <!-- /.row -->
					</div> <!-- /.col- -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section> <!-- /.we-do -->
		<!-- /We Do AREA END -->

		<!-- Testimonial AREA START -->
		

		<!-- Our Client AREA START -->
		<div class="our-client">
			<div class="container">    
				<div class="client-logos">
					<div class="client-slider owl-carousel owl-theme">
						<div class="item">
							<div class="logo-each">
								<a href="#">
									<img src="<?php the_field('client_logo1');?>" alt="Client Logo">
								</a>
							</div>
						</div>
						<div class="item">
							<div class="logo-each">
								<a href="#">
									<img src="<?php the_field('client-logo2');?>"  alt="Client Logo">
								</a>
							</div>
						</div>
						<div class="item">
							<div class="logo-each">
								<a href="#">
									<img src="<?php the_field('client_logo3');?>"  alt="Client Logo">
								</a>
							</div>
						</div>
						<div class="item">
							<div class="logo-each">
								<a href="#">
									<img src="<?php the_field('client_logo4');?>"  alt="Client Logo">
								</a>
							</div>
						</div>
						<div class="item">
							<div class="logo-each">
								<a href="#">
									<img src="<?php the_field('client_logo5');?>" alt="Client Logo">
								</a>
							</div>
						</div>
						<div class="item">
							<div class="logo-each">
								<a href="#">
									<img src="<?php the_field('client_logo6');?>" alt="Client Logo">
								</a>
							</div>
						</div>
						<div class="item">
							<div class="logo-each">
								<a href="#">
									<img src="<?php the_field('client_logo7');?>" alt="Client Logo">
								</a>
							</div>
						</div>
					</div> <!-- /.client-slider -->
				</div> <!-- /.client-logos -->
			</div> <!-- /.container -->
		</div> <!-- /.our-client -->
		<!-- /Our Client AREA END -->

		<!-- Get In Touch AREA START -->
		<section class="get-touch section">
			<div class="container">    
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Get</span> in Touch</h2>
						</div>
					</div> <!-- /.col- -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-xs-offset-0">
						<div class="contact-info">
							<div class="row">
								<div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
									<div class="con-text in-map">
										<?php the_field('address');?>
									</div>
								</div>
								<div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
									<div class="con-text in-envelope">
										<?php the_field('email');?>
									</div>
								</div>
								<div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
									<div class="con-text in-phone">
										<?php the_field('phone_number');?>
									</div>
								</div>
							</div> <!-- /.row -->
						</div> <!-- /.contact-info -->
						<div class="contact-form">
                            <form id="contact-form" method="post" action="http://designelit.com/template/preview-template/preview-template-v1.10/assets/contact-script/contact.php">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Write your name">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Write your valid email address">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <textarea name="comment" class="form-control" placeholder="Message" required="required" data-error="Write your comment"></textarea>
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="form-group col-xs-12 col-md-6">
                                        <div class="form-btn">
                                            <input type="submit" name="submit" value="Send" class="contact-form-btn">
                                        </div>
                                    </div>
                                    <div class="messages"></div>
                                </div> <!-- /.row -->
                            </form>
                        </div> <!-- /.contact-form -->
					</div> <!-- /.col- -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section> <!-- /.get-touch -->
		<!-- /Get In Touch AREA END -->
		<?php get_footer();?>