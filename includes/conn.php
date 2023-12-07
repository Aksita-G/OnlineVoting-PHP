<?php
	$conn = new mysqli('voting.mysql.database.azure.com', 'azureuser', 'database@2023', 'voting');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>
