<?php
  $home_hero_title = get_field( "home_hero_title", false, false );
?>

<section class="home-hero">
  <div id="event-bg" class="carousel carousel-fade slide">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item event-bg-wrapper active">
        <div class="hero-event-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg-1.png');"></div>
      </div>
      <div class="item event-bg-wrapper">
        <div class="hero-event-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg-1.png');"></div>
      </div>
      <div class="item event-bg-wrapper">
        <div class="hero-event-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg-1.png');"></div>
      </div>
    </div>
  </div>

  <div class="hero-statement-wrapper">
    <div class="hero-statement">
      <h2>The only event calendar platform designed to <strong>unite</strong> &amp; <strong>strengthen</strong> communities.</h2>
      <div class="hero-actions">
        <a href="#" class="btn btn-action">Get Started</a>
        <a href="#" class="btn btn-action"><i class="zmdi zmdi-play"></i> Watch Video</a>
      </div>
    </div>
  </div>
  <div class="featured-events-wrapper">
    <div class="featured-events-carousel-wrapper">
      <div id="featured-events" class="carousel carousel-fade slide">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item featured-event active">
            <span class="event-title"><i class="zmdi zmdi-calendar"></i> Brewfest Festival</span>
            <span class="event-location">Missoula, Montana</span>
          </div>
          <div class="item featured-event">
            <span class="event-title"><i class="zmdi zmdi-calendar"></i> Toots</span>
            <span class="event-location">Missoula, Montana</span>
          </div>
          <div class="item featured-event">
            <span class="event-title"><i class="zmdi zmdi-calendar"></i> McGoots</span>
            <span class="event-location">Missoula, Montana</span>
          </div>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-events" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-events" data-slide-to="1"></li>
          <li data-target="#carousel-events" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
  </div>
  </div>


</section>
