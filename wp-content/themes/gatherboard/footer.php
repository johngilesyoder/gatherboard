      <footer class="site-footer" role="contentinfo">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-md-5">
                  <div class="footer-about">
                    <p>
                      GatherBoard is a responsive website calendar with customization and monetizing options. Great for clubs, resorts, tourism regions, retirement communities, churches and festivals. Enhanced publishing features make this a more powerful calendar. Advanced design with cities, media, corporate/hospital campuses, school districts and universities in mind.
                    </p>
                  </div>
                </div>
                <div class="col-md-2 col-md-offset-1">
                  <nav class="links-column">
                    <?php footer_menu_1(); ?>
                  </nav>
                </div>
                <div class="col-md-2">
                  <nav class="links-column">
                    <?php footer_menu_2(); ?>
                  </nav>
                </div>
                <div class="col-md-2">
                  <nav class="links-column">
                    <?php footer_menu_3(); ?>
                  </nav>
                </div>
              </div>
              <div class="footer-bottom">
                <div class="row">
                  <div class="col-md-6">
                    <div class="footer-copyright">
                      <p>&copy; Gatherboard <?php echo date('Y'); ?>. All rights reserved.</p>
                      <ul>
                        <li><a href="">Terms</a></li>
                        <li><a href="">Privacy</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <ul class="footer-social">
                      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-facebook.svg" alt="Visit us on Facebook"></a></li>
                      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-twitter.svg" alt="Visit us on Twitter"></a></li>
                      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-pinterest.svg" alt="Visit us on Pinterest"></a></li>
                      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-youtube.svg" alt="Visit us on Youtube"></a></li>
                      <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-google-plus.svg" alt="Visit us on Google+"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>

		<?php wp_footer(); ?>

	</body>
</html>
