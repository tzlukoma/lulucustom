<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<?php wp_head(); ?> 
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo( 'name' ); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
	<!-- <link rel="stlyesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />-->
    
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( is_singular() ) wp_enqueue_script ( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
<div id="page">
<div id="header">
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<h2><?php bloginfo('description'); ?></h2>
</div>
<div id="main">


