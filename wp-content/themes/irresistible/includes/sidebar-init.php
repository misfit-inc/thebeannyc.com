<?php

// Register widgetized areas

function the_widgets_init() {
    if ( !function_exists('register_sidebars') )
        return;

    	register_sidebars(1,array('name' => 'Sidebar','before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>'));
	    register_sidebar(array( 'name' => 'Footer Sidebar','id' => 'footer-sidebar','description' => "Footer Sidebar", 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '<span class="arrow"></span></h3>'));  
    
}

add_action( 'init', 'the_widgets_init' );


    
?>