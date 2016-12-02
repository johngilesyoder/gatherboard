<?php
  $home_section_two_title = get_field( "home_section_two_title", false, false );
?>

<section class="home-next-level">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-6">
        <h2 class="section-title"><?php echo $home_section_two_title ?></h2>
        <ul class="check-list">

          <?php if( have_rows('home_section_two_benefit_list') ): ?>

            <?php while( have_rows('home_section_two_benefit_list') ): the_row();

              // vars
              $home_section_two_benefit = get_sub_field('home_section_two_benefit');

              ?>

              <li><?php echo $home_section_two_benefit ?></li>

            <?php endwhile; ?>

          <?php endif; ?>

        </ul>
        <div class="actions">
          <a href="http://www.google.com" class="btn btn-primary">Get started</a>
          <a href="/features/" class="btn btn-link">Learn more</a>
          <a href="#" class="btn btn-link btn-action-video" data-toggle="modal" data-target="#videoModal" data-theVideo="<?php the_field('demo_video_embed_url', 'option'); ?>"><i class="zmdi zmdi-play"></i>Watch Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
