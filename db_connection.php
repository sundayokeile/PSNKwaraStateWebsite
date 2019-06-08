<?php
	$db = new mysqli('localhost', 'root', 'root', 'dbpsnkwara');
	// Check connection
	if ($db->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}