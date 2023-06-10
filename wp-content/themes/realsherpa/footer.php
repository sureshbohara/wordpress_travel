<style>
   .footerArea{
   	 background: url(<?php echo get_theme_mod('bg_image5_settings') ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
}
</style>

	<!-- Start Footer Area -->
			<footer class="footer-area style-3 overlay-bg-4 pt-115 footerArea">
				<div class="container">

					<div class="row">

						<div class="col-lg-3 col-sm-6">
							<!-- start quick link widget -->
							<div class="widget quick-link-widget">
								<h3>Quick Links</h3>
								<ul>
									 <?php
                      wp_nav_menu( array( 
                        'theme_location' => 'footer1'
                    )); 
                    ?>
								</ul>
							</div>
							<!-- end quick link widget -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<!-- start quick link widget -->
							<div class="widget quick-link-categories">
								<h3>Popular Region</h3>
								<ul>
									<?php
                                wp_nav_menu( array( 
                                  'theme_location' => 'footer2'
                              )); 
                              ?>
								</ul>
							</div>
							<!-- end quick link widget -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<!-- start quick link widget -->
							<div class="widget quick-destinations">
								<h3>Destinations</h3>
								<ul>
									<?php
                                wp_nav_menu( array( 
                                  'theme_location' => 'footer3'
                              )); 
                              ?>
								</ul>
							</div>
							<!-- end quick link widget -->
						</div>
						<div class="col-lg-3 col-sm-6">
							<!-- start contact us widget -->
							<div class="widget contact-us">
								<h3>Contact Us</h3>
								<ul>
									<li><a href="#">
										<i class="fal fa-paper-plane"></i>
										 <?php echo get_theme_mod('address') ?>
                           </a>
                           </li>
									<li><a href="#"><i class="fal fa-envelope"></i><?php echo get_theme_mod('email_setting') ?></a></li>
									<li><a href="#"><i class="fal fa-phone-alt"></i> <?php echo get_theme_mod('mobile_number') ?></a></li>
								</ul>
							</div>
							<!-- end contact us widget -->
						</div>
					</div>
				</div>

				<div class="container">
					  <div class="row">
						<div class="col-sm-6">

							<div class="copy-payment">
								<ul>
									<li><a href="<?php echo get_theme_mod('facebook') ?>"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="<?php echo get_theme_mod('twitter') ?>"><i class="fab fa-twitter"></i></a></li>
									<li><a href="<?php echo get_theme_mod('instagram') ?>"><i class="fab fa-instagram"></i></a></li>
									<li><a href="<?php echo get_theme_mod('linkedin') ?>"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="<?php echo get_theme_mod('youtube') ?>"><i class="fab fa-youtube"></i></a></li>
									<li><a href="<?php echo get_theme_mod('youtube') ?>">
									<i class="fab fa-tripadvisor"></i>
									</li>
								</ul>
							</div>
						</div>
							<div class="col-sm-6">
								<!-- Start copyright text -->
								<div class="copyright-text">
									<p>© 2022 Real sherpa Adventure All rights reserved.</p>
								</div>
								<!-- End copyright text -->
							</div>
						</div>
				</div>

			</footer>
		</div>
         <?php wp_footer(); ?>
        
    </body>

</html>