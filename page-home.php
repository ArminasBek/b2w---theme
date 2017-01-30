<?php
/*
 Template Name: Home Page
 */
get_header(); ?>

	<?php get_template_part('content','hero'); ?>
	<?php get_template_part('content','optin'); ?>
	<?php get_template_part('content','income'); ?>
	<?php get_template_part('content','benefits'); ?>
	<?php get_template_part('content','features'); ?>
	<?php get_template_part('content','projfeatures'); ?>
	<?php get_template_part('content','featurevideo'); ?>
	<?php get_template_part('content','instructor'); ?>
	<?php get_template_part('content','testimonial'); ?>

<?php get_footer(); ?>