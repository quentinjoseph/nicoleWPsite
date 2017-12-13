<div class="eventspage-container">

	<div class="top-content">
		<?php get_header(); ?>
		<!-- Template Name: Events -->
		<?php include 'includes/variables.php'; ?>
		<!-- title/name -->
		<?php include 'includes/name_banner.php'; ?>
	</div>

	<div class="eventspage-content">
		<div class="eventspage-left">	
			<!-- <h2 class="section">Events</h2> -->
			<?php foreach ($events as $event): ?>
		<?php echo "<a class='link-class' href='http://wpnikki:8888/single_event/?" . $i . "'>" ?> 
				<div id="" class="event">
					
					<div class="partial-event">
						<div class="event-name">
							<h2> <?php echo $event[event_name]; ?> </h2>
						</div>
						<div class="event-date">
							<h5> <?php echo $event[event_date_and_time]; ?> </h5>
						</div>
						<div class="event-description"> 
							<?php echo $event[event_description]; ?>
						</div>
					</div>
					

				</div>
				<?php echo "</a> "; ?>
				<?php $i++; ?>
			<?php endforeach; ?>

		</div>

		<div class="eventspage-right" style="background-image: url(' <?php echo $eventsPagePic[sizes][large] ?> ');">
			
		</div>
	</div>
	 

<?php echo "</a> "; ?>	
	<?php get_footer(); ?>

</div>