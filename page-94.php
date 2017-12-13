<!-- Template Name: Media -->

	<div class="top-content">
		<?php get_header(); ?>
		<?php include 'includes/variables.php'; ?>
		<!-- title/name -->
		<?php include 'includes/name_banner.php'; ?>
	</div>
		 <div class="media-container">
		 	<h1 class="media-section">Pictures</h1>
		 	<div class="media-gallery media-pictures">
		 		<?php foreach ($pictures as $picture):?>
				<a class="pic" href=" <?php echo $picture[sizes][large] ; ?> " data-lightbox="nikki" >
					<div class="media-thumbs" style="background-image: url('<?php echo $picture[sizes][thumbnail] ; ?>');">
						<div class="captions"><?php echo $picture[caption] ; ?></div>
					</div>
				</a>
		 		<?php endforeach; ?>
		 	</div>
				
				<h1 class="media-section">Videos</h1>
			<div class="media-gallery media-videos">
				<?php foreach ($videos as $video): ?>
					<a href=" <?php echo $video[video_to_add]; ?> " data-lity>
						<div class="video-div" style="background-image: url('<?php echo 'https://img.youtube.com/vi/' . $video[video_id] . '/mqdefault.jpg'; ?> ');">
							<div class="video-title"><?php echo $video[video_title]; ?></div>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		 </div>

	<?php get_footer(); ?>
