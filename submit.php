<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>1000,
		"currency"=>"inr",
		"description"=>"Donated for NDF",
		"source"=>$token,
	));

	//echo "<pre>";
	//print_r($data);
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
	<style>
		body{
			background-color: rgb(240, 193, 216);
		}
	</style>
</head>
<body>
    <h1 style="text-align: center; color: green; margin-top: 300px; ">Thank You</h1>
</body>
</html>