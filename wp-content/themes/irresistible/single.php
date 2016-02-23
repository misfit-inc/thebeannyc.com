<?php get_header(); ?>

	<div id="content" class="subpage">
	<div class="container">
		<div id="main" class="subpage blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="box1">
					<div class="post clearfix">

						<h3 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<p class="txt0"><?php edit_post_link('Edit', '', ''); ?> <span class="date"><?php the_time('F jS, Y') ?></span> <span class="post-comments"><?php comments_popup_link(__('No Comments &#187;', woothemes), __('1 Comment &#187;',woothemes), __('% Comments &#187;',woothemes)); ?></span></p>

						<?php the_content(__('<span class="continue">Continue Reading</span>',woothemes)) ?>

			<?php endwhile; endif; ?>

					</div>

					<?php comments_template(); ?>

				</div>

				<?php get_sidebar(); ?>

		</div><!-- // #main -->

	<?php get_sidebar(); ?>

	</div><!-- // .container -->
	</div><!-- // #content -->

<?php get_footer(); ?>