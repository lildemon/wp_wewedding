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
						<div class="mid-box">
							<p class="title">网站地图</p>
							<div class="map-box">
								<div><h3>WE经典案例</h3></div>
								<a href="http://we-inlove.com/classic_1">永恒·沙漏婚戒</a>
								<a href="#">承诺·海鸥婚戒</a>
								<a href="#">LoveLetter·折纸婚戒</a>
							</div>
							<div class="map-box">
								<div><h3>WE系列产品</h3></div>
								<a href="http://we-inlove.com/archives/category/series">唯一系列</a>
								<a href="http://we-inlove.com/archives/category/series">星辰系列</a>
								<a href="http://we-inlove.com/archives/category/series">一生一世系列</a>
								<a href="http://we-inlove.com/archives/category/series">时光系列</a>
								<a href="http://we-inlove.com/archives/category/series">梦境系列</a>
								<a href="http://we-inlove.com/archives/category/series">挚爱系列</a>
							</div>
							<div class="map-box">
								<div><h3>WE品牌故事</h3></div>
								<a href="http://we-inlove.com/archives/category/stories/we-info">WE资讯</a>
								<a href="http://we-inlove.com/culture">品牌文化</a>
								<a href="http://we-inlove.com/design-team">设计团队</a>
								<a href="http://we-inlove.com/quality">品质工艺</a>
							</div>
							<div class="map-box">
								<div><h3>WE婚嫁百科</h3></div>
								<a href="http://we-inlove.com/diamond">钻石保养</a>
								<a href="http://we-inlove.com/archives/category/stories/we-knowledge">婚礼知识</a>
								<a href="http://we-inlove.com/guidelines">婚嫁攻略</a>
								
							</div>
							<div class="map-box">
								<div><h3>WE定制预约</h3></div>
								<a href="http://we-inlove.com/appointment">个性定制</a>
								<a href="http://we-inlove.com/appointment">保养维护</a>
								<a href="http://we-inlove.com/appointment">到店体验</a>
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