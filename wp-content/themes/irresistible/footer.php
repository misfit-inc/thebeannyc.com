	<div id="footer">
		
		<?php
			require TEMPLATEPATH . '/includes/instagram-cosenary.php';
			use MetzWeb\Instagram\Instagram;
		?>
		
		<?php if(is_page('the-bean-fights-back')) { } else { ?>
		
		<div id="footerWrap">
        
        	<div class="container">
				<div id="coffeewarning"></div>
				
				<?php
					$instagram = new Instagram('0a072efb2f9d45b5b2b47b6ce0db7eb6');
					$result = $instagram->getUserMedia(29447247, 8);
				?>
				
				<div class="beangrams">
					<div id="instabean" class="instabean">
						<?php
							$ii = 1;
							foreach ($result->data as $data) {
								$getimg = $data->images->low_resolution->url;
								$getlink = $data->link;
								
								echo '<div class="instabox instabox' . $ii . '"><a target="_blank" href="' . $getlink . '"><img src="' . $getimg . '"/></a></div>';
								$ii++;
							}
						?>
					</div>
				</div>
			</div>
		
		</div><!-- / #footerWrap -->
		
		<?php } ?>
		
		<div id="credits">
			<div class="container">
			
				<div class="findbean">
					<p class="one">
						<span class="loco"><span class="dot"></span> <span class="highlight">54 2nd Ave (corner of East 3rd) East Village NYC</span> <span class="dot mob"></span></span>
						<span class="loco"><span class="dot"></span> <span class="highlight">824 Broadway (corner of East 12th) Union Square NYC</span> <span class="dot"></span></span>
						<span class="loco"><span class="dot"></span> <span class="highlight">147 1st Ave (corner of East 9th) East Village, NYC</span> <span class="dot mob"></span></span>
						<span class="loco"><span class="dot"></span> <span class="highlight">101 Bedford Ave (corner of North 11th) Williamsburg, Brooklyn NY</span> <span class="dot"></span></span>
					</p>
					
					<p class="two">Tell us about an experience you had at one of our shops: <a href="mailto:letusknow@thebeannyc.com">letusknow@thebeannyc.com</a></p>
				</div>
				
				<div class="copyrights">
					<p class="one">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>">The Bean</a>. All rights reserved.</p>
					<p class="two">Baked And Frosted By<a class="misfit-inc" href="http://misfit-inc.com" target="_blank"></a></p>
				</div>
			
			</div>
		</div>
	
	</div><!-- / #footer -->

<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</body>
</html>