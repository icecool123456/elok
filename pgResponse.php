<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Recipt</title>
</head>

<body>
	<div id="printableArea">
		<?php
		header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");

		// following files need to be included
		require_once("./lib/config_paytm.php");
		require_once("./lib/encdec_paytm.php");

		$paytmChecksum = "";
		$paramList = array();
		$isValidChecksum = "FALSE";

		$paramList = $_POST;
		$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

		//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
		$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


		if($isValidChecksum == "TRUE") {
			echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
			if ($_POST["STATUS"] == "TXN_SUCCESS") {
				echo "<b>Transaction status is success</b>" . "<br/>";
				//Process your transaction here as success transaction.
				//Verify amount & order id received from Payment gateway with your application's order id and amount.
			}
			else {
				echo "<b>Transaction status is failure</b>" . "<br/>";
			}
		
			if (isset($_POST) && count($_POST)>0 )
			{ 
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "example";
				
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 
				
				$sql = "INSERT INTO payment (ORDERID,MID,TXNID,TXNAMOUNT,PAYMENTMODE,CURRENCY,TXNDATE,STATUS,RESPCODE,RESPMSG,GATEWAYNAME,BANKTXNID,BANKNAME,CHECKSUMHASH)
				VALUES ('".$_POST['ORDERID']."','".$_POST['MID']."', '".$_POST['TXNID']."','".$_POST['TXNAMOUNT']."','".$_POST['PAYMENTMODE']."','".$_POST['CURRENCY']."','".$_POST['TXNDATE']."','".$_POST['STATUS']."','".$_POST['RESPCODE']."','".$_POST['RESPMSG']."','".$_POST['GATEWAYNAME']."','".$_POST['BANKTXNID']."','".$_POST['BANKNAME']."','".$_POST['CHECKSUMHASH']."')";
				
				if ($conn->query($sql) === TRUE) {
				echo "New record created successfully";
				} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close();
				
				foreach($_POST as $paramName => $paramValue) {
						echo "<br/>" . $paramName . " = " . $paramValue;
				}
			}
			
		
		}
		else {
			echo "<b>Checksum mismatched.</b>";
			//Process transaction as suspicious.
		}

		?>
	</div>
	<input type="button" class="btn btn-danger" onclick="printDiv('printableArea')" value="Print Recipt!" /><!-- Optional JavaScript -->
	<input type="button" class="btn btn-success"  value="Home-Page" />
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="printpage.js"></script>

</body>

</html>