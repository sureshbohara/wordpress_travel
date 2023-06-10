
			<div class="selling-tips-area pb-80 pt-120">
				<div class="container">
                    <div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="section-title text-center" style="margin-bottom: 60px;">
								<h2 style="color: #ff5300; line-height: 56px;"><i class="fa  fa-camera"></i>
								<?php echo get_theme_mod('title3') ?>
								</h2>
							</div>
						</div>
					</div>
					<div class="row">

						
						<div class="col-md-8">
							<div class="row">
                               <?php 
						             /**The Query */ 
						            $tax = $wp_query->get_queried_object();
						            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						            $args= array(
						                'posts_per_page' => 6,
						                'post_type' => 'gallery',
						                'paged' => $paged,
						                'orderby' => 'date',
						             );
						             $the_query = new WP_Query( $args );
						             ?>

						           <?php 
						             if ( $the_query->have_posts() ) : 
						              while ( $the_query->have_posts() ) : $the_query->the_post(); 
						             ?>
						            
								 <div class="col-md-4 gallery">
								 	  <?php echo get_the_post_thumbnail($post->ID, 'home_gallery'); ?>
								 </div>

								 <?php endwhile; endif;?>


								</div>
							</div>
						

						<div class="col-md-4 gallery">

							<img class="modal-content photoGallery" src="<?php echo get_theme_mod('main_gallery_settings') ?>" style="width: 100% ;height: 370px;">
						 </div>
					</div>

			
			  </div>
			</div>
