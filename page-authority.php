<?php
/*
Template Name: 权威认证
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">关于唯一</a> &gt;
				<a href="#">权威认证</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
				<div class="content">
					
					<div class="mid-box w-740 gia">
						<div class="gia clearfix">
							<div class="right">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/sub/gia.png" alt="">
							</div>
							<div class="left">
								<p class="title">权威认证</p>
								<h3>WE钻石品质保证</h3>
								<p class="con">WE的每一款钻石珠宝饰品均须经过国际最权威的鉴定机构美国宝石协会（简称GIA）和国家宝玉石质量监督检验中心（简称国检）的的分析定级。这些鉴定组织凭借其严谨、公正的鉴定机制获得全球钻石行业的普遍认可。</p>
							</div>
						</div>
						<div class="giabg">
							<p class="title-l">钻石鉴定证书的由来</p>
							<div class="gia-bg">
								<p>GIA（美国宝石学院Gemological Institute of America）作为界内非营利机构，保持着严谨性、一致性、公正性，且拥有崇高的声誉及领导地位，被认定为世界第一的宝石证书。GIA证书分别对钻石的颜色、净度、切工以及克拉大小进行等级评估，最大程度的保证了消费者的权益。</p>
							</div>
						</div>
						<p class="title-l">国际国内权威证书</p>
						<p>GIA钻石等级证书，由美国宝石学院(GIA)签订发行。</p>
						<p>HRD钻石等级证书，由比利时钻石高层议会签订发行。</p>
						<p>AGS钻石等级证书，由美国宝玉石学会签订发行。</p>
						<p>IGI钻石等级证书，由国际宝石学院签订发行。</p>
						<p>EGL钻石等级证书，由欧洲宝石学院签订发行。</p>
						<p>NGTC镶嵌钻石分级证书，由国家珠宝玉石质量监督检验中心发行。</p>
						<p>CTA镶嵌钻石分级证书，由中国质量检验联盟金银珠宝检测中心发行。</p>
						<p>GJC首饰检测证书，由国家轻工业珠宝玉石首饰质量监督检测中心发行 。</p>
						<p>GAC镶嵌钻石分级证书，由中国宝玉石协会发行。</p>
						<p>GTC宝玉石鉴定证书，由中华全国工商联珠宝业商会珠宝检测研究中心发行。</p>
						<p>GIC镶嵌钻石分级证书，由中国地质大学北京地大宝石检验中心发行。</p>
						<p>WE品质证书，由WE发行。</p>
						<div class="check">
							<p class="title-l">查询GIA钻石证书</p>
							<p>									
							如何网上查询GIA钻石证书？
							您可以登陆GIA的官方网站进行查询<a href="http://www.gia.edu/reportcheck" target="_blank">http://www.gia.edu/reportcheck</a>
							</p>

							<p>
							查询需要输入证书编号和克拉重量。
							请注意，在购买钻石前，应该认真查阅钻石证书的复印件或副本，因为这是您确保钻石质量和价值的唯一保证。
							</p>
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