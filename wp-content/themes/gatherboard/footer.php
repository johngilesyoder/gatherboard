      <footer class="site-footer" role="contentinfo">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-md-5">
                  <div class="footer-about">
                    <?php the_field('footer_seo_block', 'option'); ?>
                  </div>
                </div>
                <div class="col-xs-4 col-md-2 col-md-offset-1">
                  <nav class="links-column">
                    <?php footer_menu_1(); ?>
                  </nav>
                </div>
                <div class="col-xs-4 col-md-2">
                  <nav class="links-column">
                    <?php footer_menu_2(); ?>
                  </nav>
                </div>
                <div class="col-xs-4 col-md-2">
                  <nav class="links-column">
                    <?php footer_menu_3(); ?>
                  </nav>
                </div>
              </div>
              <div class="footer-bottom">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="footer-copyright">
                      <p>&copy; Gatherboard <?php echo date('Y'); ?>. All rights reserved.</p>
                      <ul>
                        <li><a href="/terms-of-use/">Terms</a></li>
                        <li><a href="/privacy-policy">Privacy</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-4">
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

      <div class="modal fade modal-video" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div>
                        <iframe width="100%" height="450" src="" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<?php wp_footer(); ?>

    <script id="dsq-count-scr" src="//gatherboard.disqus.com/count.js" async></script>
	</body>
</html>
