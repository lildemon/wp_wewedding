<?php get_header(); ?>
	<?php get_template_part( 'sections/slogan-header' ); ?>
		
	<div class="main">
		<div class="main artical">
			<div class="wrapper">
				<?php we_breadcrumb() ?>
				
				<?php 
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();

							if( in_category('cases') ) : // 经典案例文章样式
								get_template_part( 'content', 'case' );

							else :
								get_template_part( 'content' ); // 默认文章形式 
							endif;

						endwhile;
					
					else :

						get_template_part( 'content', 'none' );

					endif;

				?>
			</div>
		</div>
		

	</div>

<?php get_footer(); ?>		