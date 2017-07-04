<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php include_once('head.php');?>

<body id ="home">

<?php include_once('topOfPage.php');?>

		<div class = "middle">
			

			<div class = "dolbyCinema">
				<!--image sourced from http://www.digitaltrends.com/movies/dolby-amc-announce-dolby-cinema-hdr-atmos/-->
				<img src="dolbycinema2.jpg" alt="Dolby Cinema">
			</div>

			<div class = "allImages">
				<h1><span class="titleOnPages">Grand Re Opening</span></h1>
				<p>Join us at our Grand Re-Opening and take your cinematic experience to the next level! We have new bean bag cinema, and first class experience. We will also have new Dolby Surround Sound, lighting and 3D projection technology and new seating installed.</p>
				<div class ="alignDolbyInfo">
					<p class = "justify">Strategically placed overhead speakers in the cinema combined with audio objects that allow sounds to be projected for a three dimentional space will ensure an immersive experience.</p>
					<p class = "justify">The Dolby 3D technology guarantess the best movie going experience through advanced filter technology for sharper images and 3D glasses for all. This includes glasses that fit comfortably for children and over prescription glasses too.</p>
					<p class = "justify">New cinema seating Our seating will also be upgraded to new plush seats with extra padding and a reclining function for your optimal relaxation.</p>
				</div>	
			</div>

			<div class = "watchingmovie">
				<!--image sourced from http://www.freeimages.com/photo/movie-house-1179538-->
				<img src="watchmovie.jpg" alt="Seats">
				
			</div>

			<div class = "allImages">

				<h1><span class="titleOnPages">Silverado Membership</span></h1>
				<p>Sign Up now and receive tickets to our Grand Re Opening after party</p>
				<p>Subscription members receive advance notice for special events.</p>
			</div>
		</div>

		<div class = "middle2">

			<div class = "allImages2">
				<!-- image sourced from https://pixabay.com/en/popcorn-movie-party-entertainment-1085072/-->
				<a href="ContactForm.php"><img src="contacthome.jpg" alt="Contact Us"></a>
			</div>

			<div class = "allImages2">
				<!-- image sourced from https://pixabay.com/en/popcorn-movie-party-entertainment-1085072/-->
				<a href="BookingForm.php"><img src="bookhome.jpg" alt="Book Now"></a>
			</div>
		</div>

	</section>

	<?php include_once('footer.php');?>

</body>

</html>