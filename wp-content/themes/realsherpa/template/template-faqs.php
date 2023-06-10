<?php get_header();
 /* Template Name: FAQs Page*/
 $breadcrumbImage = the_post_thumbnail('breadcrumb_settings');
?>
<!-- Start Bradcumb Area -->

<style>
    .bradcumb-area {
    position: absolute;
    top: 0; 
    background: url(<?php echo the_post_thumbnail('full') ?>)!important;
    background-size: cover;
    right: 0;
    left: 0;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
}
</style>
                <div class="bradcumb-area">
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
<!--                                             <h2 class="entry-title"><?php the_title(); ?></h2> -->

                                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <?php if( have_rows('faqs')):$i=1; while( have_rows('faqs')) : the_row();
                                  $questionTitle = get_sub_field('question');$answerDescription = get_sub_field('answer');
                                  if(trim($questionTitle)){ 
                                  ?>
								  <div class="accordion-item">
								    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
								      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
								       <i class="fa fa-plus"></i>&nbsp;&nbsp;   <?php echo ( $questionTitle ); ?>
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
                                    <h3> Trip Info</h3>
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
                                    <h3>Our Popular Trip</h3>
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