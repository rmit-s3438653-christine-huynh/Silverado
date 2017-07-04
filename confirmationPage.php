<?php session_start(); ?>

<?php  
if (($fd = fopen("moviebooking.txt", "a")) !== false) 
{
	echo fread($fd,filesize("moviebooking.txt"));
}
	if (!empty($_POST['email'])){
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['mobileNumber'] = $_POST['mobileNumber'];
}
?>
<html !DOCTYPE>

<?php include_once('head.php');?>
	
<body>

<?php include_once('topOfPage.php');?>
<section>

<?php

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
'sa' => 12,
'sp' => 10,
'sc' => 8,
'fa' => 25,
'fc' => 20,
'b1' => 20,
'b2' => 20,
'b3' => 20),

	'Standard' => array(
'sa' => 18,
'sp' => 15,
'sc' => 12,
'fa' => 30,
'fc' => 25,
'b1' => 30,
'b2' => 30,
'b3' => 30)
);

echo "<div class = 'centreHeading'>";
echo "<h1><span class = 'titleOnPages'>Congratulations, booking complete!</span></h1>";
echo "</div>";

//echo out receipt
echo "<div class ='receipt'>";
echo "<div class ='topofreceipt'>";
echo "<div class= 'topleftreceipt'>";
echo "<p>Silverado Cinemas</p>";
echo "<p>".$_SESSION['name']."</p>";
echo "<p>".$_SESSION['email']."</p>";
echo "<p>".$_SESSION['mobileNumber']."</p>";
echo "</div>";
echo "</div>";

	foreach($_SESSION['cart'] as $i =>$resv)
	{
		echo "<p>".$resv['movie'].", ".$resv['day'].", ".$resv['time'];
 		
 		$price = $resv['rate'];
 		foreach($resv['seats'] as $type =>$qty){
 			echo "<div class='middlereceipt'>";
 			echo "<div class ='tickettype'>";
 			echo $resv['seats'][$type]." x ".$seatTypes[$type];
 			echo "</div>";
 			echo "Subtotal: "."$".($seatPrices[$price][$type]*$resv['seats'][$type])."</p>";
 			echo "</div>";
		}
		echo "<div class='totals'>";
		echo "<p>"."Total: "."$".$resv['st']."</p>";
		echo "</div>";
	}
	echo "<div class='totals'>";
	echo "<p>"."Grandtotal "."$".$_SESSION['gt']."</p>";
	echo "</div>";
	echo "</div>";
	echo "</div>";
	echo"</div>";

foreach($_SESSION['cart'] as $i =>$resv)
	{
	//print out each ticket
	foreach($resv['seats'] as $type =>$qty){
			for ($x = 0; $x < $resv['seats'][$type]; $x++){
				echo "<div class ='ticket'>";
	            echo "<div class ='ticketlogo'><img src='silveradoTicket.png' alt='logo' width ='20px'></div>";
				echo "<div class ='ticketcontent'>";
				echo "<p>"."MOVIE ".$resv['movie']."</p>";
 				echo "<p>"."DAY ".$resv['day']."</p>";
 				echo "<p>"."TIME ".$resv['time']."</p>";
 				echo "<p>"."SEAT TYPE ".$seatTypes[$type]."</p>";
 				echo "</div>";
 				echo "<div class ='ticketbarcode'><img src='barcode.png' alt='barcode' width ='40px'></div>";
				echo "</div>";
			}

		}
	
	}
	echo "<div class ='centreHeading'>";
	echo "<a class = 'button2' href ='NowShowing.php'>Now Showing at Silverado</a>";
	echo "</div>";

/*Write to file*/
$line = "NAME:".$_SESSION['name'].", EMAIL: ".$_SESSION['email'].", NUMBER: ".$_SESSION['mobileNumber'].",\n";
fwrite($fd, $line);
foreach($_SESSION['cart'] as $i =>$resv)
{
	$line1 = "MOVIE:".$resv['movie'].", DAY:".$resv['day'].", TIME:".$resv['time'].",\n";
	fwrite($fd, $line1);
	$price = $resv['rate'];
	foreach($resv['seats'] as $type =>$qty)
	{
		$line2 = "SEAT-TYPE:".$seatTypes[$type].
		", QTY:".$resv['seats'][$type].
		", TICKET-PRICE:$".$seatPrices[$price][$type].
		", SUB-TOTAL:$".($seatPrices[$price][$type]*$resv['seats'][$type])."\n";
		fwrite($fd, $line2);
	}
	$line3 = "TOTAL:$".$resv['st'].", GRAND-TOTAL:$".$_SESSION['gt'].",\n\n";
	fwrite($fd, $line3);
}
fclose($fd);

unset($_SESSION['cart']);	

?>

</section>

<?php include_once('footer.php');?>

</body>

</html>