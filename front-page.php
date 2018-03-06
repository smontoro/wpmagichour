<?php
	get_header();
?>

	<div class="container-fluid h-100vh">
		<div class="animated bounceIn" id="introCircle">
		</div>
		<div class="row text-blue h-100vh">
			<div class="col-12 col-lg-6 h-100vh bg-dark p-5">
				<h1 class="vertical-center p-5 animated fadeInLeft" id="tagline">

					<?php 
						$headerTagline = get_theme_mod('header_tagline');
						if( !empty($headerTagline) ){
							echo $headerTagline;
						} else {
							echo 'Passionate folks passionate about crafting engaging digital experiences';
						}
					?>

				</h1>
			</div>
			<div class="col-12 col-lg-6 h-100vh bg-img">
			</div>
		</div>
	</div>

	<div class="container text-pink">
		<div class="row py-5">
			<div class="col-6 col-lg-4 mx-auto text-center text-lg-right">
				<img src="http://res.cloudinary.com/irrelevantevan/image/upload/v1506541725/BAUHAUS/logo.png" alt="paper boat" class="p-4 w-100" id="logoImg">
			</div>
			<div class="col-12 col-lg-8 p-5">
				<h5 class="pl-5">Hello.</h5>
				<h2 class="pb-4 pt-2 pl-5">BAUHAUS is a full-service digital agency. Let us craft meaningful experiences to help your brand stand out on the web.</h2>
				<p class="pl-5">Whatever your business, whoever the user, we'll pinpoint your prime value proposition and help your company grow with a web presence that adapts to user feedback and advocates for your business across all platforms.
				<button class="btn mt-4 py-3 px-4 d-block text-blue">Learn More</button>
			</div>
		</div>
		<div class="row">
			<div class="col-8 pl-5">
				<img src="<?php echo get_theme_file_uri('/images/paperBoats.jpeg'); ?>" alt="BH" id="boats">
			</div>
			<div class="col-4">
				<img src="http://res.cloudinary.com/irrelevantevan/image/upload/v1506541725/BAUHAUS/BH.png" alt="BH" id="BH">
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-8 p-5 mx-auto bottom-20 bg-blue box-shadow">
				<h5 class="px-5 pt-5">Creatives at heart.</h5>
				<h2 class="py-4 px-5">Honest-to-goodness artist-developers who deliver more than just out-of-the-box solutions.</h2>
				<p class="px-5 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies ipsum in sem fermentum, eget venenatis augue laoreet. Morbi lacus mauris, aliquet eu dictum vitae, elementum ut dui. Nulla nibh elit, efficitur eu nisl quis, gravida malesuada lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed molestie leo sit amet tempus tristique. Mauris dolor nunc, convallis vel consectetur hendrerit, fringilla eu lectus. Nulla tincidunt vel elit quis pretium. Pellentesque tincidunt velit at bibendum convallis.</p>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-dark text-blue pb-5">
		<div class="row pt-5">
			<h2 class="pt-3 mx-auto">Satisfied Customers</h2>
		</div>
		<div class="row py-5 px-5 px-md-0 text-center" id="clients">
			<div class="col-4 col-md-2 ml-auto">
				<i class="fa fa-ravelry" aria-hidden="true"></i>
				<h4>Ravelry</h4>
			</div>
			<div class="col-4 col-md-2">
				<i class="fa fa-meetup" aria-hidden="true"></i>
				<h4>Meetup</h4>
			</div>
			<div class="col-4 col-md-2">
				<i class="fa fa-telegram" aria-hidden="true"></i>
				<h4>Telegram</h4>
			</div>
			<div class="col-6 col-md-2 mt-5 mt-md-0">
				<i class="fa fa-linode" aria-hidden="true"></i>
				<h4>Linode</h4>
			</div>
			<div class="col-6 col-md-2 mr-md-auto mt-5 mt-md-0">
				<i class="fa fa-eercast" aria-hidden="true"></i>
				<h4>Eercast</h4>
			</div>
		</div>
	</div>
	<div class="container-fluid py-5 bg-blue text-pink">
		<div class="container py-5">
			<div class="row py-5">
				<div class="col-12 col-lg-6 p-5 mb-5 bg-img bg-img2">
					<h1 class="pl-5 vertical-center multiply">About Us.</h1>
				</div>
				<div class="col-12 col-lg-5 ml-auto pl-5">
					<h5 class="px-5 pt-5">Get in touch.</h5>
					<h2 class="py-4 px-5">We'll make magic happen for your brand.</h2>
					<p class="px-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies ipsum in sem fermentum, eget venenatis augue laoreet. Morbi lacus mauris, aliquet eu dictum vitae, elementum ut dui. Nulla nibh elit, efficitur eu nisl quis, gravida malesuada lacus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				</div>
			</div>			
		</div>
		<div class="container text-center">
			<div class="col-6 col-md-4 col-lg-2 mx-auto h-100vh">
				<div class="vertical-center">
					<img src="http://res.cloudinary.com/irrelevantevan/image/upload/v1506541725/BAUHAUS/logo.png" alt="paper boat" class="w-100" id="bringIt">
					<h5>Bring it.</h5>
				</div>
			</div>
		</div>
	</div>



<?php 
	get_footer();
?>