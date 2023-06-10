<style>
   .clientReview{
   	background: url(<?php echo get_theme_mod('bg_image3_settings') ?>);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
    background-color: rgba(45,44,43,0.7);
}

</style>



<section class="pt-50 pb-50 clientReview">
  <div class="container">

  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 style="margin-bottom: 79px;"><?php echo get_theme_mod('title5') ?></h3>
    </div>
  </div>

  <div class="row text-center d-flex align-items-stretch">
     <?php 
     $tax = $wp_query->get_queried_object();
     $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
     $args= array(
        'posts_per_page' => 3,
        'post_type' => 'reviews',
        'paged' => $paged,
        'orderby' => 'date',
      );
      $the_query = new WP_Query( $args );
      ?>

     <?php 
          if ( $the_query->have_posts() ) : 
         while ( $the_query->have_posts() ) : $the_query->the_post(); 
      ?>

     <div class="col-md-4 mb-5 mb-md-0 d-flex align-items-stretch">
      <div class="card testimonial-card" style="background-color: #6a4f4278;">
        <div class="card-up" style="background-color: #ff530094;"></div>
        <div class="avatar mx-auto bg-white">
           <?php echo get_the_post_thumbnail($post->ID, 'trip_review'); ?>
        </div>
        <div class="card-body">
          <h4 style="color: #fff;"><?php the_title(); ?></h4>
          <hr />
          <p class="dark-grey-text" style="color: #fff;line-height: 26px;">
            <i class="fas fa-quote-left"></i>
            <?php echo wp_trim_words(get_the_content(), 35 );?>
          </p>
        </div>
      </div>
    </div>
    <?php endwhile; endif;?>
  </div>
  </div>
</section>




