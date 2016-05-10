<?php
/*
	普通文章页
 */
?>

<div class="main">
		<div class="main artical">
			<div class="wrapper">

				<?php we_breadcrumb() ?>
				<div class="ar-content clearfix">
					<div class="ar-box">
						<h3><?php the_title(); ?></h3>
						<span><?php the_time(); ?></span>
						<div class="user-content">
							<?php the_content(); ?>
						</div>
					</div>
					<div class="fixed-box">
						<div class="box jd">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png">
							<a href="/archives/category/cases">查看经典案例</a>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/story/img.png">
						</div>
						<div class="box hot">
							<h3>热点推荐</h3>
							<div class="link">
								<a href="#"><span>1.</span>WE福清店盛大开幕</a>
								<a href="#"><span>2.</span>WE福清店盛大开幕</a>
								<a href="#"><span>3.</span>WE福清店盛大开幕</a>
								<a href="#"><span>4.</span>WE福清店盛大开幕</a>
								<a href="#"><span>5.</span>WE福清店盛大开幕</a>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>

			</div>
		</div>
	</div>
