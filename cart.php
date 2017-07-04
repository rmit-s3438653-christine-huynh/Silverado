<?php session_start(); ?>
<html !DOCTYPE>
<?php

//$resv = $_SESSION;

$seatTypes = array (
'sa' => 'Adult',
'sp' => 'Concession',
'sc' => 'Child',
'fa' => 'First Class Adult',
'fc' => 'First Class Child',
'b1' => 'Bean Bag - 1 Person',
'b2' => 'Bean Bag - 2 Person',
'b3' => 'Bean Bag - 3 Person');

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
'b3' => 30.00)
);

$subtotal=0.00;
$price = "";

?>

<?php include_once('head.php');?>
	
<body>

<?php include_once('topOfPage.php');?>
<section>

<?php

 if (isset($_POST['deleteFromCart'])) { 
   	$which=$_POST['deleteFromCart'];
   	unset ( $_SESSION['cart'][$which]);
   }

 echo "<form method = 'post'>";

foreach($_SESSION['cart'] as $i =>$resv)
{
	echo "<div class ='cart'>";
	echo "<h2>".$resv['movie']."</h2>";
	echo "<h3>"."Showing at ".$resv['day'].", ".$resv['time']."</h3>";
	echo "<table><tr><td>Ticket Type</td><td>Cost</td><td>Qty</td><td>Subtotal</td><tr>";
	$price = $resv['rate'];
	foreach($resv['seats'] as $type =>$qty)
	{
		if ($qty!==0){
			echo "<tr><td>".$price." ".$seatTypes[$type]."</td>";
			//cost to two decimal places
			echo "<td>"."$".number_format((float)$seatPrices[$price][$type],2,'.','')."</td>";
//			echo "<td>".$seatPrices[$price][$type]."</td>";
			echo "<td>".$resv['seats'][$type]."</td>";
			//subtotal to two decimal places
			echo "<td>"."$".number_format((float)($seatPrices[$price][$type]*$resv['seats'][$type]),2,'.','')."</td>";
//			echo "<td>".($seatPrices[$price][$type]*$resv['seats'][$type])."</td></tr>";
		}
			
	}
	echo "<tr><td colspan = '3'>Subtotal</td><td>"."$".number_format((float)$resv['st'],2,'.','')."</td>"."</tr></table>";
//	echo "<tr><td colspan = '3'>Subtotal</td><td>".$resv['st']."</td>"."</tr></table>";
	echo "<button type='submit' name='deleteFromCart' value='$i'>Delete From Cart</button>";
	echo "</div>";
	
}

	$grandtotal=0;
	//update grandtotal when reservation is deleted.
	foreach($_SESSION['cart'] as $i =>$resv)
	{
			$grandtotal += $resv['st'];
		}

		$_SESSION["gt"] = $grandtotal;

	echo "<div class ='cart'>";
	echo "<h1>"."GRANDTOTAL "."$".number_format((float)$_SESSION['gt'],2,'.','')."</h1>";
	echo "</div>";


	echo "<div class ='middlebutton'>";
	echo "<a class = 'button2' href ='BookingForm.php'>Add to Cart</a>";
	echo "<a class = 'button2' href ='personalDetails.php'>Check Out</a>";
	echo "</div>";

echo"</form>";
?>

</section>

<?php include_once('footer.php');?>

</body>

</html>