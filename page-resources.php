<?php 
	/* Template Name: Resources Page */
get_header();

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>
<!-- get feature image from feature image -->
<?php if(has_post_thumbnail()) { ?>
	<section class="feature-image" style="background:url('<?php echo$thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
		<h1 class="page-title"><?php echo the_title(); ?></h1>
	</section>
<?php } else { ?>
<!-- //fallback -->
<section class="feature-image feature-image-default" data-type="background" data-speed="2">
	<h1 class="page-title"><?php echo the_title(); ?></h1>
</section>
<?php } ?>
<!-- MAIN CONTENT -->
<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			<section class="main-content">
				<?php while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile;  ?>
				<hr>
				<div class="resource-row clearfix">
					<div class="resource">
						<img src="/assets/img/dropbox-logo.jpg" alt="dropbox">
						<h3><a href="http://justhost.com">Justhost</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quidem nostrum nulla, saepe voluptates. Ipsum omnis velit, voluptas reiciendis, praesentium perferendis voluptatibus voluptatem minus mollitia ea ducimus temporibus, qui blanditiis!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto molestiae aperiam debitis eos dolor voluptas maxime corporis ad facere atque, explicabo mollitia alias dolorem excepturi, tempora nemo dolore delectus facilis.</p>
						<a href="http://justhost.com" class="btn btn-success">Get started with Jushost</a>
					</div> <!-- ./ resource -->
					<div class="resource">
						<img src="/assets/img/coda2-logo.jpg" alt="JustHost">
						<h3><a href="http://coda2.com">Coda 2</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quidem nostrum nulla, saepe voluptates. Ipsum omnis velit, voluptas reiciendis, praesentium perferendis voluptatibus voluptatem minus mollitia ea ducimus temporibus, qui blanditiis!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto molestiae aperiam debitis eos dolor voluptas maxime corporis ad facere atque, explicabo mollitia alias dolorem excepturi, tempora nemo dolore delectus facilis.</p>
						<a href="http://coda2.com" class="btn btn-success">Get started with Coda 2</a>
					</div> <!-- ./ resource -->
					<div class="resource">
						<img src="/assets/img/dropbox-logo.jpg" alt="dropbox">
						<h3><a href="http://dropbox.com">Dropbox</a></h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima quidem nostrum nulla, saepe voluptates. Ipsum omnis velit, voluptas reiciendis, praesentium perferendis voluptatibus voluptatem minus mollitia ea ducimus temporibus, qui blanditiis!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto molestiae aperiam debitis eos dolor voluptas maxime corporis ad facere atque, explicabo mollitia alias dolorem excepturi, tempora nemo dolore delectus facilis.</p>
						<a href="http://dropbox.com" class="btn btn-success">Get started with Dropbox</a>
					</div> <!-- ./ resource -->
				</div>
			</section>
		</div>
	</div>
</div>

<?php get_footer(); ?>