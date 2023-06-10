<!DOCTYPE html>
<html lang="en">

<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
        <script src="https://use.fontawesome.com/c91ba8772f.js"></script>
    <?php wp_head();?>
    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    
</head>
    <body <?php body_class(); ?>>
		<!-- Start Wrapper -->

		<div class="wrapper">
			<!-- Start Header -->
			<header id="header" class="header-area style-2 absulate-header">
				<div class="container">
					<!-- Start header top -->
					<div class="row">
						<div class="col-lg-12">
							 <div class="site-logo">
									<?php 
                                     if(has_custom_logo() || is_customize_preview()){
                                      the_custom_logo();
                                    }
                                    ?>
								</div>
						</div>
						
						<div class="col-lg-12 col-sm-12" style="float: right;">
							<!-- Header top contact -->
							<div class="header-top-contact">
								<ul>
									<li>
										<a href="<?php echo get_home_url(); ?>/category/travel-blogs">
											<i class="fa fa-th-list"></i>
											 Travel Blogs
											</a>
									</li>
									<li><a href="<?php echo get_home_url(); ?>/who-are-we"><i class="fa fa-user-circle"></i> Who Are We?</a></li>
									<li><a href="<?php echo get_home_url(); ?>/responsible-tourism"><i class="fa fa-blind"></i> Responsible tourism</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-12 col-sm-12" style="float: right;">
							<!-- Header top contact -->
							<div class="header-top-contact contactDetails">
								<ul>
									<li><a href=""><i class="fal fa-phone-alt"></i> +977-9862846071</a></li>
									<li><a href="<?php echo get_home_url(); ?>/contact-us"><i class="fa fa-envelope"></i> Inquiry</a></li>
									<li><a href="<?php echo get_home_url(); ?>/faqs"><i class="fa fa-question-circle"></i> FAQs?</a></li>
								</ul>
							</div>
						</div>

					</div>
					<!-- Start header top -->

				</div>
				<div class="navigation-area">
					<div class="container">
						<div class="row">
							
							<div class="col-lg-10 col-sm-6 col-6">
								<!-- Start Navigation -->
								<div class="main-menu-wrap">
									<nav class="gene-nav">
										<ul class="menu">

			                             <?php
		                                      wp_nav_menu( array( 
		                                        'theme_location' => 'navbar', 
		                                        'container_class' => 'main-nav'
		                                    )); 
		                                    ?>
										</ul>
									</nav> 
								</div>
								<!-- Mobile Menu Active here. Don't Remove it -->
								<div class="mobile-menu-area"></div>
								<!-- End Navigation -->
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- End Header -->