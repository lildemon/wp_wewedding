<?php
/*
	经典案例列表页
 */
?>
<?php get_header(); ?>
<?php //get_template_part( 'sections/slogan-header' ); ?>
<div class="header goods">
			<div class="h-bg"></div>
			<!-- <p class="txt">一枚钻戒 见证一个浪漫爱情故事 Ring Custum Center</p> -->
		</div>
<div class="main news-list">
	<div class="wrapper">
		<div class="site">
			<span>您的位置：</span>
			<a href="/">首页 </a> &gt;
			<a href="javascript:;">经典案例 </a>
		</div>
		<div class="goods-list-box" style="margin-top:20px;">
			<a href="/classic_1"><img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/classic/banner4.jpg" alt=""></a>
		</div>

		<div class="goods-list-box" style="margin-top:20px;">
			<a href="javascript:;"><img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/classic/banner2.jpg" alt=""></a>
		</div>

		<div class="goods-list-box" style="margin-top:20px;">
			<a href="javascript:;"><img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/classic/banner1.jpg" alt=""></a>
		</div>
	</div>
</div>

<?php get_footer(); ?>