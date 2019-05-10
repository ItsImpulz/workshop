<?php

	$host = "localhost";
	$dbnaam = "workshop";
	$user = "root";
	$wachtwoord = "";
	
	try
	{
		$con = new PDO("mysql:host=$host;dbname=$dbnaam", $user, $wachtwoord);
		echo "Verbinding gelukt!";
	}catch(SQLException $ex)
	{
		echo "Verbinding mislukt: $ex";
	}
?>