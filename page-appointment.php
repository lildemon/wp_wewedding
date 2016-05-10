<?php
/*
Template Name: 预约页面
*/
	wp_enqueue_script('we_jedate', get_template_directory_uri() . '/dist/js/jedate/jedate.min.js', array(), false, true);
	wp_enqueue_script('we_custom', get_template_directory_uri() . '/dist/js/custom.js', array(), false, true);
?>


<?php get_header(); ?>

	<div class="header custom">
			<div class="h-bg"></div>
		</div>
		<div class="main custom">
			<div class="wrapper">
				<h3 class="title"></h3>
				<p>预约到店,尊享中国第一婚戒品牌高级定制服务：we为您提供个性定制、探店体验、保养维护和礼品兑换等服务，选择您需要的服务预约到线下定制中心，即可享受预约尊享服务。</p>
				
				<input class="choose-time" id="textymdhms" type="text" placeholder="选择到店时间" value=""  readonly>

				<div class="msg-box">
					<h3>您的联系信息：</h3>
					<table>
						<tr>
							<td>您的姓名：</td>
							<td><input type="text" /></td>
						</tr>
						<tr>
							<td>您的联系手机：</td>
							<td><input type="text" /></td>
						</tr>
						<tr>
							<td>您的常用邮箱：</td>
							<td><input type="text" /></td>
						</tr>
					</table>
				</div>

				<div class="msg-box">
					<h3>您的服务需求：</h3>
					<p>* 让我们更多的了解您，以便提前为您准备好符合要求的服务</p>
					<table>
						<tr>
							<td><a class="check-box" name="ser" href="javascript:;"></a></td>
							<td>否，到时再说</td>
						</tr>
						<tr>
							<td><a class="check-box" name="ser" href="javascript:;"></a></td>
							<td>是，希望为我准备感兴趣的产品或个性服务</td>
						</tr>
					</table>
				</div>

				<div class="msg-box">
					<h3>备注/说明</h3>
					<textarea placeholder="请在此处输入您需要的附加信息"></textarea>
				</div>

			</div>
		</div>



<?php get_footer(); ?>