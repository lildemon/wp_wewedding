<?php
/*
Template Name: 联系我们
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">帮助中心</a> &gt;
				<a href="#">联系我们</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
				<div class="content">
					<div class="mid-box">
						<p class="title">联系我们</p>
						<dl>
							<dd>客户服务中心</dd>
							<dt>免费服务热线：400-625-7188</dt>
							<dt>客户服务邮箱：we@we-inlove.com</dt>
							<dt>服务时间：9：00-24：00</dt>
						</dl>
						<dl>
							<dd>WE总部</dd>
							<dt>详细地址：香港九龙旺角花园街2-16号好景商业中心10楼1005室</dt>
							<dt>电话：400-625-7188</dt>
						</dl>
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