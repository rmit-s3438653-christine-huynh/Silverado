<?php session_start(); ?>
<!DOCTYPE html>
<html>

<?php include_once('head.php');?>

<body id="nowShowingPage">

<?php include_once('topOfPage.php');?>

	<section>

		<div class="movies">
			<!--image sourced from wwww.hoyts.com.au-->
			<div class ="image">
				<img src="zootopia.jpg" alt="Zootopia" style="width:150px;height:200px;">
			</div>
			<div class ="content">
				<h2><span class="title">Zootopia</span></h2> 
				
				<div class="texttwo"> 
					<p>Rating: PG</p>
					<P>Times Showing<p>
						<p>	
							<ul>
								<li>Monday - Tuesday 1pm</li>
								<li>Wednesday - Friday 6pm</li>
								<li>Saturday - Sunday 12pm</li>
							</ul>
						</p>
						<p>Zootopia is a city where various animals live and cohabitate peacefully. However, that is soon to change. </p>
						<details>
							<summary>Find out more</summary>
						</p>
						Recently, there have been suspicious disappearances of civilians living within the city. Only the unlikely partnership between a rabbit police officer and a red fox con artist can uncover this mystery.
					</p>

					<p><a href="BookingForm.php"class = "button">Book Now</a></p>
				</details>
				
			</div>
		</div>
	</div>

	<div class="movies">
		<!--image sourced from wwww.hoyts.com.au-->
		<div class ="image"><img src="papaoumaman.jpg" alt="Papa Ou Maman" style="width:150px;height:200px;"></div>
		<div class = "content">
			<h2><span class="title">Papa ou Maman</span></h2>
			<div class="texttwo">
				<p>Rating: PG</p>
				<P>Times Showing<p>
					<p>	
						<ul>
							<li>Monday - Tuesday 6pm</li>
							<li>Saturday - Sunday 3pm</li>
						</ul>
					</p>
					<p>Florence and Vincent are divorcing and neither of them want custody of the children. 
						<details>
							<summary>Find out more</summary>
							<p>
								Florence and Vincent have both been given the opportunity of their lifetime. A promotion, that involves moving abroad. But who will take the kids? Drama ensures as both parents try to convince the kids the other would be better able to take care of them.
							</p>
							<p><a href="BookingForm.php"class = "button">Book Now</a></p>
						</details>
					</div>

				</div>
			</div>
		</div>

		<div class="movies">
			<!--image sourced from wwww.hoyts.com.au-->
			<div class ="image"><img src="howtobesingle.jpg" alt="How to Be Single" style="width:150px;height:200px;"></div>
			<div class ="content">
				<h2><span class="title">How to Be Single</span></h2>
				<div class="texttwo">
					<p>Rating: R</p>
					<P>Times Showing<p>
						<p>	
							<ul>
								<li>Monday - Tuesday 9pm</li>
								<li>Wednesday - Friday 1pm</li>
								<li>Saturday - Sunday 6pm</li>
							</ul>
						</p>
						<p>Being a single girl in New York was never so fun! 
							<details>
								<summary>Find out more</summary>
								<p>
									This romantic comedy follows the dating highs and lows of Alice, Robin, Meg and Lucy. Alice, has just broken up with her boyfriend of four years to move to New York. While, Robin, Alice's colleague takes advantage of the single lifestyle and New York nightlife whenver she can. Meg, Alice's sister, on the other hand, is looking to settle down and start a family. Lastly, Lucy is looking for Mr. Right.
								</p>
								<p><a href="BookingForm.php"class = "button">Book Now</a></p>
							</details>
						</div>
					</div>
				</div>

				<div class="movies">
					<!--image sourced from wwww.hoyts.com.au-->
					<div class ="image"><img src="deadpool.jpg" alt="Deadpool" style="width:150px;height:200px;"></div>
					<div class ="content">
						<h2><span class="title">Deadpool</span></h2>
						<div class="texttwo">
							<p>Rating: R</p>
							<P>Times Showing<p>
								<p>	
									<ul>
										<li>Wednesday - Friday 9pm</li>
										<li>Saturday - Sunday 9pm</li>
									</ul>
								</p>
								<p>Wade Wilson works as a mercenary after leaving Special Forces. 
									<details>
										<summary>Find out more</summary>
										<p>
											Wilson is recruited to join a secret program, to cure his cancer. He leaves the program with accelerated healing power and adopts the alterego "Deadpool". 
										</p>
										<p><a href="BookingForm.php"class = "button">Book Now</a></p>
									</details>
								</div>
							</div>
						</div>
					</div>
				</section>

				<?php include_once('footer.php');?>

			</body>