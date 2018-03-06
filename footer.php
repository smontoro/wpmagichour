
	<footer class="bg-dark p-5 text-blue">
		<div class="container">
			<div class="row">
				<div class="col-12 d-md-none text-center">
					<h5>What's your project?</h5>
					<h1>Contact Us</h1>
				</div>
				<div class="col-6 col-md-3 text-left">
					<h5>Say hi</h5>
					<ul class="list-unstyled">
						<li>so-and-so@bauhaus.com</li>
						<li>1.800.777.7777</li>
						<li>111 Main St., Suite 11<br>Anytown, FA 59100</li>
					</ul>
				</div>
				<div class="col-6 d-none d-md-block text-center">
					<h5>What's your project?</h5>
					<h1>Contact Us</h1>
				</div>
				<div class="col-6 col-md-3 text-right">
					<h5>Be a sheep</h5>
					<ul class="list-unstyled">
						<?php wp_nav_menu(array(
			    			'theme-location' => 'footer-navigation'
			    		)); ?>
						<!--<li>Twitter</li>
						<li>Instagram</li>
						<li>Dribble</li>
						<li>Facebook</li>
						<li>Behance</li>-->
					</ul>
				</div>
			</div>
		</div>
	</footer>

</div>





	<?php wp_footer(); ?>
</body>
</html?