<div id="videos">

    <h3 id="myVideos" class="replace">My videos. Featured videos.</h3>

    <div class="box1" id="video">
        
        <?php query_posts('tag=video&showposts=1'); ?>
        
        <?php while (have_posts()) : the_post(); ?>
    
        <?php echo woo_get_embed('embed', '354', '280');  ?>
        
        <?php endwhile; ?>
    
    </div><!--box1-->

</div><!--videos-->
