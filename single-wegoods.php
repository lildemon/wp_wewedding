<?php
	wp_enqueue_script('we_jq_zoom', get_template_directory_uri() . '/dist/js/jqueryZoom.js', array(), false, true);
	wp_enqueue_script('we_goods_comm', get_template_directory_uri() . '/dist/js/goods_comm.js', array(), false, true);
?>

<?php get_header(); ?>
	<?php while( have_posts() ) : the_post(); ?>
	<div class="header goods">
		<?php
			$banner_img_id = get_post_meta($post->ID, 'product-banner')[0];
		?>
		<div class="h-bg" style="background: url(<?php echo wp_get_attachment_url($banner_img_id) ?>) center no-repeat;"></div>
	</div>
	<div class="main goods">
		<div class="wrapper">
			
			
			<div class="site">
				<span>您的位置：</span>
				<a href="/">WE </a> &gt;
				<a href="/archives/category/series">系列产品 </a> &gt;
				<?php
					the_category('&gt;');
				?>
				&gt; <a href="javascript:;"><?php echo get_the_title() ?></a> 
			</div>
			<div>
				<div class="goods-box clearfix">
					<div class="goods-img">
						<div id="preview" class="spec-preview"> 

							<?php
								$forst_gallery_image_id = get_post_meta($post->ID, 'goods_gallery')[0];
							?>
							<span class="jqzoom"><img jqimg="<?php echo wp_get_attachment_url($forst_gallery_image_id); ?>" src="<?php echo wp_get_attachment_url($forst_gallery_image_id, 'post-thumbnail'); ?>" /></span>
						</div>
						    <!--缩图开始-->
						    <div class="spec-scroll"> <a class="prev">&lt;</a> <a class="next">&gt;</a>
						      <div class="items">
						        <ul>
									<?php
										$gallery_image_ids = get_post_meta($post->ID, 'goods_gallery');
										foreach ($gallery_image_ids as $image)
										{
										/*
											$myupload = get_post($image); 
											$title = $myupload->post_title;
											$description = $myupload->post_content;
											$caption = $myupload->post_excerpt;

											echo 'title:' . $title;
											echo 'description:' . $description;
											echo 'caption:' . $caption;
										*/
										
										echo '<li><img src="'. wp_get_attachment_url($image, 'post-thumbnail') .'" bimg="'. wp_get_attachment_url($image) . '" ></li>';
										//echo '<img src="' . wp_get_attachment_url($image) . '" alt="" />';
										//print_r($myupload); // Displays all data
										}
									?>
						        </ul>
						      </div>
						    </div>
						    <!--缩图结束-->
					</div>
					<div class="goods-price">
						<h3><?php echo get_the_title() ?><span><?php echo get_field('subtitle') ?></span></h3>
						<div class="price-box">
							￥<span><?php echo get_field('price') ?></span>
							<span class="desc">（仅供参考，具体价格取决于定制方案）</span>
						</div>
						<ul class="choose-type clearfix">
							<li>
								<span>材质：</span>
								<div><?php echo get_field('material') ?></div>
							</li>
							<li>
								<span>颜色：</span>
								<div><?php echo get_field('color') ?></div>
							</li>
							<li>
								<span>净度：</span>
								<div><?php echo get_field('pure_level') ?></div>
							</li>
							<li>
								<span>切工：</span>
								<div><?php echo get_field('crafts') ?></div>
							</li>
						</ul>
						<!--
						<p>其他服务：</p>
						<div class="other-ser">
							<a class="on" href="#">刻字</a>|
							<a href="#">刻肖像</a>|
							<a href="#">刻指纹</a>
						</div>
						-->
						<a href="/appointment" class="btn-or">预约到店体验</a>
					</div>
				</div>
				<div class="share">
					<p>分享到：</p>
					<!-- JiaThis Button BEGIN -->
					<div class="jiathis_style_32x32">
						<a class="jiathis_button_tsina"></a>
						<a class="jiathis_button_weixin"></a>
						<a class="jiathis_button_tqq"></a>
					</div>
					<script type="text/javascript" >
					var jiathis_config={
						url:"这里是网址哦",
						summary:"这里是内容哦",
						title:"这里是标题哦 #这里是微博话题#",
						shortUrl:false, // 短
						hideMore:false
					}
					</script>
					<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
					<!-- JiaThis Button END -->
				</div>
				<!--
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
				-->
				<div class="user-content">
					<?php the_content(); ?>
				</div>
			</div>
			

			<h3 class="guss">猜你喜欢</h3>

			<div class="border clearfix guss-box">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
				</a>
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
				</a>
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
				</a>
			</div>

			<div class="border clearfix about-box mt-40">
				<div>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ewm.jpg" alt="扫描二维码">
					<p class="notice">关注唯一，了解品牌动态</p>
				</div>
				<div>
					<dl>
						<dd><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icon_phone.png" alt=""></dd>
						<dt>400-000-0000</dt>
					</dl>
					<p>欢迎致电WE唯一钻石定制</p>
					<p>珠宝顾问为您解答任何关于珠宝疑问</p>
					<a href="#" class="btn-or">联系在线客服</a>
				</div>
				<div>
					<dl>
						<dd><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/icon_car.png" alt=""></dd>
						<dt>预约到店</dt>
					</dl>
					<p>留下您的需求</p>
					<p>我们为您提供更多选择</p>
					<a href="#" class="btn-or">现在预约</a>
				</div>
			</div>

		</div>
	</div>

	<?php
			// If comments are open or we have at least one comment, load up the comment template
			/*if ( comments_open() || '0' != get_comments_number() ) :
				comments_template('');

			endif;*/
		endwhile
	?>

<?php get_footer(); ?>