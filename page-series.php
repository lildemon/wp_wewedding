<?php
/*
Template Name: Series Page
*/
?>

<?php get_header(); ?>

		<div class="header goods">
			<div class="h-bg"></div>
		</div>
		<div class="main goods">
			<div class="wrapper">
				<div class="site">
					<span>您的位置：</span>
					<a href="#">WE </a> &gt;
					<a href="#">系列产品 </a>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_1.jpg" alt="">
					<ul class="clearfix ac-box">

						<?php 
							$query = new WP_Query( array(
								'category_name' => 'only-series',
								'post_type' => 'wegoods'
							));
						?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<li><h1>Have Post!</h1></li>
						<?php endwhile; 
						 wp_reset_postdata();
						 else : ?>
						 <p>此系列暂无商品</p>
						 <?php endif; ?>
						
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_2.jpg" alt="">
					<ul class="clearfix ac-box">
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_3.jpg" alt="">
					<ul class="clearfix ac-box">
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_4.jpg" alt="">
					<ul class="clearfix ac-box">
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_5.jpg" alt="">
					<ul class="clearfix ac-box">
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_6.jpg" alt="">
					<ul class="clearfix ac-box">
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/goods.jpg" alt="">
								<span>情有独钟</span>
							</a>
						</li>
					</ul>
				</div>

			</div>
		</div>

		<script type="text/javascript">
			!function($) {
				$(document).ready(function(){
					var $img = $(".ac-img"),
						$box = $(".ac-box")
					$img.on("click",function(e){
						$(this).next().toggle()
						.parent().siblings(".goods-list-box")
						.find(".ac-box").css("display","none");
						
					})
				})
			}(jQuery)
		</script>
<?php get_footer(); ?>		