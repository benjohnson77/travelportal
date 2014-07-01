<div id="dest-feed" class="col-md-6">
	<div class="row">
		<div class="col-md-6"><h3>Hotest Tours</h3></div>
	</div>
	<div class="row">

		<?php 
		$feeds = [ 
			"Hot Sellers" => [ "image" => "images/tours1.png"],
			"Tour Specials" => [ "image" => "images/tour3.jpg"]
			];
			

			$count = 0;
			foreach($feeds as $city => $feed) {		
		?>
		
		<div class="dest-list list-group tours">
									
			<div class="dest-header list-group-item tours" style="background: url('<?php echo bloginfo('template_directory').'/'.$feed['image']; ?>') no-repeat 80%;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				color:#fff !important;
				min-height: 125px;" >


				<p class="dest-heading"><?php echo $city; ?> </p>
				<a class="accordion-toggle pull-right"><i class="fa fa-angle-up"></i></a>
			</div>
			
			<div class="dest-body" style="display:none;" >
			
			<?php
			$args = array( 'posts_per_page' => 5, 'category' => 'Hot Sellers' ); 
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post ); 

			  	$custom_fields = get_post_custom(get_the_ID());
	  		  	
			?>

			<a href="<?php echo get_the_permalink(); ?>" class="list-group-item tour-list-item nopadding">
			    
				<img class="col-md-3 nopadding" src="<?php echo $custom_fields['ProductionImage'][0] ?>"></img>
				<!-- text -->
			    <div class="col-md-9 nopadding text_block">
			    	<h4 class="list-group-item-heading"><?php echo get_the_title(); ?></h4>
			    	<p class="list-group-item-text"><?php echo get_the_excerpt(); ?></p>
			    	<button class="btn btn-xs btn-primary pull-right">Read More</button>
			    </div>
			</a>
			
			<?php endforeach; ?>
			</div>	
		</div>		

<?php 
	$count = $count + 1 ;
	}; // close widget loop

	wp_reset_postdata();
?>
		
		
	</div>
</div>