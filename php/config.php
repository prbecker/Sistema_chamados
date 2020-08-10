<?php
 	$conn = new mysqli("localhost", "root", "", "suinfra_site");

 	if($conn->connect_error)
	{
		echo "Error: " . $conn->connect_error;
	}
 ?>