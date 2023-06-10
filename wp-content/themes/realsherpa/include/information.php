<div class="contact-area pt-90 pb-95">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-10">
			<!-- Start section title -->
			<div class="section-title text-center">
				<h2><?php echo get_theme_mod('priority_title') ?></h2>

				 <?php $priority_description = get_theme_mod('priority_description');
				    if ($priority_description) { 
				        echo nl2br( esc_html( $priority_description ) );
				  } ?>
			</div>
			<!-- End section title -->
		</div>
	</div>
</div>
</div>