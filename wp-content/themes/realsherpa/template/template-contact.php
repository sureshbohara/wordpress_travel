<?php get_header();
 /* Template Name: Contact Page*/
 $breadcrumbImage = the_post_thumbnail('breadcrumb_settings');
?>
<!-- Start Bradcumb Area -->

<style>
    .bradcumb-area {
    position: absolute;
    top: 0; 
    background: url(<?php echo the_post_thumbnail('full') ?>)!important;
    background-size: cover;
    right: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
</style>
                <div class="bradcumb-area">
                <div class="container">

                    <div class="row justify-content-center">
                      <div class="col-md-4"></div>

                          <div class="col-md-4">
                            <div class="bradcumb text-center">
                                <h3><?php the_title(); ?></h3>
                                <ul>
                                    <li><?php the_title(); ?></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-4"></div>

                    </div>
                </div>
            </div>
            <!-- End Bradcumb Area -->
            <!-- Start Blog  Area -->
            
<div class="google-map-area py-4">
		<!-- Start Google Map -->
		<div class="google-map-wrap">
			<!-- Start Map -->
			<div class="fullwide-map">
				 <?php echo get_theme_mod('map_location_link') ?>
			</div>
			<!-- End Map -->
		</div>
		<!-- End Google Map -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<!-- Start section title -->
					<div class="section-title">
						<h2 style="font-size: 29px;"> MAKE AN ENQUIR AND BOOK YOUR TRIP</h2>
					</div>
					<!-- End section title -->
					<div class="contact-p-contact pb-70">
						
	                  <?php echo apply_shortcodes('[forminator_form id="414"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>