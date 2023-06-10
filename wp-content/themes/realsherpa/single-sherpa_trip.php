<?php get_header();
    $tripDetailsImage = get_the_post_thumbnail_url(get_the_ID(),'trip_details');
 ?>


<!-- Start Bradcumb Area -->
<div class="bradcumb-area adventure-d-1 overlay-bg-4 tripDetails" style="background-image: url(<?php echo $tripDetailsImage; ?>);">
	<div class="container">

		<div class="row justify-content-center">

			<div class="col-md-8">

                 <div class="row">
                	<div class="col-lg-4"></div>
                	<div class="col-lg-8">
                	 <div class="bradcumb text-center">
											   <h3 style="font-size: 45px;">
											    <?php the_title(); ?>
											  </h3>
											   <ul>
												   <li style="font-size: 25px;"><?php the_field('treking_is_highaltitude'); ?></li>
											   </ul>
										     </div>
                	</div>
                </div>
				

				<div class="row bradcumb myBradcumb">
					 
					 <div class="col-md-6">
						<p>  Difficult level : <?php the_field('trip_difficulty'); ?></p>
					 </div>
					
					<div class="col-md-6">
						<p> Trekking Duration : <?php the_field('duration'); ?></p>
					</div>
					<div class="col-md-6">
						<p> Trip Starts : <?php the_field('trip_starts'); ?></p>
					</div>
					<div class="col-md-6">
						<p>  Trip Ends : <?php the_field('trip_ends'); ?></p>
					</div>
					<div class="col-md-12">
						<p> Accommodations : <?php the_field('accommodation'); ?></p>
						<p> Meal : <?php the_field('food'); ?></p>
					</div>
					<div class="col-md-12">
						<p> Max : <?php the_field('max_elevation'); ?> </p>
						<p> Best Season : <?php the_field('best_season'); ?> </p>
					</div>

				</div>

			</div>

			<div class="col-md-4">
				<!-- Start bradcumb -->
				<div class="bradcumb text-center tripDetailsStyle">
					<h3>
						
						 Hightlight Strong Point
					</h3>

					 <?php if( have_rows('highlights')):$i=1; while( have_rows('highlights')) : the_row();
                      $highlightsTitle = get_sub_field('highlights_title');
                      if(trim($highlightsTitle)){ 
                      ?>
					
						<h6 style="color: #ffeb3b;text-align: justify;font-size: 15px;margin: 0px;padding: 0px;">
							<i class="fa fa-hand-o-right" aria-hidden="true"></i>
							  <?php echo ( $highlightsTitle ); ?>
						</h6>
					  <?php
                       } $i++; endwhile;
                       ?>
                      <?php endif; ?>
						
				</div>
				<!-- End bradcumb -->
			</div>

		</div>

	</div>
</div>
<!-- End Bradcumb Area -->

			<!-- Start Team Inclution Area -->
			<div class="inclution-area">
			  <div class="container">
					<!-- title start -->
			  <div class="row">

			  	<div class="col-md-8">
			  	<ul class="nav nav-pills tab-switchers gap-xxl-4" id="pills-tab" role="tablist">
                  <li class="nav-item" role="pills1">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">
						<i class="bi bi-bookmark-check-fill"></i> Trip Description</button>
                  </li>

                  <li class="nav-item" role="pills2">
                    <button class="nav-link" id="itinerary-tab" data-bs-toggle="tab" data-bs-target="#itinerary" type="button" role="tab" aria-controls="itinerary" aria-selected="false">
						<i class="bi bi-gear-wide"></i> Trip Itinerary</button>
                  </li>

                  <li class="nav-item" role="pills3">
                    <button class="nav-link" id="accommodation-tab" data-bs-toggle="tab" data-bs-target="#accommodation" type="button" role="tab" aria-controls="accommodation" aria-selected="false"> <i class="bi bi-file-earmark-spreadsheet"></i>Trip Accommodation</button>
                  </li>
                  <li class="nav-item" role="pills4">
                    <button class="nav-link" id="included-tab" data-bs-toggle="tab" data-bs-target="#included" type="button" role="tab" aria-controls="included" aria-selected="false"> <i class="bi bi-heart-fill"></i>Included & Excluded</button>
                  </li>
                  <li class="nav-item" role="pills5">
                    <button class="nav-link" id="faqs-tab" data-bs-toggle="tab" data-bs-target="#faqs" type="button" role="tab" aria-controls="faqs" aria-selected="false"><i class="bi bi-images"></i> FAQs</button>
                  </li>
                </ul>

                <div class="tab-content">
                	 <!-- description -->
                	   <div class="tab-pane fade show active package-info-tab mt-3" id="description" role="tabpanel" aria-labelledby="description-tab">
							 <div class="feedback-comments-wrap">
								
								 <div class="accordion-body myCheck">
								 	<?php the_content(); ?>
								 </div> 	
							</div>
						</div>
					<!-- end description -->


					<!-- tab itinerary -->
						<div class="tab-pane fade show package-info-tab mt-3" id="itinerary" role="tabpanel" aria-labelledby="itinerary-tab">
							  
								<div class="accordion" id="accordionPanelsStayOpenExample">
								<?php if( have_rows('trip_itinerary')):$i=1; while( have_rows('trip_itinerary')) : the_row();
									   $itineryTitle = get_sub_field('itinerary_title');
									   $itineryDescription = get_sub_field('itinerary_description');
									  if(trim($itineryTitle)){ 
									  ?>
								  <div class="accordion-item">
								    <h2 class="accordion-header" id="<?php echo ( $itineryTitle ); ?>">
								      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"> 
									 <i class="fa fa-plus"></i> &nbsp;&nbsp; <?php echo ( $itineryTitle ); ?>
								      </button>
								    </h2>
								    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="<?php echo ( $itineryTitle ); ?>" >
								      <div class="accordion-body">
								        <?php echo ($itineryDescription ); ?>
								      </div>
								    </div>
								  </div>
									
									 <?php
                       } $i++; endwhile;
                       ?>
                      <?php endif; ?>
									
									
									
								</div>

                                  
								      <h4>Our Trip Gallery</h4>
								   

                                       <?php 
                                    $tripGallery = get_field('trip_gallery');
                                   if( $tripGallery ): ?>
                                    <div class="row g-4">
                                   <?php foreach( $tripGallery as $gallery ): ?>
                                    <div class="col-4 py-2">
                                        <div class="package-gallary-item">
                                            <a href="<?php echo esc_url($gallery['sizes']['trip_gallery']); ?>" data-fancybox="gallery" data-caption="<?php echo esc_html($gallery['caption']); ?>">
                                            	<img src="<?php echo esc_url($gallery['sizes']['trip_gallery']); ?>" alt="<?php echo esc_attr($gallery['alt']); ?>">
                                            </a>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>

                                </div>
                                <?php endif; ?>

						   </div>
						<!-- end tab itinerary -->


						 <!--  tab accommodation-->
						
                	   <div class="tab-pane fade show  package-info-tab mt-3" id="accommodation" role="tabpanel" aria-labelledby="accommodation-tab">
							 <div class="feedback-comments-wrap">
								 
								 <div class="accordion-body">
								 	<?php the_field('trip_accommodation'); ?>
								 </div> 	
							</div>
						</div>
				
						<!-- end tab accommodation -->

						<!-- tab included -->
						<div class="tab-pane fade show package-info-tab mt-3" id="included" role="tabpanel" aria-labelledby="included-tab">

                       <div class="accordion-item">
						    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
						      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
								  <i class="fa fa-plus"></i> &nbsp;&nbsp; 
						        Trip Included
						      </button>
						    </h2>
						    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
						      <div class="accordion-body included">
						        <?php the_field('trip_included'); ?>
						      </div>
						    </div>
						  </div>

							  <div class="accordion-item">
							    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
							      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
									  <i class="fa fa-plus"></i> &nbsp;&nbsp; 
							        Trip Excluded
							      </button>
							    </h2>
							    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
							      <div class="accordion-body excluded">
							        <?php the_field('trip_excluded'); ?>
							      </div>
							    </div>
							  </div>

						</div>
						<!-- end tab included -->



						 <!-- tab faqs -->
						<div class="tab-pane fade show package-info-tab mt-3" id="faqs" role="tabpanel" aria-labelledby="faqs-tab">
							<div class="accordion" id="accordionPanelsStayOpenExample">
                                <?php if( have_rows('faqs')):$i=1; while( have_rows('faqs')) : the_row();
                                  $questionTitle = get_sub_field('question');$answerDescription = get_sub_field('answer');
                                  if(trim($questionTitle)){ 
                                  ?>
								  <div class="accordion-item">
								    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
								      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
								        <?php echo ( $questionTitle ); ?>
								      </button>
								    </h2>
								    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
								      <div class="accordion-body">
								        <?php echo ( $answerDescription ); ?>
								      </div>
								    </div>
								  </div>
								  <?php
                                   } $i++; endwhile;
                                   ?>
                                  <?php endif; ?>


								</div>

						</div>
						<!-- end tab faqs -->

                </div>

			  	</div>

			  	<div class="col-md-4">
				
				       <div class="advanture-sidebar tripSidebar">
								<!-- Start single sidebar -->
								<div class="sigle-adv-sidebar">
									<h3 style="color: #fff;border-bottom: 2px solid #ffeb3b;padding: 5px">
									
									    All Inclusive Price
								  </h3>
									<h4><span><?php the_field('trip_price'); ?></span></h4>
									<ul class="widget-catagories mySidebar">
										<h5 style="color: #fff;"> Share On:

										  <span class="copy-payment mySocial">
												<ul style="display: contents;">
													<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#"><i class="fab fa-instagram"></i></a></li>
													<li><a href="#"><i class="fab fa-youtube"></i></a></li>
												</ul>
											</span>
											

										</h5>
										 <h3 style="color: #fff;padding: 5px;font-size: 23px;border-bottom: 2px solid #ffeb3b;">
											 Our Trip is Fully Customizable
										</h3>
										<ul style="display: contents;">
										<li>   Guaranteed fixed Departure</li>
										<li>   If you have a group, we Give you discount</li>
										<li>   Have a Nepal plan? Tailor your itinerary</li>
										<li>   We can help you make it fit your budget</li>
									   </ul>
									</ul>
								</div>
							</div>
					
				
					
					   <div class="advanture-sidebar ">
							<div class="page-right">
							 <div class="list box">
								<h3> Map Info</h3>

		                         <div class="map">
									 <a href="<?php $image = get_field('map_info'); echo($image['sizes']['trip_map']); ?>">
							        <img src="<?php $image = get_field('map_info'); echo($image['sizes']['trip_map']); ?>" />
										 </a>
							    </div>
								
							</div> 
						   </div>
						   </div>

	
	

                    <aside class="package-widget-style-2 widget-recent-package-entries py-4">
                    <div class="right-sidebar__item ">
                     <div class="right-sidebar__item__contact">
                         <h5>Get a Question?   
						 <button type="button" class="im-app__minimize-title btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
						  Send Message
					  </button
						 </h5>
                        <p>Do not hesitate to give us a call. We are an expert team and we happy to talk to you.</p> 
                        <a href="#">
                         <i class="bi bi-telephone-x"></i> &nbsp;&nbsp;
                          <span class="contact-phone">
                          <?php echo get_theme_mod('mobile_number') ?></span>
                        </a>
                        <a href="#"> 

                        	<i class="bi bi-envelope-open"></i> &nbsp;&nbsp;
                        	<span> <?php echo get_theme_mod('email_setting') ?></span>
                        </a>

                        <a href="#"> 
                            <i class="bi bi-geo-alt"></i> &nbsp;&nbsp;
                            <span> <?php echo get_theme_mod('address') ?> </span>
                        </a>
                        
                    </div>
                   </div>
               </aside>

				</div>
						<!-- trip sidebar -->

			</div>
			<!-- title end -->
		    </div>
		</div>

			
			<!-- Start Adventure Area -->
			<div class="adve-detail-area pt-90 detailsPage">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<!-- Start section title -->
							<div class="section-title text-center">
								<p class="title">SIMILAR TRIPS</p>
								<h2>You May Also Enjoy Our Other Trips</h2>
							</div>
							<!-- End section title -->
						</div>
					</div>
					<div class="row">
						<div class="col">
							<div class="adv-similar-detail-wrap owl-carousel">
                                <?php 
						              $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'number_posts' => 8,'post_type' => 'sherpa_trip', 'post__not_in' => array($post->ID) ) );
						             ?>
						          <?php foreach($related as $key => $value) : ?>
								<!-- start single adventure -->
								<div class="single-adventure">
								<img src="<?php echo get_the_post_thumbnail_url($value->ID, 'full'); ?>" alt="<?php echo $value->post_title;?>">
								<div class="adventure-content">
									<a href="<?php echo esc_url( get_permalink( $value->ID ) ); ?>"><h6><?php echo $value->post_title;?></h6></a>

									<p class="tour">
										<i class="fa fa-credit-card" aria-hidden="true"></i>
										 From : <?php echo $value->trip_price;?>
									</p>

									<p class="tour">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									 Duration : <?php echo $value->duration;?>
									</p>

									<p class="tour">
										<i class="fa fa-line-chart" aria-hidden="true"></i> 
										Grading  : <?php echo $value->trip_difficulty;?>
									</p>	
								</div>

								<div class="adventure-content button">
									<a class="btn btn-outline-danger" href="<?php echo esc_url( get_permalink( $value->ID ) ); ?>">View Trip <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								</div>
							    </div>
							    <?php endforeach ?>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Adventure Area -->



			<div tabindex="0" class="im-app im-app--mod-minimize closed">
				<div class="im-app__cont-minimize">
					<div class="button-mod-box">
						
							<button type="button" class="im-app__minimize-title btn btn-default" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						  Book Now
					  </button>

						  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg">
						    <div class="modal-content">
						      <div class="modal-header">
						          <h5 class="modal-title" id="staticBackdropLabel">	
						        	   » <?php the_title(); ?> &nbsp;&nbsp;&nbsp;
						        		» Price : <?php the_field('trip_price'); ?>
						        	</h5>
						        
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						       <?php echo apply_shortcodes('[fluentform id="1"]'); ?>
						        
						      </div>
		
						    </div>
						  </div>
						</div>

					</div>
				</div>
			</div>

<?php get_footer(); ?>