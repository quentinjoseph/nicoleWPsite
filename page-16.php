<div class="top-content">
	<?php get_header(); ?>
	<!-- Template Name: Events -->
	<?php include 'includes/variables.php'; ?>
	<!-- title/name -->
	<?php include 'includes/name_banner.php'; ?>
</div>
<div class="bio-pic" style="background-image: url('<?php echo $bioPic[sizes][large]; ?>');" >  </div>

<h2 class="section">Biography</h2>


	<div class="bio-content">
		<p> <?php echo $bio; ?> </p>

		<a href="<?php echo $resume[url]; ?>" download><div class="resume">Download Resume</div></a>
	</div>
<?php get_footer(); ?>