<style>
   .parallax{
   background: url(<?php echo get_theme_mod('bg_image2_settings') ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
	height:500px!important;
}
</style>
<div class="about-free-area parallax">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 justify-content-center">
				<div class="about-fre-bottom text-center" style="margin-top: 80px;">
					<h3><?php echo get_theme_mod('parallax_title') ?></h3>
					<p style="color:#fff;"><?php echo get_theme_mod('parallax_title_second') ?></p>
				</div>
				<div class="section-title text-center">
						<a class="btn btn-outline-light" href="<?php echo get_theme_mod('parallax_link') ?>">
							<?php echo get_theme_mod('parallax_button') ?>
							<i class="fa fa-arrow-right" aria-hidden="true"></i>
						</a>
				</div>
			</div>
		</div>
	</div>
</div>