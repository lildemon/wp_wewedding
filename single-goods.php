<?php
	wp_enqueue_script('we_comm', get_template_directory_uri() . '/dist/js/goods_comm.js', array(), false, true);
?>

<?php get_header(); ?>
	<div class="header">
		<div class="h-bg"></div>
	</div>
	<div class="main goods">
		<div class="wrapper">
			<div class="site">
				<span>您的位置：</span>
				<a href="#">WE </a> &gt;
				<a href="#">系列产品 </a> &gt;
				<a href="#">xx系列 </a> &gt;
			</div>
			<div class="goods-box clearfix">
				<div class="goods-img">
					<div id="preview" class="spec-preview"> <span class="jqzoom"><img jqimg="pic/goods/goods_big1.jpg" src="pic/goods/goods1.jpg" /></span> </div>
					    <!--缩图开始-->
					    <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
					      <div class="items">
					        <ul>
					          <li class="cur-img"><img alt="佳能" bimg="pic/goods/goods_big1.jpg" src="pic/goods/goods1.jpg" ></li>
					          <li><img alt="佳能" bimg="pic/goods/goods_big2.jpg" src="pic/goods/goods2.jpg" ></li>
					          <li><img alt="佳能" bimg="pic/goods/goods_big1.jpg" src="pic/goods/goods1.jpg" ></li>
					          <li><img alt="佳能" bimg="pic/goods/goods_big2.jpg" src="pic/goods/goods2.jpg" ></li>
					          <li><img alt="佳能" bimg="pic/goods/goods_big1.jpg" src="pic/goods/goods1.jpg" ></li>
					          <li><img alt="佳能" bimg="pic/goods/goods_big2.jpg" src="pic/goods/goods2.jpg" ></li>
					          <li><img alt="佳能" bimg="pic/goods/goods_big1.jpg" src="pic/goods/goods1.jpg" ></li>
					          <li><img alt="佳能" bimg="pic/goods/goods_big2.jpg" src="pic/goods/goods2.jpg" ></li>
					        </ul>
					      </div>
					    </div>
					    <!--缩图结束-->
				</div>
				<div class="goods-price">
					<h3>梦的祈祷<span>情侣对戒（男款）</span></h3>
					<div class="price-box">
						￥<span>3999</span>
						<span class="desc">（仅供参考，具体价格取决于定制方案）</span>
					</div>
					<ul class="choose-type clearfix">
						<li>
							<span>材质：</span>
							<div></div>
						</li>
						<li>
							<span>材质：</span>
							<div></div>
						</li>
						<li>
							<span>材质：</span>
							<div></div>
						</li>
						<li>
							<span>材质：</span>
							<div></div>
						</li>
					</ul>
					<p>其他服务：</p>
					<div class="other-ser">
						<a class="on" href="#">刻字</a>|
						<a href="#">刻肖像</a>|
						<a href="#">刻指纹</a>
					</div>
					<a href="#" class="btn-or">预约到店体验</a>
				</div>
			</div>
			<div class="share">
				分享到：
			</div>
			<div class="detail-box">
				<div>
					<table>
						<tr>
							<td>产品系列：</td>
							<td>产品系列：</td>
							<td>产品系列：</td>
							<td>产品系列：</td>
						</tr>
						<tr>
							<td>产品系列：</td>
							<td>产品系列：</td>
							<td>产品系列：</td>
							<td>产品系列：</td>
						</tr>
						<tr>
							<td>产品系列：</td>
							<td>产品系列：</td>
							<td>产品系列：</td>
							<td>产品系列：</td>
						</tr>
					</table>
				</div>
				
			</div>
			
			<div class="user-content">
				里面是用户自定义上传 允许 html 代码
			</div>

			<h3 class="guss">猜你喜欢</h3>

			<div class="border clearfix guss-box">
				<a href="#">
					<img src="pic/goods/goods1.jpg" alt="">
				</a>
				<a href="#">
					<img src="pic/goods/goods1.jpg" alt="">
				</a>
				<a href="#">
					<img src="pic/goods/goods1.jpg" alt="">
				</a>
			</div>

			<div class="border clearfix about-box mt-40">
				<div>
					<img src="images/ewm.jpg" alt="扫描二维码">
					<p class="notice">关注唯一，了解品牌动态</p>
				</div>
				<div>
					<dl>
						<dd><img src="images/icon_phone.png" alt=""></dd>
						<dt>400-000-0000</dt>
					</dl>
					<p>欢迎致电WE唯一钻石定制</p>
					<p>珠宝顾问为您解答任何关于珠宝疑问</p>
					<a href="#" class="btn-or">联系在线客服</a>
				</div>
				<div>
					<dl>
						<dd><img src="images/icon_car.png" alt=""></dd>
						<dt>预约到店</dt>
					</dl>
					<p>留下您的需求</p>
					<p>我们为您提供更多选择</p>
					<a href="#" class="btn-or">现在预约</a>
				</div>
			</div>

		</div>
	</div>

<?php get_footer(); ?>