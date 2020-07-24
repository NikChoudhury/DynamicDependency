<?php
	include("connect.php");
	$stateID = $_GET["stateId"];
	$q = "SELECT * FROM cities WHERE state_id = '$stateID'";
	$sql=mysqli_query($con,$q);
	echo "<select name='select_city' id='selectCity'>";
	while ($rs=mysqli_fetch_row($sql)) {
		echo "<option value='$rs[0]'>$rs[1]</option>";
	}
	echo "</select>";

?>