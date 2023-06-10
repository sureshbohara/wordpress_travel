<?php get_header();
 $breadcrumbImage = get_theme_mod('breadcrumb_settings');
?>
<!-- Start Bradcumb Area -->

<style>
  img.attachment-full.size-full.wp-post-image {
    height: 240px;

</style>
                <div class="bradcumb-area adventure-d-1 overlay-bg-4" style="background-image: url(<?php echo $breadcrumbImage; ?>);">
                <div class="container">

                    <div class="row justify-content-center">
                      <div class="col-md-4"></div>

                          <div class="col-md-4">
                            <div class="bradcumb text-center">
                                <h1><?php the_category(); ?></h1>
                            </div>

                        </div>

                        <div class="col-md-4"></div>

                    </div>
                </div>
            </div>
            <!-- End Bradcumb Area -->
            <!-- Start Blog  Area -->
            <div class="blog-area pt-90 mt-30 py-4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                          <div class="single-blog-post-wrap grid isotope_wrap">
                           <div class="row">
                              <?php 
                                while(have_posts()){
                                the_post();   
                                ?>
                               <div class="col-lg-6 col-sm-12 isotope_item">
                                    
                                        <div class="single-blog-post">
                                            <!-- Start blog post thumbnail -->
                                            <div class="post-thumbnail">
                                                 <?php if( has_post_thumbnail() ) { ?>
                                                   <?php echo get_the_post_thumbnail($post->ID, 'full' ); ?>
                                                  <?php } ?>
                                            </div>
                                            <!-- End blog post thumbnail -->
                                            <div class="single-post-content-thumb">
                                                <!-- start entry header -->
                                                <div class="entry-header">
                                                    <a href="<?php the_permalink(); ?>">
                                                    <h2 class="entry-title" style="font-size: 17px;line-height: 17px;">
                                                       <?php echo wp_trim_words(get_the_title(), 7 );?>
                                                   </h2>
                                                 </a>
                                                </div>
                                                <!-- end entry header -->
                                                <!-- Start entry content -->
                                                <div class="entry-content">
                                                    <p style="text-align: justify;"><?php echo wp_trim_words(get_the_content(), 24 );?></p>        
                                                </div>
                                                <!-- End entry content -->
                                            </div>
                                        </div>
                                
                                </div>
                                 <?php } ?>



                           </div>
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