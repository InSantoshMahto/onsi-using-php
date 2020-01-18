<?php
	// Create connection to GGI DATABASE
	$conn_ggi = mysqli_connect(HOST, USER, PASS, DB_GGI);
	// Check connection
	if (!$conn_ggi) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>