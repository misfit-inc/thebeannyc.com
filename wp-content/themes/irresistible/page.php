<?php get_header(); ?>

	<div id="content" class="subpage">
	<div class="container">
		<div id="main" class="subpage static-page">

			<div class="box1 clearfix">

				<div class="post clearfix">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<h2 class="hd-page"><img src="<?php bloginfo('url'); ?>/images/<?php echo $post->post_name ?>.jpg" alt="<?php the_title(); ?>" /></h2>

						<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

					<?php endwhile; endif; ?>

					<?php edit_post_link('Edit this entry.', '<p style="clear:both;">', '</p>'); ?>

				</div>

			</div>

		</div><!-- // #main -->
	</div><!-- // .container -->
	</div><!-- // #content -->

<?php get_footer(); ?>