<?php
get_header();
/*
Template name: contacts
*/
?>


<div id="praktika">
<div class="mpage">
	<div id="mcontent">
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );	
			endwhile;
		?>
	</div>
</div>
</div>

<?php

get_footer();