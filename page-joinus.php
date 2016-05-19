<?php
/*
Template Name: 加入我们
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">关于唯一</a> &gt;
				<a href="#">加入我们</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
				<div class="content">
					
					<div class="mid-box join-us">
						<div class="join"></div>
						<p>请你相信，这绝对是一份非常浪漫的工作。WE的团队，信仰爱与坚守。每一天我们都在见证世间真爱，我们何其有幸，能够加入WE.</p>
						<p>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/sub/img.jpg" alt="">
						</p>
						<p><a href="#" class="btn-bor">了解更多WE的品牌故事</a></p>
						<p>请你相信，这绝对是一份超级甜蜜的工作。今生挚爱，只在唯一。我们总是被恋人们的幸福感动，我们要与更多人分享这份荣耀。</p>
						<p class="title">简历投递</p>
						<p class="left">如果你了解珠宝行业、有销售经验,欢迎你来应聘WE珠宝顾问。你也可以什么都不太精通却对WE特别有兴趣，想要加入这个美好的品牌。你都可以投简历给我们。</p>
						<p class="left">不要怀疑，你就是WE要找的那个人。</p>
						<p class="left mt">合作热线：400-625-7188</p>
						<p class="left mt">邮箱：we@we-inlove.com</p>

						
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