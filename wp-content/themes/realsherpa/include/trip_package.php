<style>
   .tripArea{
    background: url(<?php echo get_theme_mod('bg_image1_settings') ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
}
</style>

<!-- Start Selling Tips Area -->
<div class="selling-tips-area pt-30 tripArea">
<div class="container">



	<div class="row justify-content-center pt-85">
		<div class="col-lg-6">
			<!-- Start section title -->
			<div class="section-title text-center text-white">
				<h2 class="text-white"><?php echo get_theme_mod('title1') ?></h2>
				<p class="title">Your amazing journey begins here. Himalayan Adventures & Inspiring Gateways Your safe travel is with us. </p>
			</div>
			<!-- End section title -->
		</div>
	</div>

	  <div class="row">
        <?php 
             /**The Query */ 
            $tax = $wp_query->get_queried_object();
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args= array(
                'posts_per_page' => 8,
                'post_type' => 'sherpa_trip',
                'paged' => $paged,
				'trip_type' => 'Display Home Page',
                'orderby' => 'date',
             );
             $the_query = new WP_Query( $args );
             ?>

           <?php 
                if ( $the_query->have_posts() ) : 
               while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
		<div class="col-lg-3 col-sm-6">
			<!-- start single adventure -->
			<div class="single-adventure">
				<?php if( get_field('ribbons_tag') ): ?>
				   <span class="new"><?php the_field('ribbons_tag'); ?></span> 
				<?php endif; ?>
				<?php $packageImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');?>
				<img src="<?php echo $packageImage['0']; ?>">
				<div class="adventure-content">
					<a href="<?php the_permalink(); ?>"><h6><?php the_title(); ?></h6></a>
					
					<p class="tour">
						<i class="fa fa-blind" aria-hidden="true"></i>
						Activities : <?php the_field('trip_activities'); ?>
					</p>
					
					<p class="tour"><i class="fa fa-credit-card" aria-hidden="true"></i> From : <?php the_field('trip_price'); ?></p>
					<p class="tour"><i class="fa fa-calendar" aria-hidden="true"></i> Duration : <?php the_field('duration'); ?></p>
					<p class="tour"><i class="fa fa-line-chart" aria-hidden="true"></i> Grading  : <?php the_field('trip_difficulty'); ?></p>	
				</div>

				<div class="adventure-content button">
					<a class="btn btn-outline-danger" href="<?php the_permalink(); ?>">View Trip
					 <i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				</div>

			</div>
			<!-- end single adventure -->
		</div>
		<?php endwhile; endif;?>

	</div>
</div>
</div>
<!-- End Selling Tips Area -->