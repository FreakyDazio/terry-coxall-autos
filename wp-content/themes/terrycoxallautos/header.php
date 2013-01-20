<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="wrapper">

    <header class="primary" role="banner">
      <div class="container">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p class="description"><?php bloginfo('description'); ?></p>
        <div class="fb-like" data-href="https://www.facebook.com/terrycoxallautorepairs" data-send="false" data-width="450" data-show-faces="false" data-action="recommend" data-colorscheme="dark" data-font="arial"></div>
        <nav class="primary" role="navigation">
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
      </div>
    </header>
