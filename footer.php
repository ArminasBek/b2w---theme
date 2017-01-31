<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package b2w
 */

?>

	

<?php wp_footer(); ?>
	<!-- SIGN UP SECTION -->
		<section id="signup" data-type="background" data-speed="4">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<h2>Are you ready to take your coding skills to the <strong>next level?</strong></h2>
							<p><a href="/" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
						</div>
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
		</section>

		<!-- FOOTER
		 -->
		<footer>
			<div class="container">
				<div class="col-sm-3">
					<p><a href="/"><img src="<?php bloginfo('template_directory') ?>/assets/img/logo.png" alt="Bootstrap to wordpress"></a></p>
				</div>
				<div class="col-sm-6">
					<nav>
						<ul class="list-unstyled list-inline">
							<li><a href="/"></a>Home</li>
							<li><a href="/"></a>Blog</li>
							<li><a href="/"></a>Resources</li>
							<li><a href="/"></a>Contact</li>
							<li class="signup-link"><a href=""></a>Sign up now</li>
						</ul>
					</nav>
				</div>
				<div class="col-sm-3">
					<div class="pull-right">2017</div>
				</div>
			</div>
		</footer>
		<!-- MODAL -->

		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button class="close" type="button" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
					</div>
					<div class="modal-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, sapiente est nulla libero, explicabo tenetur omnis nihil voluptate molestiae recusandae culpa voluptas maxime quae reiciendis tempora! <em>Est dolor et optio.</em></p>
						<form role="form" class="form-inline">
							<div class="form-group">
								<label for="subscribe-name" class="sr-only">Your first name</label>
								<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
								<label for="subscribe-email" class="sr-only">Your email address</label>
								<input type="text" class="form-control" id="subscribe-name" placeholder="Your email address">
							</div>
							<input type="submit" class="btn btn-danger" value="S  ubscribe!">
						</form>
					</div>
				</div>
			</div>
			
		</div>
<!-- BOOTSTRAP JS -->
	<script
		  src="https://code.jquery.com/jquery-3.1.1.min.js"
		  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		  crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>

</body>
</html>
