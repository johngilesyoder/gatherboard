<?php
  $home_section_five_title = get_field( "home_section_five_title", false, false );
  $home_success_story_author = get_field( "home_success_story_author", false, false );
  $home_success_story_author_organization = get_field( "home_success_story_author_organization", false, false );
  $home_success_story_quote = get_field( "home_success_story_quote", false, false );
  $home_success_story_author_photo = get_field( "home_success_story_author_photo" );
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



          <div id="carousel-success-stories" class="carousel slide">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <?php if( have_rows('home_success_stories') ): ?>

                <?php $count = 0; ?>

                <?php while( have_rows('home_success_stories') ): the_row();

                  // vars
                  $home_success_story_author              = get_sub_field('home_success_story_author');
                  $home_success_story_author_organization = get_sub_field('home_success_story_author_organization');
                  $home_success_story_quote               = get_sub_field('home_success_story_quote');
                  $home_success_story_author_photo        = get_sub_field('home_success_story_author_photo');

                  ?>

                  <?php if (!$count) : ?>
                    <div class="user-story item active">
                  <?php else : ?>
                    <div class="user-story item">
                  <?php endif; ?>
                      <div class="row">
                        <div class="col-sm-2">
                          <div class="quote-img" style="background-image:url('<?php echo $home_success_story_author_photo['url']; ?>');">
                          </div>
                        </div>
                        <div class="col-sm-10">
                          <blockquote class="success-story-quote">
                            <small>Success Story</small>
                            <?php echo $home_success_story_quote; ?>
                            <footer><?php echo $home_success_story_author; ?> <cite><?php echo $home_success_story_author_organization; ?></cite></footer>
                          </blockquote>
                        </div>
                      </div>
                    </div>

                  <?php $count++; ?>

                <?php endwhile; ?>

              <?php endif; ?>

            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <?php if( have_rows('home_success_stories') ): ?>

                <?php $count = 0; ?>

                <?php while( have_rows('home_success_stories') ): the_row(); ?>

                  <?php if (!$count) : ?>
                    <li data-target="#carousel-success-stories" data-slide-to="<?php echo $count ?>" class="active"></li>
                  <?php else : ?>
                    <li data-target="#carousel-success-stories" data-slide-to="<?php echo $count ?>"></li>
                  <?php endif; ?>

                  <?php $count++; ?>

                <?php endwhile; ?>

              <?php endif; ?>
            </ol>
          </div>



















          <div class="ready" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/img/team-bg.png');">
            <div class="row">
              <div class="col-lg-8 col-md-6">
                <p>
                  <strong>Ready to get started?</strong>
                  Replacing your current event calendar couldn’t be easier.
                </p>
                <div class="actions">
                  <a href="/sign-up/" class="btn btn-primary btn-action">Get started now</a>
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
