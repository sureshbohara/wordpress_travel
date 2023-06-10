<!-- Start Camping Area -->
<div class="camping-hi-area pb-70 category">
<div class="container">
<div class="row">
   <?php 
      $args = array(
        'taxonomy' => 'destination',
        'hide_empty' => false,
        'terms'    => 'sherpa_trip',
       );
      $i = 0;
       $tripDestination = get_terms( $args ); 
      ?>
    <?php foreach($tripDestination as  $post) : ?>
	<div class="col-lg-3 col-sm-4">
		 <?php
         $taxonomyImg = get_taxonomy_image($post->term_id);
        ?>
		<div class="single-camp-hi">
			<img src="<?php echo $taxonomyImg; ?>" alt="<?php echo $post->name; ?>">
			<div class="camp-hi-content">
				<a href="destination/<?php echo $post->slug; ?>">
					<h4><?php echo $post->name; ?></h4>
				</a>
				<p><?php echo $post->count; ?>  Trips</p>
			</div>
		</div>
		<!-- End single camp -->
	</div>
	<?php endforeach ?>
   <?php wp_reset_query(); ?>

</div>
</div>
</div>
<!-- End Camping Area -->