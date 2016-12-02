<div class="container-fluid">
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
      <section class="blog-footer">
        <h3>On the blog <a href="/blog/"><i class="zmdi zmdi-chevron-right"></i>View all</a></h3>
        <div class="row">

          <?php query_posts( 'posts_per_page=2' ); ?>

            <?php get_template_part('loop-blogfooter'); ?>

          <?php wp_reset_query(); ?>

        </div>
      </section>
    </div>
  </div>
</div>
