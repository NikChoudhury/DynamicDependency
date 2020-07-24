<?php
	
	include("connect.php");

	


	$fullname= $_GET["fullName"];
	$full_address = $_GET["fullAdress"];
	$country= $_GET["country"];
	$state= $_GET["state"];
	$city= $_GET["city"];
	$pin= $_GET["pin"];
	$q= "INSERT INTO info(fullname,fulladdress,country,state,city,pin)VALUES('$fullname','$full_address','$country','$state','$city','$pin')";
	$sql=mysqli_query($con,$q);
	if($sql==1)
	{
		echo "Welcome "."$fullname";
	}
	else
	{
		echo "failed";

	}
	// header("Refresh:0; url=respons.php");





		// if ($fullname == null || $full_address== null || $country == null || $state == null || $city == null || $pin == null ) {

		//     echo "Missing details. Please enter all fields.";


		// }else{
		// 	echo "OK";
		// }

?>