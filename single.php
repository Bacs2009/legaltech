<?php
get_header();
?>

<div id="praktika">
<div id="header"><div class="wrap">
   <div id="slide-holder">
<div id="slide-runner">
   <img id="slide-img-1" src="<?php bloginfo('template_url'); ?>/images/1.png" class="slide" alt="" />
   <img id="slide-img-2" src="<?php bloginfo('template_url'); ?>/images/3.png" class="slide" alt="" />
   <img id="slide-img-3" src="<?php bloginfo('template_url'); ?>/images/2.png" class="slide" alt="" />
   <img id="slide-img-4" src="<?php bloginfo('template_url'); ?>/images/4.png" class="slide" alt="" />
   <img id="slide-img-5" src="<?php bloginfo('template_url'); ?>/images/1.png" class="slide" alt="" />
   <img id="slide-img-6" src="<?php bloginfo('template_url'); ?>/images/4.png" class="slide" alt="" />
   <img id="slide-img-7" src="<?php bloginfo('template_url'); ?>/images/2.png" class="slide" alt="" />
</div>
	
	<!--content featured gallery here -->
   </div>
   
   <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"Час, що працює на вас","desc":""},{"id":"slide-img-2","client":"Складова успіху","desc":""},{"id":"slide-img-3","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-4","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-5","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-6","client":"nature beauty","desc":"add your description here"},{"id":"slide-img-7","client":"nature beauty","desc":"add your description here"}];
   </script>
 
  </div></div><!--/header-->
<div class="mpage">
		<div id="mcontent">
            <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );	
				endwhile;
			?>
        </div>
 <script type="text/javascript">
	$('#box3').lionbars();
</script>	
<?php
get_sidebar();
?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php

get_footer();
