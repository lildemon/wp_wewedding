<?php get_header(); ?>

		<div class="header">
			<div class="h-bg"></div>
		</div>
		<div class="main">
			<h1>Blog Roll!</h1>
			<?php 
				if ( have_posts() ) :
			
					while ( have_posts() ) : the_post();

						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

						get_template_part( 'content', get_post_format() );

					endwhile;
					
					we_paging_nav();
					
				else :
				
					get_template_part( 'content', 'none' );
					
				endif; 
			?>
		</div>

<?php get_footer(); ?>		