<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="col-sm-6">
		<article>
			<div class="row">
				<div class="col-sm-3">
					<div class="article-img" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>')"></div>
				</div>
				<div class="col-sm-9">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<div class="excerpt">
						<?php the_excerpt(); ?>
				</div>
			</div>
		</article>
	</div>

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
