<div class="partner-area py-4" style="background: #faf9f1;">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-10">
	<!-- Start section title -->
	<div class="section-title text-center">
		<h2><?php echo get_theme_mod('title7') ?></h2>
		<p>We are affiliated with the following</p>
	</div>
	<!-- End section title -->
</div>
</div>

<div class="row">
<div class="col">
	<div class="partner-wrap owl-carousel">
		<!-- Start single partner -->

		  <?php 
                            /**The Query */ 
	        $tax = $wp_query->get_queried_object();
	        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	        $args= array(
	            'posts_per_page' => 12,
	            'post_type' => 'partner_region',
	            'paged' => $paged,
	            'partner' => 'Partner',
	            'orderby' => 'date',
	         );
	         $the_query = new WP_Query( $args );
	         ?>
	       <?php 
	            if ( $the_query->have_posts() ) : 
	            while ( $the_query->have_posts() ) : $the_query->the_post(); 
	        ?>
		<div class="single-partner">

			<img class="bottom" src="<?php echo get_the_post_thumbnail_url($post->ID, 'partner');?>">
			<img class="top" src="<?php echo get_the_post_thumbnail_url($post->ID, 'partner');?>">
		</div>
		 <?php endwhile; endif;?>
		<!-- End single partner -->

	</div>
</div>
</div>

<div class="row justify-content-center">
<div class="col-lg-10">
	<!-- Start section title -->
	<div class="section-title text-center">
		<h2><?php echo get_theme_mod('title8') ?></h2>
	</div>
	<!-- End section title -->
</div>
</div>
<div class="row">
<div class="col">
	<div class="partner-wrap owl-carousel">
		<?php 
                            /**The Query */ 
	        $tax = $wp_query->get_queried_object();
	        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	        $args= array(
	            'posts_per_page' => 12,
	            'post_type' => 'partner_region',
	            'paged' => $paged,
	            'partner' => 'Recommended On',
	            'orderby' => 'date',
	         );
	         $the_query = new WP_Query( $args );
	         ?>
	       <?php 
	            if ( $the_query->have_posts() ) : 
	            while ( $the_query->have_posts() ) : $the_query->the_post(); 
	        ?>
		<div class="single-partner">

			<img class="bottom" src="<?php echo get_the_post_thumbnail_url($post->ID, 'partner');?>">
			<img class="top" src="<?php echo get_the_post_thumbnail_url($post->ID, 'partner');?>">
		</div>
		 <?php endwhile; endif;?>
	</div>
</div>
</div>
</div>
</div>

