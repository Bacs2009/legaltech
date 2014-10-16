<?php
get_header();
?>

<div id="praktika">

<div class="mpage">
		<div id="mcontent">
		<h1 class="page-title"><?php printf( __( 'Результати пошуку для: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
		<?php if ( have_posts() ) : 
			// Start the Loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );	
			endwhile;
			// Previous/next post navigation.
					twentyfourteen_paging_nav();
			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
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
