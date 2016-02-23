<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

	<?php if ( get_option('woo_home') == 'true' ) : include (TEMPLATEPATH . '/custom-home.php'); else : ?>

    <div id="content" class="subpage">
	<div class="container">

		<div id="main" class="subpage blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="box1">
				<div class="post clearfix">

					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="txt0"><?php edit_post_link('Edit', '', ''); ?> // <?php the_time('F jS, Y') ?> // <?php comments_popup_link(__('No Comments &#187;', woothemes), __('1 Comment &#187;',woothemes), __('% Comments &#187;',woothemes)); ?> // <?php the_category(', ') ?></p>

					<?php the_content(__('<span class="continue">Continue Reading</span>',woothemes)) ?>

				</div>
				</div>

				<?php get_sidebar(); ?>

			<?php endwhile; ?>

				<div class="navigation nav clearfix">
					<div class="fl"><?php next_posts_link(__('&laquo; Older Entries',woothemes)) ?></div>
					<div class="fr"><?php previous_posts_link(__('Newer Entries &raquo;',woothemes)) ?></div>
				</div>

			<?php else : ?>

				<h2 class='center'><?php _e('No posts found',woothemes); ?>.</h2>

			<?php endif; ?>

		</div><!-- // #main -->

	</div><!-- // .container -->
	</div><!-- // #content -->

	<?php endif; ?>
    
<?php get_footer(); ?>
