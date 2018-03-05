<?php

	get_header();

	while(have_posts()) {
		the_post();
	?>

		<header style="background-image: url(<?php echo get_theme_file_uri('/images/paperBoats.jpeg'); ?>); background-size: cover; background-position: center; height: 300px;">
		</header>


		<?php 
			$theParent = (wp_get_post_parent_id(get_the_ID()));

			if($theParent) { ?>
			<!--BREADCRUMBS-->
			<div style="margin-bottom: 30px; background-color: #FAF0CA">
				<p><a href="#" style="background-color: #0D3B66; color: #FFF; display: inline-block; padding: 10px 15px;"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title(wp_get_post_parent_id(get_the_ID())); ?>
				 </a> 
				 <span style="padding: 10px 15px 10px 11px;"><?php the_title(); ?></span></p>
			</div>

			<?php }

			?>


		<h2 class="p-5"><?php the_title(); ?></h2>
		<div class="p-5">
			<p><em><?php the_content(); ?></em></p>

				<?php
					$testArray = get_pages(array(
						'child_of' => get_the_ID()
					));
					if($theParent or $testArray) {

						?>


			<!--SIDEBAR-->
			<div style="marin: 0 0 40px 20px; width: 300px; float: right; position: relative; z-index: 1; background-color: #FAF0CA; text-align: center;">
			<h2 style="color: #FFF; padding: 20px 0;"><a href="#">About Us</a></h2>
			<ul style="padding: 0; margin: 0; list-style-type: none;">

				<?php 
					if($theParent) {
						$findChildrenOf = $theParent;
					} else {
						$findChildrenOf = get_the_ID();
					};
					wp_list_pages(array(
						'title_li' => NULL,
						'child_of' => $findChildrenOf
					));

				?>
			</ul>
		</div>

		<?php }

		?>





		</div>


		





	<?php }

	get_footer();

?>