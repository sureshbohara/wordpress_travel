<?php get_header();
 $tripDetailsImage = get_the_post_thumbnail_url(get_the_ID(),'trip_details');
?>
<!-- Start Bradcumb Area -->
                <div class="bradcumb-area adventure-d-1 overlay-bg-4" style="background-image: url(<?php echo $tripDetailsImage; ?>);">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-3"></div>

                          <div class="col-md-6">
                            <div class="bradcumb text-center">
                                <h3> <?php the_title(); ?></h3>
                                <ul>
                                    <li><?php the_title(); ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3"></div>

                    </div>
                </div>
            </div>
            <!-- End Bradcumb Area -->
            <!-- Start Blog  Area -->
            <div class="blog-area pt-90 py-2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <!-- Start Blog Post -->
                            <div class="single-blog-post-wrap blog-details">
                                <!-- Start single blog post -->
                                <div class="single-blog-post">
                                    <!-- End blog post thumbnail -->
                                    <div class="single-post-coontent-top">
                                        <!-- End author -->
                                        <!-- start entry header -->
                                        <div class="entry-header">
                                            <h2 class="entry-title"><?php the_title(); ?></h2>
                                            <?php the_content(); ?>
                                        </div>
                                        <!-- end entry header -->
                                    </div>
                                </div>
                                <!-- End single blog post -->
                            </div>
                            <!-- End Blog Post -->
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