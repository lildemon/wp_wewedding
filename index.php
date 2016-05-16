<?php get_header(); ?>
	<?php //get_template_part( 'sections/slogan-header' ); ?>
		
<?php 
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			$c = get_category_by_slug( 'cases' );
			if( post_is_in_descendant_category($c->term_id) ) : // 经典案例文章样式
				get_template_part( 'content', 'case' );

			else :
				get_template_part( 'content' ); // 默认文章形式 
			endif;

		endwhile;
	
	else :

		get_template_part( 'content', 'none' );

	endif;

?>

<?php get_footer(); ?>		