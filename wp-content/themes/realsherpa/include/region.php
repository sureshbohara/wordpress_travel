<div class="camping-hi-area pt-85 pb-80">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="section-title text-center" style="margin-bottom: 60px;">
								<h2><?php echo get_theme_mod('title2') ?> </h2>
							</div>
						</div>
					</div>

					<div class="row">
                       <?php 
					      $args = array(
					        'taxonomy' => 'regions',
					        'hide_empty' => false,
					        'terms'    => 'sherpa_trip',

					       );
					      $i = 0;
					      $tripDestination = get_terms( $args ); 

					     ?>

					    <?php foreach($tripDestination as  $post) : ?>
						<div class="col-lg-4 col-sm-6">
							<?php
                                $taxonomyImg = get_taxonomy_image($post->term_id);
                               ?>
							<div class="single-camp-hi">
								<img src="<?php echo $taxonomyImg; ?>" alt="<?php echo $post->name; ?>">
								<div class="camp-hi-content">
									<a href="regions/<?php echo $post->slug; ?>">
										<h4><?php echo $post->name; ?></h4>
									</a>
									<p><?php echo $post->count; ?> Trips</p>
								</div>
							</div>
							<!-- End single camp -->
						</div>
						<?php endforeach ?>
                        <?php wp_reset_query(); ?>

					</div>
				</div>
			</div>