<style>
   .service{
   	 background: url(<?php echo get_theme_mod('bg_image4_settings') ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
}
</style>

<div class="funfact-area style-3 pb-120 service">
				<div class="container">
					<div class="row justify-content-center pt-85">
						<div class="col-lg-10">
							<!-- Start section title -->
							<div class="section-title text-center">
								<p class="title">Why Choose Us?</p>
								<h2><?php echo get_theme_mod('title6') ?></h2>
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
                                'posts_per_page' => 12,
                                'post_type' => 'partner_region',
                                'paged' => $paged,
                                'partner' => 'Goods Region',
                                'orderby' => 'date',
                             );
                             $the_query = new WP_Query( $args );
                             ?>

                           <?php 
                                if ( $the_query->have_posts() ) : 
                                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                            ?>
						<div class="col-lg-2 col-sm-4">
							<!-- Start single fact -->
							<div class="single-fact text-center">
								<div class="fact-info"> 
									<?php echo get_the_post_thumbnail($post->ID, 'service'); ?>
								   <p><?php the_title(); ?></p>
								</div>
							</div>
							<!-- Start single fact -->
						</div>
						<?php endwhile; endif;?>

					</div>
				</div>
			</div>

