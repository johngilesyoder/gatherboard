<?php /* Template Name: Features */ get_header();
$page_subtitle 										= get_field( "page_subtitle" );
$video_thumbnail 									= get_field( "video_thumbnail" );
$features_video_url 							= get_field( "features_video_url" );
$features_section_one_title 			= get_field( "features_section_one_title" );
$features_section_two_title 			= get_field( "features_section_two_title" );
$features_section_three_title 		= get_field( "features_section_three_title" );
$features_section_four_title 			= get_field( "features_section_four_title" );
?>

<div class="page-billboard" style="background-image: url('<?php the_post_thumbnail_url( full ); ?>');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h1><?php the_title(); ?></h1>
				<h2><?php echo $page_subtitle; ?></h2>
				<a href="/sign-up/" class="btn btn-action">Get started</a>
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
						<div class="video-thumb" style="background-image:url('<?php echo $video_thumbnail['url']; ?>');">
							<div class="btn-wrapper">
								<button class="btn-play" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php the_field('demo_video_embed_url', 'option'); ?>"><i class="zmdi zmdi-play-circle"></i></button>
							</div>
						</div>
					</div>
					<h2 class="section-title"><?php echo $features_section_one_title; ?></h2>
				</div>
			</div>
		</div>
		<div class="lt-blue-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="features-wrapper">

							<?php if( have_rows('section_one_features') ): ?>

								<?php while( have_rows('section_one_features') ): the_row();

									// vars
									$section_one_feature_icon = get_sub_field('section_one_feature_icon');
									$section_one_feature_title = get_sub_field('section_one_feature_title');
									$section_one_feature_description = get_sub_field('section_one_feature_description');
									$section_one_feature_video_link = get_sub_field('section_one_feature_video_link');
									$highlight_feature = get_sub_field('highlight_feature');
									?>

									<div class="feature <?php if( $highlight_feature ): ?>highlight<?php endif; ?>">

										<span class="feature-icon"><i class="zmdi <?php echo $section_one_feature_icon; ?>"></i></span>
										<h3 class="feature-title"><?php if( $highlight_feature ): ?><i class="zmdi zmdi-star"></i> <?php endif; ?><?php echo $section_one_feature_title; ?></h3>
										<div class="feature-description">
											<?php echo $section_one_feature_description; ?>
											<?php if($section_one_feature_video_link) : ?>
		                    <a href="#" class="video-link" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo $section_one_feature_video_link ?>"><i class="zmdi zmdi-play"></i>Watch video</a>
		                  <?php endif; ?>
										</div>
									</div>

								<?php endwhile; ?>

							<?php endif; ?>

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
					<h2 class="section-title"><?php echo $features_section_two_title; ?></h2>
					<div class="features-wrapper">

						<?php if( have_rows('section_two_features') ): ?>

							<?php while( have_rows('section_two_features') ): the_row();

								// vars
								$section_two_feature_icon = get_sub_field('section_two_feature_icon');
								$section_two_feature_title = get_sub_field('section_two_feature_title');
								$section_two_feature_description = get_sub_field('section_two_feature_description');
								$section_two_feature_video_link = get_sub_field('section_two_feature_video_link');
								$highlight_feature = get_sub_field('highlight_feature');
								?>

								<div class="feature <?php if( $highlight_feature ): ?>highlight<?php endif; ?>">
									<span class="feature-icon"><i class="zmdi <?php echo $section_two_feature_icon; ?>"></i></span>
									<h3 class="feature-title"><?php if( $highlight_feature ): ?><i class="zmdi zmdi-star"></i> <?php endif; ?><?php echo $section_two_feature_title; ?></h3>
									<div class="feature-description">
										<?php echo $section_two_feature_description; ?>
										<?php if($section_two_feature_video_link) : ?>
	                    <a href="#" class="video-link" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo $section_two_feature_video_link ?>"><i class="zmdi zmdi-play"></i>Watch video</a>
	                  <?php endif; ?>
									</div>
								</div>

							<?php endwhile; ?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="features-section section-grey features-easy-to-use">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h2 class="section-title"><?php echo $features_section_three_title; ?></h2>
					<div class="features-wrapper">

						<?php if( have_rows('section_three_features') ): ?>

							<?php while( have_rows('section_three_features') ): the_row();

								// vars
								$section_three_feature_icon = get_sub_field('section_three_feature_icon');
								$section_three_feature_title = get_sub_field('section_three_feature_title');
								$section_three_feature_description = get_sub_field('section_three_feature_description');
								$section_three_feature_video_link = get_sub_field('section_three_feature_video_link');
								$highlight_feature = get_sub_field('highlight_feature');
								?>

								<div class="feature <?php if( $highlight_feature ): ?>highlight<?php endif; ?>">
									<span class="feature-icon"><i class="zmdi <?php echo $section_three_feature_icon; ?>"></i></span>
									<h3 class="feature-title"><?php if( $highlight_feature ): ?><i class="zmdi zmdi-star"></i> <?php endif; ?><?php echo $section_three_feature_title; ?></h3>
									<div class="feature-description">
										<?php echo $section_three_feature_description; ?>
										<?php if($section_three_feature_video_link) : ?>
	                    <a href="#" class="video-link" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo $section_three_feature_video_link ?>"><i class="zmdi zmdi-play"></i>Watch video</a>
	                  <?php endif; ?>
									</div>
								</div>

							<?php endwhile; ?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="features-section features-management">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<h2 class="section-title"><?php echo $features_section_four_title; ?></h2>
					<div class="features-wrapper">
						<?php if( have_rows('section_four_features') ): ?>

							<?php while( have_rows('section_four_features') ): the_row();

								// vars
								$section_four_feature_icon = get_sub_field('section_four_feature_icon');
								$section_four_feature_title = get_sub_field('section_four_feature_title');
								$section_four_feature_description = get_sub_field('section_four_feature_description');
								$section_four_feature_video_link = get_sub_field('section_four_feature_video_link');
								$highlight_feature = get_sub_field('highlight_feature');
								?>

								<div class="feature <?php if( $highlight_feature ): ?>highlight<?php endif; ?>">
									<span class="feature-icon"><i class="zmdi <?php echo $section_four_feature_icon; ?>"></i></span>
									<h3 class="feature-title"><?php if( $highlight_feature ): ?><i class="zmdi zmdi-star"></i> <?php endif; ?><?php echo $section_four_feature_title; ?></h3>
									<div class="feature-description">
										<?php echo $section_four_feature_description; ?>
										<?php if($section_four_feature_video_link) : ?>
	                    <a href="#" class="video-link" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php echo $section_four_feature_video_link ?>"><i class="zmdi zmdi-play"></i>Watch video</a>
	                  <?php endif; ?>
									</div>
								</div>

							<?php endwhile; ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container-fluid">
		<div class="actions">
			<a href="/sign-up/" class="btn btn-primary btn-action">Get started today</a>
		</div>
	</div>


	<?php endwhile; ?>

	<?php endif; ?>

</main>

<?php get_footer(); ?>
