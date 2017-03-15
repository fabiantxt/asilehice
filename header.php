<!DOCTYPE HTML>
<html class="no-js" lang="es">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
    <?php
      global $page, $paged;
      wp_title( '|', true, 'right' );
      bloginfo( 'name' );
      $site_description = get_bloginfo( 'description', 'display' );
      if ( $site_description && ( is_home() || is_front_page() ) )
      echo " | $site_description";
      if ( $paged >= 2 || $page >= 2 )
      echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
      ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo(template_url); ?>/favicon.png"/>
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/style.css">
    <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/css/animate.css">

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Begin FB Sharing for WP -->
    <?php
      $thumb = get_post_meta($post->ID,'_thumbnail_id',false);
      $thumb = wp_get_attachment_image_src($thumb[0], false);
      $thumb = $thumb[0];
      $default_img = get_bloginfo('stylesheet_directory').'/screenshot.png';
    ?>

    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:locale" content="es_MX" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:url" content="<?php bloginfo('url'); ?>"/>
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/screenshot.png" />

    <!-- End FB Sharing for WP -->

  </head>
  
  <body>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_MX/sdk.js#xfbml=1&version=v2.8&appId=260201560670298";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header>
      <div class="container">
        <a href="<?php bloginfo(url); ?>"><h1>/* así le hice */</h1></a>
        <div class="search"><img src="<?php bloginfo(template_url); ?>/img/search.svg"></img></div>
      </div>
    </header>