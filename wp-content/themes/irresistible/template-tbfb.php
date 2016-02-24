<?php
/*
Template Name: tbfb
*/
?>

<?php get_header(); ?>

	<?php if ( get_option('woo_home') == 'true' ) : include (TEMPLATEPATH . '/custom-home.php'); else : ?>

	<div id="content" class="homepg">
	
        <div id="main" class="tbfb">
		
			<div class="clearfix" style="margin-bottom: 20px;">
                    
				<div class="post clearfix">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
					
					<div class="pleaseshareour">
					
						<h3 class="dn">Please share our story</h3>
						
						<div class="tbw-rej">
							<div class="thebeanwarrior"><img src="<?php bloginfo('template_url'); ?>/images/the-bean-fights-back/the-bean-warrior.png"/></div>
							<div class="redeyedjoe"><img src="<?php bloginfo('template_url'); ?>/images/the-bean-fights-back/red-eyed-joe.png"/></div>
						</div>
						
						<div class="psos"><img src="<?php bloginfo('template_url'); ?>/images/the-bean-fights-back/please-share-our.png" /></div>
						
						<ul class="social-media">
						
							<li class="twitter-tweet">
							
								<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-text="<?php the_title(); ?>" data-url="<?php the_permalink() ?>" data-via="thebeannyc">Tweet</a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
							
							</li>
							
							<li class="facebook-share">
							
								<div id="fb-root"></div>
								<script>(function(d, s, id) {
								  var js, fjs = d.getElementsByTagName(s)[0];
								  if (d.getElementById(id)) {return;}
								  js = d.createElement(s); js.id = id;
								  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
								  fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>

								<div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="true" data-layout="button_count" data-width="150" data-show-faces="false"></div>
							
							</li>
							
							<li class="google-plusone">
			
								<div class="g-plusone" data-size="medium" data-annotation="none" data-href="<?php the_permalink(); ?>"></div>
								
								<script type="text/javascript">
								  (function() {
									var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
									po.src = 'https://apis.google.com/js/plusone.js';
									var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
								  })();
								</script>
							
							</li>
							
						 </ul>
			
					</div>
					

					
					<?php endwhile; endif; ?>
					
				</div>
				
			</div>
            
		</div><!-- / #main -->
		
		<div class="cardboard">
		
			<div class="getnotified"><img src="<?php bloginfo('template_url'); ?>/images/the-bean-fights-back/get-notified.png" /><span class="dn">Get notified when we launch our new store!</span></div>
			
			<div class="container">

				<!-- Begin MailChimp Signup Form -->
				<!--[if IE]>
				<style type="text/css" media="screen">
					#mc_embed_signup fieldset {position: relative;}
					#mc_embed_signup legend {position: absolute; top: -1em; left: .2em;}
				</style>
				<![endif]--> 
				<!--[if IE 7]>
				<style type="text/css" media="screen">
					.mc-field-group {overflow:visible;}
				</style>
				<![endif]-->
				<script src="/wp-content/themes/irresistible/includes/js/jquery-1.4.2.min.js" type="text/javascript"></script>
				<script src="/wp-content/themes/irresistible/includes/js/script.js" type="text/javascript"></script>

				<div id="mc_embed_signup" class="tbfbform">
				
					<form target="_blank" class="validate" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" method="post" action="http://thebeannyc.us2.list-manage1.com/subscribe/post?u=e83a63caee47b19436c1c1d8c&amp;id=36d36d761d">
						<fieldset>
							<div class="form-input">
								<div class="mc-field-group">
									<label for="mce-FNAME">FIRST NAME</label>
									<input type="text" id="mce-FNAME" class="required inactive" name="FNAME" value="">
								</div>
								
								<div class="mc-field-group">
									<label for="mce-EMAIL">EMAIL</label>
									<input type="text" id="mce-EMAIL" class="required email inactive" name="EMAIL" value="">
								</div>
							</div>

							<div id="mce-responses">
								<div id="mce-error-response" class="response"></div>
								<div id="mce-success-response" class="response"></div>
							</div>
							
							<div class="mc-field-submit">
								<input type="submit" class="btn button" id="mc-embedded-subscribe" name="subscribe" value="">
							</div>
							<!-- <p style="color: #fff;display: block;float: right;font-size: 0.9em;margin-left: 587px;margin-right: 9px;margin-top: 41px; position: absolute;text-align: right;">Powered by <a style="color: #F0C001; text-decoration: underline;" title="MailChimp - email marketing made easy and fun" href="http://eepurl.com/bfwkI">MailChimp</a></p> -->
						</fieldset>	
						<a style="display: none;" class="mc_embed_close" id="mc_embed_close" href="#">Close</a>
					</form>
				</div>

			</div>
			
		</div>
		
		<div class="bottom-content tbfb">
		
			<div class="doyouthink"><img src="<?php bloginfo('template_url'); ?>/images/the-bean-fights-back/do-you-think.png" /></div>
			
			<div class="comments">
			
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) {return;}
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<div class="fb-comments" data-href="thebeannyc.com" data-num-posts="10"></div>
			
			</div>
		
		</div>
            
	</div><!-- / #content -->

	<?php endif; ?>
    
<?php get_footer(); ?>
