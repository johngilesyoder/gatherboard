<?php /* Template Name: About */ get_header();
$page_subtitle 							= get_field( "page_subtitle" );
$license_holders_background = get_field( "license_holders_background" );
$team_photo 								= get_field( "team_photo" );
?>

<div class="page-billboard" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h1><?php the_title(); ?></h1>
				<h2><?php echo $page_subtitle; ?></h2>
			</div>
		</div>
	</div>
</div>

<main role="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<section class="about-company">
						<h2 class="section-title">Company</h2>
						<div class="company-content">
							<?php the_content(); ?>
						</div>
						<div class="row">
							<div id="map-replacement" class="map-replacement" style="display: none;">
								<div class="col-md-12">
									<button id="map-toggle-close" class="btn-close"><i class="zmdi zmdi-close"></i>Close</button>
									<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/license-holders-map.png" alt="License Holders">
								</div>
							</div>
							<div id="company-photos" class="company-photos">
								<div class="col-sm-6 col-md-5">
									<div class="license-holders" style="background-image:url('<?php echo $license_holders_background['url']; ?>');">
										<p class="license-holders-content">
											Current GatherBoard license holders
											<button id="map-toggle-open">Click to view</button>
										</p>
									</div>
								</div>
								<div class="col-sm-6 col-md-7">
									<div class="company-photo" style="background-image:url('<?php echo $team_photo['url']; ?>');"></div>
								</div>
							</div>
						</div>
					</section>
					<section class="about-founders">
						<h2 class="section-title">Meet the founders</h2>


						<?php if( have_rows('founders') ): ?>

							<?php while( have_rows('founders') ): the_row();

								// vars
								$founder_name = get_sub_field('founder_name');
								$founder_description = get_sub_field('founder_description');
								$founder_photo = get_sub_field('founder_photo');

								?>

								<div class="founder">
									<div class="row">
										<div class="col-sm-3">
											<div class="founder-photo" style="background-image:url('<?php echo $founder_photo['url']; ?>');"></div>
										</div>
										<div class="col-sm-9">
											<span class="founder-name"><?php echo $founder_name; ?></span>
											<div class="founder-bio">
												<?php echo $founder_description; ?>
											</div>
										</div>
									</div>
								</div>

							<?php endwhile; ?>

						<?php endif; ?>

					</section>
					<section class="about-press">
						<h2 class="section-title">GatherBoard in the news</h2>

						<?php if( have_rows('media_press') ): ?>

							<?php while( have_rows('media_press') ): the_row();

								// vars
								$publication_name = get_sub_field('publication_name');
								$publication_icon = get_sub_field('publication_icon');
								$article_title = get_sub_field('article_title');
								$article_link = get_sub_field('article_link');
								?>

								<a href="<?php echo $article_link; ?>" class="press-piece">
									<span class="publication-logo" style="background-image:url('<?php echo $publication_icon['url']; ?>');"></span>
									<span class="press-details">
										<span class="press-publication"><?php echo $publication_name; ?></span>: <span class="article-title"><?php echo $article_title; ?></span>
									</span>
								</a>

							<?php endwhile; ?>

						<?php endif; ?>

					</section>

				<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</div>
	</div>

	<!-- Pays for itself -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/pays-for-itself' ); ?>

	<!-- Blog -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/blog-footer' ); ?>

</main>

<?php get_footer(); ?>
