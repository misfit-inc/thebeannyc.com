<div id="sidebar" <?php if ( get_option('woo_mainright') == 'true' ) echo 'class="fl"'; ?>>

    <div class="widgetized">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) )  ?>	
    </div>	           

    <?php if ( get_option('woo_video') == 'false' ) include ( TEMPLATEPATH . "/includes/video.php" ); ?>

    <?php if ( get_option('woo_tabs') == 'false' ) include ( TEMPLATEPATH . "/includes/tabs.php" ); ?>
    
    <div class="widgetized">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) )  ?>	
    </div>	           
                
</div>
			