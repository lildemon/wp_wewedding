<?php
/*
Template Name: 预约页面
*/
	wp_enqueue_script('we_jedate', get_template_directory_uri() . '/dist/js/jedate/jedate.min.js', array(), false, true);
	wp_enqueue_script('we_remix', get_template_directory_uri() . '/js/remix.min.js', array('jquery'), false, true);
	wp_enqueue_script('we_appointment', get_template_directory_uri() . '/js/appointment.js', array('jquery'), false, true);
?>

<style type="text/css">
	.ccf-form { display: none; }
</style>
<?php get_header(); ?>

	<div class="header custom">
			<div class="h-bg"></div>
		</div>

		<div class="main custom" id="main">
			<div class="wrapper">
				<h3 class="title"><?php //the_title(); ?></h3>

				<?php while ( have_posts() ) : the_post(); 
				
						the_content();

					endwhile; 
				?>

				<form ref="submit_form">
					<p>预约到店,尊享中国第一婚戒品牌高级定制服务：we为您提供个性定制、探店体验、保养维护和礼品兑换等服务，选择您需要的服务预约到线下定制中心，即可享受预约尊享服务。</p>
					
					<input class="choose-time" id="textymdhms" type="text" placeholder="选择到店时间" value="" ref="timeInput" readonly>

					<div class="msg-box">
						<h3>您的联系信息：</h3>
						<table>
							<tr>
								<td>您的姓名：</td>
								<td><input type="text" ref="nameInput"/></td>
							</tr>
							<tr>
								<td>您的联系手机：</td>
								<td><input type="text" ref="mobileInput"/></td>
							</tr>
							<tr>
								<td>您的常用邮箱：</td>
								<td><input type="text" ref="emailInput"/></td>
							</tr>
						</table>
					</div>

					<div class="msg-box">
						<h3>您的服务需求：</h3>
						<p>* 让我们更多的了解您，以便提前为您准备好符合要求的服务</p>
						<table ref="checkInput">
							<tr>
								<td><a class="check-box" name="ser" href="javascript:;"></a></td>
								<td>否，到时再说</td>
							</tr>
							<tr>
								<td><a class="check-box on" name="ser" href="javascript:;"></a></td>
								<td>是，希望为我准备感兴趣的产品或个性服务</td>
							</tr>
						</table>
					</div>

					<div class="msg-box">
						<h3>备注/说明</h3>
						<textarea placeholder="请在此处输入您需要的附加信息" ref="notesInput"></textarea>
					</div>

					<a class="submit" id="submit" ref="submitBtn" href="javascript:;">提交</a>
				</form>
			</div>
		</div>

<script type="text/x-template" id="alert-tmpl">
	<div class="cover">
		<div class="pop">
			<p class="msg" ref="msg"></p>
			<a href="javascript:;" class="close" ref="ok">确定</a>
		</div>
	</div>
</script>


<?php get_footer(); ?>