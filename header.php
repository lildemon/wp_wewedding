<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<div>
		<div class="top-nav">
			<ul class="wrapper clearfix">
				<li class="logo" >
					<a href="/" title="WE婚戒定制中心"></a>
				</li>
				<li>
					<a href="/">首页</a> <!-- class="on"  -->
				</li>
				<li>
					<a href="/archives/category/cases">经典案例</a>
					
				</li>
				<li>
					<a href="/archives/category/series">系列产品</a>
					<div class="sub-nav clearfix">
										
						<?php
						$category = get_category_by_slug( 'series' ); // 系列产品
						$args = array(
							'type'                     => 'wegoods',
							'child_of'                 => $category->term_id,
							'order'                    => 'ASC',
							'orderby' 				   => 'term_id',
							'hide_empty'               => FALSE,
							'hierarchical'             => 1,
							'taxonomy'                 => 'category',
						);
						$child_categories = get_categories( $args );
						foreach( $child_categories as $c) :
						?>
							<div>
								<h3><?php echo $c->name; ?></h3>
						<?php
								$posts_args = array(
									'posts_per_page' => 10,   // 推荐列表每个10条
									'cat' => $c->term_id,
									'suppress_filters' => false, // ??
									'post_type' => 'wegoods'
								);
								$original_posts = $posts;
								query_posts($posts_args);
								if( have_posts() ): while( have_posts() ) : the_post();
						?>		
								<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title() ?></a>
						
						<?php	        
							    		endwhile; endif;
						?>	 
							</div>
						<?php
							wp_reset_query();
							endforeach;
							
							
						?>
						</div>
				</li>
				<li>
					<a href="/archives/category/stories">品牌故事</a>
				</li>
				<li>
					<a href="/appointment">WE定制</a>
				</li>
				<?php 
					// wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'we_wp_page_menu')); 
				?>
			</ul>
		</div>
		