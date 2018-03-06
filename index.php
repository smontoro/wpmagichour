<?php
	get_header();
?>


	<header style="background-image: url(<?php echo get_theme_file_uri('/images/paperBoats.jpeg'); ?>); background-size: cover; background-position: center; height: 300px;">
	</header>

	<div class="container text-pink">
		<div class="row py-5">
			<div class="col-6 col-lg-4 mx-auto text-center text-lg-right">
				<img src="http://res.cloudinary.com/irrelevantevan/image/upload/v1506541725/BAUHAUS/logo.png" alt="paper boat" class="p-4 w-100" id="logoImg">
			</div>
			<div class="col-12 col-lg-8 p-5">
				<h5 class="pl-5">Hello.</h5>
				<h2 class="pb-4 pt-2 pl-5">Welcome to the blog</h2>
				<p class="pl-5">Keep up with the latest news</p>
				<button class="btn mt-4 py-3 px-4 d-block text-blue">Learn More</button>
			</div>
		</div>

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


<?php 
	get_footer();
?>