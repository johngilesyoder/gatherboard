<?php get_header();
  $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
  $featured_image = $img[0];
?>

<div class="page-billboard" style="background-image: url('<?php echo $featured_image ?>');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h1>GatherBoard Blog</h1>
				<h2>Bring your community together</h2>
			</div>
		</div>
	</div>
</div>

<div class="categories">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
        <ul class="blog-categories">
          <?php if(is_home()) : ?>
            <li class="cat-item current-cat"><a href="/blog/">All</a></li>
          <?php else : ?>
            <li class="cat-item"><a href="/blog/">All</a></li>
          <?php endif; ?>
          <?php wp_list_categories( array(
            'orderby'            => 'name',
            'include'            => array( 6, 7, 8 ),
            'hide_empty'         => 0,
            'title_li'           => '',
          ) ); ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
      <div class="row">
        <div class="col-md-9">
          <main role="main">
        		<section class="blog-roll">
        			<?php //get_template_part('loop'); ?>
              <div class="row">
                <div class="col-md-6">
                  <article>
                    <a href="#" class="post-img" style="background-image:url('http://placehold.it/400x400')"></a>
                    <div class="post-details">
                      <a href="#" class="post-category">Resources</a>
                      <h3 class="post-title"><a href="#">How to Focus Better and Get In the Zone</a></h3>
                      <div class="post-meta">
                        <span class="author">by Colin Hickey</span> &bull;
                        <span class="date">October 9, 2016</span>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <article>
                    <a href="#" class="post-img" style="background-image:url('http://placehold.it/400x400')"></a>
                    <div class="post-details">
                      <a href="#" class="post-category">Resources</a>
                      <h3 class="post-title"><a href="#">8 Ways GatherBoard Can Help You Make Your First Sale</a></h3>
                  		<div class="post-meta">
                        <span class="author">by Molly Bradford</span> &bull;
                        <span class="date">October 2, 2016</span>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <article>
                    <a href="#" class="post-img" style="background-image:url('http://placehold.it/400x400')"></a>
                    <div class="post-details">
                      <a href="#" class="post-category">Articles</a>
                      <h3 class="post-title"><a href="#">Board Member Spotlight - WSSAreaEvents</a></h3>
                      <div class="post-meta">
                        <span class="author">by Molly Bradford</span> &bull;
                        <span class="date">September 23, 2016</span>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-md-6">
                  <article>
                    <a href="#" class="post-img" style="background-image:url('http://placehold.it/400x400')"></a>
                    <div class="post-details">
                      <a href="#" class="post-category">Resources</a>
                      <h3 class="post-title"><a href="#">How do I start a community?</a></h3>
                      <div class="post-meta">
                        <span class="author">by Molly Bradford</span> &bull;
                        <span class="date">September 15, 2016</span>
                      </div>
                    </div>
                  </article>
                </div>
              </div>


        		</section>

            <?php get_template_part('pagination'); ?>

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
