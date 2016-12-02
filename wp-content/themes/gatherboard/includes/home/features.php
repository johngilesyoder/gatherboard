<?php
  $home_section_three_title = get_field( "home_section_three_title", false, false );
?>

<section class="home-features">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <h2 class="section-title"><?php echo $home_section_three_title ?></h2>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
        <div class="features-wrapper">

          <?php if( have_rows('home_section_three_features') ): ?>

            <?php while( have_rows('home_section_three_features') ): the_row();

              // vars
              $home_feature_icon = get_sub_field('home_feature_icon');
              $home_feature_title = get_sub_field('home_feature_title');
              $home_feature_description = get_sub_field('home_feature_description');
              $home_feature_video_link = get_sub_field('home_feature_video_link');
              ?>

              <div class="feature">
                <span class="feature-icon"><i class="zmdi <?php echo $home_feature_icon; ?>"></i></span>
                <h3 class="feature-title"><?php echo $home_feature_title; ?></h3>
                <div class="feature-description">
                  <?php echo $home_feature_description; ?>
                  <?php if($home_feature_video_link) : ?>
                    <a href="#" class="video-link"><i class="zmdi zmdi-play"></i>Watch video</a>
                  <?php endif; ?>
                </div>
              </div>

            <?php endwhile; ?>

          <?php endif; ?>

        </div>
        <div class="actions">
          <a href="#" class="btn btn-primary">Get started</a>
          <a href="/features/" class="btn btn-link">View more features</a>
          <a href="#" class="btn btn-link btn-action-video" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php the_field('demo_video_embed_url', 'option'); ?>"><i class="zmdi zmdi-play"></i>Watch Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
