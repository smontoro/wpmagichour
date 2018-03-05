<?php

	get_header('page');

	while(have_posts()) {
		the_post();
	?>

		<h4><?php the_title(); ?></h4>
		<p><em><?php the_content(); ?></em></p>
	<?php }

	get_footer();

?>