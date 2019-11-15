<?php
/**
 * The footer for our theme
 */
?>
<footer id="footer">
		<div class="container">
			<div class="row py-5 my-4">
				<div class="col-md-4 mb-4 mb-lg-0">

					<?php dynamic_sidebar('Footer Area 1');?>

				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">

							<?php dynamic_sidebar('Footer Area 2');?>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-md-12">

							<?php dynamic_sidebar('Footer Area 3');?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			<div class="container py-2">
				<div class="row py-4">
					<div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
						<p>© Copyright <?php echo get_the_date('Y');?>. All Rights Reserved.</p>
					</div>
					<div class="col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
						<a href="<?php echo home_url();?>" class="logo pr-0 pr-lg-3">
							<img alt="<?php bloginfo('description');?>" src="<?php echo get_field('footer_logo', 'options') ;?>" class="opacity-5" height="48">
						</a>
					</div>
					<div class="col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-end">
						<nav id="sub-menu">
							<ul>
								<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
								<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
								<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div> <!-- End Div Main -->

<?php wp_footer();?>


</body>
</html>
