<?php

	global $conn;

	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname = "el_badminton";

	$db = new mysqli($server, $username, $password, $dbname);

	if($db->connect_errno){
		die("Connection Lost...");
	}

?>