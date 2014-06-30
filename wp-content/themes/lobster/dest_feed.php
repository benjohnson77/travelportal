<div id="dest-feed" class="col-md-offset-1 col-md-5">
	<div class="row">
		<div class="col-md-6"><h3>Today's Top Deals</h3></div>
	</div>
	<div class="row">

	<?php 
	$feeds = [ 
		"New York" => [ "url" => "http://merchandising.expediaaffiliate.com/campaign/?campaignId=98713&cid=457656",
						"image" => "images/nyc.jpg"],
		"Las Vegas" => [ "url" => "http://merchandising.expediaaffiliate.com/campaign/?campaignId=98680&cid=457656",
						"image" => "images/las-vegas.jpg"],
		"Orlando" => [ "url" => "http://merchandising.expediaaffiliate.com/campaign/?campaignId=98876&cid=457656",
						"image" => "images/orlando.jpg"]				
		];
	?>
	<?php 
		$count = 0;
		foreach($feeds as $city => $feed) {
			$get_xml = file_get_contents($feed['url']);
			$xml = simplexml_load_string($get_xml);
	?>


		<div class="dest-list list-group">
									
			<div class="dest-header list-group-item" style="background: url('<?php echo bloginfo('template_directory').'/'.$feed['image']; ?>') no-repeat;
				-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			color:#fff !important;
			min-height: 125px;" >

				<p class="dest-heading"><?php echo $city ; ?> </p>
				<a class="accordion-toggle pull-right"><i class="fa fa-angle-up"></i></a>
			</div>

			<div class="dest-body" <?php if ($count != 1){ echo 'style="display:none;"'; }; ?> >
			<?php foreach ($xml->Destination->HotelAvailabilityListResults->Hotel as $hotel) { ?>
			 
			  <a href="<?php echo $hotel->hotelUrl; ?>" class="list-group-item hotel_list_item">
			    <!-- price -->
			    <div class="price_block pull-left">
			    	
			    	
			    	<h4 class="price">
			    	<!-- monster function for price handling -->
			    	<?php 
			    	echo "$".ceil(min((array)$hotel->HotelProperty->RateInfo->DisplayNightlyRates->displayNightlyRate)); 
			    	?>
			    	</h4>
			    	<p>& up</p>
			    	
			    	<button type="button" class="btn btn-primary btn-xs">Get Rates</button>	    	
			    </div>
			
				<!-- text -->
			    <div class="text_block">

			    	<!-- pulled image -->
			    	<img class="pull-right" src="<?php echo $hotel->thumbNailUrl; ?>"></img>	

			    	<h4 class="list-group-item-heading"><?php echo $hotel->name; ?></h4>
			    	<p class="list-group-item-text"><strong> &#149; <?php echo $hotel->HotelProperty->promoDescription; ?><br />
			    	<?php foreach($hotel->HotelProperty->ValueAdds->valueAdd as $value) {
			    		echo " &#149; " . $value; 
			    	};?> 
			    	</strong>
			    	</p>
			    	
			    </div>
			    
			  </a>
			
			<?php }; ?>
			</div>
		</div>
	<?php 
		$count = $count + 1 ;
	}; ?>
	</div>
					
</div>


