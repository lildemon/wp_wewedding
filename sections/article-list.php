<div class="artical-list">

	<?php 
		if ( have_posts() ) : 
	
			while ( have_posts() ) : the_post(); 

				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */

				//get_template_part( 'content', get_post_format() );
				
	?>
				
				<div class="artical clearfix">
					<a class="img-box" href="<?php echo get_permalink(); ?>">
						<img class="scale" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
					</a>
					<div class="artical-box">
						<h3><?php the_title(); ?></h3>
						<span>发布时间：<?php the_time(); ?></span>
						<div class="desc">
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php echo get_permalink(); ?>">阅读全文&gt;&gt;</a>
					</div>
				</div>
			
	<?php
			endwhile;
			//zerif_paging_nav();
	?>
			
			<div class="pager">

				<?php echo paginate_links(); ?>

				<!-- <a class="page-last" href="#">&lt;&lt;</a>
				<a class="on" href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#">6</a>
				<a class="page-next" href="#">&gt;&gt;</a> -->
			</div>
	<?php
		else :
		
			//get_template_part( 'content', 'none' ); 
			echo '<h2>该分类下无内容</h2>';
			
		endif; 	
	?>
	
</div>