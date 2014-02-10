<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
  <?php $menu_font = of_get_option('ttrust_menu_font'); ?>
  <?php $heading_font = of_get_option('ttrust_heading_font'); ?>
  <?php $sub_heading_font = of_get_option('ttrust_sub_heading_font'); ?>
  <?php $body_font = of_get_option('ttrust_body_font'); ?>
  <?php $slideshow_heading_font = of_get_option('ttrust_slideshow_heading_font'); ?>
  <?php $slideshow_body_font = of_get_option('ttrust_slideshow_body_font'); ?>
  <?php $home_message_font = of_get_option('ttrust_home_message_font'); ?>

  <?php if ($menu_font != "") : ?>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($menu_font)); ?>:regular,italic,bold,bolditalic" />
  <?php endif; ?>
  <?php if ($heading_font != "") : ?>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($heading_font)); ?>:regular,italic,bold,bolditalic" />
  <?php endif; ?>
  <?php if ($sub_heading_font != "") : ?>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($sub_heading_font)); ?>:regular,italic,bold,bolditalic" />
  <?php endif; ?>
  <?php if ($body_font != "" && $body_font != $heading_font) : ?>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($body_font)); ?>:regular,italic,bold,bolditalic" />
  <?php endif; ?>
  <?php if ($slideshow_heading_font != "") : ?>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($slideshow_heading_font)); ?>:regular,italic,bold,bolditalic" />
  <?php endif; ?>
  <?php if ($slideshow_body_font != "") : ?>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($slideshow_body_font)); ?>:regular,italic,bold,bolditalic" />
  <?php endif; ?>
  <?php if ($home_message_font != "") : ?>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo(urlencode($home_message_font)); ?>:regular,italic,bold,bolditalic" />
  <?php endif; ?>


  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php if (of_get_option('ttrust_favicon') ) : ?>
    <link rel="shortcut icon" href="<?php echo of_get_option('ttrust_favicon'); ?>" />
  <?php endif; ?>

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div id="container">
<div id="header">
  <?php if(is_front_page() && of_get_option('ttrust_slideshow_enabled')) : ?>
  <div class="top">
    <?php get_template_part( 'part-slideshow'); ?>
  </div>
  <?php endif; ?>
  <div class="bottom">
  <div class="surround">
  <div class="inside clearfix">
    <?php $logoHeadTag = (is_front_page()) ? "h1" : "h3"; ?>
    <?php $ttrust_logo = of_get_option('logo'); ?>
    <div id="logo">
    <?php if($ttrust_logo) : ?>
      <<?php echo $logoHeadTag; ?> class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $ttrust_logo; ?>" alt="<?php bloginfo('name'); ?>" /></a></<?php echo $logoHeadTag; ?>>
    <?php else : ?>
      <<?php echo $logoHeadTag; ?>><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></<?php echo $logoHeadTag; ?>>
    <?php endif; ?>
    </div>

    <div id="mainNav" class="clearfix">
      <?php wp_nav_menu( array('menu_class' => 'sf-menu', 'theme_location' => 'main', 'fallback_cb' => 'default_nav' )); ?>
    </div>

  </div>

  </div>
  </div>
</div>

<?php if($header = get_post_meta($post->ID, 'header', true)) : ?>
  <div class="top">
      <img src="<?php echo($header) ?>" style="width: 100%; height: auto">
  </div>
<?php endif; ?>
