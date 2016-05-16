<?php
/*
	经典案例列表页
 */
?>
<?php get_header(); ?>
<?php //get_template_part( 'sections/slogan-header' ); ?>
<div class="main news-list pdt-200">
	<div class="wrapper">
		<div class="site">
			<span>您的位置：</span>
			<a href="/">首页 </a> &gt;
			<a href="/archives/category/cases">经典案例 </a>
		</div>
		<?php get_template_part( 'sections/suggest-for-story' ); ?>
	</div>
</div>

<?php get_footer(); ?>