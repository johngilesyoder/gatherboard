<?php /* Template Name: About */ get_header();
$page_subtitle = get_field( "page_subtitle" );
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
							<div class="col-md-5">
								<div class="license-holders" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/license-holders-bg.png');">
									<p class="license-holders-content">
										Current GatherBoard license holders
										<a href="#">Click to view</a>
									</p>
								</div>
							</div>
							<div class="col-md-7">
								<div class="company-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/company-photo.png');"></div>
							</div>
						</div>
					</section>
					<section class="about-founders">
						<h2 class="section-title">Meet the founders</h2>
						<div class="founder">
							<div class="row">
								<div class="col-md-3">
									<div class="founder-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/founder-colin.png');"></div>
								</div>
								<div class="col-md-9">
									<span class="founder-name">Colin Hickey</span>
									<div class="founder-bio">
										<p>Colin was a local rock and roll legend, coming off a long stint as the front man for the International Playboys and promoting music in Missoula.  What he noticed was that all too often bands of the same genre would play on the same night, resulting in competing audiences at both gigs - bad for bands, bad for bars, bad for the audience, bad for promoters… So he decided to start a free community events calendar - GardenCityEvents.net…. it was good for everyone. In 2005, the site morphed into MissoulaEvents.net, and by 2013, GatherBoard was born. To date, Colin has approved approximately 100,000 events on MissoulaEvents.net.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="founder">
							<div class="row">
								<div class="col-md-3">
									<div class="founder-photo" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/founder-molly.png');"></div>
								</div>
								<div class="col-md-9">
									<span class="founder-name">Molly Bradford</span>
									<div class="founder-bio">
										<p>For nearly 15 years, Molly Bradford has been involved in sales and marketing in the greater-Missoula area, working with 500+ small business on successful marketing and advertising strategies.  Through her roles at local businesses and on local volunteer boards, she has delicately guided customers, and even her employers, through grand openings, moves, promotional events, sales and closures. Since coming on board as co-owner with Colin in 2009 she has co-created GatherBoard and upped the bottom line over 600%.</p>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="about-press">
						<h2 class="section-title">GatherBoard in the news</h2>
						<div class="row">
							<div class="col-md-6">
								<a href="#" class="press-piece">
									<span class="publication-logo" style="background-image:url('http://placehold.it/100x100');"></span>
									<span class="press-details">
										<span class="press-publication">Mamalode</span>: <span class="article-title">Starter Series - GatherBoard</span>
									</span>
								</a>
							</div>
							<div class="col-md-6">
								<a href="#" class="press-piece">
									<span class="publication-logo" style="background-image:url('http://placehold.it/100x100');"></span>
									<span class="press-details">
										<span class="press-publication">Mamalode</span>: <span class="article-title">Starter Series - GatherBoard</span>
									</span>
								</a>
							</div>
							<div class="col-md-6">
								<a href="#" class="press-piece">
									<span class="publication-logo" style="background-image:url('http://placehold.it/100x100');"></span>
									<span class="press-details">
										<span class="press-publication">Mamalode</span>: <span class="article-title">Starter Series - GatherBoard</span>
									</span>
								</a>
							</div>
							<div class="col-md-6">
								<a href="#" class="press-piece">
									<span class="publication-logo" style="background-image:url('http://placehold.it/100x100');"></span>
									<span class="press-details">
										<span class="press-publication">Mamalode</span>: <span class="article-title">Starter Series - GatherBoard</span>
									</span>
								</a>
							</div>
							<div class="col-md-6">
								<a href="#" class="press-piece">
									<span class="publication-logo" style="background-image:url('http://placehold.it/100x100');"></span>
									<span class="press-details">
										<span class="press-publication">Mamalode</span>: <span class="article-title">Starter Series - GatherBoard</span>
									</span>
								</a>
							</div>
							<div class="col-md-6">
								<a href="#" class="press-piece">
									<span class="publication-logo" style="background-image:url('http://placehold.it/100x100');"></span>
									<span class="press-details">
										<span class="press-publication">Mamalode</span>: <span class="article-title">Starter Series - GatherBoard</span>
									</span>
								</a>
							</div>
							<div class="col-md-6">
								<a href="#" class="press-piece">
									<span class="publication-logo" style="background-image:url('http://placehold.it/100x100');"></span>
									<span class="press-details">
										<span class="press-publication">Mamalode</span>: <span class="article-title">Starter Series - GatherBoard</span>
									</span>
								</a>
							</div>
						</div>
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
