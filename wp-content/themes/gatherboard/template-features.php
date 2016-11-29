<?php /* Template Name: Features */ get_header();
$page_subtitle = get_field( "page_subtitle" );
?>

<div class="page-billboard" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h1><?php the_title(); ?></h1>
				<h2><?php echo $page_subtitle; ?></h2>
				<a href="#" class="btn btn-action">Get started</a>
			</div>
		</div>
	</div>
</div>

<!-- Features -->
<!-- =================================== -->
<?php get_template_part( 'includes/mobile-app' ); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<main role="main">
	<section class="features-section features-optimized">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<div class="features-video">
						<div class="video-thumb" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/features-video-thumbnail.png');">
							<div class="btn-wrapper">
								<button class="btn-play"><i class="zmdi zmdi-play-circle"></i></button>
							</div>
						</div>
					</div>
					<h2 class="section-title">We optimized — so you don’t have to.</h2>
				</div>
			</div>
		</div>
		<div class="lt-blue-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="features-wrapper">
							<div class="feature">
								<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
								<h3 class="feature-title">Optimized for social</h3>
								<div class="feature-description">
									<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.</p>
								</div>
							</div>
							<div class="feature">
								<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
								<h3 class="feature-title">Optimized for social</h3>
								<div class="feature-description">
									<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
								</div>
							</div>
							<div class="feature">
								<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
								<h3 class="feature-title">Optimized for social</h3>
								<div class="feature-description">
									<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="features-section features-everything">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h2 class="section-title">We thought of everything</h2>
					<div class="features-wrapper">
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="features-section section-grey features-easy-to-use">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h2 class="section-title">We made it easy to use</h2>
					<div class="features-wrapper">
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="features-section features-management">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h2 class="section-title">We take the pain out of management</h2>
					<div class="features-wrapper">
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
						<div class="feature">
							<span class="feature-icon"><i class="zmdi zmdi-calendar"></i></span>
							<h3 class="feature-title">Optimized for social</h3>
							<div class="feature-description">
								<p>Get noticed on the top social platforms. Our shareable events create the most visibility possible and increase traffic to your events calendars.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid">
		<div class="actions">
			<a href="#" class="btn btn-primary btn-action">Get started today</a>
		</div>
	</div>


	<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
