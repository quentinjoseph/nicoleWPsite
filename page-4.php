<div class="top-content">
	<?php get_header(); ?>
	<?php include 'includes/variables.php'; ?>
	<!-- title/name -->
	<?php include 'includes/name_banner.php'; ?>
</div>
<div class="homepage-container">
<!-- background image -->
	<div class="homepage_picture" style="background-image: url(' <?php echo $bgimage[url]; ?> '); background-repeat: no-repeat; background-size: cover; ">
	</div>
	
	<h2 class="section">Upcoming Events</h2>
	
<!-- events and pics -->
<div class="mid-section">
	<div class="events-container">
		<?php $i=0; ?>
		<?php foreach ($events as $event): ?>

			<div class="event">
				
				<div class="partial-event">
					<?php echo "<a class='link-class' href='http://wpnikki:8888/single_event/?" . $i . "'>" ?>
					<div class="event-name"><h2> <?php echo $event[event_name]; ?> </h2></div>
							<div class="event-date"><h5> <?php echo $event[event_date_and_time]; ?> </h5></div>
							<div class="event-description"><p> <?php echo $event[event_description]; ?> </p>
							</div>
					<?php echo "</a> "; ?>
				</div>
				
				<div class="thumbnail"> <img src=" <?php echo $event[event_image][sizes][thumbnail]; ?> "> 
				</div>

			</div>
			<?php if (++$i == 2) break; ?> 
		<?php endforeach; ?>
	</div>

	<div class="side-pic" style="background-image: url(' <?php echo $sidePic[sizes][large]; ?> '); background-size:cover;"></div>
</div>
</div>
<?php get_footer(); ?>