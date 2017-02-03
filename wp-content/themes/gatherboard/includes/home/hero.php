<?php
  $hero_statement_text = get_field( "hero_statement_text", false, false );
?>

<section class="home-hero">
  <div id="event-bg" class="carousel carousel-fade slide">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <?php if( have_rows('hero_panels') ): ?>

        <?php $count = 0; ?>

        <?php while( have_rows('hero_panels') ): the_row();

          // vars
          $hero_event_photo = get_sub_field('hero_event_photo');

          ?>
          <?php if (!$count) : ?>
            <div class="item event-bg-wrapper active">
          <?php else : ?>
            <div class="item event-bg-wrapper">
          <?php endif; ?>
              <div class="hero-event-bg" style="background-image: url('<?php echo $hero_event_photo['url']; ?>');"></div>
            </div>

          <?php $count++; ?>

        <?php endwhile; ?>

      <?php endif; ?>

    </div>
  </div>

  <div class="hero-statement-wrapper">
    <div class="hero-statement">
      <h2><?php echo $hero_statement_text ?></h2>
      <div class="hero-actions">
        <a href="/sign-up/" class="btn btn-action">Get Started</a>
        <a href="#" class="btn btn-action btn-action-video" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php the_field('demo_video_embed_url', 'option'); ?>"><i class="zmdi zmdi-play"></i> Watch Demo</a>
      </div>
    </div>
  </div>
  <div class="featured-events-wrapper">
    <div class="featured-events-carousel-wrapper">
      <div id="featured-events" class="carousel carousel-fade slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <?php if( have_rows('hero_panels') ): ?>

            <?php $count = 0; ?>

            <?php while( have_rows('hero_panels') ): the_row();

              // vars
              $hero_event_title = get_sub_field('hero_event_title');
              $hero_event_location = get_sub_field('hero_event_location');

              ?>
              <?php if (!$count) : ?>
                <div class="item featured-event active">
              <?php else : ?>
                <div class="item featured-event">
              <?php endif; ?>
                  <span class="event-title"><i class="zmdi zmdi-calendar"></i> <?php echo $hero_event_title ?></span>
                  <span class="event-location"><?php echo $hero_event_location ?></span>
                </div>

              <?php $count++; ?>

            <?php endwhile; ?>

          <?php endif; ?>


        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <?php if( have_rows('hero_panels') ): ?>

            <?php $count = 0; ?>

            <?php while( have_rows('hero_panels') ): the_row(); ?>

              <?php if (!$count) : ?>
                <li data-target="#carousel-events" data-slide-to="<?php echo $count ?>" class="active"></li>
              <?php else : ?>
                <li data-target="#carousel-events" data-slide-to="<?php echo $count ?>"></li>
              <?php endif; ?>

              <?php $count++; ?>

            <?php endwhile; ?>

          <?php endif; ?>

        </ol>
      </div>
    </div>
  </div>
  </div>


</section>
