<?php
/*
	经典案例文章页
 */
?>

<div class="main goods">
	<div class="wrapper">
		<?php we_breadcrumb() ?>
		<div>
			<div class="user-content">
				<?php the_content(); ?>
			</div>
		</div>
		

		<h3 class="guss">猜你喜欢</h3>

		<div class="border clearfix guss-box">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
			</a>
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
			</a>
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
			</a>
		</div>

		<?php get_template_part( 'sections/goods-contact' ); ?>

	</div>
</div>