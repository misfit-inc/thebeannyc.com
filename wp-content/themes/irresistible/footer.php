	<div id="footer">
		
		<?php if(is_page('the-bean-fights-back')) { } else { ?>
		
		<div id="footerWrap">
        
        	<div style="width:980px; margin:0 auto; ">
            
                <div id="coffeewarning">
                
                </div>
				
            </div>
            
        	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Sidebar') )  ?>
		
		</div><!-- / #footerWrap -->
		
		<?php } ?>
        
        <div id="credits">
        
        	<p id="copy" style="float:left;">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>">The Bean</a>. All rights reserved.</p>
            <p id="right" style="float:right;">Baked And Frosted By<a class="misfit-inc" href="http://misfit-inc.com" target="_blank"></a></p>
        
        </div>
	
	</div><!-- / #footer -->

<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</body>
</html>