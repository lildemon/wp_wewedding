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
						<div class="mid-box">
							<p class="title">投诉建议</p>
							<p class="sub-title">COMPLIANT AND PROPOSAL</p>
							<p class="desc">您的建议或投诉将帮助及监督我们改进产品和服务。非常感谢您的支持。</p>
							
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