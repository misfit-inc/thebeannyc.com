<input type="checkbox" class="checkbox" name="<?php wptouch_the_tab_setting_name(); ?>" id="<?php wptouch_the_tab_setting_name(); ?>"<?php if ( wptouch_the_tab_setting_is_checked() ) echo " checked"; ?> />	
<label class="checkbox" for="<?php wptouch_the_tab_setting_name(); ?>">
	<?php wptouch_the_tab_setting_desc(); ?>
	
	<?php if ( wptouch_the_tab_setting_has_tooltip() ) { ?>
	<a href="#" class="wptouch-tooltip" title="<?php wptouch_the_tab_setting_tooltip(); ?>">&nbsp;</a>
	<?php } ?>
</label>			
<input type="hidden" name="<?php wptouch_the_tab_setting_name(); ?>-hidden" />