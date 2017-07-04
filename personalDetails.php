<?php session_start(); ?>

<?php

if (!empty($_POST)){
	$_SESSION = $_POST;
	}

header("https://titan.csit.rmit.edu.au/~s3423641/wp/a2/confirmationPage.php");
?>

<!DOCTYPE html>
<html>

<?php include_once('head.php');?>

<body id="contactUsPage">

<?php include_once('topOfPage.php');?>

	<section>
		<div class ="ContactFormHeading">
			<!-- image sourced from https://pixabay.com/-->
			<img src="yourDetails.png" alt="Contact Us" width ="558px">
		</div>

		<div class ="ContactForm">
			<!--within in the h1 tag?-->
			<form action="confirmationPage.php" method = "post">
				
				<p>Email:</p>
				<input type = "email" pattern="[a-z0-9._+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name = "email" required>
				
				<p>Name:</p>
				<input type = "text" pattern="^[a-zA-Z\-.\' ]+$" name = "name" required>

				<p>Mobile Number:</p>
						<input type ="text" pattern="^(\(04\)|04|\+614)([ ]?\d){8}$" name ="mobileNumber"required></input>
				
				<div class ="alignSubject">
					
						
						
						<input type="submit" class ="button" value ="Submit"/>
						
					</form>
				</div>

			</section>

			<?php include_once('footer.php');?>

		</body>

		</html>