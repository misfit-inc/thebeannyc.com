<?php
/*
Template Name: Bakery
*/
global $post;
get_header();?>

    <div id="content" class="subpage">
	
	<div class="lshadow">
	<div class="rshadow">
	
	<div id="main" class="subpage static-page">
	
	<div class="box1 clearfix">
	<div class="post clearfix">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h2 class="hd-page"><img src="<?php bloginfo('url'); ?>/images/<?php echo $post->post_name ?>.jpg" alt="<?php the_title(); ?>" /></h2>
			
			<?php
				$getgallery = get_post_gallery( get_the_ID(), false );
				$getgallery = $getgallery['ids'];
				$getgallery = explode(',', $getgallery);
				$galcnt = count($getgallery);
				$galexact = $galcnt - 1;
			?>

			<div class="innerbox">
				<div class="bakedgoods">
					<div class="ovenfresh">
						<?php
							
							for ($ii = 0; $ii < $galcnt; $ii++) {
								$imgsrc = wp_get_attachment_image_src($getgallery[$ii], 'large', false);
								if ($ii == $galexact) { $stillclass = ' last';} else { $stillclass = '';}
								
								if ($ii == 0 || $ii % 4 == 0) {
									echo '<div class="cupcakefull' . $stillclass . '" style="background-image: url(' . $imgsrc[0] . ');"></div>';
									$boo1 = true;
								} elseif ($boo1) {
									$still1 = '<div class="one" style="background-image: url(' . $imgsrc[0] . ');"></div>';
									$boo1 = false; $boo2 = true;
								} elseif ($boo2) {
									$still2 = '<div class="two" style="background-image: url(' . $imgsrc[0] . ');"></div>';
									$boo2 = false; $boo3 = true;
								} elseif ($boo3) {
									$still3 = '<div class="muffinfull" style="background-image: url(' . $imgsrc[0] . ');"></div>';
									
									$stilledit = '';
									$stilledit .= '<div class="cupcakehalf left' . $stillclass . '"><div class="muffinhalf">';
									$stilledit .= $still1;
									$stilledit .= $still2;
									$stilledit .= '</div>';
									$stilledit .= $still3;
									$stilledit .= '</div>';
									
									echo $stilledit;
									$boo3 = false;
								} else {
									echo 'error!';
								}
								
								// if gallery only reached to $boo2 or $boo3 
								
								if (($ii == $galexact) && ($boo2 || $boo3)) {
									if ($boo2) {
										$stilledit = '';
										$stilledit .= '<div class="cupcakehalf left' . $stillclass . '"><div class="muffinhalf">';
										$stilledit .= $still1;
										$stilledit .= '</div></div>';
										echo $stilledit;
									} elseif ($boo3) {
										$stilledit = '';
										$stilledit .= '<div class="cupcakehalf left' . $stillclass . '"><div class="muffinhalf">';
										$stilledit .= $still1;
										$stilledit .= $still2;
										$stilledit .= '</div></div>';
										
										echo $stilledit;
									} else {
										echo 'error!';
									}
								}
							}
						?>
					</div>
					
					<?php the_content(); ?>
				
				</div>
			</div>
			
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		
		<?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p style="clear:both;">', '</p>'); ?>
		
	</div>
	</div>
	
	</div><!-- / #main -->
	
	</div>
	</div>
	
	</div><!-- / #content -->
    
<?php get_footer(); ?>