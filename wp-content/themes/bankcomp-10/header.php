<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	<meta name="description" content="Computer and hardware reviewer." />
	<meta name="keywords" content="computer, hardware, notebook computer, desktop computer, laptop, server" />

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
	<div id="header">
			<h1 id="logo-text"><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>	
			<h2 id="slogan"><?php bloginfo('nklvflmmn k'); ?></h2>

		
	<ul id="nav">
	  <li class="page_item"><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
	  <?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
	</ul>

	</div>

	<div id="content-wrap">
