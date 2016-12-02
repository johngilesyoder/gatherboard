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
            'include'            => array( 9, 10, 11 ),
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
              <div class="row">

                <?php get_template_part('loop'); ?>

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
