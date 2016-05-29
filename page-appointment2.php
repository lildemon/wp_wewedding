<?php
/*
Template Name: 预约页面2
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
		<div class="head-title"></div>

		<div class="main custom" id="main">
			<div class="wrapper">
				<h3 class="title"><?php //the_title(); ?></h3>

				<?php while ( have_posts() ) : the_post(); 
				
						the_content();

					endwhile; 
				?>

				<p>预约到店,尊享中国第一婚戒品牌高级定制服务：we为您提供个性定制、探店体验、保养维护和礼品兑换等服务，选择您需要的服务预约到线下定制中心，即可享受预约尊享服务。</p>

				<form ref="submit_form" class="form">
					
					
					<div class="rows clearfix">
						<div class="cell-l">选择店铺</div>
						<div class="cell-r">
							<select class="choose-time" ref="storeSelect" name="ccf_field_choosed-store">
								<option value="福清万达店">福清万达店</option>
							</select>
						</div>
					</div>
					<div class="rows clearfix">
						<div class="cell-l">选择到店时间</div>
						<div class="cell-r">
							<input class="choose-time" id="textymdhms" type="text" placeholder="选择到店时间" value="" ref="timeInput" name="ccf_field_arrive-time"  readonly>
						</div>
					</div>
					<div class="rows clearfix">
						<div class="cell-l">填写预约需求</div>
						<div class="cell-r msg-box">
							<h3>您的联系信息</h3>
							<table>
								<tr>
									<td>*您的姓名：</td>
									<td><input type="text" ref="nameInput" name="ccf_field_contact-name"/></td>
								</tr>
								<tr>
									<td>*您的手机：</td>
									<td><input type="text" ref="mobileInput" name="ccf_field_contact-phone" /></td>
								</tr>
								<tr>
									<td>*您的邮箱：</td>
									<td><input type="text" ref="emailInput" name="ccf_field_contact-email" placeholder="email@example.com" /></td>
								</tr>
							</table>
							<h3 class="mt-40">您的服务需求</h3>
							<p>* 让我们更多的了解您，以便提前为您准备好符合要求的服务</p>
							<div ref="srvReqSelect" name="ccf_field_service-requirement">
								<div class="check-box" name="ser">
									<a href="javascript:;"></a>
									<span>否，到时再说</span>
								</div>
								<div class="check-box on" name="ser" >
									<a href="javascript:;"></a>
									<span>是，希望为我准备感兴趣的产品或个性服务</span>
								</div>
							</div>
							<div class="other-choose">
								<h3>您希望我们为您准备：</h3>
								<table ref="srvPrepareSelect" name="ccf_field_service-prepare[]">
									<tr>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>开水</span>
											</div>
										</td>
										<td>
											<div class="check-box on" >
												<a href="javascript:;"></a>
												<span>茶</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>咖啡</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>停车场</span>
											</div>
										</td>
									</tr>
								</table>
								<h3>您的产品需求：</h3>
								<table ref="productReqSelect" name="ccf_field_product-requirement[]">
									<tr>
										<td>
											<div class="check-box on" >
												<a href="javascript:;"></a>
												<span>结婚钻戒</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>结婚对戒</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>男戒</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>女戒</span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>吊坠</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>耳钉</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>手链</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>其他</span>
											</div>
										</td>
									</tr>
								</table>
								<h3>您喜欢的款式风格：</h3>
								<table ref="productFavSelect" name="ccf_field_product-favor[]">
									<tr>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>私人定制</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>简洁干练</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>自然纯朴</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>复古经典</span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>奢华浪漫</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>单钻</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>多钻</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>群镶</span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>其他</span>
											</div>
										</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</table>
								<h3>您的购买用途：</h3>
								<table ref="productUseSelect" name="ccf_field_product-use-for[]">
									<tr>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>求婚/订婚</span>
											</div>
										</td>
										<td>
											<div class="check-box on" >
												<a href="javascript:;"></a>
												<span>结婚</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>周年纪念</span>
											</div>
										</td>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>节日礼物</span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="check-box" >
												<a href="javascript:;"></a>
												<span>其他</span>
											</div>
										</td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</table>
								<h3>您的预算范围：</h3>
								<table ref="budgetRangeSelect" name="ccf_field_budget-range">
									<tr>
										<td>
											<div class="check-box" name="price" >
												<a href="javascript:;"></a>
												<span>5000以内</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="price" >
												<a href="javascript:;"></a>
												<span>5K-1W</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="price" >
												<a href="javascript:;"></a>
												<span>1W-1.5W</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="price" >
												<a href="javascript:;"></a>
												<span>1.5W-3W</span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="check-box" name="price" >
												<a href="javascript:;"></a>
												<span>3W-10W</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="price" >
												<a href="javascript:;"></a>
												<span>10W以上</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="price" >
												<a href="javascript:;"></a>
												<span>无价格需求</span>
											</div>
										</td>
										<td></td>
									</tr>
								</table>
								<h3>钻石大小：</h3>
								<table ref="diamondSizeSelect" name="ccf_field_diamond-size">
									<tr>
										<td>
											<div class="check-box" name="size" >
												<a href="javascript:;"></a>
												<span>0.3-0.5克拉</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="size" >
												<a href="javascript:;"></a>
												<span>0.5-1克拉</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="size" >
												<a href="javascript:;"></a>
												<span>1-2克拉</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="size" >
												<a href="javascript:;"></a>
												<span>2-2.5克拉</span>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="check-box" name="size" >
												<a href="javascript:;"></a>
												<span>2.5-3克拉</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="size" >
												<a href="javascript:;"></a>
												<span>3克拉以上</span>
											</div>
										</td>
										<td>
											<div class="check-box" name="size" >
												<a href="javascript:;"></a>
												<span>无大小需求</span>
											</div>
										</td>
										<td></td>
									</tr>
								</table>
								<h3>备注/说明：</h3>
								<textarea placeholder="请在此处输入您需要的附加信息" ref="notesInput" name="ccf_field_extra-notes"></textarea>
							</div>

						</div>
					</div>
					<div class="rows">
						<div class="cell-l">预约成功</div>
						<div class="cell-r"><a class="submit" id="submit" ref="submitBtn" href="javascript:;">提交</a></div>
					</div>
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