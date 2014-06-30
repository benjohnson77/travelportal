<?php
$lobster_theme_options = lobster_theme_options();
get_header();

?>

<div id="home">
	<div class="container">
		<div class="row">
			<h1></h1>
		</div>
		<div class="row">
			<?php get_template_part('hotel_search_form'); ?>
			<?php echo get_template_part('dest_feed'); ?> 
		</div>
		<div class="row">
			<?php echo get_template_part('tour_feed'); ?> 
		</div>
	</div>	  
</div>

<?php get_footer(); ?> 

