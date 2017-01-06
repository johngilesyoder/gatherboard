<section class="home-in-action">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
        <h2 class="section-title">See GatherBoard in Action</h2>
        <div class="circles-wraper">

          <?php if( have_rows('in_action_bubbles') ): ?>
          <?php while( have_rows('in_action_bubbles') ): the_row();
          // vars
          $bubble_photo = get_sub_field('bubble_photo');
          $bubble_location = get_sub_field('bubble_location');
          $bubble_link = get_sub_field('bubble_link');
          ?>

          <a href="<?php echo $bubble_link ?>" class="action-circle" style="background-image: url('<?php echo $bubble_photo['url']; ?>');">
            <span class="circle-location"><?php echo $bubble_location ?></span>
          </a>

          <?php endwhile; ?>

          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>
