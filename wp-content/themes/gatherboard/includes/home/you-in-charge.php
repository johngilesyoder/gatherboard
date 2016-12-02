<?php
  $home_section_four_title = get_field( "home_section_four_title", false, false );
?>

<section class="home-you-in-charge">
  <div class="quotes">
    <div id="carousel-quotes" class="carousel slide">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <?php if( have_rows('home_quotes_carousel') ): ?>

          <?php $count = 0; ?>

          <?php while( have_rows('home_quotes_carousel') ): the_row();

            // vars
            $quotes_panel_background_photo = get_sub_field('quotes_panel_background_photo');
            $home_quote_author = get_sub_field('home_quote_author');
            $home_quote_author_organization = get_sub_field('home_quote_author_organization');
            $home_quote_text = get_sub_field('home_quote_text');

            ?>
            <?php if (!$count) : ?>
              <div class="item active" style="background-image: url('<?php echo $quotes_panel_background_photo['url']; ?>')">
            <?php else : ?>
              <div class="item" style="background-image: url('<?php echo $quotes_panel_background_photo['url']; ?>')">
            <?php endif; ?>
                <blockquote class="success-story-quote inverted">
                  <small>Success Story</small>
                  <?php echo $home_quote_text ?>
                  <footer><?php echo $home_quote_author ?> <cite><?php echo $home_quote_author_organization ?></cite></footer>
                </blockquote>
              </div>

            <?php $count++; ?>

          <?php endwhile; ?>

        <?php endif; ?>
        
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-quotes" data-slide="prev">
        <i class="zmdi zmdi-chevron-left"></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-quotes" data-slide="next">
        <i class="zmdi zmdi-chevron-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="check-list-wrapper">
    <div class="check-list">
      <h2 class="section-title"><?php echo $home_section_four_title ?></h2>
      <ul>

        <?php if( have_rows('home_section_four_benefit_list') ): ?>

          <?php while( have_rows('home_section_four_benefit_list') ): the_row();

            // vars
            $home_section_four_benefit = get_sub_field('home_section_four_benefit');

            ?>

            <li><?php echo $home_section_four_benefit ?></li>

          <?php endwhile; ?>

        <?php endif; ?>

      </ul>
    </div>
  </div>
</section>
