<?php
/*
Template Name: 投诉建议
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">帮助中心</a> &gt;
				<a href="#">投诉建议</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
				<div class="content">
						<div class="banner">
							<a href="/archives/category/stories" class="btn-bor">了解更多WE的品牌故事</a>
						</div>
						<div class="mid-box">
							<p class="title">投诉建议</p>
							<p class="sub-title">COMPLIANT AND PROPOSAL</p>
							<p class="desc">您的建议或投诉将帮助及监督我们改进产品和服务。非常感谢您的支持。</p>
							<p class="title">投诉类型</p>
							<table>
								<tr>
									<td><a class="type" href="javascript:;">接待服务类</a></td>
									<td><a class="type" href="javascript:;">店铺体验类</a></td>
									<td><a class="type" href="javascript:;">网站操作类</a></td>
									<td><a class="type" href="javascript:;">售后质检类</a></td>
								</tr>
								<tr>
									<td><a class="type" href="javascript:;">定制周期类</a></td>
									<td><a class="type" href="javascript:;">活动规则类</a></td>
									<td><a class="type" href="javascript:;">物流运输类</a></td>
									<td><a class="type" href="javascript:;">其他</a></td>
								</tr>
							</table>
							<textarea name="" placeholder="请告诉我们您的任何意见和建议" ></textarea>
							<p class="desc">建议您留下联系方式，一边WE售后专员及时与您联系。</p>
							<input type="text" placeholder="请输入您的手机号码" >
							<input type="text" placeholder="请输入您的常用邮箱" >
							<a class="submit" href="#">提交</a>
							<p class="title">联系方式</p>
							<div class="link-box clearfix">
								<dl>
									<dd><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/link_phone.png"></dd>
									<dt>400-625-7188</dt>
								</dl>
								<dl>
									<dd><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/link_email.png"></dd>
									<dt>we@we-inlove.com</dt>
								</dl>
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