<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


  <title><?php bloginfo('name') ?><?php if ( is_404() ) : ?> &raquo; <?php _e('Not Found') ?><?php elseif ( is_home() ) : ?> &raquo; <?php bloginfo('description') ?><?php else : ?><?php wp_title() ?><?php endif ?></title>
 
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php wp_head(); ?>
  
</head>
<body>

<div id="page">

	<header>
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<p class"description"><?php bloginfo('description'); ?></p>
	</header>
	
	
	<nav>
	<?php
	if ( has_nav_menu( 'main_menu_gauche' ) ) {
		wp_nav_menu( array('menu'=>'main_menu') );
	}
	?>
	</nav>
	
<!-- FIN HEADER -->