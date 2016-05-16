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
						<a href="#"><span>1.</span>WE福清店盛大开幕</a>
						<a href="#"><span>2.</span>WE福清店盛大开幕</a>
						<a href="#"><span>3.</span>WE福清店盛大开幕</a>
						<a href="#"><span>4.</span>WE福清店盛大开幕</a>
						<a href="#"><span>5.</span>WE福清店盛大开幕</a>
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