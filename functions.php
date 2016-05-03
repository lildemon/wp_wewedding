<?php

function we_setup() {
	/*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support('post-thumbnails');

    /* Set the image size by cropping the image */
    add_image_size('post-thumbnail', 250, 250, true);

    /* Register primary menu */
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'we'),
    ));

    /* Enable support for Post Formats. */
    add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

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