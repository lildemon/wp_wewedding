
<?php
/*
$post_type = 'post';

// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( (object) array( 'post_type' => $post_type ) );

// or?
$story_sub_terms = get_term_children( $cat_id, 'category' );

foreach( $taxonomies as $taxonomy ) : 

    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );

    foreach( $terms as $term ) : 

        $posts = new WP_Query( "taxonomy=$taxonomy&term=$term->slug&posts_per_page=2" );

        if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post();
            //Do you general query loop here  
        endwhile; endif;

    endforeach;

endforeach;
*/
// http://stackoverflow.com/questions/19500735/get-wordpress-child-category-from-specific-parent
$category = get_category_by_slug( 'stories' ); // 品牌故事
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

?>
<div class="news-box clearfix">
<!-- <h3 class="title">更多推荐</h3> -->
<?php
	foreach( $child_categories as $c) :
?>

		<div class="news">
			<a class="img-box" href="<?php echo get_category_link( $c->term_id ) ?>"><img class="scale" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/story/list_bg_<?php echo $c->slug; ?>.jpg" alt=""></a>
			<!-- 存放图片规则 list_bg_<分类的slug>.jpg -->
			<h3>
				<?php echo $c->name; ?>
				<a href="<?php echo get_category_link( $c->term_id ) ?>">更多&gt;&gt;</a>
			</h3>
			<ul>
<?php		
				$posts_args = array(
					'posts_per_page' => 5,   // 推荐列表每个5条
					'cat' => $c->term_id,
					'suppress_filters' => false // ??
				);
				$posts = new WP_Query ( $posts_args );

				if( $posts->have_posts() ): while( $posts->have_posts() ) : $posts->the_post();
?>			
					<li>
						<a href="<?php echo get_permalink(); ?>">· <?php echo get_the_title() ?></a>
					</li>
<?php	        
	    		endwhile; endif;
?>	    
				
			</ul>
		</div>

<?php
	endforeach;
	wp_reset_postdata();
?>

</div>

