<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/LocalBusiness">
<head profile="http://gmpg.org/xfn/11">

<title>
<?php if ( is_home() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
<?php if ( is_search() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
<?php if ( is_author() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<?php bloginfo('name'); ?><?php } ?>
<?php if ( is_page() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
<?php if ( is_category() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
<?php if ( is_month() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
</title>

<meta property="fb:app_id" content="{207466905854}"/>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" /><![endif]-->
<!--[if IE 6]>
<script src="<?php bloginfo('template_directory'); ?>/includes/js/pngfix.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/includes/js/menu.js"></script>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="icon" href="coffeeico.png" type="image/png">

<?php wp_head(); ?>

<script type="text/javascript"> 
  jQuery("#idTabs").idTabs(); 
</script>

<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30708813-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body id="woothemes">

<!--	<!?php if (is_front_page()) { ?>
	
		<a class="supportthebean" href="/the-bean-fights-back"><span class="dn">Support The Bean</span></a>
	
	<!?php } else {} ?> -->
	

    <div class="rays">
    
    </div>

    <div id="header">
    
        <div class="beansteam">
        
        </div>
    
        <ul id="nav" class="nav">
		
			<?php 
				$argsNav1 = array(
					'menu' => 'Left Side Menu',
					'menu_class' => 'nav-menu nav-lsm',
					'container' => '',
				);
				wp_nav_menu($argsNav1);
			?>
			
			<?php 
				$argsNav2 = array(
					'menu' => 'Right Side Menu',
					'menu_class' => 'nav-menu nav-rsm',
					'container' => '',
				);
				wp_nav_menu($argsNav2);
			?>

        </ul>
        
        <div id="logo">
        
            <a href="<?php bloginfo('url'); ?>"><span style="display:none;">Blog URL</span></a>
        
        </div>
        
        <?php if (is_home()) { ?>
        
            <div class="pssst">
            
            </div>
		
        <?php } elseif (is_page('the-bean-fights-back')) { ?>
		
		<div class="thebeanfights">
		
		</div>
		
		<div class="readbelow">
	
		</div>
		
		<?php } else {} ?>
		
    </div>