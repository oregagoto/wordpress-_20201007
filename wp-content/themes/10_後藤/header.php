<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link href="<?php get_header(); ?>/css/style.css" rel="stylesheet">
<script src="<?php get_header(); ?>/js/openclose.js"></script>
<script src="<?php get_header(); ?>/js/fixmenu_pagetop.js"></script>
<script src="<?php get_header(); ?>/js/ddmenu_min.js"></script>
<!--[if lt IE 10]>
<style>
.slide0,.slide2,.slide3 {display:none;}
</style>
<![endif]-->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<?php 
	wp_enqueue_script('jquery');
	wp_enqueue_script('bistro-calme-main' , get_template_directory_uri() . '/assets/js/main.js');
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

<div id="container">
	
<header>
<h1 id="logo"><a href="index.html"><img src="<?php get_header(); ?>/images/logo.png" alt="SAMPLE COMPANY"></a></h1>
<!--PC用（901px以上端末）メニュー-->
<nav id="menubar">
<ul>
<li><a href="company.html">Company</a></li>
<li class="ddmenu-title">Service
	<ul class="ddmenu">
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	</ul>
</li>
<li><a href="recruit.html">Recruit</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<!--小さい端末用（900px以下端末）メニュー-->
<nav id="menubar-s">
<ul>
<li><a href="company.html">Company</a></li>
<li id="menubar_hdr2" class="close">Service
	<ul id="menubar-s2">
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	<li><a href="service.html">サービスメニュー</a></li>
	</ul>
</li>
<li><a href="recruit.html">Recruit</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</nav>
<ul class="icon">
<li><a href="#"><img src="<?php get_header(); ?>/images/icon_facebook.png" alt="Facebook"></a></li>
<li><a href="#"><img src="<?php get_header(); ?>/images/icon_twitter.png" alt="Twitter"></a></li>
<li><a href="#"><img src="<?php get_header(); ?>/images/icon_instagram.png" alt="Instagram"></a></li>
<li><a href="#"><img src="<?php get_header(); ?>/images/icon_youtube.png" alt="TouTube"></a></li>
</ul>
</header>
