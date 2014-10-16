<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>
    <body>
    <div class="superbody">
	<a href="/">
    <div class="header" style="margin-left:100px;">
    </div>
    </a>
    <div class="my-new-sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Языковый переключатель") ) : ?>
    <?php endif; ?>
    </div>
    <div class="lang" style="float:right; margin-top:-50px; margin-right:150px; z-index:99999;"></a><a href="index.php">укр<a> / <a href="index_eng.php">eng</a></div>
    <div class="line">
    </div>
    
        <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class'=>'menu',  'menu_class'=>'no', 'container_class'=>'menu', 'menu_id'=>'no' )); ?>
        <?php get_search_form(); ?>
    <script>
    $('.menu li ul').css({
      display: "none",
      left: "auto"
    });
    $('.menu li').hover(function() {
      $(this)
        .find('ul')
        .stop(true, true)
        .slideDown('fast');
    }, function() {
    setTimeout(function() {
      $(this)
        .find('ul')
        .stop(true,true)
        .fadeOut('slow');
    }, 600);	
    });
    </script>