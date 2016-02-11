<?php
/*
Template Name: Index Page
*/
?>

<?php get_header(); ?>

	<?php if ( get_option('woo_home') == 'true' ) : include (TEMPLATEPATH . '/custom-home.php'); else : ?>

	<div id="content" class="homepg">
    
        <div id="main" class="homepg">
        
        	<div style="margin:0 auto -555px; width:229px; height:537px;">
            
            <div class="twitter">
            
                <a target="_blank" href="http://twitter.com/thebeannyc"><span style="display:none;">The Bean Coffee and Tea on twitter</span></a>
            
            </div>
			
			<div class="pinterest">
			
				<a target="_blank" href="http://pinterest.com/thebeannyc"><span style="display:none;">The Bean Coffee and Tea on Pinterest</span></a>
			
			</div>
			
			<div class="instagram">
			
				<a target="_blank" href="http://instagram.com/thebeannyc"><span style="display:none;">The Bean Coffee and Tea on Instagram</span></a>
			
			</div>
            
            <div class="yelp">
            
                <a target="_blank" href="http://www.yelp.com/biz/the-bean-new-york-3"><span style="display:none;">The Bean Coffee and Tea on Yelp</span></a>
            
            </div>
            
            <div class="foursquare">
            
                <a target="_blank" href="https://foursquare.com/v/the-bean/4ee13a16775b24730288e9f3"><span style="display:none;">The Bean Coffee and Tea on foursquare</span></a>
            
            </div>
            
            <div class="tumblr">
            
                <a target="_blank" href="http://thebeannyc.tumblr.com/"><span style="display:none;">The Bean Coffee and Tea on Tumblr</span></a>
            
            </div>
            
            <div class="facebook">
            
                <a target="_blank" href="http://www.facebook.com/thebeannyc"><span style="display:none;">The Bean Facebook Page</span></a>
            
            </div>
            
            <div class="sugarjar">
            
                <a href="#"><span style="display:none;">#</span></a>
            
            </div>
            
        </div>
            
            <div style="margin: 0 auto; width: 980px;">
            
                <div class="wehave">
                
                </div>
                
                <div class="donthave">
                
                </div>
            
            </div>
            
        </div><!-- / #main -->
            
	</div><!-- / #content -->

	<?php endif; ?>
    
<?php get_footer(); ?>