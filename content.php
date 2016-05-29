<?php
/*
	普通文章页
 */
?>

<div class="main artical pdt-200">
	<div class="wrapper">

		<?php we_breadcrumb() ?>
		<div class="ar-content clearfix">
			<div class="ar-box">
				<h3><?php the_title(); ?></h3>
				<span><?php the_time(); ?></span>
				<div class="user-content">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="fixed-box">
				<div class="box jd">
					<img width="147" height="126" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png">
					<a href="/archives/category/cases">查看经典案例</a>
					<img width="181" height="283" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/story/img.png">
				</div>
				<div class="box hot">
					<h3>热点推荐</h3>
					<div class="link">
						<?php
									$cats = wp_get_post_categories($post->ID);
								if ($cats) {
									$cat = get_category( $cats[0] );
									$first_cat = $cat->category_parent;
									$cat = get_category($first_cat);
									$first_cat = $cat->category_parent;

									$args = array(
										'category__in' => array(20, 21, 22, 23, 24),
										'showposts' => 6,
										'post_type' => 'post',
										'orderby' => 'rand',
										'ignore_sticky_posts' => true);

									query_posts($args);
									$sug_idx = 1;
									
								if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); update_post_caches($posts); ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();
										?>">
											<?php echo $sug_idx; ?>、<?php the_title(); ?>
										</a>
										<?php $sug_idx++; ?>
									<?php endwhile; ?>
									<?php else : ?>
										<a href="#">* 暂无相关文章</a>
								<?php endif; wp_reset_query(); } ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<script type="text/javascript">
!function($) {
	$(document).ready(function(){
		var $fixed = $(".fixed-box"),  // 右侧热点浮动
			c_h = window.innerHeight,
			_top = $fixed.offset().top,
			cssTop = parseInt($fixed.css("top")),
			_h = $fixed.height(),
			h_top = $(".footer").offset().top
		$(window,document).on("scroll",function(){
			var top = $(document,window).scrollTop()
			var height = $(".top-nav").height()
			if(top > _top-height){
				$fixed.css("top",cssTop + (top - _top)+height)
			}else{
				$fixed.css("top","50px")
			}
			if( (top+height+_h) > h_top ){
				$fixed.css({"top": (h_top - (_h+_top) )})
			}
		})

	})
}(jQuery)

</script>