<!-- sidebar -->
<aside class="blog-sidebar" role="complementary">

	<?php get_template_part('searchform'); ?>

	<div class="sidebar-get-started">
		<span>Create your community</span>
		<a href="/sign-up/" class="btn btn-primary btn-action">Get started</a>
	</div>

	<div class="sidebar-follow">
		<h3>Follow GatherBoard</h3>
		<div class="social-networks">
			<a href="https://www.facebook.com/gatherboard" class="network"><i class="zmdi zmdi-facebook"></i></a>
			<a href="https://twitter.com/GatherBoard" class="network"><i class="zmdi zmdi-twitter"></i></a>
			<!-- <a href="#" class="network"><i class="zmdi zmdi-pinterest"></i></a> -->
			<a href="https://www.youtube.com/channel/UC5RW8Vj4PPxUguw2Kpd5xoA" class="network"><i class="zmdi zmdi-youtube"></i></a>
			<a href="https://plus.google.com/+Gatherboard" class="network"><i class="zmdi zmdi-google-plus"></i></a>
		</div>
	</div>

	<div class="sidebar-widget">
		<h3><i class="zmdi zmdi-trending-up"></i> Popular</h3>
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('global-sidebar')) ?>
	</div>

</aside>
<!-- /sidebar -->
