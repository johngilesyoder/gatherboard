<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<?php

	// Get the ID of a given category
	$category_id = get_cat_ID( 'Category Name' );

	// Get the URL of this category
	$category_link = get_category_link( $category_id );

?>

	<?php if ( is_first_post() ) : ?>
		<div class="col-md-12">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" class="post-img" title="<?php the_title(); ?>" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>');"></a>
				<?php endif; ?>
				<div class="post-details">
					<a href="<?php echo esc_url( $category_link ); ?>" class="post-category"><?php the_category(); ?></a>
					<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="post-meta">
						<span class="author">by <?php the_author(); ?></span> &bull;
						<span class="date"><?php the_time('F j, Y'); ?></span>
					</div>
				</div>
			</article>
		</div>
	<?php else : ?>
		<div class="col-sm-6">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail()) : ?>
					<a href="<?php the_permalink(); ?>" class="post-img" title="<?php the_title(); ?>" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>');"></a>
				<?php endif; ?>
				<div class="post-details">
					<a href="<?php echo esc_url( $category_link ); ?>" class="post-category"><?php the_category(); ?></a>
					<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="post-meta">
						<span class="author">by <?php the_author(); ?></span> &bull;
						<span class="date"><?php the_time('F j, Y'); ?></span>
					</div>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
