<?php
/*
 Template Name: Home Page
 */

// Custom Fields
$prelaunch_price	= get_post_meta(7, 'prelaunch_price', true);
$launch_price			= get_post_meta(7, 'launch_price', true);
$final_price			= get_post_meta(7, 'final_price', true);
$course_url				= get_post_meta(7, 'course_url', true);
$button_text			= get_post_meta(7, 'button_text', true);

// Advanced Custom Fields
$income_feature_image  = get_field('income_feature_image');
$income_section_title  = get_field('income_section_title');
$income_section_desc	 = get_field('income_section_description');
$reason_1_title				 = get_field('reason_1_title');
$reason_1_desc				 = get_field('reason_1_description');
$reason_2_title				 = get_field('reason_2_title');
$reason_2_desc				 = get_field('reason_2_description');

$who_feature_image     = get_field('who_section_image');
$who_section_title		 = get_field('who_section_title');
$who_section_body			 = get_field('who_section_body');

$features_section_img    = get_field('features_section_image');
$features_section_title  = get_field('features_section_title');
$features_section_body   = get_field('features_section_body');

$project_feature_title  = get_field('project_feature_title');
$project_fature_body    = get_field('project_feature_body');

$video_section_title    = get_field('video_section_title');
$video_section          = get_field('video_section');





get_header(); ?>

<section id="hero" data-type="background" data-speed="5">
			<article>
				<div class="container clearfix">
					<div class="row">
						<div class="col-sm-5">
							<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
						</div>
						<div class="col-sm-7 hero-text">
							<h1><?php bloginfo('name'); ?></h1>
							<p class="lead"><?php bloginfo('description'); ?></p>
							<div id="price-timeline">
								<div class="price active">
									<h4>Pre-Launch Price <small>Ends soon!</small></h4>
									<span><?php echo $prelaunch_price ?></span>
								</div>	
								<div class="price">
									<h4>Launch Price <small>Comming soon!</small></h4>
									<span><?php echo $launch_price ?></span>
								</div>
								<div class="price">
									<h4>Pre-Launch Price <small>Final soon!</small></h4>
									<span><?php echo $final_price ?></span>
								</div>
							</div> <!-- PRICE TIMELINE -->
							<p><a target="_blank" href="<?php echo $course_url ?>" class="btn btn-lg btn-danger" role="button"><?php echo $button_text ?></a></p>
						</div>
					</div>
				</div>
			</article>

		</section>

		<!-- OPT IN -->
		<section id="optin">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<p class="lead"><strong>Subscribe to our mailing list. </strong>We'll send something special as a thank you.</p>
					</div>
					<div class="col-sm-4">
						<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">Click here to subscribe</button>
					</div>
				</div>
			</div>
		</section>

		<!-- BOOST YOUR INCOME -->
		<section id="boost-income">
			<div class="container">
				<div class="section-header">
					<!-- If user uploaded an image -->
					<?php if(!empty($income_feature_image)) : ?>
						<img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">
					<?php endif; ?>
					
					<h2><?php echo $income_section_title; ?></h2>
				</div> <!-- end of section header -->
				<p class="lead"><?php echo $income_section_description; ?></p>
				<div class="row">
					<div class="col-sm-6">
						<h3><?php echo $reason_1_title; ?></h3>
						<p><?php echo $reason_1_desc; ?></p>
					</div>
					<div class="col-sm-6">
						<h3><?php echo $reason_2_title; ?></h3>
						<p><?php echo $reason_2_desc; ?></p>
					</div>
				</div>
			</div> <!-- end of container -->
		</section>

		<!-- WHO BENEFITS -->
		<section id="who-benefits">
			<div class="container">
				<div class="section-header">
					<?php if(!empty($who_feature_image)) : ?>
						<img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">
					<?php endif; ?>
					<h2><?php echo $who_section_title; ?></h2>
				</div> <!-- section header -->
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<?php echo $who_section_body; ?>
					</div>
				</div>

			</div>
		</section>

		<!-- COURSE FEATURES -->
		<section id="course-features">
			<div class="container">
				<div class="section-header">
					<?php if(!empty($features_section_img)) : ?>
						<img src="<?php echo $features_section_img['url']; ?>" alt="<?php echo $features_section_img['alt']; ?>">
					<?php endif; ?>
					<h2><?php echo $features_section_title; ?></h2>
					<?php if(!empty($features_section_body)) : ?>
					<p class="lead"><?php echo $features_section_body ?></p>
					<?php endif; ?>
				</div> <!-- end of section header -->
				<div class="row">

					<?php $loop = new WP_Query( array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

					<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
						<div class="col-sm-2">
							<i class="<?php the_field('course_feature_icon'); ?>"></i>
							<h4><?php the_title(); ?></h4>
						</div>
					<?php endwhile; ?>	

				</div>
			</div>
			
		</section>

		<!-- PROJECT FEATURES -->
		<section id="project-features" class="text-center">
			<div class="container">
				<h2><?php echo $project_feature_title; ?></h2>
				<p class="lead"><?php echo $project_fature_body; ?></p>
				<div class="row">
						<?php $loop = new WP_Query( array('post_type' => 'project_features', 'orderby' => 'post_id', 'order' => 'ASC') ); ?>

						<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="col-sm-4">
								<?php 
									if ( has_post_thumbnail()) {
										the_post_thumbnail();
									}
								 ?>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
							</div>
						<?php endwhile; ?>
				</div>
			</div> <!-- end of container -->

		</section>

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

		<!-- INSTRUCTOR -->
		<section id="instructor">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-6 instructor-text">
						<div class="row">
							<div class="col-lg-8 ">
								<h2>Your Instructor <small>Brad Hussey</small></h2>
							</div>
							<div class="col-lg-4">
								<a href="/" target="blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>
								<a href="/" target="blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
								<a href="/" target="blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
						<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cupiditate sit ab id, quo.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil ratione consequuntur soluta laborum officiis voluptatibus nemo perspiciatis ipsum. Maiores voluptatem aut porro, quisquam, cupiditate saepe sed asperiores. Incidunt, ut, repellendus.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit nisi qui ratione ea ipsum, aperiam quibusdam nostrum molestiae minus libero hic enim dolor at quae cumque inventore, deleniti perferendis! Praesentium.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat a dolor voluptatem deleniti necessitatibus, impedit vitae ea ullam repudiandae quasi iusto dolorum, quo mollitia quam eveniet rem, quos totam! Cumque.</p>
						<hr>
						<h3>The Numbers <small> they don't lie</small></h3>
						<div class="row">
							<div class="col-xs-4">
								<div class="num">
									<div class="num-content">
										41,000 + <span>students</span>
									</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="num">
									<div class="num-content">
										568 <span>reviews</span>
									</div>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="num">
									<div class="num-content">
										8 <span>courses</span>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-sm-4">
						<img src="/assets" alt="">
					</div>
				</div>	
			</div>

		</section>

		<!-- TESTIMONIALS -->
		<section id="kudos">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2>What People Are Saying About Brad</h2>

						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/brennan.jpg" alt="Brennan">
							</div>
							<div class="col-sm-8">
								<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cupiditate reprehenderit unde perspiciatis velit maiores, laudantium veniam ipsum doloribus esse earum. Error ea deleniti placeat ullam hic molestias at. <cite>&mdash; Brennan, gaduate of all of Brad's course</cite>
								</blockquote>
							</div>
						</div>
						<!-- testimonial -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ben.png" alt="Brennan">
							</div>
							<div class="col-sm-8">
								<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cupiditate reprehenderit unde perspiciatis velit maiores, laudantium veniam ipsum doloribus esse earum. Error ea deleniti placeat ullam hic molestias at. <cite>&mdash; Benn, gaduate of all of Brad's course</cite>
								</blockquote>
							</div>
						</div>
						<!-- testimonial -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/aj.png" alt="Brennan">
							</div>
							<div class="col-sm-8">
								<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cupiditate reprehenderit unde perspiciatis velit maiores, laudantium veniam ipsum doloribus esse earum. Error ea deleniti placeat ullam hic molestias at. <cite>&mdash; AJ, gaduate of all of Brad's course</cite>
								</blockquote>
							</div>
						</div>
						<!-- testimonial -->
						<div class="row testimonial">
							<div class="col-sm-4">
								<img src="<?php bloginfo('stylesheet_directory');?>/assets/img/ernest.png" alt="Brennan">
							</div>
							<div class="col-sm-8">
								<blockquote>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cupiditate reprehenderit unde perspiciatis velit maiores, laudantium veniam ipsum doloribus esse earum. Error ea deleniti placeat ullam hic molestias at. <cite>&mdash; Ernest, gaduate of all of Brad's course</cite>
								</blockquote>
							</div>
						</div>
						<!-- testimonial -->
					</div>
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
			
		</section>
	

<?php get_footer(); ?>