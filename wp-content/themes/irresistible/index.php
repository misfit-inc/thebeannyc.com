<?php get_header(); ?>

	<?php if ( get_option('woo_home') == 'true' ) : include (TEMPLATEPATH . '/custom-home.php'); else : ?>

    <div id="content" class="subpage">
    
        <div class="lshadow">
        
            <div class="rshadow">
        
                <div id="main" class="subpage blog">

					<?php if (have_posts()) : ?>
															
					<?php while (have_posts()) : the_post(); ?>

                    <div class="box1">
                        <div class="post clearfix">
                            <h3 class="title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                            <p class="txt0"><?php edit_post_link('Edit', '', ''); ?> <span class="date"><?php the_time('F jS, Y') ?></span> <span class="post-comments"><?php comments_popup_link(__('No Comments &#187;', woothemes), __('1 Comment &#187;',woothemes), __('% Comments &#187;',woothemes)); ?></span></p>
                        
							<?php the_content(__('<span class="continue">Continue Reading</span>',woothemes)) ?>
							
							<ul class="social-media">

								<li class="twitter-tweet">
								
									<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?php the_title(); ?>" data-count="horizontal" data-via="TheBeanNYC" data-related="TheBeanNYC">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
								
								</li>
								
								<li style="float:left; height:21px; width:100px;">
									
									<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;send=true&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
								
								</li>
								
							</ul>
						
							<div class="divider"></div>
    
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
	
				</div><!-- / #main -->
				
			</div>
			
		</div>
        
	</div><!-- / #content -->

	<?php endif; ?>
    
<?php get_footer(); ?>
