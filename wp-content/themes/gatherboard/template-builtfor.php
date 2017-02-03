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
					<?php if( have_rows('perfect_for_icons') ): ?>
					<?php while( have_rows('perfect_for_icons') ): the_row();
					// vars
					$icon_class = get_sub_field('built_for_icon_class');
					?>

					<i class="zmdi zmdi-hc-lg <?php echo $icon_class ?>"></i>

					<?php endwhile; ?>

					<?php endif; ?>
				</div>
				<a href="/sign-up/" class="btn btn-action">Get started</a>
			</div>
		</div>
	</div>
</div>

<main role="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="page-content">
							<?php the_content(); ?>
						</div>

						<?php if( have_rows('built_for_benefit_list') ): ?>

						<ul class="check-list">

							<?php while( have_rows('built_for_benefit_list') ): the_row();
							// vars
							$benefit = get_sub_field('benefit');
							?>

							<li><?php echo $benefit ?></li>

							<?php endwhile; ?>

						</ul>

						<?php endif; ?>

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
					<?php gravity_form(2, false, false, false, '', true); ?>
				</div>

			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
