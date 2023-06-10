<!-- Start Slider Area -->
<section class="slider-area">
<div id="welcome-slide" class="slide-controls owl-carousel">
  
	<?php
  $args = array(
  'post_type' => 'slider',
  'posts_per_page' => 5,
);
$the_query = new WP_Query ( $args ); 
?>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
     <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></button>
    <?php endwhile; endif; ?>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
   <?php $bannerImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'banner' );?>
    <div class="carousel-item  <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>">
      <img src="<?php echo $bannerImage[0]; ?>" alt="<?php echo the_title();?>">
		 <div class="carousel-caption">
		<div class="row justify-content-center">
					<div class="col-lg-10 col-sm-12">
						<!-- Start Slide content wrap -->
						<div class="slide-content-area">
							<!-- Start Single slide content	-->
							<div class="single-slide-content text-center">
								<div class="content-text">
									<h1><?php echo the_title();?></h1>
									<h2><?php echo the_content();?></h2>
								</div>
							</div>
							<!-- End Single slide content	-->
						</div>
						<!-- End Slide content wrap-->
					</div>
				</div>
	  </div>
    </div>
     <?php endwhile; endif; ?>

  </div>
	
</div>
	
</div>
</section>
<!-- End Slider Area -->