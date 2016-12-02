<?php
  $home_section_five_title = get_field( "home_section_five_title", false, false );
?>

<section class="home-built-for">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
        <h2 class="section-title"><?php echo $home_section_five_title ?></h2>
      </div>
    </div>
  </div>

  <div class="built-for-types">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-offset-1 col-md-10">
          <div class="row">

            <?php if( have_rows('demographic_types') ): ?>
  					<?php while( have_rows('demographic_types') ): the_row();
  					// vars
  					$demographic_title = get_sub_field('demographic_title');
            $demographic_image = get_sub_field('demographic_image');
            $demographic_link = get_sub_field('demographic_link');
  					?>

            <div class="col-md-12 col-lg-6">
              <div class="type">
                <div class="type-image" style="background-image:url('<?php echo $demographic_image['url']; ?>');"></div>
                <div class="type-details">
                  <h4><?php echo $demographic_title ?></h4>
                  <ul>
                    <?php if( have_rows('sub_demographics') ): ?>
          					<?php while( have_rows('sub_demographics') ): the_row();
          					// vars
          					$sub_demographic = get_sub_field('sub-demographic');
          					?>

                    <li><?php echo $sub_demographic ?></li>

          					<?php endwhile; ?>

          					<?php endif; ?>

                  </ul>
                  <a href="<?php echo $demographic_link ?>" class="btn btn-link type-link"><i class="zmdi zmdi-chevron-right"></i> See more</a>
                </div>
              </div>
            </div>

  					<?php endwhile; ?>

  					<?php endif; ?>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="built-for-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-offset-1 col-md-10">
          <div class="user-story">
            <div class="row">
              <div class="col-sm-2">
                <div class="quote-img" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/quote-author.png');">
                </div>
              </div>
              <div class="col-sm-10">
                <blockquote class="success-story-quote">
                  <small>Success Story</small>
                  <p>&ldquo;Maecenas faucibus mollis interdum. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.&rdquo;</p>
                  <footer>Sarah Connor <cite>Small Business Owner</cite></footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="ready" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/team-bg.png');">
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <p>
                  <strong>Ready to get started?</strong>
                  Replacing your current event calendar couldn’t be easier.
                </p>
                <div class="actions">
                  <a href="#" class="btn btn-primary btn-action">Get started now</a>
                  <a href="#" class="btn btn-link btn-action" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php the_field('demo_video_embed_url', 'option'); ?>"><i class="zmdi zmdi-play"></i>Watch demo now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
