<?php get_header();
  $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
  $featured_image = $img[0];
?>

<div class="page-billboard" style="background-image: url('<?php echo $featured_image ?>');">
	<div class="container-fluid">
		<h1>GatherBoard Blog</h1>
		<h2>Bring your community together</h2>
	</div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			<div class="row">
				<div class="col-md-9">
					<main role="main">

						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="post-details">
									<?php the_category(); ?>
	                <h1 class="post-title"><?php the_title(); ?></h1>
									<div class="clearfix">
		                <div class="post-meta">
		                  <span class="author">by <?php the_author(); ?></span> &bull;
		                  <span class="date"><?php the_time('F j, Y'); ?></span>
		                </div>
										<div class="post-share">
		                  <div class="share-facebook">
		                    <div class="fb-like" data-width="80" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
		                  </div>
		                  <div class="share-twitter">
		                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		                  </div>
		                  <div class="share-pinterest">
		                    <a href="https://www.pinterest.com/pin/create/button/">
		                      <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
		                    </a>
		                  </div>
										</div>
	                </div>
								</div>


								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<div class="post-img" title="<?php the_title(); ?>" style="background-image:url('<?php the_post_thumbnail_url( full ); ?>');"></div>
								<?php endif; ?>

                <div class="post-content">
								  <?php the_content(); // Dynamic Content ?>
                </div>

								<div class="post-author">
                  <div class="row">
                    <div class="col-sm-2">
                      <div class="author-photo" style="background-image:url('<?php echo get_avatar_url(get_the_author_meta( 'user_email' )); ?>');"></div>
                    </div>
                    <div class="col-sm-10">
									    <h4>About the Author</h4>
									    <?php the_author_description(); ?>
                    </div>
                  </div>
                </div>

                <div class="post-share-bottom">
                  <strong>Share this article</strong>
                  <div class="share-facebook">
                    <div class="fb-like" data-width="80" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                  </div>
                  <div class="share-twitter">
                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                  </div>
                  <div class="share-pinterest">
                    <a href="https://www.pinterest.com/pin/create/button/">
                      <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
                    </a>
                  </div>
                </div>

								<?php //comments_template(); ?>

							</article>

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

							</article>
							<!-- /article -->

						<?php endif; ?>

					</main>
				</div>
				<div class="col-md-3">

					<?php get_sidebar(); ?>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Pays for itself -->
<!-- =================================== -->
<?php get_template_part( 'includes/pays-for-itself' ); ?>

<?php get_footer(); ?>
