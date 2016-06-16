
<?php get_header(); ?>
<?php //get_template_part( 'sections/slogan-header' ); ?>
<div class="main news-list pdt-200">
	<div class="wrapper">
		<div class="site">
			<?php we_breadcrumb() ?>
		</div>
		<?php get_template_part( 'sections/article-list' ); ?>
		<h3 class="title">更多推荐</h3>
		<?php get_template_part( 'sections/suggest-for-story' ); ?>
	</div>
</div>

<?php get_footer(); ?>