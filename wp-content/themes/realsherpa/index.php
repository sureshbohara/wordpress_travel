<?php get_header();
 $taxonomyImg = get_taxonomy_image($post->term_id);
?>
 <div class="bradcumb-area adventure-d-1 overlay-bg-4" style="background-image: url(<?php echo $taxonomyImg; ?>);">
				<div class="container">
					<div class="row justify-content-center">
                       <div class="col-md-4"></div>

						<div class="col-md-4 categoryText" style="margin-top:400px;">
							<div class="bradcumb text-center">
								<h3>
									
								    <?php 
									   $term = get_queried_object();
									 ?>
									<?php echo get_field('title', $term); ?>
								</h3>
							</div>

						</div>

						<div class="col-md-4 categoryBradcumbScroll">
							<!-- Start bradcumb -->
							<div class="bradcumb text-center categoryBradcumb">

								<h3> 
								
									 Hightlight Strong Point
								 </h3>

                                     <?php 
						                $term = get_queried_object();
						                $taxonomy = $term->taxonomy;
						                $term_id = $term->term_id;  
						                if( have_rows('highlights', $taxonomy . '_' . $term_id) ):
						                while(have_rows('highlights', $taxonomy . '_' . $term_id)): 
						                the_row(); 
						            ?> 
				                    <h6 style="color: #ffeb3b;text-align: justify;font-size: 17px;">
				                    	<i class="fa fa-hand-o-right" aria-hidden="true"></i> 
				                    	<?php the_sub_field('highlights_title', $taxonomy . '_' . $term_id) ?>
				                    </h6>
						            <?php endwhile; endif; ?>  

								
							</div>
							<!-- End bradcumb -->
						</div>

					</div>

				</div>
	</div>


			<div class="selling-tips-area pt-40" style="background: #f0ffff82;">
				<div class="container">

					 <!-- category description section -->
					<div class="row justify-content-center py-4">
						<div class="col-lg-12">
							<div class="section-title">
								<h2><?php echo get_field('trips_&_itineraries_title', $term); ?></h2>
								<p><?php echo category_description(); ?></p>
							</div>
							
						</div>
					</div>
					 <!-- end category description section -->


					<div class="row">
                        <?php 
		                while(have_posts()){
		                the_post();   
		                ?>
						<div class="col-lg-3 col-sm-6">
							
							
							<?php $packageImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'full');?>
							<div class="single-adventure">
								
								<?php if( get_field('ribbons_tag') ): ?>
				                  <span class="new"><?php the_field('ribbons_tag'); ?></span> 
				                 <?php endif; ?>
								<img src="<?php echo $packageImage['0']; ?>" alt="<?php the_title(); ?>">
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
									<a class="btn btn-outline-danger" href="<?php the_permalink(); ?>">View Trip <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>

							</div>
							<!-- end single adventure -->
						</div>
						<?php } ?>

					</div>
				</div>
			</div>

<?php get_footer(); ?>