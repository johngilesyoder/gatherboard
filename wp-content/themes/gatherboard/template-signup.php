<?php /* Template Name: Sign up */ get_header(); ?>

<main role="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<h1 class="page-title"><?php the_title(); ?></h1>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<?php the_content(); ?>

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

			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
