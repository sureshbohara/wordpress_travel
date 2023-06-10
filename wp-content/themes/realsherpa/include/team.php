	<div class="selling-tips-area pb-80 pt-80" style="background: azure;">
				<div class="container">
					<div class="row">

					  <div class="col-lg-6">
					  	<div class="row">
							<h3  style="text-align: center;">
									MEET OUR TEAM
							</h3>
					  		<h3 style="text-align: center;">Real-sherpa Adventures</h3>

                               <?php 
					            $tax = $wp_query->get_queried_object();
					            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					            $args= array(
					                'posts_per_page' => 2,
					                'post_type' => 'team',
					                'paged' => $paged,
					                'orderby' => 'date',
					             );
					             $the_query = new WP_Query( $args );
					             ?>

						           <?php 
						                if ( $the_query->have_posts() ) : 
						               while ( $the_query->have_posts() ) : $the_query->the_post(); 
						            ?>

							<div class="col-lg-6 col-sm-12">
								<!-- start single adventure -->
								<div class="single-adventure single-team" style="margin-bottom:10px;">
									 <?php echo get_the_post_thumbnail($post->ID, 'home_team'); ?>
									<div class="adventure-content myTeam">
										<a href="<?php the_permalink(); ?>">
											<h5 style="text-align: center;margin: -10px;font-size: 16px;">
												<?php the_title(); ?> </h5>
										</a>
										
										<p style="text-align: center;">
											<?php if(function_exists('the_subtitle')) the_subtitle(); ?>
										</p>
									</div>
								</div>
								<!-- end single adventure -->
							</div>
							 <?php endwhile; endif;?>

                                <div class="section-title text-center">
									<a class="btn btn-light" href="<?php echo get_home_url(); ?>/our-working-team">
										Meet our team
										<i class="fa fa-arrow-right" aria-hidden="true"></i>
									</a>
							    </div>

					  	</div>
					  </div>


						<div class="col-lg-6">
							<div class="selling-tips-wrap">
								<!-- Start single selling tips -->
								<div class="single-selling-tips section-title">
									<h3 style="text-align: center;"><?php echo get_theme_mod('title') ?></h3>
									<p style="text-align: justify;">
										<?php $description = get_theme_mod('description');
										    if ($description) { 
										        echo nl2br( esc_html( $description ) );
										} ?>		
									</p>

									<!-- <div class="section-title">
						           <a class="btn btn-outline-danger" href="<?php echo get_theme_mod('link') ?>"><?php echo get_theme_mod('button') ?>
						            <i class="fa fa-arrow-right" aria-hidden="true"></i>
						           </a>
				                   </div> -->
								</div>
								<!-- End single selling tips -->
							</div>
						</div>


						
					</div>




				</div>
			</div>