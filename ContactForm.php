<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php include_once('head.php');?>

<body id="contactUsPage">

<?php include_once('topOfPage.php');?>

	<section>
		<div class ="ContactFormHeading">
			<!-- image sourced from https://pixabay.com/-->
			<img src="contactusheading.jpg" alt="Contact Us" width ="558px">
		</div>

		<div class ="ContactForm">
			<!--within in the h1 tag?-->
			<form action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method = "post">
				
				<p>Email:</p>
				<input type = "email" pattern="[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name = "email" required>
				
				<p>Subject:</p>
				
				<div class ="alignSubject">
					<p><input type ="radio" name ="subject" value="General Enquiry" required>  
						General Enquiry</p>
						
						<p><input type ="radio" name ="subject" value="Group Corporate Bookings" required>  Group and Corporate Bookings</p>
						
						<p><input type ="radio" name ="subject" value="Suggestions & Complaints" required>  Suggestions & Complaints
						</div></p>

						<p>Message:</p>
						<textarea name ="message"required></textarea>
						
						<input type="submit" class ="button" value ="Submit"/>
						
					</form>
				</div>

			</section>

		<?php include_once('footer.php');?>

		</body>

		</html>