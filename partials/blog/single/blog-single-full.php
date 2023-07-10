<div class="row">
	<div class="col-12">
		<?php
		while (have_posts()) :
			the_post();
			get_template_part('template-parts/content', 'single');
		endwhile; // End the loop.

		?>
	</div><!-- .col-xs-12 -->
</div><!-- .row -->