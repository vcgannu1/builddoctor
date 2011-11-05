<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/ie6.css" />
<![endif]-->
<!--[if !IE 6]><!-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
<div id="header">
		<div id="header-links"><?php wp_nav_menu( array('menu' => 'header-links' )); ?></div>
		<div id="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="" /></a></div>
		<div class="description">
			<h2><?php bloginfo('description'); ?></h2>
			<h3>Call: 800-777-7777</h3>
			
			<div class="get-in-touch"><?php wp_nav_menu( array('menu' => 'get-in-touch' )); ?></div>
		</div>
</div>
<div id="header-separator"></div>
<div id="main-content">