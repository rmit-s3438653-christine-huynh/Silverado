<?php session_start(); ?>

<?php

if (!empty($_POST)){
	$resv = $_POST;
	$seatPrices = array (
		'Discount'=> array(
	'sa' => 12.00,
	'sp' => 10.00,
	'sc' => 8.00,
	'fa' => 25.00,
	'fc' => 20.00,
	'b1' => 20.00,
	'b2' => 20.00,
	'b3' => 20.00),

		'Standard' => array(
	'sa' => 18.00,
	'sp' => 15.00,
	'sc' => 12.00,
	'fa' => 30.00,
	'fc' => 25.00,
	'b1' => 30.00,
	'b2' => 30.00,
	'b3' => 30.00),
	);

	$subtotal=0.00;

	$price;
	
		if ($resv['day'] == 'Monday'|| $resv['day']== 'Tuesday'|| $resv['time'] == '1pm'){
			$price ='Discount';
		}
		else {
			$price = 'Standard';
		}

	if (isset($resv['seats'])) {
		$_SESSION["debug"] = $price;

		// what type of session it is: full / discount
		$resv['rate'] = $price;
		// loop through each booked seat
		foreach ($resv['seats'] as $type =>$qty){
			if ($qty==0){
				// if seats booked is 0, remove from array
				unset($resv['seats'][$type]);
			} else {
				// adding the price to the subtotal
				$subtotal += $qty * $seatPrices[$price][$type];
				}
		}
	} else {
		$subtotal = 0;
	}
		$resv['st'] = $subtotal;

	if ($subtotal>0){
		$_SESSION['cart'][] = $resv;

		$grandtotal =0;

		foreach ($_SESSION['cart'] as $tmp =>$details){ 
			$grandtotal += $details['st'];
		}

		$_SESSION["gt"] = $grandtotal;

		header("https://titan.csit.rmit.edu.au/~s3423641/wp/a2/cart.php");
	}
}
//}

//loop to show in cart
/*
for ($i =0;count($_SESSION['cart'][$i]);$i++){
	echo "<p>".$_SESSION['cart'][$i]['movie']."</p>";
	echo "<p>"."Showing at ".$_SESSION['cart'][$i]['day'].",".$_SESSION['cart'][$i]['time']."</p>";
}
*/
?>

<html !DOCTYPE>

<?php include_once('head.php');?>
	
<body>

<?php include_once('topOfPage.php');?>



	<section>
		<form action="BookingForm.php" method = "post" 
		id = "bookform"> <!--modified-->

			<div class ="BookingFormHeading">
				<!-- image sourced from http://www.freeimages.com/photo/colored-pop-corn-1-1324538-->
				<img src="bookingformheading.jpg" alt="Contact Us" width ="558px">
			</div>
			
			<div class ="completebookingform">
				<div class ="BookingFormFirst">	
					Movie Name
					<select id="movieName" name = "movie" required />
					<option value = "">None</option>
				</select>					
				Session Day
				<select id="dayOfMovie" name = "day" onchange="checkDiscount()" required/>
				<option value = "">None</option>
				
			</select>
			Session Time
			<select id="timeOfMovie" name = "time" onchange="checkDiscount()"required readonly/>
			<option value = "">None</option>
			
		</select>
	</div>

	<div class ="centretable">
		<div class ="BookingFormTickets">	
			<table>
				<thead>
					<tr>
						<td>Ticket Type</td>
						<td>Quantity</td>
						<td>Subtotal Price</td>
					</tr>
				</thead>
				<tr>
					<td>Adult</td>
					<td><select name = "seats[sa]" id = "sa_qty" onchange="getPrice('sa')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "sa_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td>Concession</td>
					<td><select  name = "seats[sp]" id = "sp_qty" onchange="getPrice('sp')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "sp_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td>Child</td>
					<td><select  name = "seats[sc]" id = "sc_qty" onchange="getPrice('sc')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "sc_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td>First Class Adult</td>
					<td><select  name = "seats[fa]" id = "fa_qty" onchange="getPrice('fa')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "fa_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td>First Class Child</td>
					<td><select  name = "seats[fc]" id = "fc_qty" onchange="getPrice('fc')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "fc_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td>Bean Bag - 1 Person</td>
					<td><select  name = "seats[b1]" id = "b1_qty" onchange="getPrice('b1')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "b1_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td>Bean Bag - 2 Person</td>
					<td><select  name = "seats[b2]" id = "b2_qty" onchange="getPrice('b2')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "b2_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td>Bean Bag - 3 Children</td>
					<td><select  name = "seats[b3]" id = "b3_qty" onchange="getPrice('b3')">
						<option value = "0">None</option>
						<option value = "1">1</option>
						<option value = "2">2</option>
						<option value = "3">3</option>
						<option value = "4">4</option>
						<option value = "5">5</option>
					</select></td>
					<td><input class ="priceOutput" id = "b3_subtotal" value = '0.00' readonly></td>
				</tr>
				<tr>
					<td colspan="2">Total Price</td>
					<td><input type ="number" class ="priceOutput" id = "total" onchange="getPrice()" readonly></td>
				</tr>
			</table>
			<input type="submit" class ="button" value = "Add Booking"/>

			<a class = "button" href ="cart.php">View Cart</a>

		</form>
	</div>
</div>
</div>
</section>

<?php include_once('footer.php');?>

</body>

</html>