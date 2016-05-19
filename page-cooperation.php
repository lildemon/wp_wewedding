<?php
/*
Template Name: 商务合作
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">关于唯一</a> &gt;
				<a href="#">商务合作</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
				<div class="content">
						
						<div class="mid-box w-800 gia">
							<div class="gia clearfix">
								<div class="right">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/sub/jmhz.jpg" alt="">
								</div>
								<div class="left">
									<p class="title" style="margin-top:0px;">商务合作</p>
									<p class="con" style="width:210px;">WE(唯一)定制钻戒经过多年发展，已成为享誉全国的钻戒定制品牌。独树一帜的WE凭借个性化的定制服务和强大的国际设计师团队，获得了行业内的认可和越来越多年轻爱侣的青睐。</p>

									<!-- <p class="con">WE将爱情记忆融入钻戒设计，使每一对钻戒都成为世间独一无二的爱情证据。今生挚爱， 只在唯一。</p>

									<p class="con">我们愿与制造浪漫婚礼与甜蜜生活的企业合作，共同缔造经典。缔造经典</p> -->
								</div>
							</div>
							<div class="cooper">
								<div class="message">
									<p>合作热线：400-625-7188</p>
									<p>邮箱：we@we-inlove.com</p>
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
			var $type = $(".type")
			$type.on("click",function(){
				$type.removeClass("on")
				$(this).addClass("on")
			})
		})
	}(jQuery)
	
	</script>
<?php get_footer(); ?>