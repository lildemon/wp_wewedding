<?php 

function we_paging_nav() {

	echo '<div class="clear"></div>';

	?>

	<nav class="navigation paging-navigation" role="navigation">

		<h2 class="screen-reader-text"><?php _e( 'Posts navigation', 'zerif-lite' ); ?></h2>

		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>

			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'zerif-lite' ) ); ?></div>

			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>

			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'zerif-lite' ) ); ?></div>

			<?php endif; ?>

		</div><!-- .nav-links -->

	</nav><!-- .navigation -->

	<?php

}