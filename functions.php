<?php

function we_setup() {
	/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support('post-thumbnails');
		add_theme_support( 'title-tag' );


		/* Set the image size by cropping the image */
		add_image_size('post-thumbnail', 250, 250, true);

		/* Register primary menu */
		register_nav_menus(array(
				'primary' => __('Primary Menu', 'we'),
		));

		/* Enable support for Post Formats. */
		//add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link', 'wegoods'));

		/* Setup the WordPress core custom background feature. */
		add_theme_support('custom-background', array(
				'default-color' => 'ffffff',
				'default-image' => get_stylesheet_directory_uri() . "/dist/images/top_bg.jpg",
		));

		/* Enable support for HTML5 markup. */
		add_theme_support('html5', array(
				'comment-list',
				'search-form',
				'comment-form',
				'gallery',
		));

		/* Custom template tags for this theme. */
	require get_template_directory() . '/inc/template-tags.php';
	
		/* Customizer additions. */
	require get_template_directory() . '/inc/customizer.php';
}
add_action('after_setup_theme', 'we_setup');

/**
 * 注册边栏  and update sidebar with default widgets.
 */
function we_widgets_init() {    

	register_sidebar(array(
				'name' => '二级页边栏',
				'id' => 'sidebar-1',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget' => '</aside>',
				'before_title' => '<h2 class="widget-title">',
				'after_title' => '</h2>',
		));

	/*
		register_sidebar(array(
				'name' => '团队和品牌栏',
				'id' => 'sidebar-aboutus',
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '<h1 class="widget-title">',
				'after_title' => '</h1>',
		));

		register_sidebars( 
				3, 
				array(
						'name'          => '页脚Widget区域',
						'id'            => 'zerif-sidebar-footer',
						'before_widget' => '<aside id="%1$s" class="widget footer-widget-footer %2$s">',
						'after_widget'  => '</aside>',
						'before_title'  => '<h1 class="widget-title">',
						'after_title'   => '</h1>'
				) 
		);
		*/
}
add_action('widgets_init', 'we_widgets_init');

/**
 * 载入脚本和样式
 */
function we_scripts() {
	wp_enqueue_style('we_style', get_template_directory_uri() . '/dist/css/style.css');
	wp_enqueue_script('jquery');
	wp_enqueue_script('we_comm', get_template_directory_uri() . '/dist/js/comm.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'we_scripts');

/**
 * 默认菜单，显示静态页列表
 */
function we_wp_page_menu() {
	wp_list_pages(array('title_li' => '', 'depth' => 1, 'sort_column' => 'post_date'));
}

/**
 * 注册微件
 */

function we_register_widgets() {
	register_widget('we_show_widget');

	// 首页栏位
	register_sidebar(array(
				'name' => '团队和品牌栏',
				'id' => 'sidebar-aboutus',
				'before_widget' => '',
				'after_widget' => ''
		));
}
add_action('widgets_init', 'we_register_widgets');

// we_show 微件
function we_show_widget_scripts() {
	wp_enqueue_media();
	wp_enqueue_script('we_show_widget_scripts', get_template_directory_uri() . '/js/widget-show.js', false, false, true);
}
add_action('admin_enqueue_scripts', 'we_show_widget_scripts');

class we_show_widget extends WP_Widget{
	public function __construct() {
		parent::__construct(
			'we_show-widget',
			'We Show 微件'
		);
	}

	function widget($args, $instance) {
		extract($args);
				echo $before_widget;
				?>
				<li>
			<a href="#">品牌故事>></a>
		</li>
		<?php
				echo $after_widget;
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['image_uri'] = strip_tags($new_instance['image_uri']);

		return $instance;
	}

	function form($instance) {
		?>
		<h2>设置We Show</h2>
		<?php
	}

}

/* remove custom-background from body_class() */

add_filter( 'body_class', 'remove_class_function' );
function remove_class_function( $classes ) {
	// index of custom-background
		$key = array_search('custom-background', $classes);
		// remove class
		unset($classes[$key]);
		return $classes;

}


/*
 * 自定义Post类型
 */

add_action( 'init', 'we_create_wegoods_type' );
function we_create_wegoods_type() {
		 $labels = array(
		'name' => '商品',
		'singular_name' => '商品',
		'add_new' => '新增',
		'add_new_item' => '新增商品',
		'edit_item' => '编辑商品',
		'new_item' => '新商品',
		'view_item' => '查看商品',
		'search_items' => '搜索商品',
		'not_found' =>  '没找到商品',
		'not_found_in_trash' => '回收站里没找到商品',
		'parent_item_colon' => ''
	);

	$supports = array('title', 'editor', 'thumbnail', 'comments');
	$taxonomies = array('category', 'post_tag');

	register_post_type( 'wegoods',
		array(
			'labels' => $labels,
			'public' => true,
			'supports' => $supports,
			'taxonomies' => $taxonomies,
			'has_archive' => true,
			'hierarchical' => true,
			'menu_icon' => 'dashicons-cart',
			'rewrite' => array(
						'slug' => 'goods',
						'with_front' => true
				)
		)
	);
}

/*
 * 声明 piklist 依赖
 */
add_action('init', 'we_piklist_check');
function we_piklist_check()
{
	if(is_admin())
	{
	 include_once('piklist/class-piklist-checker.php');
 
	 if (!piklist_checker::check(__FILE__, 'theme'))
	 {
		 return;
	 }
	}
}


/*
 * 面包屑
 */
function we_breadcrumb() {
		echo '<div class="site">您的位置： ';
	if (!is_home()) {
		echo '<span><a href="';
		echo get_option('home');
		echo '">';
		echo '首页';
		echo "</a></span>";
		if (is_category() || is_single()) {
			echo ' &gt; <span>';
			the_category(' </span> &gt; <span> ');
			if (is_single()) {
				echo "</span> &gt; <span>";
				the_title();
				echo '</span>';
			}
		} elseif (is_page()) {
			echo ' &gt; <span>';
			echo the_title();
			echo '</span>';
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo" &gt; <span>存档： "; the_time('F jS, Y'); echo'</span>';}
	elseif (is_month()) {echo" &gt; <span>存档： "; the_time('F, Y'); echo'</span>';}
	elseif (is_year()) {echo" &gt; <span>存档： "; the_time('Y'); echo'</span>';}
	elseif (is_author()) {echo" &gt; <span>作者存档： "; echo'</span>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo " &gt; <span>存档"; echo'</span>';}
	elseif (is_search()) {echo" &gt; <span>搜索结果"; echo'</span>';}
	echo '</div>';
}


/**
 * Tests if any of a post's assigned categories are descendants of target categories
 *
 * @param int|array $cats The target categories. Integer ID or array of integer IDs
 * @param int|object $_post The post. Omit to test the current post in the Loop or main query
 * @return bool True if at least 1 of the post's categories is a descendant of any of the target categories
 * @see get_term_by() You can get a category by name or slug, then pass ID to this function
 * @uses get_term_children() Passes $cats
 * @uses in_category() Passes $_post (can be empty)
 * @version 2.7
 * @link http://codex.wordpress.org/Function_Reference/in_category#Testing_if_a_post_is_in_a_descendant_category
 */
if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
    function post_is_in_descendant_category( $cats, $_post = null ) {
        foreach ( (array) $cats as $cat ) {
            // get_term_children() accepts integer ID only
            $descendants = get_term_children( (int) $cat, 'category' );
            if ( $descendants && in_category( $descendants, $_post ) )
                return true;
        }
        return false;
    }
}

/*
 * 可以去除图片间的<br>
 */
remove_filter( 'the_content', 'wpautop' );