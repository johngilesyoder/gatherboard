<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head <?php do_action( 'add_head_attributes' ); ?>>

    <!-- Title -->
    <!-- =================================== -->
    <title><?php wp_title(''); ?></title>

    <!-- Styles -->
    <!-- =================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Meta -->
    <!-- =================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Wordpress Generated -->
    <!-- =================================== -->
    <?php wp_head(); ?>

  </head>
  <?php if (is_home()) : ?>
    <body class="page-blog">
  <?php else: ?>
    <body <?php body_class(); ?>>
  <?php endif; ?>

    <!-- Google Analytics -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/analyticstracking' ); ?>

    <!-- Facebook -->
    <!-- =================================== -->
    <!-- <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '#############',
          xfbml      : true,
          version    : 'v2.6'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script> -->


    <!-- Navbar -->
    <!-- =================================== -->
    <?php
      if(
        is_page_template( 'template-home.php' ) ||
        is_page_template( 'template-about.php') ||
        is_page_template( 'template-features.php' ) ||
        is_page_template( 'template-builtfor.php' ) ||
        is_page_template( 'template-billboard.php' ) ||
        is_single() ||
        is_home() ||
        is_category()
      ):
    ?>
    <nav class="site-header navbar navbar-inverse has-billboard">
    <?php else : ?>
    <nav class="site-header navbar navbar-default">
    <?php endif; ?>
      <div class="container-fluid">
        <div class="border-wrapper">
          <div class="navbar-header">
            <!-- Mobile menu toggle -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Site logo -->
            <a class="navbar-brand" href="/">
              <?php if(is_page_template( 'template-home.php' )) : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-inverted.svg" alt="Gatherboard">
              <?php elseif(
                is_page_template( 'template-about.php') ||
                is_page_template( 'template-features.php' ) ||
                is_page_template( 'template-builtfor.php' ) ||
                is_page_template( 'template-billboard.php' ) ||
                is_single() ||
                is_home() ||
                is_category()
                ):
              ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-white.svg" alt="Gatherboard">
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo.svg" alt="Gatherboard">
              <?php endif; ?>
            </a>
          </div>
          <!-- Collect the nav links for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <?php primary_nav(); ?>
          </div>
        </div>
      </div>
    </nav>
