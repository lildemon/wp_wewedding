<?php get_header(); ?>
	<?php get_template_part( 'sections/slogan-header' ); ?>
		
	<div class="main">
		<div class="main artical">
			<div class="wrapper">
				<?php we_breadcrumb() ?>
				
				<div class="ar-content clearfix">
					<div class="ar-box">
						<?php 
						
						if ( have_posts() ) :
					
							while ( have_posts() ) : the_post();
						?>
							<h3><?php the_title(); ?></h3>
							<span><?php the_time(); ?></span>
							<div class="user-content">
								<?php the_content(); ?>
							</div>
						<?php
								
								// original way, use content based on post format
								//get_template_part( 'content', get_post_format() );

							endwhile;
							
							//we_paging_nav();
							
						else :
						
							get_template_part( 'content', 'none' );
							
						endif; 
						
						?>
						
					</div>
					<div class="fixed-box">
						<div class="box jd">
							<img src="images/logo.png">
							<a href="#">查看经典案例</a>
							<img src="images/story/img.png">
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
				</div>
			</div>
		</div>
		

	</div>

<?php get_footer(); ?>		