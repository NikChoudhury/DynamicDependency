<?php
	include("connect.php");
	$countryID = $_GET["countryId"];
	$q = "SELECT * FROM states WHERE country_id = '$countryID'";
	$sql=mysqli_query($con,$q);
	echo "<select name='select_State' id='selectState'>";
	while ($rs=mysqli_fetch_row($sql)) {

		
		echo "<option value='$rs[0]'>$rs[1]</option>";
	}
	echo "</select>";

?>