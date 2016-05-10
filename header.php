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
					<a href="/" class="on">首页</a>
				</li>
				<li>
					<a href="/archives/category/cases">经典案例</a>
					<div class="sub-nav clearfix">

<?php
$category = get_category_by_slug( 'cases' ); // 经典案例
$args = array(
	'type'                     => 'post',
	'child_of'                 => $category->term_id,
	'orderby'                  => 'name',
	'order'                    => 'ASC',
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
			'suppress_filters' => false // ??
		);
		$posts = new WP_Query ( $posts_args );
		if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post();
?>		
		<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title() ?></a>

<?php	        
	    		endwhile; endif;
?>	 
	</div>
<?php
	endforeach;
	wp_reset_postdata();
?>
</div>	
				</li>
				<li>
					<a href="/archives/category/series">系列产品</a>
				</li>
				<li>
					<a href="/archives/category/stories">品牌故事</a>
				</li>
				<li>
					<a href="/appointment">WE定制</a>
				</li>
				<li>
					<a href="#">唯一社区</a>
				</li>
				<?php 
					// wp_nav_menu( array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list', 'fallback_cb'     => 'we_wp_page_menu')); 
				?>
			</ul>
		</div>
		