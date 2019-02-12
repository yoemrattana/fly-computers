<?php
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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bootstrap-to-wordpress' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'bootstrap-to-wordpress' ), 'WordPress' );
				?>
						<!-- Footer AREA START -->
		<footer class="footer">
			<div class="footer-main cbiz-bg section">
				<div class="container">    
					<div class="row">
						<div class="widgets">
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="widget logo">
									<div class="wi-title">
										<a href="index.html"><img src="<?php the_field('main-logo');?>" alt="Logo"></a>
									</div>
									<div class="wi-content">
										<p><?php the_field('foot-text');?></p>
									</div>
								</div> <!-- /.widget -->
							</div> <!-- /.col- -->
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="widget">
									<div class="wi-title">
									   <h5>Popular Tags</h5>
									</div>
									<div class="wi-content wi-tags">
										<ul>
											<li><a href="#">UI Design</a></li>
											<li><a href="#">Web Design</a></li>
											<li><a href="#">HTML</a></li>
											<li><a href="#">WordPress</a></li>
											<li><a href="#">Bootstrap</a></li>
											<li><a href="#">Joomla</a></li>
											<li><a href="#">jQuery</a></li>
											<li><a href="#">Internet</a></li>
											<li><a href="#">News</a></li>
										</ul>
									</div> <!-- /.wi-content -->
								</div> <!-- /.widget -->
								<div class="widget">
									<div class="wi-title">
									   <h5>Social Media</h5>
									</div>
									<div class="wi-content wi-social">
										<ul>
											<li>
												<a href="#">
													<i class="fa normal-show fa-facebook"></i>
													<i class="fa hover-show fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa normal-show fa-twitter"></i>
													<i class="fa hover-show fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa normal-show fa-google-plus"></i>
													<i class="fa hover-show fa-google-plus"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa normal-show fa-pinterest-p"></i>
													<i class="fa hover-show fa-pinterest-p"></i>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fa normal-show fa-youtube"></i>
													<i class="fa hover-show fa-youtube"></i>
												</a>
											</li>
										</ul>
									</div> <!-- /.wi-content -->
								</div> <!-- /.widget -->
							</div> <!-- /.col- -->
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="widget">
									<div class="wi-title">
										<h5>Latest News</h5>
									</div>
									<div class="wi-content wi-news">
									   <ul>
										   <li>
											   <div class="news-left">
												   <a href="#">
														<img src="<?php the_field('image-news');?>" alt="News">
													</a>
											   </div>    
											   <div class="news-right">
												   <p><?php the_field('text-news');?></p>
												   <div class="posted">
													   <span class="post-date"><a href="#">Aug 05, 2017</a></span>
													   <span class="post-tag"><a href="#"><i class="fa fa-comments"></i>18</a></span>
													   <span class="post-like"><a href="#"><i class="fa fa-heart"></i>32</a></span>
													</div>
												</div> <!-- /.news-right -->
										   </li>
										   <li>
											   <div class="news-left">
												   <a href="#">
														<img src="<?php the_field('image-news2');?>" alt="News">
													</a>
											   </div>    
											   <div class="news-right">
												   <p><?php the_field('text-news2');?></p>
												   <div class="posted">
													   <span class="post-date"><a href="#">Aug 05, 2017</a></span>
													   <span class="post-tag"><a href="#"><i class="fa fa-comments"></i>18</a></span>
													   <span class="post-like"><a href="#"><i class="fa fa-heart"></i>32</a></span>
													</div>
												</div> <!-- /.news-right -->
										   </li>
									   </ul>
									</div> <!-- /wi-content -->
								</div> <!-- /.widget -->
							</div> <!-- /.col- -->
						</div> <!-- /.widgets -->
					</div> <!-- /.row -->  
				</div> <!-- /.container -->
			</div> <!-- /.footer-main -->
			<div class="copyright">
				<div class="container">
					<?php the_field('txt-copy');?>
				</div>
			</div> <!-- /.copyright -->
		</footer> <!-- /.footer -->
		<!-- /Footer AREA END -->
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
