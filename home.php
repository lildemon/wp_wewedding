<?php get_header(); ?>
	<?php get_template_part( 'sections/slogan-header' ); ?>
		
	<div class="main">
		<div class="main artical">
			<div class="wrapper">
				<?php we_breadcrumb() ?>
				
				<div class="ar-content clearfix">
					<div class="ar-box">
						<?php 
						$post_id = 0;
						if ( have_posts() ) :
					
							while ( have_posts() ) : the_post();
							$post_id = $post->ID;
						?>
							<h3><?php the_title(); ?></h3>
							<span><?php the_time(); ?></span>
							<div class="user-content">
								<?php the_content(); ?>
							</div>
						<?php
								
								// original way, use content based on post format
								//get_template_part( 'content', get_post_format() );

							endwhile;
							
							//we_paging_nav();
							
						else :
						
							get_template_part( 'content', 'none' );
							
						endif; 
						
						?>
						
					</div>
					<div class="fixed-box">
						<div class="box jd">
							<img src="images/logo.png">
							<a href="#">查看经典案例</a>
							<img src="images/story/img.png">
						</div>
						<div class="box hot">
							<h3>热点推荐</h3>
							<div class="link">
								<?php
									$cats = wp_get_post_categories($post->ID);
								if ($cats) {
									$cat = get_category( $cats[0] );
									$first_cat = $cat->category_parent;
									$args = array(
										'category__in' => array($first_cat),
										'post__not_in' => array($post->ID),
										'showposts' => 6,
										'orderby' => 'rand',
										'ignore_sticky_posts' => true);

									query_posts($args);
									$sug_idx = 1;
									
								if (have_posts()) : ?>
									<div class="border clearfix guss-box">
									<?php while (have_posts()) : the_post(); update_post_caches($posts); ?>
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();
										?>">
											<?php echo $sug_idx; ?>、<?php the_title(); ?>
										</a>
										<?php $sug_idx++; ?>
									<?php endwhile; ?>
									</div>
									<?php else : ?>
										<a href="#">* 暂无相关文章</a>
								<?php endif; wp_reset_query(); } ?>
								<a href="#"><span>1.</span>WE福清店盛大开幕</a>
							</div>
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
<?php get_footer(); ?>		