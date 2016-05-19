<?php
/*
Template Name: 网站地图
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">帮助中心</a> &gt;
				<a href="#">网站地图</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
				<div class="content">
						<div class="banner">
							<a href="#" class="btn-bor">了解更多WE的品牌故事</a>
						</div>
						<div class="mid-box">
							<p class="title">网站地图</p>
							<div class="map-box">
								<div><h3>WE频道</h3></div>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
							</div>
							<div class="map-box">
								<div><h3>WE频道</h3></div>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
							</div>
							<div class="map-box">
								<div><h3>WE频道</h3></div>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
							</div>
							<div class="map-box">
								<div><h3>WE频道</h3></div>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
								<a href="#">品牌理念</a>
							</div>
						</div>
						
					</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	!function($) {
		$(document).ready(function(){
			var $type = $(".type")
			$type.on("click",function(){
				$type.removeClass("on")
				$(this).addClass("on")
			})
		})
	}(jQuery)
	
	</script>
<?php get_footer(); ?>