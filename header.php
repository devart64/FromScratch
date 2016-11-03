  <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>    
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if lt IE 9]-->
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>    
<?php wp_head(); ?>
  </head>
      <body>
      <div id="wrapper" class="container">
              <div id="header-nav">
          <h1><a href="<?php bloginfo("url"); ?>">Strasbourg</a></h1>
          
     <?php if (has_nav_menu('topmenu')) : ?>
      <nav role="navigation" id="topmenu">
        <?php wp_nav_menu(array('theme_location' => 'topmenu')); ?>
      </nav>
   <?php endif; ?>
    
<div id="header">
    <div class="inner clearfix">
        <?php if (get_header_image()) : ?>
        <a id="maison" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header() ->width; ?>" height="<?php echo get_custom_header() ->height; ?>" alt="<?php bloginfo('name' )?>">       
        </a>
        <?php endif; ?>
        <?php if (is_active_sidebar('header')) : ?>
            <div id="headerwidget">
                <?php dynamic_sidebar('header'); ?>
            </div>
        <?php endif; ?>
    </div>
  </div>
</div>


<div id="main">


