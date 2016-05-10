<?php
wp_enqueue_script('we_series', get_template_directory_uri() . '/dist/js/series.js', array(), false, true);
?>
<?php get_header(); ?>

		<div class="header goods">
			<div class="h-bg"></div>
		</div>
		<div class="main goods">
			<div class="wrapper">
				<div class="site">
					<span>您的位置：</span>
					<a href="/">WE </a> &gt;
					<a href="/archives/category/series">系列产品 </a>
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

							<li>
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
									<span><?php the_title(); ?></span>
								</a>
							</li>
						<?php endwhile; 
						 wp_reset_postdata();
						 else : ?>
						 <p>此系列暂无商品</p>
						 <?php endif; ?>
						
						
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_2.jpg" alt="">
					<ul class="clearfix ac-box">
						<?php 
							$query = new WP_Query( array(
								'category_name' => 'stars-series',
								'post_type' => 'wegoods'
							));
						?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<li>
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
									<span><?php the_title(); ?></span>
								</a>
							</li>
						<?php endwhile; 
						 wp_reset_postdata();
						 else : ?>
						 <p>此系列暂无商品</p>
						 <?php endif; ?>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_3.jpg" alt="">
					<ul class="clearfix ac-box">
						<?php 
							$query = new WP_Query( array(
								'category_name' => 'life-series',
								'post_type' => 'wegoods'
							));
						?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<li>
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
									<span><?php the_title(); ?></span>
								</a>
							</li>
						<?php endwhile; 
						 wp_reset_postdata();
						 else : ?>
						 <p>此系列暂无商品</p>
						 <?php endif; ?>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_4.jpg" alt="">
					<ul class="clearfix ac-box">
						<?php 
							$query = new WP_Query( array(
								'category_name' => 'time-series',
								'post_type' => 'wegoods'
							));
						?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<li>
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
									<span><?php the_title(); ?></span>
								</a>
							</li>
						<?php endwhile; 
						 wp_reset_postdata();
						 else : ?>
						 <p>此系列暂无商品</p>
						 <?php endif; ?>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_5.jpg" alt="">
					<ul class="clearfix ac-box">
						<?php 
							$query = new WP_Query( array(
								'category_name' => 'dream-series',
								'post_type' => 'wegoods'
							));
						?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<li>
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
									<span><?php the_title(); ?></span>
								</a>
							</li>
						<?php endwhile; 
						 wp_reset_postdata();
						 else : ?>
						 <p>此系列暂无商品</p>
						 <?php endif; ?>
					</ul>
				</div>

				<div class="goods-list-box">
					<img class="ac-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/goods_list/banner_6.jpg" alt="">
					<ul class="clearfix ac-box">
						<?php 
							$query = new WP_Query( array(
								'category_name' => 'promise-series',
								'post_type' => 'wegoods'
							));
						?>
						<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

							<li>
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
									<span><?php the_title(); ?></span>
								</a>
							</li>
						<?php endwhile; 
						 wp_reset_postdata();
						 else : ?>
						 <p>此系列暂无商品</p>
						 <?php endif; ?>
					</ul>
				</div>

			</div>
		</div>

		
<?php get_footer(); ?>