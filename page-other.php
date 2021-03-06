<?php
/*
Template Name: 其它售后
*/
?>


<?php get_header(); ?>

	<div class="main help">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="/">首页 </a> &gt;
				<a href="javascript:;">售后服务</a> &gt;
				<a href="#">其它售后</a>
			</div>
			<div class="clearfix">
				<?php get_template_part( 'sections/help-sidebar' ); ?>
					<div class="content">
						
						<div class="mid-box gia regist w-740">
							<p class="title-l">其他售后</p>
							<h3>一、网络自助办理售后申请</h3>
							<p>1) 登陆后进入“我的WE”点击“售后办理"，进入可办理售后列表。</p>
							<p>2) 选择您所需办理退货的产品，提交申请售后。</p>
							<p>3) 选择售后项目，确认回寄地址，点击“确认提交”后，即可提交成功。</p>
							<p>4) 提交售后申请后，如顾客未能在7个工作日内将需售后维护的商品寄出，需及时联系WE客服人员沟通。</p>
							<h3>二、体验中心钻石保养</h3>
							<p>如果您需对饰品、钻石进行保养，我们建议您就近选择您所在的城市WE的体验中心，按照预约时间前往体验中心，也可办理相关售后事宜。</p>
							<h3>三、快递费用</h3>
							<p>建议顺丰快递购买保险寄回，需要客户承担来回快递和保价费用，we提供免工费维护服务。</p>
							<h3>四、寄回方法</h3>
							<p>相关售后服务都需使用一张小纸条写明具体情况并附上收件人联系信息，并使用一个小包装盒子包装寄回即可。   </p>
							<h3>五、更换款式/钻石</h3>
							 <p>1) 钻石不变，更换戒托：需将国检证书寄回即可。</p>
 							<p>2) 钻石及戒托款式一同更换：需将国检及GIA证书一并寄回。</p>
 
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