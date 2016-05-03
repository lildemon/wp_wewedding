<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div>
		<div class="top-nav">
			<ul class="wrapper clearfix">
				<li class="logo" >
					<a href="/" title="WE婚戒定制中心"></a>
				</li>
				<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'we_wp_page_menu')); ?>
				<!--
				<li>
					<a href="#" class="on" >首页</a>
				</li>
				<li>
					<a href="#">经典案例</a>
				</li>
				<li>
					<a href="#">系列产品</a>
				</li>
				<li>
					<a href="#">品牌故事</a>
				</li>
				<li>
					<a href="#">WE定制</a>
				</li>
				<li>
					<a href="#">唯一社区</a>
				</li>
				-->
			</ul>
		</div>
		