<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
	<title>
		<?php if ( is_home() ) { ?><?php bloginfo('name') ?> | <?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?>Search Results | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_author() ) { ?>Author Archives | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_category() ) { ?><?php single_cat_title(); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if ( is_month() ) { ?><?php the_time('F'); ?> | <?php bloginfo('name'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Tag Archive | <?php single_tag_title("", true); } } ?>
	</title>
	<meta name="theme-color" content="#2196F3">
	<meta http-equiv="Cache-Control" content="no-transform">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="favicon.ico" mce_href="favicon.ico" rel="bookmark" type="image/x-icon" /> 
	<link href="favicon.ico" mce_href="favicon.ico" rel="icon" type="image/x-icon" /> 
	<link href="favicon.ico" mce_href="favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/comments-ajax.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/i.js"></script>
</head>
<body>
	<div class="back-to-top" id="totop" style="opacity:0;">
		<div class="toTop"></div>
	</div>
	<?php global $BianDan_tu; if($BianDan_tu['diy-css']!=''){ ?>
	<style type="text/css">
		<?php echo $BianDan_tu['diy-css']; ?>
	</style>
	<?php } ?>
	
	<div class="header">
			<?php if($BianDan_tu['top']==1){ ?>
				<div class="h-1" style="background:<?php echo $BianDan_tu['top-ys']; ?>;">
			<?php }else{ ?>
				<div class="h-1" style="background:url(<?php echo $BianDan_tu['top-bg']; ?>);background-size: cover;background-position: 50% 42%;">
			<?php } ?>
					<div class="h-logo">
						<img src="https://biantan.org/wp-content/themes/Tu/images/logo.png" />
					</div>
				<div class="h">
					<div><?php echo $BianDan_tu['topd'];?></div>
					<div class="sign"><?php echo $BianDan_tu['topx'];?></div>
				</div>
				<div class="n">
					<div class="menu">
						<ul>
							<li><a href="https://biantan.org/"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="https://biantan.org/about"><i class="fa fa-street-view"></i> About</a></li>
							<li><a href="https://biantan.org/my-friends"><i class="fa fa-child"></i> Friends</a></li>
							<li><a href="https://biantan.org/projects"><i class="fa fa-code"></i> Projects</a></li>
							<li><a href="https://biantan.org/guestbook"><i class="fa fa-comments"></i> Guestbook</a></li>
						</ul>
					</div>
					<form class="search" name="formsearch" method="get" action="<?php bloginfo('home'); ?>">
						<input name="s" id="s" type="text" placeholder="即刻搜索">
					</form>
				</div>
				<!-- 头部六色w -->
				<ul id="color-bars" class="group">
					<li id="color-1"></li>
					<li id="color-2"></li>
					<li id="color-3"></li>
					<li id="color-4"></li>
					<li id="color-5"></li>
					<li id="color-6"></li>
				</ul>
				<!-- 头部六色w -->
			</div>
	</div>