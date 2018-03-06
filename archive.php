<?php
	get_header();
?>


	<header style="background-image: url(<?php echo get_theme_file_uri('/images/paperBoats.jpeg'); ?>); background-size: cover; background-position: center; height: 300px;">
	</header>

	<div class="container text-pink">
		<div class="row">

			<div class="col-12 col-lg-8 p-5">
				<h1><?php 
					single_cat_title(); ?>
				</h1>
				<p class="pl-5"><?php the_archive_description(); ?></p>
				<button class="btn mt-4 py-3 px-4 d-block text-blue">Learn More</button>
			</div>
		</div>


	<div class="p-5">
		<?php 
			while(have_posts()) {
				the_post(); ?>

				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="small">Posted by <?php the_author_posts_link(); ?> in <?php echo get_the_category_list(' | '); ?> on <?php the_time('n-j-y'); ?></p>
				<p><?php the_excerpt(); ?></p>

			<?php }

			echo paginate_links();
		?>	
	</div>
	
	
</div>


<?php 
	get_footer();
?>