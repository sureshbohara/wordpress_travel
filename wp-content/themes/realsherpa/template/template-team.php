<?php 
/* Template Name: Team Page*/
 get_header(); 
  $breadcrumbImage = get_theme_mod('breadcrumb_settings');
?>

   <div class="bradcumb-area adventure-d-1 overlay-bg-4" style="background-image: url(<?php echo $breadcrumbImage; ?>);">
                <div class="container">

                    <div class="row justify-content-center">
                      <div class="col-md-4"></div>

                          <div class="col-md-4">
                            <div class="bradcumb text-center">
                                <h3> <?php the_title(); ?></h3>
                                <ul>
                                    <li><?php the_title(); ?></li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-4"></div>

                    </div>
                </div>
            </div>


       <div class="selling-tips-area pb-80 pt-80" style="background: azure;">
                <div class="container">
                    <div class="row">

                      <div class="col-lg-8">
                        <div class="row">
                           <!--  <h3>Meet The Team Of Himalaya sherpa's</h3> -->

                               <?php 
                                $tax = $wp_query->get_queried_object();
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $args= array(
                                    'posts_per_page' => 6,
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

                                    <div class="col-lg-4 col-sm-12">
                                        <!-- start single adventure -->
                                        <div class="single-adventure single-team" style="margin-bottom:10px;">
                                             <?php echo get_the_post_thumbnail($post->ID, 'home_team'); ?>
                                            <div class="adventure-content myTeam">
                                                <a href="<?php the_permalink(); ?>">
											<h5 style="text-align: center;margin: -10px;font-size: 16px;"><?php the_title(); ?> </h5>
										</a>
										
										<p style="text-align: center;">
											<?php if(function_exists('the_subtitle')) the_subtitle(); ?>
										</p>
                                            </div>
                                        </div>
                                        <!-- end single adventure -->
                                    </div>
                             <?php endwhile; endif;?>



                        </div>
                      </div>


                        <div class="col-lg-4">
                            <!-- Start advanture sidebar -->
                            <div class="advanture-sidebar">

                                <div class="page-right">
                                 <div class="list box">
                                    <h3><i class="fa fa-share" aria-hidden="true"></i> Trip Info</h3>
                                    <ul>

                                         <?php
                                              wp_nav_menu( array( 
                                                'theme_location' => 'sidebar',
                                                'container_class' => 'view_info'
                                            )); 
                                            ?>
                                    </ul>
                                </div> 
                               </div>


                                 <div class="page-right">
                                 <div class="list box">
                                    <h3><i class="fa fa-share" aria-hidden="true"></i> Our Popular Trip</h3>
                                    <ul>
                                     <?php
                                          wp_nav_menu( array( 
                                            'theme_location' => 'sidebar1',
                                            'container_class' => 'view_info'
                                        )); 
                                        ?>
                                    </ul>
                                </div> 
                               </div>
                           

                            </div>
                        </div>


                        
                    </div>




                </div>
            </div>


<?php get_footer(); ?>