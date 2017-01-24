<section class="home-in-action">
  <h2 class="section-title">See GatherBoard in Action</h2>
  <div class="circles-wrapper in-action-carousel">

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
</section>
