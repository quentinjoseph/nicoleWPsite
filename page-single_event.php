<!-- Template Name: SingleEvent -->
	<div class="top-content">
		<?php get_header(); ?>
		<?php include 'includes/variables.php'; ?>
		<!-- title/name -->
		<?php include 'includes/name_banner.php'; ?>
	</div>
	<?php $singleEvent = $events[$_SERVER['QUERY_STRING']]  ; ?>
	
	<div class="singleEvent-container">

		<div class="singleEvent-left">
			<h1 class="single-event-data single-event-name"><?php echo $singleEvent[event_name] ; ?></h1>
			<h3 class="event-date single-event-data"><?php echo $singleEvent[event_date_and_time] ; ?></h3>
			<span class="single-event-data"><?php echo $singleEvent[event_description] ; ?></span>
			<img src="<?php echo $singleEvent[event_image][sizes][medium] ; ?>">
		</div>


		 <div class="singleEvent-right">
			<?php $location = $singleEvent[event_location];

			if( !empty($location) ):?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">	<h3><?php echo $singleEvent[event_name]; ?></h3>
					<h5><?php echo $singleEvent[event_date_and_time] ; ?></h5>
					<p><?php print_r($singleEvent[event_location][address]); ?></p>
				</div>
			</div>
			<?php endif; ?>


		</div> 
		
	</div>
	

<?php get_footer(); ?>