<?php 
	$video_section_title  = get_field('video_section_title');
	$video_section        = get_field('video_section');
 ?>
<!-- VIDEO FEATURETTE -->
<section id="featurette">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $video_section_title; ?></h2>
				<iframe width="100%" height="415" src="<?php echo $video_section; ?>" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>