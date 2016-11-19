<?php /* Template Name: Built For */ get_header();
$page_subtitle = get_field( "page_subtitle" );
?>

<div class="page-billboard" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h1><?php the_title(); ?></h1>
				<h2><?php echo $page_subtitle; ?></h2>
				<div class="perfect-for">
					<span>Perfect for</span>
					<i class="zmdi zmdi-radio zmdi-hc-lg"></i>
					<i class="zmdi zmdi-tv zmdi-hc-lg"></i>
					<i class="zmdi zmdi-rss zmdi-hc-lg"></i>
				</div>
				<a href="#" class="btn btn-action">Get started</a>
			</div>
		</div>
	</div>
</div>

<main role="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="page-content">
							<?php the_content(); ?>
						</div>

						<ul class="check-list">
							<li>Become a community leader and connector.</li>
							<li>Increase new web traffic and higher search engine rankings.</li>
							<li>Develop an income stream by monetizing your calendar.</li>
							<li>Build a new brand or improve an existing one.</li>
							<li>Extend your mobile reach.</li>
						</ul>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

				<div class="signup-form">
					<h4>Get started now</h4>
					<!-- FORM GOES HERE -->
				</div>

			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
