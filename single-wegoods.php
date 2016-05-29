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
					<!-- <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
					<a class="jiathis_counter_style"></a> -->
					</div>
					<script type="text/javascript" >
					var jiathis_config={
						summary:"",
						shortUrl:false,
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


			<?php
				$cats = wp_get_post_categories($post->ID);
			if ($cats) {
				$cat = get_category( $cats[0] );
				$first_cat = $cat->category_parent;
				$args = array(
					'category__in' => array($first_cat),
					'post__not_in' => array($post->ID),
					'showposts' => 3,
					'post_type' => 'wegoods',
					'orderby' => 'rand',
					'ignore_sticky_posts' => true);

				query_posts($args);
				
			if (have_posts()) : ?>
				<div class="border clearfix guss-box">
				<?php while (have_posts()) : the_post(); update_post_caches($posts); ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();
					?>">
						<?php the_post_thumbnail('full'); ?>
					</a>
				<?php endwhile; ?>
				</div>
				<?php else : ?>
					<li>* 暂无相关文章</li>
			<?php endif; wp_reset_query(); } ?>

			<!-- <div class="border clearfix guss-box">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
				</a>
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
				</a>
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/pic/goods/goods1.jpg" alt="">
				</a>
			</div> -->

			<?php get_template_part( 'sections/goods-contact' ); ?>

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